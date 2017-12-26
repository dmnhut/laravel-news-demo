<?php

namespace App\Http\Controllers;
use App\NewsModel;
use App\Http\Controllers\CategoryController;
use Dotenv\Validator;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationData;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['news_view', 'news_detail']]);
    }

    public function news_view()
    {
        $data = NewsModel::get();
        # header('Content-Type: application/json');
        # echo json_encode($data, JSON_PRETTY_PRINT);
        return view('news', compact('data'));
    }

    public function news_add()
    {
        $categories = (new CategoryController())->category_get();
        return view('add', compact('categories'));
    }

    public function news_create(Request $request)
    {
        $massages = [
            'title.required' => 'Tên tiêu đề không trống',
            'content.required' => 'Nội dung không trống'
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required'
        ], $massages);
        $id = $this->create_id();
        $news = NewsModel::create(
            [
                'newsid' => str_replace("/", ".", $id),
                'title' => $request->get('title'),
                'img' => $request->get('img'),
                'content' => $request->get('content'),
                'category' => $request->get('category')
            ]
        );

        return redirect('news');
    }

    public function news_edit()
    {
        $data = NewsModel::get();
        return view('edit', compact('data'));
    }

    public function news_show($newsid)
    {
        $categories = (new CategoryController())->category_get();
        $data = NewsModel::where('newsid', $newsid)->get();
        $index = (new CategoryController())->category_index($data[0]->category);
        return view('update', compact('data', 'categories', 'index'));
    }

    public function news_update(Request $request, $newsid)
    {
        NewsModel::where('newsid', $newsid)->update(
            [
                'title' => $request->get('title'),
                'img' => $request->get('img'),
                'content' => $request->get('content'),
                'category' => $request->get('category')
            ]
        );
        return redirect('edit');
    }

    public function news_detail($newsid)
    {
        $data = NewsModel::where('newsid', $newsid)->get();
        return view('detail', compact('data'));
    }

    public function news_delete($newsid)
    {
        NewsModel::find($newsid)->delete();
        return redirect('edit');
    }
}

# $message = "Them moi thanh cong!";
# echo "<script>alert('$message')</script>";

# if(isset($post)){
# echo "<div class=\"alert alert-success alert-dismissable\">
# <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
# <strong>Them moi thanh cong</strong>
# </div>";
# }

# echo '<script>window.location.assign(url("/edit"))</script>';