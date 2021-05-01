@extends('layouts.master')
@section('content-header')
    <h1>
        Archive
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Archive</li>
    </ol>
@endsection
@section('content')
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Archive table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-condensed">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama</th>
                        <th>Inventory</th>
                        <th>Detail</th>
                    </tr>
                    @foreach ($data as $d)
                        <tr>
                            <td style="width: 10px">{{  $loop->iteration }}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->inventory->name}}</td>
                            <td>{{$d->detail}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
