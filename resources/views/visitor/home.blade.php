@extends('layouts.master')

@section('content-header')
    <h1>
        Visitor
        <small>Home</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Visitor</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <a href="/visitor/create">
            <button class="btn btn-block btn-success">Insert Visitor</button>
        </a>
    </div>
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Visitor</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->Description}}</td>
                        <td>
                            <a href="/visitor/edit/{{$d->id}}">EDIT </a>
                                |
                            <a href="/visitor/destroy/{{$d->id}}">DELETE</a>
                            |
                            <button onclick="myFunction()">Try it</button>
                        </td>
                    </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

<script>
    function myFunction() {
      alert("Hello! I am an alert box!");
    }
</script>

@endsection
