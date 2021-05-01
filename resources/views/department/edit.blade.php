@extends('layouts.master')

@section('content-header')
    <h1>
        Edit
        <small>Department</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Department</a></li>
        <li class="active">Edit</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Department</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/department/update" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="_method" value="PUT" />
                            <input name="id" value="{{$data->id}}" type="hidden" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" value="{{$data->name}}" type="text" class="form-control" placeholder="Name">
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
