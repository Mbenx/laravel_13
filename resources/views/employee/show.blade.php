@extends('layouts.master')

@section('content-header')
    <h1>
        Employee
        <small>Show</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Show</a></li>
        <li class="active">Employee</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Peminjaman {{$data->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama Inventory</th>
                  <th>Description</th>
                  <th>Date</th>
                </tr>
                @foreach ($data->inventory as $d)
                    <tr>
                        <td>{{$loop->iteration}}</td>
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
