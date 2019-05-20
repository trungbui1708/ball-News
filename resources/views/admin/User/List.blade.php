@extends('admin.layout.index')
@section('content')
<!-- Page Container START -->
            <div class="page-container">
                <!-- Quick View START -->
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                                    <a class="breadcrumb-item" href="admin/club/list">Người dùng</a>
                                    <span class="breadcrumb-item active">Danh sách</span>
                                </nav>
                            </div>
                        </div>  
                        @if(session('notifi'))
                        <div class="alert alert-success">
                            {{session('notifi')}}
                        </div>

                    @endif
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <table id="dt-opt" class="table table-hover table-xl fix-table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>Email</th>
                                                <th>Level</th>
                                               <th class="text-center">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user as $key)
                                            <tr>
                                                <td>{{$key -> id}}</td>
                                                <td>{{$key -> user_name}}</td>
                                                <td>{{$key -> email}}</td>
                                                <td>
                                                    @if($key->level==1)
                                                    {{"Admin"}}
                                                    @else 
                                                    {{"Member"}}
                                                    @endif
                                                </td>
                                                <td class="text-center font-size-18">
                                                    <a href="admin/user/edit/{{$key->id}}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a href="admin/user/delete/{{$key->id}}" class="text-gray"><i class="ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
@endsection
