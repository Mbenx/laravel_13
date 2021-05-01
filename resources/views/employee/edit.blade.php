@extends('layouts.master')
@section('content-header')
    <h1>
        Employee
        <small>Edit Employee</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employee</li>
    </ol>
@endsection
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Employee</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {{-- <form role="form"> --}}
            <form role="form" action="/employee/update" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="PUT" />
                    <input type="hidden" name="id" value="{{$data->id}}">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="name"
                  value="{{$data->name}}" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control"
                    value="{{$data->alamat}}" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control"
                    value="{{$data->phone}}" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"
                    value="{{$data->email}}" placeholder="email@mail.com">
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <select class="form-control" name="position_id">
                        <option value="{{$data->position_id}}">
                            {{$data->position->name}}
                        </option>
                        @foreach ($position as $pos)
                            <option value="{{$pos->id}}">
                                {{$pos->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Upload Foto</label>
                    <input type="file" name="picture">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
