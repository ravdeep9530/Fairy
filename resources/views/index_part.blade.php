<?php
/**
 * Created by PhpStorm.
 * User: worldwiki
 * Date: 17/9/17
 * Time: 12:57 AM
 */
?>
<!--notification menu end -->
<!-- //header-ends -->
<!-- /w3l-agileits -->
<!-- //header-ends -->
<script>
    setTitle('Fairy Records |Fairy Of Music');
</script>
<div id="page-wrapper">
    <div class="inner-content">

        <div class="music-left">
            <!--banner-section-->
            <div class="banner-section">
                <div class="banner">
                    <div class="callbacks_container">
                        <ul class="rslides callbacks callbacks1" id="slider4">
                            <?php $f=0;?>
                            @foreach($live as $ban)
                                <?php $f=1; ?>
                                <li>
                                    <div class="banner-img">
                                        {!! $ban->link !!}
                                    </div>
                                    <div class="banner-info">
                                        <a class="trend" style="background-color: rgba(160, 151, 154, 0.9);" ><i class="fa fa-circle" style="color: red;"> <font style="color: #ffffff;">Live Telecast</font></i> </a>


                                    </div>

                                </li>
                            @endforeach
<?php if($f==0){
    ?>

                            @foreach($banners as $ban)
                            <li>
                                <div class="banner-img">
                                    <img src="uploads/{!! $ban->banner_url !!}" class="img-responsive" alt="">
                                </div>
                                <div class="banner-info">
                                    <a class="trend" href="single.html">TRENDING</a>
                                    <h3>{!! $ban->banner_name !!}</h3>

                                </div>

                            </li>
                            @endforeach
                            <?php  }?>

                        </ul>
                    </div>
                    <!--banner-->
                    <script src="js/responsiveslides.min.js"></script>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: true,
                                pager: true,
                                nav: true,
                                speed: 500,
                                namespace: "callbacks",
                                before: function () {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function () {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });
                    </script>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--//End-banner-->
            <!--albums-->
            <!-- pop-up-box -->
            <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
            <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
            <script>
                $(document).ready(function () {
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

            <!--//End-albums-->
            <!--//discover-view-->

        </div>
        <div class="music-right" >
            <div class="col-lg-12 login-panel panel" >
                <div class="panel-heading" >
                    <div class="panel-title text-center " ><h3 class="label1"  style="text-shadow:2px 2px 2px rgba(106, 103, 103, 0.76); box-shadow: 2px 2px 2px rgba(106, 103, 103, 0.76);">
                            <b>Record Your Song</b></h3></div>


                </div>

            </div>
            <div class="panel-body panel">
                <center><div class="col-lg-12">
                        <center><img src="images/if_microphone_701492.svg" style="height: 140px;" class="img-responsive"></center>
                        <br/>
                <form id="proposal_form" method="post">
                    <div class="input-group">

                        <input type="email" required  placeholder="Enter Email" name="email" class="form-control intext">

                        <div class="input-group-btn">
                            <button type="button"  style=" background-color: #E03616; border-color: #E03616;"  class="btn btn-search label1 btn-info">
                                <span class="fa fa-envelope"></span>
                                <span class="label-icon">Email</span>
                            </button>
                        </div>
                    </div>
                    <div class="input-group">

                        <input type="text" required placeholder="Enter Mobile" name="mob" class="form-control intext">

                        <div class="input-group-btn">
                            <button type="button" style=" background-color: #E03616; border-color: #E03616;"  class="btn btn-search label1 btn-info">
                                <span class="fa fa-mobile-phone"></span>
                                <span class="label-icon">Mobile</span>
                            </button>
                        </div>

                    </div>

<div class="text-center col-lg-12">
                    <center><button class="btn  btn-danger btn-lg  text-center" style="border-radius: 0; background-color: #E03616;">Submit</button></center>
</div>
                    <div class="col-lg-12"></div>
                </form>
                    </div></center>


            </div>
        </div>
        <!--<div class="music-right">
            <div class="video-main">
                <div class="video-record-list">
                    <div id="jp_container_1" class="jp-video jp-video-270p" role="application"
                         aria-label="media player">
                        <div class="jp-type-playlist">
                            <div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;">
                                <img id="jp_poster_0" src="video/play1.png"
                                     style="width: 480px; height: 270px; display: inline;">
                                <!--<video id="jp_video_0" preload="metadata" src="http://192.168.30.9/vijayaa/2015/Dec/mosaic/web/video/Ellie-Goulding.webm" title="1. Ellie-Goulding" style="width: 0px; height: 0px;"></video>-->
        <!--   </div>
           <div class="jp-gui">
               <div class="jp-video-play" style="display: block;">
                   <button class="jp-video-play-icon" role="button" tabindex="0">play</button>
               </div>
               <div class="jp-interface">
                   <div class="jp-progress">
                       <div class="jp-seek-bar" style="width: 100%;">
                           <div class="jp-play-bar" style="width: 0%;"></div>
                       </div>
                   </div>
                   <div class="jp-current-time" role="timer" aria-label="time">00
                       :

                       00</div>
                   <div class="jp-duration" role="timer" aria-label="duration">00
                       :

                       18</div>
                   <div class="jp-controls-holder">
                       <div class="jp-controls">
                           <button class="jp-previous" role="button" tabindex="0">previous
                           </button>
                           <button class="jp-play" role="button" tabindex="0">play</button>
                       </div>
                       <div class="jp-volume-controls">
                           <button class="jp-mute" role="button" tabindex="0">mute</button>
                           <button class="jp-volume-max" role="button" tabindex="0">max
                               volume
                           </button>
                           <div class="jp-volume-bar">
                               <div class="jp-volume-bar-value" style="width: 100%;"></div>
                           </div>
                       </div>
                       <div class="jp-toggles">

                           <button class="jp-full-screen" role="button" tabindex="0">full
                               screen
                           </button>
                       </div>
                   </div>
                   <div class="jp-details" style="display: none;">
                       <div class="jp-title" aria-label="title">1
                           . Ellie-Goulding</div>
                   </div>
               </div>
           </div>
           <div class="jp-playlist">
               <ul style="display: block;">
                   <li class="jp-playlist-current">
                       <div><a href="javascript:;" class="jp-playlist-item-remove"
                               style="display: none;">×</a><a href="javascript:;"
                                                              class="jp-playlist-item jp-playlist-current"
                                                              tabindex="0">1. Ellie-Goulding
                               <span class="jp-artist">by Pixar</span></a></div>
                   </li>
                   <li>
                       <div><a href="javascript:;" class="jp-playlist-item-remove"
                               style="display: none;">×</a><a href="javascript:;"
                                                              class="jp-playlist-item"
                                                              tabindex="0">2.
                               Mark-Ronson-Uptown <span class="jp-artist">by Pixar</span></a>
                       </div>
                   </li>
                   <li>
                       <div><a href="javascript:;" class="jp-playlist-item-remove"
                               style="display: none;">×</a><a href="javascript:;"
                                                              class="jp-playlist-item"
                                                              tabindex="0">3. Ellie-Goulding
                               <span class="jp-artist">by Pixar</span></a></div>
                   </li>
                   <li>
                       <div><a href="javascript:;" class="jp-playlist-item-remove"
                               style="display: none;">×</a><a href="javascript:;"
                                                              class="jp-playlist-item"
                                                              tabindex="0">4. Maroon-Sugar
                               <span class="jp-artist">by Pixar</span></a></div>
                   </li>
                   <li>
                       <div><a href="javascript:;" class="jp-playlist-item-remove"
                               style="display: none;">×</a><a href="javascript:;"
                                                              class="jp-playlist-item"
                                                              tabindex="0">5. Pharrell-Williams
                               <span class="jp-artist">by Pixar</span></a></div>
                   </li>
                   <li>
                       <div><a href="javascript:;" class="jp-playlist-item-remove"
                               style="display: none;">×</a><a href="javascript:;"
                                                              class="jp-playlist-item"
                                                              tabindex="0">6. Ellie-Goulding
                               <span class="jp-artist">by Pixar</span></a></div>
                   </li>
                   <li>
                       <div><a href="javascript:;" class="jp-playlist-item-remove"
                               style="display: none;">×</a><a href="javascript:;"
                                                              class="jp-playlist-item"
                                                              tabindex="0">7. Pharrell-Williams
                               <span class="jp-artist">by Pixar</span></a></div>
                   </li>
               </ul>
           </div>
           <div class="jp-no-solution" style="display: none;">
               <span>Update Required</span>
               To play the media you will need to either update your browser to a recent
               version or update your <a href="http://get.adobe.com/flashplayer/"
                                         target="_blank">Flash plugin</a>.
           </div>
       </div>
   </div>
</div>
</div>
<!-- script for play-list -->

        <!--/video-main-->
        <link href="css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
        <script type="text/javascript">
            //<![CDATA[
            $(document).ready(function () {

                new jPlayerPlaylist({
                    jPlayer: "#jquery_jplayer_1",
                    cssSelectorAncestor: "#jp_container_1"
                }, [

                    {
                        title: "1. Ellie-Goulding",
                        artist: "",
                        mp4: "video/Ellie-Goulding.mp4",
                        ogv: "video/Ellie-Goulding.ogv",
                        webmv: "video/Ellie-Goulding.webm",
                        poster: "video/play1.png"
                    },
                    {
                        title: "2. Mark-Ronson-Uptown",
                        artist: "",
                        mp4: "video/Mark-Ronson-Uptown.mp4",
                        ogv: "video/Mark-Ronson-Uptown.ogv",
                        webmv: "video/Mark-Ronson-Uptown.webm",
                        poster: "video/play2.png"
                    },
                    {
                        title: "3. Ellie-Goulding",
                        artist: "",
                        mp4: "video/Ellie-Goulding.mp4",
                        ogv: "video/Ellie-Goulding.ogv",
                        webmv: "video/Ellie-Goulding.webm",
                        poster: "video/play1.png"
                    },
                    {
                        title: "4. Maroon-Sugar",
                        artist: "",
                        mp4: "video/Maroon-Sugar.mp4",
                        ogv: "video/Maroon-Sugar.ogv",
                        webmv: "video/Maroon-Sugar.webm",
                        poster: "video/play4.png"
                    },
                    {
                        title: "5. Pharrell-Williams",
                        artist: "",
                        mp4: "video/Pharrell-Williams.mp4",
                        ogv: "video/Pharrell-Williams.ogv",
                        webmv: "video/Pharrell-Williams.webm",
                        poster: "video/play5.png"
                    },
                    {
                        title: "6. Ellie-Goulding",
                        artist: "",
                        mp4: "video/Ellie-Goulding.mp4",
                        ogv: "video/Ellie-Goulding.ogv",
                        webmv: "video/Ellie-Goulding.webm",
                        poster: "video/play1.png"
                    },
                    {
                        title: "7. Pharrell-Williams",
                        artist: "",
                        mp4: "video/Pharrell-Williams.mp4",
                        ogv: "video/Pharrell-Williams.ogv",
                        webmv: "video/Pharrell-Williams.webm",
                        poster: "video/play5.png"
                    }
                ], {
                    swfPath: "../../dist/jplayer",
                    supplied: "webmv,ogv,mp4",
                    useStateClassSkin: true,
                    autoBlur: false,
                    smoothPlayBar: true,
                    keyEnabled: true
                });

            });
            //]]>
        </script>
        <!-- //script for play-list -->

        <!--//video-main-->
        <!--/app_store-->
        <!--<div class="apps">
            <h3 class="hd-tittle">Mosaic now available in</h3>
            <div class="banner-button">
                <a href="#"><img src="images/1.png" alt=""></a>
            </div>
            <div class="banner-button green-button">
                <a href="#"><img src="images/2.png" alt=""></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--//app_store-->
        <!--/start-paricing-tables-->
        <!--<div class="price-section">
            <div class="pricing-inner">
                <h3 class="hd-tittle">Upgrade your Plan</h3>
                <div class="pricing">
                    <div class="price-top">
                        <h3><span>$20</span></h3>
                        <h4>per year</h4>
                    </div>
                    <div class="price-bottom">
                        <ul>
                            <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a
                                        class="text" href="#">Download unlimited songs</a>
                                <div class="clearfix"></div>
                            </li>
                            <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a
                                        class="text" href="#">Stream songs in High Definition</a>
                                <div class="clearfix"></div>
                            </li>
                            <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a
                                        class="text" href="#">No ads unlimited Devices</a>
                                <div class="clearfix"></div>
                            </li>
                            <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a
                                        class="text" href="#">Stream songs in High Definition</a>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                        <a href="single.html" class="price">Upgrade</a>
                    </div>
                </div>
                <div class="pricing two">
                    <div class="price-top">
                        <h3><span>$30</span></h3>
                        <h4>per year</h4>
                    </div>
                    <div class="price-bottom">
                        <ul>
                            <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a
                                        class="text" href="#">Download unlimited songs</a>
                                <div class="clearfix"></div>
                            </li>
                            <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a
                                        class="text" href="#">Stream songs in High Definition</a>
                                <div class="clearfix"></div>
                            </li>
                            <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a
                                        class="text" href="#">No ads unlimited Devices</a>
                                <div class="clearfix"></div>
                            </li>
                            <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a
                                        class="text" href="#">Stream songs in High Definition</a>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                        <a href="single.html" class="price">Upgrade</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--//end-pricing-tables-->
        <!--</div>-->
        <!--  </div>
          <!--//music-right-->
        <div class="clearfix"></div>
        <!-- /w3l-agile-its -->
        <!-- </div>-->
        <div class="col-lg-12">
            <div class="review-slider">

                <div class="tittle-head">
                    <h3 class="tittle">New Releases <span class="new">New</span></h3>
                    <a onclick="loadCall('/radio/1')" style="cursor: pointer;"><h4 class="tittle">See all</h4></a>
                    <div class="clearfix"></div>
                </div>
                <div style="height: 400px;">
                <ul id="flexiselDemo1">
                    <?php $i = 0; ?>
                    @foreach($tracks as $row)


                        <li>


                            <a><img onclick="loadCall('/single/{!! $row->track_id !!}')"
                                    src="uploads/{{$row->track_poster}}" alt="ddd" title="{!! $row->track_name !!}"></a>
                            <div class="slide-title"><h4>{{$row->track_name}}</h4></div>
                            <div class="date-city">
                                <h5>{{$row->singer_name}}</h5>
                                <div class="buy-tickets">
                                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog"
                                       onclick="swap_Text('small-dialog_text<?=$i?>')">Listen Now</a>
                                </div>
                            </div>
                            <div id="small-dialog_text<?=$i?>" class=" custmBtn mfp-hide">
                                <div class="col-md-4  clearfix">
                                    <img src="uploads/{{$row->track_poster}}" class="img-responsive img-circle"/>
                                </div>
                                <div class="col-md-6 col-md-offset-0 clearfix">
                                    <div class="col-lg-12">
                                        <span style="text-justify: auto; font-size: 30px; text-shadow: 2px 1px 2px rgba(108, 123, 125, 0.9);">{{$row->track_name}}</span>
                                        <br/><span class="pull-right"
                                                   style=" font-size:15px; text-shadow: 2px 1px 2px rgba(108, 123, 125, 0.9);">{{$row->singer_name}}</span>
                                        <br/><textarea readonly class="pull-left"
                                                       style="text-justify: auto; border: none; width: 100%; max-height: 50px;  font-size:15px;">{{$row->description}}</textarea>
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <button class="btn btn-danger btn-lg custmBtn" onclick="loadTrack('{!! $row->track_id !!}','{!! $row->track_name !!}','{!! $row->track_poster !!}')"><i
                                                                class="fa fa-play"></i> Play
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-lg btn-info custmBtn a2a_dd"><i
                                                                class="fa fa-share"></i> Share
                                                    </button>
                                                    <script>
                                                        var a2a_config = a2a_config || {};
                                                        a2a_config.linkurl = "<?="http://".$_SERVER['HTTP_HOST'] .'/share'?>/single/{!! $row->track_id !!}";
                                                    </script>

                                                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>


                            </div>

                        </li>

                        <?php  $i++; ?>

                    @endforeach
                </ul>
                </div>
                <div id="small-dialog" class="mfp-hide  custmBtn">
                </div>

                <div class="clearfix"></div>

            </div>
            <div class="albums second">
                <div class="tittle-head">
                    <h3 class="tittle">Discover <span class="new">View</span></h3>
                    <a onclick="loadCall('/radio/1')" style="cursor: pointer;"><h4 class="tittle">See all</h4></a>
                    <div class="clearfix"></div>
                </div>
                <?php $j = 0;?>
                @foreach($tracks as $row)
                    @if($j<14)
                        <div class="col-md-3 content-grid">
                            <a onclick="loadCall('/single/{!! $row->track_id !!}')"><img
                                        src="uploads/{!! $row->track_poster !!}" title="{!! $row->track_name !!}"
                                        style="cursor: pointer;"></a>
                            <div class="inner-info" style="background-color: rgba(228, 164, 0, 0.7); width: 90%;"><a
                                        style=" cursor: pointer;" onclick="loadCall('/single/{!! $row->track_id !!}')">
                                    <h5>Listen Now</h5></a></div>
                        </div>
                    @endif
                    <?php $j++;?>
                @endforeach
                <div class="clearfix"></div>
            </div>
            <!--//discover-view-->
            <div class="col-lg-12"><br/></div>
            <div class="albums second">
                <div class="tittle-head">
                    <h3 class="tittle">Latest Videos <span class="new">New</span></h3>
                    <a onclick="loadCall('/allvideos')" style="cursor: pointer;" ><h4 class="tittle two">See all</h4></a>
                    <div class="clearfix"></div>
                </div>
                <?php $k = 0;?>
                @foreach($vid as $row3)
                    @if($k<=15)
                        <div class="col-md-3 content-grid">
                            <a onclick="loadCall('/video/{!! $row3->video_id !!}')"><img
                                        src="uploads/{!! $row3->track_poster !!}" title="{!! $row3->track_name !!}"
                                        style="cursor: pointer;"></a>
                            <div class="inner-info" style="background-color: rgba(228, 164, 0, 0.7); width: 90%;"><a
                                        style="cursor: pointer;" onclick="loadCall('/video/{!! $row3->video_id !!}')">
                                    <h5>See Now</h5></a></div>
                        </div>
                    @endif
                    <?php $k++;?>
                @endforeach
                <div class="clearfix"></div>
            </div>
            <div class="albums second">
                <div class="tittle-head">
                    <h3 class="tittle">Movies <span class="new">View</span></h3>
                    <a onclick="loadCall('/allMovies')" style="cursor: pointer;"><h4 class="tittle two">See all</h4></a>
                    <div class="clearfix"></div>
                </div>
                <?php $j = 0;?>
                @foreach($movies as $row)
                    @if($j<14)
                        <div class="col-md-3 content-grid">
                            <a onclick="loadCall('/mov/{!! $row->movie_id !!}')"><img
                                        src="uploads/{!! $row->track_poster !!}" title="{!! $row->track_name !!}"
                                        style="cursor: pointer;"></a>
                            <div class="inner-info" style="background-color: rgba(228, 164, 0, 0.7); width: 90%;"><a
                                        style=" cursor: pointer;" onclick="loadCall('/mov/{!! $row->movie_id !!}')">
                                    <h5>See Now</h5></a></div>
                        </div>
                    @endif
                    <?php $j++;?>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>

        <!--//music-left-->
        <!--/music-right-->
        <!--body wrapper start-->

      <!--  <div class="review-slider">
            <div class="tittle-head">
                <h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
                <div class="clearfix"></div>
            </div>
            <ul id="flexiselDemo1">
                <li>
                    <a href="single.html"><img src="images/v1.jpg" alt=""/></a>
                    <div class="slide-title"><h4>Adele21</div>
                    <div class="date-city">
                        <h5>Jan-02-16</h5>
                        <div class="buy-tickets">
                            <a href="single.html">READ MORE</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="single.html"><img src="images/v2.jpg" alt=""/></a>
                    <div class="slide-title"><h4>Adele21</h4></div>
                    <div class="date-city">
                        <h5>Jan-02-16</h5>
                        <div class="buy-tickets">
                            <a href="single.html">READ MORE</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="single.html"><img src="images/v3.jpg" alt=""/></a>
                    <div class="slide-title"><h4>Shomlock</h4></div>
                    <div class="date-city">
                        <h5>Jan-02-16</h5>
                        <div class="buy-tickets">
                            <a href="single.html">READ MORE</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="single.html"><img src="images/v4.jpg" alt=""/></a>
                    <div class="slide-title"><h4>Stuck on a feeling</h4></div>
                    <div class="date-city">
                        <h5>Jan-02-16</h5>
                        <div class="buy-tickets">
                            <a href="single.html">READ MORE</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="single.html"><img src="images/v5.jpg" alt=""/></a>
                    <div class="slide-title"><h4>Ricky Martine </h4></div>
                    <div class="date-city">
                        <h5>Jan-02-16</h5>
                        <div class="buy-tickets">
                            <a href="single.html">READ MORE</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="single.html"><img src="images/v6.jpg" alt=""/></a>
                    <div class="slide-title"><h4>Ellie Goluding </h4></div>
                    <div class="date-city">
                        <h5>Jan-02-16</h5>
                        <div class="buy-tickets">
                            <a href="single.html">READ MORE</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="single.html"><img src="images/v6.jpeg" alt=""/></a>
                    <div class="slide-title"><h4>Fifty Shades </h4></div>
                    <div class="date-city">
                        <h5>Jan-02-16</h5>
                        <div class="buy-tickets">
                            <a href="single.html">READ MORE</a>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>-->
    <div class="clearfix"></div>
    <script type="text/javascript">
        function loadflex1() {

            $("#flexiselDemo1").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: false,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 2
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 3
                    },
                    tablet: {
                        changePoint: 800,
                        visibleItems: 4
                    }
                }
            });
        }



        var TrackID=0;
        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });
        $('#proposal_form').on('submit', function (e) {


            e.preventDefault();
            var fdata = new FormData(document.getElementById('proposal_form'));

            $.ajax({
                type: 'post',
                url: 'proposal',
                data: fdata,
                success: function (data) {

                    // alert(data);
                    $('#track_upload_panel').fadeIn(1000);
                    toast("Track Auto generated id :" + data);
                    document.getElementById('proposal_form').reset();

                },
                processData: false,
                contentType: false
            });

        });
        loadflex1();
    </script>


            <!--body wrapper end-->
    <!-- /w3l-agile -->
</div>