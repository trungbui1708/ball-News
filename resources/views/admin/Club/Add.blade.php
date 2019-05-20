@extends('admin.layout.index')
@section('content')
<!-- Page Container START -->
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Quick View START -->
                <!-- Side Panel END -->

                <!-- Content Wrapper START -->
                <div class="main-content">

                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Câu lạc bộ</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="#">Câu lạc bộ</a>
                                    <span class="breadcrumb-item active">Thêm</span>
                                </nav>
                            </div>
                        </div>  
                <div class="col-md-4">
                    @if(count($errors) >0)
                        <div class="alert alert-danger">
                            @foreach ($errors -> all() as $key)
                                {{$key}}<br>
                            @endforeach
                        </div>
                    @endif

                    @if(session('notifi'))
                        <div class="alert alert-success">
                            {{session('notifi')}}
                        </div>

                    @endif
                                        <div class="form-group">
                                            <div class="fix-data">
                                            <form action="admin/club/add" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <label class="control-label">Thêm câu lạc bộ</label>
                                            <div class="fix">
                                                <label>Tên CLB</label>
                                                <input placeholder="Nhập tên câu lạc bộ" name="name" type="text" class="form-control" >
                                                <label>Địa điểm</label>
                                                <input placeholder="Nhập địa điểm" name="location" type="text" class="form-control" >
                                                <label>Thành lập</label>
                                                <input placeholder="Nhập ngày thành lập" name="establish" type="text" class="form-control" >
                                                <div class="form-group">
                                                    <label>Chọn ảnh</label>
                                                    <input type="file" name="file" class="form-control">
                                                </div>
                                                <button class="btn btn-success ">Thêm</button>
                                                </div>
                                                </form>
                                        </div>
                                    </div>

            </div>
@endsection