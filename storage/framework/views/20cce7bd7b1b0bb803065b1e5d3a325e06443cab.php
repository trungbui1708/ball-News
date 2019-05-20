<!-- Footer Start -->
        <footer id="footer-section" class="footer-section">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
						<h4 class="footer-title">Về chúng tôi</h4>
                            <div class="about-widget">
                                <p>Chúng tôi đã tạo ra một trang web hữu ích giúp các bạn có thể cập nhật tin tức hàng này hàng giờ.</p>
                                <p class="margin-remove">Hãy cùng nhau chia sẻ trang web của chúng tôi đến khắp nơi</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4 class="footer-title">Bài viết mới</h4>
                            <div class="recent-post-widget">
                                <div class="post-item">
                                    <div class="post-date">
                                        <span>07</span>
                                        <span>Tháng 5</span>
                                    </div>
                                    <div class="post-desc">
                                        <h5 class="post-title"><a href="tin-tuc/4">Tin tức ngoại hạng anh</a></h5>
                                        <span class="post-category">thethao247</span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-date">
                                        <span>06</span>
                                        <span>Tháng 5</span>
                                    </div>
                                    <div class="post-desc">
                                        <h5 class="post-title"><a href="tin-tuc/6">Tin trong nước</a></h5>
                                        <span class="post-category">thetheo247</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4 class="footer-title">Trang hữu ích</h4>
                            <ul class="sitemap-widget">
                                <li class="active"><a href="about.html">Trang chủ</a></li>
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href='/tin-tuc/<?php echo e($key->id); ?>'><?php echo $key->name; ?></a></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="/ranking">Bảng xếp hạng</a></li> 
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4 class="footer-title">Góp ý</h4>
                            <form class="footer-subscribe">
	                            <input type="text" class="form-input" placeholder="Tên">
	                            <input type="email" class="form-input" placeholder="Email">
	                            <input type="submit" class="form-input" value="Gửi">
	                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6"> 
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <div class="text-right ft-bottom-right">
                                <div class="footer-bottom-share">
                                    <ul>
                                        <li><a href="https://www.facebook.com/trung.bui.35762241"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
        
        <!-- Search Modal Start -->
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
        
		<!-- Start scrollUp  -->
		<div id="return-to-top">
			<span>Top</span>
		</div>