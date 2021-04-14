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
                    <h1 class="m-0 text-dark">Danh sách danh mục</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách danh mục</li>
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
                  <h3 class="card-title">Danh sách danh mục</h3>
                </div>
            <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Tên danh mục</th>
                                <th>SEO</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($datas as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->alias }}</td>
                                <td>
                                    
                                </td>
                            </tr>
                        @endforeach                    
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Tên danh mục</th>
                            <th>SEO</th>
                            <th>Thao tác</th>
                        </tr>
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