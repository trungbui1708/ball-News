@extends('index.layout.index')
@section('content')
	<!-- Blog Single Start Here -->
		
		<div class="single-blog-details sec-spacer">
            <div class="container">
                <div class="row">
                	<h1>Tin tức</h1>
                    <div class="col-md-8 col-sm-12">
                    	<h3>{!!$news->tittle!!}</h3>
						<div class="single-image">
							
							<img src="{{ asset('upload/news/'.$news->image)}}"/>
                                           
						</div>
						<p style="text-align: justify">{!!$news->content!!}</p>
						<div class="share-section">
							<div class="row">
								<div class="col-sm-6 col-xs-12 life-style">
									<span class="author"> 
										<a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>{!!$news->author!!}</a>
									</span> 
									<span class="date">
										<i class="fa fa-calendar" aria-hidden="true"></i>{!!$news->created_at!!}
									</span>
									<span class="comment"> 
										<a href="#"> 
											<i class="fa fa-commenting-o" aria-hidden="true"></i> 12
										</a>
									</span>
								</div>
							</div>
						</div>

  
						<div class="like-section">
							<h3 class="title-bg">Bạn có thể đọc thêm</h3>
							<div class="row">
								 @foreach($category as $key)
                                        <?php
                                            $data = $key->news->sortBy('created_at') ->take(2);
                                            $post = $data -> shift();
                                         ?>
                                         @foreach($data ->all() as $news )
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
									<div class="popular-post-img">
										<img src="{{ asset('upload/news/'.$news->image)}}"/>                                
									</div>                                
									<h3><a href="{{$news->id}}">{{$news['tittle']}}</a></h3>
									<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i>{{$news['created_at']}}</span>
								</div>
								@endforeach
                                    @endforeach
							</div>
						</div>  
						<div class="author-comment">
							<h3 class="title-bg">Bình luận</h3>
							<ul>
								<li>
                                    @foreach($comments as $cmt)
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
											<div class="image-comments"><img src="{{ asset('admin/assets/images/avatars/admin.png')}}" alt="Blog Details photo"></div>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
											<span class="reply"> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i>{{$cmt->created_at}}</span></span>
											<div class="dsc-comments">
												<h4>{{$cmt->name}}</h4>                                            
												<p>{{$cmt->comment}}</p>
												
											</div>    
										</div>
									</div>
                                    @endforeach
								</li>
							</ul>
						</div>     
				        <div class="leave-comments-area">
				            <form action="comments/{{$news->id}}" method="post" role="form">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
								<fieldset>
                                    <div class="form-group">
                                        <label>Tên của bạn*</label>
                                        <input name="name" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Viết bình luận...*</label>
                                        <textarea name="comment" cols="40" rows="10" class="textarea form-control"></textarea>
                                    </div>       
                                    <div class="form-group">
                                        <button class="btn-send" type="submit">Bình luận</button>
                                    </div> 
								</fieldset>
							</form>
						</div>                                 
					</div>
                <!-- Right blog -->
                   <div class="col-md-3 col-sm-12">
                        <div class="sidebar-area">
                            <div class="search-box">
                                <div class="box-search">
                                    <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>    
                            </div>
                            <div class="cate-box">
                                <span class="title">Tin tức</span>
                                <ul>
                                    @foreach($category as $key)
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="/tin-tuc/{{$key->id}}">{!!$key->name!!}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="recent-post-area">
                                <span class="title">Bài mới</span>
                                <ul class="news-post">
                                    @foreach($category as $key)
                                        <?php
                                            $data = $key->news ->sortByDesc('created_at')->take(1);
                                           
                                         ?>
                                         @foreach($data ->all() as $news )
                                    <li>
                                        
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                                            <img src="{{ asset('upload/news/'.$news->image)}}"/>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                            <h4><a href="{{$news->id}}">{!!$news['tittle']!!}</a></h4>
                                                            <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i>{!!$news['created_at']!!}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                     @endforeach
                                    @endforeach
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right blog --> 
        
        <!-- Search Modal Start Here -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" class="fa fa-close"></span>
	        </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="eg: Soccer News" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End Here -->
        
		<!-- Start scrollUp  -->
		<div id="return-to-top">
			<span>Top</span>
		</div>
		<!-- End scrollUp  -->
       
@endsection