@extends('layouts.master')
@section('content-header')
    <h1>
        Employee
        <small>Add Employee</small>
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
              <h3 class="box-title">Input Employee</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {{-- <form role="form"> --}}
            <form role="form" action="/employee/store" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="POST" />
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <input type="text" class="form-control" name="name" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="email" name="email" class="form-control" placeholder="email@mail.com">
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <select class="form-control" name="position_id">
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
