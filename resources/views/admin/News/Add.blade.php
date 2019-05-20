@extends('admin.layout.index')
@section('content')
            <div class="page-container">
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="#">Tin tức</a>
                                    <span class="breadcrumb-item active">Thêm</span>
                                </nav>
                            </div>
                        </div>  
				<div class="col-md-4">
					@if(count($errors) >0)
						<div class="alert alert-danger">
							@foreach ($errors -> all() as $k)
								{{$k}}<br>
							@endforeach
						</div>
					@endif

					@if(session('notifi'))
						<div class="alert alert-success">
							{{session('notifi')}}
						</div>

					@endif
                                        <div class="form-group">
                                        	<form action="admin/news/add" method="POST" enctype="multipart/form-data">
                                        		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <div class="col-md-4">
                                         <div class="fix22">
                                        <div class="form-group">
                                            <label class="">Chọn thể loại</label>
                                                <select class="form-control fix-option" name="category">
                                                	@foreach($category as $key)
                                                    <option value="{{$key->id}}">{{$key->name}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <div class="form-group">
                                                    <label>Chọn ảnh</label>
                                                    <input type="file" name="file" class="form-control">
                                                </div>
                                            	<label>Tiêu đề</label>
                                                <input placeholder="Nhập tiêu đề" name="tittle" type="text" class="form-control" >
                                                <label>Tác giả</label>
                                                <input placeholder="Nhập tác gỉa" name="author" type="text" class="form-control" >
                                                <label>Mô tả</label>
                                                <input style="height: 150px;" placeholder="Nhập mô tả" name="description" type="text" class="form-control" >
                                                <label>Nội dung</label>
                                                <textarea rows="10" class="ckeditor fix-ckeditor" id="editor"  name="content"  ></textarea> 
                                                <button type="submit" class="btn btn-success">Thêm mới</button>
                                             </div>
                                          </form>
                                        </div>
            </div>
            <br>
            <br>
            <br>
            
@endsection