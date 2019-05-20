@extends('admin.layout.index')
@section('content')
            <div class="page-container">
                <div class="main-content">
                    <div class="container-fluid">
                    <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                                    <a class="breadcrumb-item" href="admin/news/list">Tin tức</a>
                                    <span class="breadcrumb-item active">Danh sách</span>
                                </nav>
                            </div>
                            <div class="add-tittle"><h2>DANH SÁCH TIN TỨC</h2></div>
                            <div class="add-items">
                                <a href="admin/news/add">+ Thêm mới</a>
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
                    @foreach($news as $key)
                    <div class="col-md-3 col-sm-12 col-xs-12" style="height: 350px;">
                        <div class="single-blog-slide ">
                            <div class="images fix-images2">
                            <a href="admin/news/edit/{{$key->id}}">
                                <img src="/upload/news/{{$key->image}}">
                            </a>                      
                            </div>
                            <div class="blog-details">
                                
                                <h3><a href="admin/news/edit/{{$key->id}}">{!!$key->tittle!!} </a></h3>
                                <span class="date"><i class="fa fa-calendar-check-o"></i> {!!$key->created_at!!}</span>
                            </div>
                            <div class="read-moree">
                                    <a href="admin/news/edit/{{$key->id}}">Sửa bài</a>
                                </div>
                                <div class="read-moree">
                                    <a href="admin/news/delete/{{$key->id}}">Xóa bài</a>
                                </div>
                        </div> 
                    </div>
                    @endforeach 
            </div>
         </div>
    </div>
</div>
</div>
</div>
@endsection
