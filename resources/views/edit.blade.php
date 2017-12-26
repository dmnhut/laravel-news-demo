@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <table id="tbl" class="table table-hover table-bordered table-condensed">
                    <thead>
                    <tr class="text-center info">
                        <th>Title</th>
                        <th>create at</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $val)
                        <tr>
                            <td>{{$val->title}}</td>
                            <td>{{date('d-m-y',strtotime(explode(" ", $val->created_at)[0]))}}</td>
                            <td>
                                <center><a href='update/{{ $val->newsid }}'>
                                        <button class="btn btn btn-primary btn-sm">Update</button>
                                    </a></center>
                            </td>
                            <td>
                                <center><a href='delete/{{ $val->newsid }}'>
                                        <button class="btn btn btn-danger btn-sm">Delete</button>
                                    </a></center>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#tbl").dataTable();
        });
    </script>
@endsection