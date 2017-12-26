@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    {{ Form::open(['url' => 'category']) }}
                    <label>Category</label>
                    <input class="form-control" type="text" name="category" placeholder="category" required>
                    <br/>
                    <button class="btn btn-success btn-block center-block" type="submit">Create</button>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>

@endsection