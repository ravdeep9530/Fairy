<meta type="hidden" name="csrf-token" content="<?=csrf_token() ?>">
<script type="text/javascript" src="//connect.facebook.net/en_US/all.js#xfbml=1&appId='22749584508039'"></script>

    <div id="page-wrapper">
				
				<div class="inner-content single">
						    <!--/music-right-->
					<?php $ar=json_decode($tracks,true);
					//print_r($ar);

					//echo $tracks;
					?>
                    <script>
                        setTitle('{!! $ar[0]['track_name']!!} | {!! $ar[0]['singer_name']!!}');
                    </script>

						<div class="tittle-head">
									<h1 class="tittle" style="text-shadow: 2px 2px 1px rgba(119, 135, 137, 0.9);"><?=$ar[0]['track_name']?></h1>
									<div class= "clearfix"> </div>
								</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="col-lg-12 backBlur" style="background-image: url('uploads/{!! $ar[0]['track_poster'] !!}'); height: 400px; background-repeat:no-repeat;
                                    background-attachment: scroll; background-size: cover;"></div>
							<div  class="col-lg-12 absolute_css"    >
								<img src="uploads/{!! $ar[0]['track_poster'] !!}"  class="img-responsive col-lg-3" style="height: 250px; width: 280px;"/>
								<div class="col-lg-9" style="padding: 10px;">
											<button class="btn btn-danger btn-lg custmBtn" onclick="loadTrack('{!! $ar[0]['track_id']!!}','{!! $ar[0]['track_name'] !!}','{!! $ar[0]['track_poster'] !!}')" ><i class="fa fa-play"></i> Play</button>&nbsp;
								 <button class="btn btn-lg a2a_dd btn-info custmBtn "><i class="fa fa-share"></i> Share</button>
<script>
    var a2a_config = a2a_config || {};
    a2a_config.linkurl = "<?="http://".$_SERVER['HTTP_HOST'] .'/share'. $_SERVER['REQUEST_URI']?>";
</script>

                                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                                    <!-- AddToAny END -->
									<br/><br/><p style="font-size: xx-large; color:rgba(<?=rand(0,00)?>,<?=rand(0,00)?>,<?=rand(0,00)?>,0.8); text-shadow: 3px 3px 3px rgba(81, 80, 78, 1);  ">{!! $ar[0]['track_name'] !!}</p>
									<p style="font-size: x-large; color:rgba(<?=rand(0,50)?>,<?=rand(0,50)?>,<?=rand(0,50)?>,0.8); text-shadow: rgba(119, 135, 137, 0.6) 3px 3px 3px; " class="absolute_css_clear"> {!! $ar[0]['singer_name'] !!}</p>
									<p style="font-size: x-large; color:rgba(<?=rand(0,00)?>,<?=rand(0,00)?>,<?=rand(0,200)?>,0.8); text-shadow: rgba(119, 135, 137, 0.6) 3px 3px 3px; " class="absolute_css_clear"> {!! $ar[0]['label_name'] !!}</p>
									<br/><p class="absolute_css_clear" style="font-size: large; color:rgba(81, 80, 78, 0.71); text-shadow: rgba(119, 135, 137, 0.6) 3px 3px 3px; "> {!! $ar[0]['description'] !!}</p>


								</div>

							</div>

						</div>
					</div>
						 </div>
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                    <div class="col-md-12">
                        <h3></h3>

                        <div class="tabbable-panel">
                            <div class="tabbable-line">
                                <ul class="nav nav-tabs ">
                                    <li class="active " >
                                        <a href="#tab_default_1" class="custmtab "  data-toggle="tab">
                                            Download </a>
                                    </li>
                                    <li>
                                        <a href="#tab_default_2" class="custmtab " data-toggle="tab">
                                            Video </a>
                                    </li>
                                    <li>
                                        <a href="#tab_default_3" class="custmtab " data-toggle="tab">
                                            Lyrics </a>
                                    </li>
                                    <li>
                                        <a href="#tab_default_4" class="custmtab " data-toggle="tab">
                                            Credit </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_default_1">
                                        <br/>
                                        @foreach($tracksrc as $row)
                                       <button class="btn btn-lg btn-success custmBtn" onclick="window.location.href='uploadTracks/{!! $row->track_url !!}'"><i class="fa fa-download"></i> {!! $row->track_src_name !!}</button>
                                            @endforeach
                                    </div>
                                    <div class="tab-pane" id="tab_default_2">

                                                    <br/>
                                        <div class="col-lg-12">
                                        {!! $ar[0]['video_url'] !!}
                                            </div>


                                    </div>
                                    <div class="tab-pane " id="tab_default_3" >
                                        <br/>
                                        <div class=" panel-body panel">
                                        <p class=" panel-body panel" >

                                                <?php foreach (preg_split("/((\r?\n)|(\r\n?))/",$ar[0]['track_lyrics']) as $line)
                                                    {

                                                            echo "<p>".$line."</p>";

                                                    }?>

                                        </p>
                                            </div>
                                    </div>
                                    <div class="tab-pane" id="tab_default_4">

                                        <br/>
                                        <div class="col-lg-12 panel panel-body">
                                            {!! $ar[0]['description'] !!}
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

				 	 <!-- /agileits -->
				<div class="clearfix"> </div>
						<!--//music-right-->
                <div class="col-lg-12"><hr/></div>
				<div class="col-lg-12 panel panel-body" >
                    <br/><div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];

                            if (d.getElementById(id)) return;

                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=177505802797392";
                            fjs.parentNode.insertBefore(js, fjs);

                        }(document, 'script', 'facebook-jssdk'));
                        $(".fb-comments").attr('data-href','<?="http://".$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>');
                        FB.XFBML.parse();

                        //getComment('<?="http://".$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>');
                    </script>

                    <div class="fb-comments" data-href="<?="http://".$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>" data-width="100%" data-numposts="5"></div>
                    <div id="comment"></div>

                     </div>

                <script>
                    $.ajaxSetup({

                        headers: {

                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                        }

                    });

                    function getComment(url) {
                        alert(url);
                        $(".fb-comments").attr('data-href',url);
                        FB.XFBML.parse();
                        $.post('getFBComment/',{'url':url},function (data) {
                            alert(data);
                            // $('#comment').html(data);
                        });
                    }</script>
					<!--	<div class="coment-form">
					<h4>Leave your comment</h4>
					<form action="#" method="post">
						<input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
						<input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
						<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
						<input type="submit" value="Submit Comment">
					</form>
				</div>-->

			 	 <!-- /w3l-agileits-->
						<!--body wrapper start-->

						<div class="review-slider">
						
								<div class="tittle-head">
									<h3 class="tittle">Related Tracks <span class="new"> New</span></h3>
                                    <a onclick="loadCall('/radio/1')" style="cursor: pointer;" ><h4 class="tittle two">See all</h4></a>
									<div class="clearfix"> </div>
								</div>
								 <ul id="flexiselDemo2">
                                     @foreach($ptracks as $row1)


                                         <li>


                                             <a  onclick="loadCall('/single/{!! $row1->track_id !!}')" ><img
                                                         src="uploads/{{$row1->track_poster}}" alt="ddd" title="allbum-name"></a>
                                             <div class="slide-title"><h4>{{$row1->track_name}}</div>
                                             <div class="date-city">
                                                 <h5>{{$row1->singer_name}}</h5>
                                                 <div class="buy-tickets">
                                                     <button  class="play-icon popup-with-zoom-anim btn btn-lg btn-success" style="background-color:rgba(142, 248, 94, 0.34); color: #0b0b0b;"  onclick="loadCall('/single/{!! $row1->track_id !!}')">Listen Now</button>
                                                 </div>
                                             </div>

                                         </li>
                            @endforeach
                        </div>

        <script>loadflex2();</script>
							</ul>

						</div>

				</div>
			<div class="clearfix"></div>
						<!--body wrapper end-->
 	 <!-- /w3layouts-agile -->
					</div></div>


			  <!--body wrapper end-->
