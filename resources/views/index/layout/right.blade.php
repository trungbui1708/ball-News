<div class="col-md-3 col-sm-12">
                        <!-- Blog Single Sidebar Start Here -->
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
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="list-news">{{$key->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="recent-post-area">
                                <span class="title">Bài mới</span>
                                <ul class="news-post">
                                    @foreach($category as $key)
                                        <?php
                                            $data = $key->news -> sortByDesc('created_at')->take(4);
                                            $post = $data -> shift();
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
                                                            <h4><a href="news/{{$news->id}}">{!!$news['tittle']!!}</a></h4>
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