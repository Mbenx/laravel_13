@extends('layouts.master')

@section('content-header')
    <h1>
        Position
        <small>Home</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Position</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <a href="/position/create">
            <button class="btn btn-block btn-success">Insert Position</button>
        </a>
    </div>
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Position</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama</th>
                  <th>Department</th>
                  <th>Action</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->department->name}}</td>
                        <td>
                            <a href="/position/edit/{{$d->id}}">EDIT </a>
                                |
                            <a href="/position/destroy/{{$d->id}}">DELETE</a>
                        </td>
                    </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

@endsection
