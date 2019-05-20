@extends('admin.layout.index')
@section('content')
<!-- Page Container START -->
            <div class="page-container">
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                                    <span class="breadcrumb-item active">Danh sách</span>
                                </nav>
                            </div>
                            <div class="add-tittle"><h2>DANH SÁCH CÂU LẠC BỘ</h2></div>
                            <div class="add-items">
                                <a href="admin/club/add">+ Thêm mới</a>
                            </div>
                        </div>  
                        @if(session('notifi'))
                        <div class="alert alert-success">
                            {{session('notifi')}}
                        </div>

                    @endif
                     <div id="rs-blog" class="rs-blog sec-spacer">
            <div class="container">
                <div class="row"> 
                    @foreach($club as $key)
                    <div class="col-md-3 col-sm-12 col-xs-12" style="height: 350px;">
                        <div class="single-blog-slide ">
                            <div class="images fix-images2">
                            <td><img width="80px" height="80px" src="upload/news/{{$key->logo}}"
                                                    {{$key -> logo}}/>
                            </td>                  
                            </div>
                            <div class="blog-details">
                                <h3><a href="admin/club/edit/{{$key->id}}">{!!$key->name!!} </a></h3>
                            </div>
                            <div class="read-moree">
                                    <a href="admin/club/edit/{{$key->id}}">Sửa CLB</a>
                                </div>
                                <div class="read-moree">
                                    <a href="admin/club/delete/{{$key->id}}">Xóa CLB</a>
                                </div>
                        </div> 
                    </div>
                    @endforeach 
            </div>
         </div>
    </div>
                
@endsection
