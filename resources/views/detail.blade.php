@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <center><img class="thumbnail" src="{{$data[0]->img}}" width="70%" height="40%" alt="laravel"></center>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
                <h1 class="text-center">{{$data[0]->title}}</h1>
                <hr/>
            </div>
            <div class="col-sm-10 col-sm-offset-1">
                <p class="mono">{{$data[0]->content}}</p>
            </div>
        </div>
    </div>

@endsection