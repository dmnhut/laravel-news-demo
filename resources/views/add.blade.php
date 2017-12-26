@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron">
            <div class="row">
                <div class="col-sm-12">
                    {{ Form::open(['url' => 'add']) }}
                    <label>Title</label>
                    <input class="form-control thu" type="text" name="title" placeholder="title" required>
                    <label>Image</label>
                    <input class="form-control" type="text" name="img" placeholder="link image" required>
                    <label>Content</label>
                    <textarea class="form-control" rows="4" name="content" placeholder="content" required></textarea>
                    <label>Category</label>
                    {{ Form::select('category', $categories, '1', ['class'=>'thumbnail', 'style' => 'width:100%']) }}
                    <br/>
                    <button class="btn btn-success btn-block center-block" type="submit">Create</button>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>

@endsection