@extends('layouts.admin')
@section('title')
<title>Trang quản trị</title>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách hóa đơn</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách hóa đơn</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách hóa đơn</h3>
                </div>
                @if (session('status'))
                <p class="text-warning" style="margin:0px;padding:0px;margin-left:20px">
                    {{ session('status') }}
                </p>
                @endif
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Tổng tiền</th>
                                <th>Hình thức</th>
                                <th>Trạng thái</th>
                                <th style="width: 16%;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ number_format($item->total) }} VNĐ</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="{{ route('products.edit',['id' => $item->id]) }}" class="btn btn-sm btn-success">Sửa</a>
                                    <a href="{{ route('products.delete',['id' => $item->id]) }}" class="btn btn-sm btn-danger">Xóa</a>
                                    <a href="{{ route('products.delete',['id' => $item->id]) }}" class="btn btn-sm btn-primary">Xem</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>Điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Tổng tiền</th>
                            <th>Hình thức</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tfoot>
                    </table>

                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection