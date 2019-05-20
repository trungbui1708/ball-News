@extends('admin.layout.index')
@section('content')
<!-- Page Container START -->
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Ảnh</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="#">Ảnh</a>
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
                                        	<form action="admin/image/add" method="POST" enctype="multipart/form-data">
                                        		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                <div class="form-group">
                                            <label class="">Chọn tin tức</label>
                                                <select class="form-control fix-option" name="news">
                                                    @foreach($news as $key)
                                                    <option value="{{$key->id}}">{{$key->tittle}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                            <div class="form-group">
                                                    <label>Chọn ảnh</label>
                                                    <input type="file" name="file" class="form-control">
                                                </div>
                                            <div class="fix">
                                                
                                                <button class="btn btn-gradient-info ">Thêm</button>
                                                </div>
                                                </form>
                                        </div>

            </div>
@endsection