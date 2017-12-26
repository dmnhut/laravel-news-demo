<?php

namespace App\Http\Controllers;
use App\CategoryModel;
use Illuminate\Support\Facades\Request;

use DB;
use App\Http\Requests;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function category_get()
    {
        $categories = array();
        $data = CategoryModel::select('name')->get();
        foreach ($data as $val){
            $categories[count($categories)] = $val->name;
        }
        return $categories;
    }

    public function category_index($category_name)
    {
        $data = $this->category_get();
        $index = array_search($category_name, $data);
        return $index;
    }

    public function category_view()
    {
        return view('category');
    }

    public function category_create(Request $request)
    {
        $id = $this->create_id();
        $category = CategoryModel::create(
            [
                'categoryid' => str_replace("/", ".", $id),
                'name' => $request->get('category')
            ]
        );
        return redirect('news');
    }

}
