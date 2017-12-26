@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div style="margin-left:2%" class="containt">
                    @foreach ($data as $val)
                        <a href='news/{{ $val->newsid }}'><div class="box">
                            <div class="thumbnail" style="height: 100%">
                                <img src='{{$val->img}}' width="300px" height="100px" alt="laravel"/>
                                <p>{{date('d-m-y',strtotime(explode(" ", $val->created_at)[0]))}}</p>
                                <p>{{$val->title}}</p>
                            </div>
                            </div></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection