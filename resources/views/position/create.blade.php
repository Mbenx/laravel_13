@extends('layouts.master')
@section('content-header')
    <h1>
        Position
        <small>Create</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Create</a></li>
        <li class="active">Position</li>
    </ol>
@endsection
@section('content')
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
        <h3 class="box-title">Insert Position</h3>
        </div>
        <form role="form" action="/position/store" method="POST" enctype="multipart/form-data">
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
                <label>Department</label>
                <select class="form-control" name="department_id">
                    @foreach ($department as $dept)
                        <option value="{{$dept->id}}">{{$dept->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</div>
@endsection
