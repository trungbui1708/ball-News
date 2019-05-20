
@extends('index.layout.index')
@section('content')
        
        <!-- All news area Start Here-->
        <div class="all-news-area sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="">Tin tức</h3>
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="latest-news-slider">
                                    @foreach($category as $key)
                                        <?php
                                            $data = $key->news -> sortBy('id')->take(4);
                                            $post = $data -> shift();
                                         ?>
                                         @foreach($data ->all() as $news )

                                    <div> 
                                        <div class="news-normal-block">
                                            <div class="news-img">
                                                <a href="#">
                                                    
                                                   <img src="upload/news/{{$news->image}}">
                                                    
                                                </a>
                                            </div>
                                            <h4 class="news-title"><a href="news/{{$news->id}}">{{$news['tittle']}}</a></h4>
                                            <div class="news-desc">
                                                <p>
                                                    {{$news['description']}}
                                                   
                                                </p>
                                            </div>
                                            <div class="news-btn">
                                                <a class="primary-btn" href="news/{{$news->id}}">Đọc tiếp</a>
                                            </div>
                                        </div>                             
                                        </div>
                                         @endforeach
                                         @endforeach
                                    
                                </div>                              
                            </div>
                            <div class="col-sm-3">                              
                                <div class="latest-news-nav">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                  <div class="col-md-3 col-sm-12">
                        <!-- Blog Single Sidebar Start Here -->
                        <div class="sidebar-area">
                            <div class="recent-post-area">
                                <span class="title">Bài viết</span>
                                <ul class="news-post">
                                    @foreach($category as $key)
                                        <?php
                                            $data = $key->news -> sortByDesc('id')->take(2);
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
        <!-- All news area end Here-->
        <div class="single-blog-details sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
        <div class="like-section">
                            <h3 class="title-bg">Bạn có thể đọc thêm</h3>
                            <div class="row">
                                 @foreach($category as $key)
                                        <?php
                                            $data = $key->news -> sortBy('created_at')->take(3);
                                            $post = $data -> shift();
                                         ?>
                                         @foreach($data ->all() as $news )
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="popular-post-img">
                                        <img src="upload/news/{{$news->image}}">                                  
                                    </div>                                
                                    <h3><a href="news/{{$news->id}}">{{$news['tittle']}}</a></h3>
                                    <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i>{{$news['created_at']}}</span>
                                </div>
                                @endforeach
                                    @endforeach
                            </div>
                        </div> 
                        </div>
                        </div>
                        </div> 
                    </div>
        <!-- Latest Video Start Here-->
        <div class="rs-point-table sec-spacer">
            <div class="container">
                <ul class="point-menu">
                    <h1>Bảng xếp hạng</h1>
                    <li class="active"><a data-toggle="tab" href="#sfl">Laliga</a></li>
                    <li><a data-toggle="tab" href="#efl">Premier League</a></li>
                    <li><a data-toggle="tab" href="#nfl">V-League</a></li>
                    <li><a data-toggle="tab" href="#ufa">FA</a></li>
                    <li><a data-toggle="tab" href="#world-cup">UFA</a></li>
                </ul>
                <div class="tab-content">
                    <div id="sfl" class="tab-pane fade in active">
                        <table>      
                            <tr>
                                <td></td>
                                <td class="team-name">Club</td>
                                <td>Match</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            @foreach($rank as $key)
                            <tr>
                                <td>{{$key->id}}</td>
                                <td class="team-name" >{{$key->clubs->name}}</td>
                                <td>{{$key->number_match}}</td>
                                <td>{{$key->won}}</td>
                                <td>{{$key->draw}}</td>
                                <td>{{$key->lost}}</td>
                                <td>{{$key->goals_for}}</td>
                                <td>{{$key->goals_against}}</td>
                                <td>{{$key->goals_difference}}</td>
                                <td>{{$key->point}}</td>
                            </tr>
                            @endforeach                
                        </table>
                    </div>
                    <div id="efl" class="tab-pane fade">
                        <table>
                            <tr>
                                <td></td>
                                <td class="team-name">TEAM</td>
                                <td>P</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <tr>
                                <td>04</td> 
                                <td class="team-name">Banani FC</td>
                                <td>58</td>
                                <td>35</td>
                                <td>08</td>
                                <td>14</td>
                                <td>02</td>
                                <td>05</td>
                                <td>7</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>05</td> 
                                <td class="team-name">Badda FC</td>
                                <td>57</td>
                                <td>32</td>
                                <td>10</td>
                                <td>16</td>
                                <td>04</td>
                                <td>06</td>
                                <td>7</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="team-name">Joypur FC</td>
                                <td>59</td>
                                <td>30</td>
                                <td>09</td>
                                <td>18</td>
                                <td>02</td>
                                <td>05</td>
                                <td>3</td>
                                <td>87</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td class="team-name">Bramma FC</td>
                                <td>60</td>
                                <td>28</td>
                                <td>14</td>
                                <td>16</td>
                                <td>02</td>
                                <td>03</td>
                                <td>1</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="team-name">Mirpur FC</td>
                                <td>60</td>
                                <td>27</td>
                                <td>18</td>
                                <td>16</td>
                                <td>02</td>
                                <td>07</td>
                                <td>-1</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="team-name">Kapa FC</td>
                                <td>60</td>
                                <td>16</td>
                                <td>14</td>
                                <td>17</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-3</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <td>10</td> 
                                <td class="team-name">Dohar FC</td>
                                <td>60</td>
                                <td>25</td>
                                <td>14</td>
                                <td>20</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-5</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td class="team-name">Bogro FC</td>
                                <td>60</td>
                                <td>35</td>
                                <td>08</td>
                                <td>16</td>
                                <td>02</td>
                                <td>04</td>
                                <td>11</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <td>02</td> 
                                <td class="team-name">Trishal FC</td>
                                <td>57</td>
                                <td>33</td>
                                <td>07</td>
                                <td>17</td>
                                <td>02</td>
                                <td>04</td>
                                <td>10</td>
                                <td>93</td>
                            </tr>
                            <tr>
                                <td>03</td> 
                                <td class="team-name">Badda FC</td>
                                <td>60</td>
                                <td>32</td>
                                <td>12</td>
                                <td>18</td>
                                <td>02</td>
                                <td>04</td>
                                <td>8</td>
                                <td>92</td>
                            </tr>
                        </table>
                    </div>
                    <div id="nfl" class="tab-pane fade">
                        <table>
                            <tr>
                                <td></td>
                                <td class="team-name">TEAM</td>
                                <td>P</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td class="team-name">Natrok FC</td>
                                <td>60</td>
                                <td>35</td>
                                <td>08</td>
                                <td>16</td>
                                <td>02</td>
                                <td>04</td>
                                <td>11</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <td>02</td> 
                                <td class="team-name">Bogro FC</td>
                                <td>57</td>
                                <td>33</td>
                                <td>07</td>
                                <td>17</td>
                                <td>02</td>
                                <td>04</td>
                                <td>10</td>
                                <td>93</td>
                            </tr>
                            <tr>
                                <td>03</td> 
                                <td class="team-name">Trishal FC</td>
                                <td>60</td>
                                <td>32</td>
                                <td>12</td>
                                <td>18</td>
                                <td>02</td>
                                <td>04</td>
                                <td>8</td>
                                <td>92</td>
                            </tr>
                            <tr>
                                <td>04</td> 
                                <td class="team-name">Badda FC</td>
                                <td>58</td>
                                <td>35</td>
                                <td>08</td>
                                <td>14</td>
                                <td>02</td>
                                <td>05</td>
                                <td>7</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>05</td> 
                                <td class="team-name">Mirpur FC</td>
                                <td>57</td>
                                <td>32</td>
                                <td>10</td>
                                <td>16</td>
                                <td>04</td>
                                <td>06</td>
                                <td>7</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="team-name">Joypur FC</td>
                                <td>59</td>
                                <td>30</td>
                                <td>09</td>
                                <td>18</td>
                                <td>02</td>
                                <td>05</td>
                                <td>3</td>
                                <td>87</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td class="team-name">Dohar FC</td>
                                <td>60</td>
                                <td>28</td>
                                <td>14</td>
                                <td>16</td>
                                <td>02</td>
                                <td>03</td>
                                <td>1</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="team-name">Banani FC</td>
                                <td>60</td>
                                <td>27</td>
                                <td>18</td>
                                <td>16</td>
                                <td>02</td>
                                <td>07</td>
                                <td>-1</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="team-name">Bramma FC</td>
                                <td>60</td>
                                <td>16</td>
                                <td>14</td>
                                <td>17</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-3</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <td>10</td> 
                                <td class="team-name">Kapa FC</td>
                                <td>60</td>
                                <td>25</td>
                                <td>14</td>
                                <td>20</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-5</td>
                                <td>80</td>
                            </tr>                   
                        </table>
                    </div>
                    <div id="ufa" class="tab-pane fade">
                        <table>
                            <tr>
                                <td></td>
                                <td class="team-name">TEAM</td>
                                <td>P</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <tr>
                                <td>04</td> 
                                <td class="team-name">Badda FC</td>
                                <td>58</td>
                                <td>35</td>
                                <td>08</td>
                                <td>14</td>
                                <td>02</td>
                                <td>05</td>
                                <td>7</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>05</td> 
                                <td class="team-name">Banani FC</td>
                                <td>57</td>
                                <td>32</td>
                                <td>10</td>
                                <td>16</td>
                                <td>04</td>
                                <td>06</td>
                                <td>7</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="team-name">Trishal FC</td>
                                <td>59</td>
                                <td>30</td>
                                <td>09</td>
                                <td>18</td>
                                <td>02</td>
                                <td>05</td>
                                <td>3</td>
                                <td>87</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td class="team-name">Dohar FC</td>
                                <td>60</td>
                                <td>28</td>
                                <td>14</td>
                                <td>16</td>
                                <td>02</td>
                                <td>03</td>
                                <td>1</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="team-name">Bogro FC</td>
                                <td>60</td>
                                <td>27</td>
                                <td>18</td>
                                <td>16</td>
                                <td>02</td>
                                <td>07</td>
                                <td>-1</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="team-name">Joypur FC</td>
                                <td>60</td>
                                <td>16</td>
                                <td>14</td>
                                <td>17</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-3</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <td>10</td> 
                                <td class="team-name">Natrok FC</td>
                                <td>60</td>
                                <td>25</td>
                                <td>14</td>
                                <td>20</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-5</td>
                                <td>80</td>
                            </tr><tr>
                                <td>01</td>
                                <td class="team-name">Badda FC</td>
                                <td>60</td>
                                <td>35</td>
                                <td>08</td>
                                <td>16</td>
                                <td>02</td>
                                <td>04</td>
                                <td>11</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <td>02</td> 
                                <td class="team-name">Banani FC</td>
                                <td>57</td>
                                <td>33</td>
                                <td>07</td>
                                <td>17</td>
                                <td>02</td>
                                <td>04</td>
                                <td>10</td>
                                <td>93</td>
                            </tr>
                            <tr>
                                <td>03</td> 
                                <td class="team-name">Bogro FC</td>
                                <td>60</td>
                                <td>32</td>
                                <td>12</td>
                                <td>18</td>
                                <td>02</td>
                                <td>04</td>
                                <td>8</td>
                                <td>92</td>
                            </tr>               
                        </table>
                    </div>
                    <div id="world-cup" class="tab-pane fade">
                        <table>
                            <tr>
                                <td></td>
                                <td class="team-name">TEAM</td>
                                <td>P</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td class="team-name">Trishal FC</td>
                                <td>60</td>
                                <td>35</td>
                                <td>08</td>
                                <td>16</td>
                                <td>02</td>
                                <td>04</td>
                                <td>11</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <td>02</td> 
                                <td class="team-name">Badda FC</td>
                                <td>57</td>
                                <td>33</td>
                                <td>07</td>
                                <td>17</td>
                                <td>02</td>
                                <td>04</td>
                                <td>10</td>
                                <td>93</td>
                            </tr>
                            <tr>
                                <td>03</td> 
                                <td class="team-name">Badda FC</td>
                                <td>60</td>
                                <td>32</td>
                                <td>12</td>
                                <td>18</td>
                                <td>02</td>
                                <td>04</td>
                                <td>8</td>
                                <td>92</td>
                            </tr>
                            <tr>
                                <td>04</td> 
                                <td class="team-name">Barmma FC</td>
                                <td>58</td>
                                <td>35</td>
                                <td>08</td>
                                <td>14</td>
                                <td>02</td>
                                <td>05</td>
                                <td>7</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>05</td> 
                                <td class="team-name">Trishal FC</td>
                                <td>57</td>
                                <td>32</td>
                                <td>10</td>
                                <td>16</td>
                                <td>04</td>
                                <td>06</td>
                                <td>7</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="team-name">Natrok FC</td>
                                <td>59</td>
                                <td>30</td>
                                <td>09</td>
                                <td>18</td>
                                <td>02</td>
                                <td>05</td>
                                <td>3</td>
                                <td>87</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td class="team-name">Joypur FC</td>
                                <td>60</td>
                                <td>28</td>
                                <td>14</td>
                                <td>16</td>
                                <td>02</td>
                                <td>03</td>
                                <td>1</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="team-name">Banani FC</td>
                                <td>60</td>
                                <td>27</td>
                                <td>18</td>
                                <td>16</td>
                                <td>02</td>
                                <td>07</td>
                                <td>-1</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="team-name">Barmma FC</td>
                                <td>60</td>
                                <td>16</td>
                                <td>14</td>
                                <td>17</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-3</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <td>10</td> 
                                <td class="team-name">Dohar</td>
                                <td>60</td>
                                <td>25</td>
                                <td>14</td>
                                <td>20</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-5</td>
                                <td>80</td>
                            </tr>                   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Latest Video end Here-->

        <!-- Testimonials Sections End Here-->
        @endsection