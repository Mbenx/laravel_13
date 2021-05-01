@extends('layouts.master')

@section('content-header')
    <h1>
        Detail
        <small>Department</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Department</a></li>
        <li class="active">Detail</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Detail Department {{$data->name}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama Position</th>
                    </tr>
                    @foreach ($data->position as $p)
                        <tr>
                            <td>#</td>
                            <td>{{$p->name}}</td>
                        </tr>
                    @endforeach
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
        </div>
    </div>
@endsection
