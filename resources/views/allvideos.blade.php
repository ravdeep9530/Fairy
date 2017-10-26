
<!--notification menu end -->
<!-- //header-ends -->
<!-- /w3l-agile -->
<!-- //header-ends -->
<div id="page-wrapper">
    <div class="inner-content">
        <div class="music-browse">
            <!--albums-->
            <!-- pop-up-box -->
            <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
            <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
            <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });
                });
            </script>
            <!--//pop-up-box -->

            <div class="browse">
                <div class="tittle-head two">
                    <h3 class="tittle">New Releses <span class="new">New</span></h3>

                    <div class="clearfix"> </div>
                </div>
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">POP</a></li>
                        <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Rock</a></li>
                        <li role="presentation" class=""><a href="#jaz" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Jazz</a></li>

                        <li role="presentation"><a href="#folk" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Folk</a></li>
                        <li role="presentation" class=""><a href="#bhangra" role="tab" data-toggle="tab"  aria-expanded="false">Bhangra</a></li>
                        <li role="presentation" class=""><a href="#sad" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Sad</a></li>
                        <li role="presentation" class=""><a href="#suffi" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Sufi</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                            <div class="browse-inner">
                                <!-- /agileits -->
                                @foreach($rtracks as $row)
                                    <div class="col-md-3 artist-grid">
                                        <a  style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><img src="uploads/{!! $row->track_poster !!}" title="allbum-name"></a>
                                        <a style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')">{!! $row->track_name!!}</a>
                                    </div>
                                @endforeach

                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                            <div class="browse-inner">
                                @foreach($ptracks as $row)
                                    <div class="col-md-3 artist-grid">
                                        <a  style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><img src="uploads/{!! $row->track_poster !!}" title="allbum-name"></a>
                                        <a style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')">{!! $row->track_name!!}</a>
                                    </div>
                                @endforeach

                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="jaz" aria-labelledby="profile-tab">
                            <div class="browse-inner">
                                @foreach($jtracks as $row)
                                    <div class="col-md-3 artist-grid">
                                        <a  style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><img src="uploads/{!! $row->track_poster !!}" title="allbum-name"></a>
                                        <a style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')">{!! $row->track_name!!}</a>
                                    </div>
                                @endforeach

                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="folk" aria-labelledby="dropdown1-tab">
                            <div class="browse-inner">

                                @foreach($ftracks as $row)
                                    <div class="col-md-3 artist-grid">
                                        <a  style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><img src="uploads/{!! $row->track_poster !!}" title="allbum-name"></a>
                                        <a style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')">{!! $row->track_name!!}</a>
                                    </div>
                                @endforeach
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="bhangra" aria-labelledby="home-tab">
                            <div class="browse-inner">

                                @foreach($btracks as $row)
                                    <div class="col-md-3 artist-grid">
                                        <a  style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><img src="uploads/{!! $row->track_poster !!}" title="allbum-name"></a>
                                        <a style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')">{!! $row->track_name!!}</a>
                                    </div>
                                @endforeach

                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="sad" aria-labelledby="profile-tab">
                            <div class="browse-inner">


                                @foreach($stracks as $row)
                                    <div class="col-md-3 artist-grid">
                                        <a  style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><img src="uploads/{!! $row->track_poster !!}" title="allbum-name"></a>
                                        <a style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')">{!! $row->track_name!!}</a>
                                    </div>
                                @endforeach
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="suffi" aria-labelledby="profile-tab">
                            <div class="browse-inner">


                                @foreach($sutracks as $row)
                                    <div class="col-md-3 artist-grid">
                                        <a  style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><img src="uploads/{!! $row->track_poster !!}" title="allbum-name"></a>
                                        <a style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" style="cursor: pointer;" onclick="loadCall('video/{!! $row->video_id !!}')">{!! $row->track_name!!}</a>
                                    </div>
                                @endforeach
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /agileinfo -->
            </div>
            <!--//End-albums-->

            <!--//discover-view-->
            <!--//discover-view-->
            <!--//music-left-->
        </div>
        <!--body wrapper start-->

        <div class="review-slider">
            <div class="tittle-head">
                <h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
                <div class="clearfix"> </div>
            </div>
            <ul id="flexiselDemo5">
                @foreach($rantracks as $row1)


                    <li>


                        <a  onclick="loadCall('/video/{!! $row1->video_id !!}')" ><img
                                    src="uploads/{{$row1->track_poster}}" alt="ddd" title="allbum-name"></a>
                        <div class="slide-title"><h4>{{$row1->track_name}}</div>
                        <div class="date-city">
                            <h5>{{$row1->singer_name}}</h5>
                            <div class="buy-tickets">
                                <button  class="play-icon popup-with-zoom-anim btn btn-lg btn-success" style="background-color:rgba(142, 248, 94, 0.34); color: #0b0b0b;"  onclick="loadCall('/video/{!! $row1->video_id !!}')">Listen Now</button>
                            </div>
                        </div>

                    </li>@endforeach
            </ul>

        </div>
    </div>
    <div class="clearfix"></div>
    <!--body wrapper end-->
    <!-- /w3layouts-agile -->
</div>
<script>loadflex4();</script>
<!--body wrapper end--
>
