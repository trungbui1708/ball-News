@extends('admin.layout.index')
@section('content')
<!-- Page Container START -->
            <div class="page-container">
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="admin/category/list">Thể loại</a>
                                    <span class="breadcrumb-item active">Danh sách</span>
                                </nav>
                            </div>
                             <div class="add-tittle"><h2>DANH SÁCH THỂ LOẠI</h2></div>
                            <div class="add-items">
                                <a href="admin/category/add">+ Thêm mới</a>
                            </div>
                        </div>  
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                        @if(session('notifi'))
                        <div class="alert alert-success">
                            {{session('notifi')}}
                        </div>
                        
                    @endif

                                    <table id="dt-opt" class="table table-hover table-xl fix-table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Thể loại</th>
                                                <th class="text-center">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($category as $key)
                                            <tr>
                                                <td>{{$key -> id}}</td>
                                                <td>{{$key -> name}}</td>
                                                <td class="text-center font-size-18">
                                                    <a href="admin/category/edit/{{$key->id}}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a href="admin/category/delete/{{$key->id}}" class="text-gray"><i class="ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        

                <!-- Footer START -->
              <!--   <footer class="content-footer">
                    <div class="footer">
                        <div class="copyright">
                            <span>Copyright © 2018 <b class="text-dark">Theme_Nate</b>. All rights reserved.</span>
                            <span class="go-right">
                                <a href="#" class="text-gray m-r-15">Term &amp; Conditions</a>
                                <a href="#" class="text-gray">Privacy &amp; Policy</a>
                            </span>
                        </div>
                    </div>
                </footer> -->
                <!-- Footer END -->

            </div>
@endsection