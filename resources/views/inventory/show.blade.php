@extends('layouts.master')

@section('content-header')
    <h1>
        Show
        <small>Inventory</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Inventory</a></li>
        <li class="active">Show</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Peminjam {{$data->name}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Description</th>
                      <th>Date</th>
                    </tr>
                    @foreach ($data->employee as $d)
                        <tr>
                            <td>#</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->pivot->description}}</td>
                            <td>{{$d->pivot->created_at}}</td>
                        </tr>
                    @endforeach
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
        </div>
    </div>
@endsection
