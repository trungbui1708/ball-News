		<header>
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-top-left">                            
								<ul>
									<li><a href="mailto:support@rstheme.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> trungbui1708@gmail.com</a></li>
									<li><img src="{{ asset('index/images/logo/vn.png')}}" alt="Logo">
                                        <a href="#">Việt Nam 
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </a>
										<ul>
											<li><img src="{{ asset('index/images/logoe.png')}}" alt="Logo"><a href="#">English</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="social-media-area">
								<nav>
									<ul>
										<li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <sup>1</sup></a></li>
                                        @if(!isset($nguoidung))
										<li class="log"><a href="dangnhap"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li> 
										<li class="sign"><a href="#"><span>/</span> Sign Up</a></li>
                                        @else
                                        <li>
                                            <a>
                                                <span class="">{{$nguoidung->first_name}}</span>

                                            </a>
                                        </li>
                                        <li>Đăng xuất</li>
                                        @endif
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-middle-area menu-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 col-xs-12 logo">
                            <a href="{{url('home')}}"><img src="{{ asset('index/images/logo.png')}}" alt="logo"></a>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xs-12 mobile-menu">
                            <div class="main-menu">
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                        <li><a href="{{url('home')}}">Trang chủ</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="tin-tuc">Tin tức</a>
                                            <ul class="sub-menu">
                                                @foreach($category as $key)
                                                <li><a href='/tin-tuc/{{$key->id}}'>{!!$key->name!!}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/ranking">Bảng xếp hạng</a>
                                            <!-- <ul class="sub-menu">
                                                @foreach($tournament as $key)
                                                <li><a href="ranking">{!!$key->name!!}</a></li>
                                                @endforeach
                                            </ul>      -->    
                                        </li>
                                        
                                        <!--End Icons -->
                                        <li class="menu-item-has-children">
                                            <a href="">Đội bóng</a>
                                            <!-- <ul class="sub-menu">
                                                <li><a href="">Đội bóng</a></li>
                                                <li><a href="">Đội bóng yêu thích</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="">Lịch thi đấu</a></li>
                                    </ul>
                               </nav>
                              <!--Header Search Start  here-->
                                <div class="search">
                                    <a class="rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>
                                </div>
                               <!--Header Search End  here--> 
                           </div>
                       </div>
                    </div>
                </div>
            </div>
		</header>
		<!--Header area end here-->

		<!-- Slider Section Start Here -->
		<!-- <div class="slider-section4 slider-main">
			<div id="slider-five" class="owl-carousel">
				<div class="item active ">
          <div class="fix-slide">
					<img src="{{ asset('index/images/full-slider/ronaldo.png')}}" alt="Slider image">
        </div>
                    <div class="dsc">
					   <div class="container">
                            <div class="row">
                            </div>                
						</div>
					</div>
				</div>
				<div class="item">
					 <div class="fix-slide">
                    <img src="{{ asset('upload/news/slide.jpg')}}" alt="Slider image">
                     </div>
                    <div class="dsc">
					   <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                </div>
                            </div>                
						</div>
					</div>
				</div>
                
				<div class="item">
					 <div class="fix-slide">
                    <img src="{{ asset('upload/news/slide2.jpg')}}" alt="Slider image">
                    </div>
                    <div class="dsc">
					   <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                </div>
                            </div>                
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- Slider Section end Here 