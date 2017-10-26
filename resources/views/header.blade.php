<?php
/**
 * Created by PhpStorm.
 * User: worldwiki
 * Date: 17/9/17
 * Time: 12:44 AM
 */
?>
        <!DOCTYPE HTML>
<html>
<head>
    <title>Fairy Records |Fairy Of Music| I.K</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
    <meta name="google-signin-client_id" content="120747221100-k1i7mbltdpoecf15mtmiqphuil8v966j.apps.googleusercontent.com">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="keywords" content="Songs | Movies | Dramas |"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>

    <link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.css" type='text/css'/>
    <!-- //lined-icons -->
    <!-- Meters graphs -->
    <script src="js/jquery-2.1.4.js"></script>


</head>
<!-- /w3layouts-agile -->
<body class="sticky-header ">
<section>
    <!-- left side start-->


    <!-- /w3layouts-agile -->
    <!-- app-->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog facebook" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="app-grids">
                        <div class="app">
                            <div class="col-md-5 app-left mpl">
                                <h3>Mosaic mobile app on your smartphone!</h3>
                                <p>Download and Avail Special Songs Videos and Audios.</p>
                                <div class="app-devices">
                                    <h5>Gets the app from</h5>
                                    <a href="#"><img src="images/1.png" alt=""></a>
                                    <a href="#"><img src="images/2.png" alt=""></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-7 app-image">
                                <img src="images/apps.png" alt="">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //app-->
    <!-- /w3l-agile -->
    <!-- signup -->
    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="sign-grids">
                        <div class="sign">
                            <div class="sign-left">
                                <ul>


                                    <div id="status" ></div>
                                    <li><div class="fb-login-button" onlogin="window.location.reload()" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div></li>
                                   <!--<li><a class="fb" scope="public_profile,email" onlogin="checkLoginState();"><i></i>Sign in with Google</a></li>-->
                                        <!-- HTML for render Google Sign-In button -->
                                        <div id="gSignIn"></div>
                                        <!-- HTML for displaying user details -->
                                        <div class="userContent"></div>
                                </ul>
                            </div>
                            <div class="sign-right">
                                <form action="/create" method="post">

                                    <h3>Create your account </h3>
                                    <input type="text" name="name" placeholder="Full Name" required>
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    <input type="text" maxlength="10" name="mob" placeholder="Mobile Number" required>
                                    <input type="text" name="email" placeholder="Email" required>
                                    <input type="password" name="pass" placeholder="Password" required>

                                    <input type="submit" value="CREATE ACCOUNT">
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p>By logging in you agree to our <span>Terms and Conditions</span> and
                            <span>Privacy Policy</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //signup -->
    <!-- /w3l-agile -->
    <!-- left side end-->
    <!-- main content start-->
    <div class="main-content">
        <!-- header-starts -->
        <div class="header-section " id="audio_header" style="background-color:rgba(248, 198, 11, 1);">

            <div class="menu-right">
                <div class="profile_details">
                    <div class="col-lg-12 serch-part ">

                    </div>
                    <!-- search-scripts -->
                    <script src="js/classie.js"></script>
                    <script src="js/uisearch.js"></script>
                    <script>
                        new UISearch(document.getElementById('sb-search'));
                    </script>
                    <!-- //search-scripts -->
                    <!---->
                    <div class="col-md-4 player ">
                        <div class="audio-player" id="audioPlayer">

                        </div>
                        <!---->


                        <!--//-->
                        <ul class="next-top">

                            <li><a id="track_img" class="t_img" ><img src="images/disc_default.png"  class="img-responsive" width="50px" /></a></li>
                            <li><a id="track_name" class="t_name"></a></li>
                            <li><a class="ar" href="#"> <img src="images/arrow.png" alt=""/></a></li>
                            <li><a class="ar2" href="#"><img src="images/arrow2.png" alt=""/></a></li>

                        </ul>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <!-------->

            </div>

            <div class="clearfix"></div>

        </div>
        <div class="col-lg-12"><br/></div>
        @if ($errors->has('errorM'))

            <div class="alert-danger alert alert-dismissable fade in container"
                 style="position: fixed; left: 25%; z-index: 200; width: 50%; color: #ffffff; top:300px; background-color: #000000;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close"><font color="#f0ffff">x</font></a>
                {{ $errors->first('errorM') }}</div>
        @endif
        <nav class="navbar navbar-inverse" id="naviBar"
             style="background-color: #0b0b0b; left:0; border-radius: 0; right: 0; position: fixed; z-index: 100;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand text-hide" href="http://disputebills.com">Brand Text
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="navbar6">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="active"><a style="cursor: pointer;"  onclick="loadCall('indexpart')">HOME</a></li>
                        <li><a style="cursor: pointer;" onclick="loadCall('record')">RECORD LABELS</a></li>
                        <li><a style="cursor: pointer;" onclick="loadCall('radio/1')">DISCOVER</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">WORK<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a onclick="loadCall('/radio/1')" style="cursor: pointer;" >Tracks</a></li>
                                <li><a onclick="loadCall('/allvideos')" style="cursor: pointer;">Videos</a></li>
                                <li><a onclick="loadCall('/allMovies')" style="cursor: pointer;">Movies</a></li>


                            </ul>
                        </li>

                        <?php

                        if(!empty(Session::get('info'))){
                        $arr = json_decode(Session::get('info'), true);
                        ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"><?=$arr[0]['name']?> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Email:<?=$arr[0]['email']?></a></li>
                                <li><a href="#">Mobile:<?=$arr[0]['mobile_number']?></a></li>

                                <li class="divider"></li>
                                <li class="dropdown-header">Update</li>
                                <li><a data-target="#password_modal" data-toggle="modal">Change Password</a></li>
                                <li><a href="/login" onclick="signOut()">Logout</a></li>

                            </ul>
                        </li>
                        <?php
                        }else{
                        ?>
                        <li><a href="#" id="loginButton" ><span>Login <i
                                            class="arrow glyphicon glyphicon-chevron-right"></i></span></a>
                        <li><a class="" href="#" data-toggle="modal" data-target="#myModal5"><i
                                        class="fa fa-sign-in"></i> New User</a></li>

                        <?php
                        }
                        ?>



                        <div id="loginBox">
                            <form action="login" method="post" id="loginForm">
                                <fieldset id="body">
                                    <fieldset>
                                        <label for="email">Email Address</label>
                                        <input type="text" name="email" id="email">
                                        <input type="hidden" name="_token" value="<?=csrf_token() ?>">
                                    </fieldset>
                                    <fieldset>
                                        <label for="password">Password</label>
                                        <input type="password" name="pass" id="password">
                                    </fieldset>
                                    <input type="submit" id="login" value="Sign in">
                                    <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember
                                            me</i></label>
                                </fieldset>
                                <span><a href="#">Forgot your password?</a></span>
                            </form>
                        </div>
                        </li>
                        <li id="loading" style="display: none;"><span><img src="images/rol.gif" width="20px" class="img-responsive"/> </span></li>

                    </ul>
                    <div style="float: left; left: -50px; position: relative;">

                        <img src="images/A_logo.png" id="llogo" class="img-responsive" width="60px" style="border-radius: 50%; border: 3px ridge  rgba(255, 235, 6, 0.96);">

                    </div>
                    <div class="col-sm-4 col-md-4 pull-right" style="top: 8px; border-radius: 0;">
                        <form class="navbar-form" role="search">
                            <div class="input-group search-box" style="border-radius: 0; ">
                                <input type="text" class="form-control col-lg-12 search-box"
                                       style="background-color: rgba(41, 40, 40, 0.57); color: #ffffff;"
                                       placeholder="Search" name="srch-term" id="srch-term">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" style="background-color: #0b0b0b; color: #ffffff;"
                                            type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>


                    <!--/.nav-collapse -->
                </div>
                <div id="snackbar"></div>



                <!--/.container-fluid -->
        </nav>
        <div class="sticky">
            <p class="stick"><b>I<b style="color: rgba(255, 12, 0, 0.63);">.</b>K </b></p>
        </div>