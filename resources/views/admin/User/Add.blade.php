@extends('admin.layout.index')
@section('content')
<!-- Page Container START -->
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Quick View START -->

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Người dùng</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="#">Người dùng</a>
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
                                            <form action="admin/user/add" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <label class="control-label">Thêm người dùng</label>
                                            <div class="fix">
                                                <label class="control-label">Họ</label>
                                                <input placeholder="Nhập vào họ" name="first_name" type="text" class="form-control" >
                                                <label class="control-label">Tên</label>
                                                <input placeholder="Nhập vào tên" name="last_name" type="text" class="form-control" >
                                                <label class="control-label">User</label>
                                                <input placeholder="Nhập user" name="user_name" type="text" class="form-control" >
                                                <label class="control-label">Email</label>
                                                <input placeholder="Nhập địa chỉ email"  name="email" type="email" class="form-control" >
                                                <label class="control-label">Mật khẩu</label>
                                                <input placeholder="Nhập mật khẩu" name="password" type="password" class="form-control" >
                                                <label class="control-label">Nhập lại mật khẩu</label>
                                                <input placeholder="Nhập lại mật khẩu" name="repassword" type="password" class="form-control" >
                                                <div class="fixradio">
                                                    <input type="radio" name="level" value="0" >Member
                                                    <input  type="radio" name="level" value="1" checked="">Admin
                                            </div>
                                                <button type="submit" class="btn btn-gradient-info ">Thêm</button>
                                                <button type="reset" class="btn btn-gradient-info ">Làm mới</button>
                                                </div>
                                                </form>
                                        </div>

            </div>
@endsection