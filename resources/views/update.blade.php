@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron">
            <div class="row">
                <div class="col-sm-12">
                    {{ Form::open(['url' => '/update/'.$data[0]->newsid]) }}
                    <label>Title</label>
                    <input class="form-control" type="text" name="title" value="{{$data[0]->title}}" required>
                    <label>Image</label>
                    <input class="form-control" type="text" name="img" value="{{$data[0]->img}}" required>
                    <label>Content</label>
                    <textarea id="content" class="form-control" rows="4" name="content" required></textarea>
                    <label>Category</label>
                    {{ Form::select('category', $categories, $index, ['class'=>'thumbnail', 'style' => 'width:100%']) }}
                    <br/>
                    <button class="btn btn-primary btn-block center-block" type="submit">Update</button>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
    <?php
    echo '<script> var txt = ' . json_encode($data[0]->content) . ';</script>';
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#content").html(txt);
        });
    </script>

@endsection