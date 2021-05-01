@extends('layouts.master')

@section('content-header')
    <h1>
        Employee
        <small>Home</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employee</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <a href="/employee/create">
            <button class="btn btn-block btn-success">Insert Employee</button>
        </a>
    </div>
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Employee</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Picture</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Position</th>
                  <th>Action</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            @if ($d->picture)
                                <img class="img-responsive"
                                src="{{ asset('/storage/employee/'.$d->picture)}}"
                                    alt="Photo">
                            @endif
                        </td>
                        <td><a href="/employee/show/{{$d->id}}">
                                {{$d->name}}
                            </a>
                        </td>
                        <td>{{$d->alamat}}</td>
                        <td>{{$d->phone}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->position->name}}</td>
                        <td>
                            <a href="/employee/edit/{{$d->id}}">EDIT </a>
                                |
                            <a href="/employee/delete/{{$d->id}}">DELETE</a>
                        </td>
                    </tr>
                @endforeach
              </table>
              {{ $data->links() }}
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

@endsection
