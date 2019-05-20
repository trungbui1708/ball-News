<?php $__env->startSection('content'); ?>
	<!-- Home Blog Start Here -->
        <div id="rs-blog" class="rs-blog sec-spacer">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-9 col-ms-12">
                	<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
							<a href="/news/<?php echo e($key->id); ?>">
								<img src="/upload/news/<?php echo e($key->image); ?>">
							</a>                      
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> <?php echo $key->created_at; ?></span>
                                <h3><a href="/news/<?php echo e($key->id); ?>"><?php echo $key->tittle; ?> </a></h3>
                                <p><?php echo $key->description; ?></p>
                            </div>
						</div> 
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="default-pagination text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i>Trước</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Sau<i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
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
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="/tin-tuc/<?php echo e($key->id); ?>"><?php echo $key->name; ?></a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <div class="recent-post-area">
                                <span class="title">Bài viết khác</span>
                                <ul class="news-post">
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $data = $key->news -> sortByDesc('created_at')->take(2);
                                            $post = $data -> shift();
                                         ?>
                                         <?php $__currentLoopData = $data ->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                                            <img src="<?php echo e(asset('upload/news/'.$news->image)); ?>"/>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                            <h4><a href="/news/<?php echo e($news->id); ?>"><?php echo $news['tittle']; ?></a></h4>
                                                            <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $news['created_at']; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Home Blog End Here -->
        
		<!-- Client Logo Section Start Here-->
		<div class="clicent-logo-section sec-spacer">
			<div class="overly-bg"></div>
			<div class="container">
                <div id="upcoming" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="20" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="item">
                        <div class="single-logo">
                            <a href="#"><img src="images/logo/1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-logo">
                            <a href="#"><img src="images/logo/2.png" alt=""></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-logo">
                            <a href="#"><img src="images/logo/3.png" alt=""></a>
                        </div>
                    </div> 
                    <div class="item">
                        <div class="single-logo">
                            <a href="#"><img src="images/logo/4.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <!-- Client Logo Section End Here-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>