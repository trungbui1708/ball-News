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
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                                    <a class="breadcrumb-item" href="#">Bảng xếp hạng</a>
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
                                            <form action="admin/rank/edit/{{$rank->id}}" method="POST">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <label class="control-label">Thêm BXH</label>
                                            <div class="fix">
                                                <label class="">Chọn đội bóng</label>
                                                <select class="form-control fix-option" name="club">
                                                    @foreach($club as $key)
                                                    <option value="{{$key->id}}">{{$key->name}}</option>
                                                    @endforeach
                                                </select>
                                                <label class="">Chọn giải đấu</label>
                                                <select class="form-control fix-option" name="tournament">
                                                    @foreach($rank as $key)
                                                    <option value="{{$key->id}}">{{$key->name}}</option>
                                                    @endforeach
                                                </select>
                                                <label>Số trận</label>
                                                <input placeholder="Số trận đấu" value="{{$key->number_match}}"  name="number_match" type="text" class="form-control" >
                                                <label>Thắng</label>
                                                <input placeholder="Trận Thắng" value="{{$key->won}}"  name="won" type="text" class="form-control" >
                                                <label>Hòa</label>
                                                <input placeholder="Trận hòa" value="{{$key->draw}}" name="draw" type="text" class="form-control" >
                                                <label>Thua</label>
                                                <input placeholder="Trận thua" value="{{$key->lost}}" name="lost" type="text" class="form-control" >
                                                <label>Ghi bàn</label>
                                                <input placeholder="số bàn thắng" value="{{$key->goals_for}}" name="goals_for" type="text" class="form-control" >
                                                <label>Thủng lưới</label>
                                                <input placeholder="Số bàn thua" value="{{$key->goals_against}}" name="goals_against" type="text" class="form-control" >
                                                <label>Hiệu số</label>
                                                <input placeholder="Hiệu số" value="{{$key->goals_difference}}" name="goals_difference" type="text" class="form-control" >
                                                <label>Điểm</label>
                                                <input placeholder="Điểm số" value="{{$key->point}}" name="point" type="text" class="form-control" >
                                                <button class="btn btn-success ">Sửa</button>
                                                </div>
                                                </form>
                                        </div>

            </div>
@endsection