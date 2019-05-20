@extends('admin.layout.index')
@section('content')
<!-- Page Container START -->
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="#">Giải đấu</a>
                                    <span class="breadcrumb-item active">Sửa</span>
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
                                        	<form action="admin/tournament/edit/{{$tournament->id}}" method="POST">
                                        		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <label class="control-label">Sửa giải đấu</label>
                                            <div class="fix">
                                                <label>Giải đấu</label>
                                                <input placeholder="{{$tournament->name}}" value="{{$tournament->name}}" name="name" type="text" class="form-control" >
                                                <label>Mùa giải</label>
                                                <input placeholder="{{$tournament->year}}" value="{{$tournament->year}}" name="year" type="text" class="form-control" >
                                                <button class="btn btn-success ">Sửa</button>
                                                </div>
                                                </form>
                                        </div>

            </div>
@endsection