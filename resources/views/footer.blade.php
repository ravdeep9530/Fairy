<?php
/**
 * Created by PhpStorm.
 * User: worldwiki
 * Date: 17/9/17
 * Time: 12:44 AM
 */
?>
<div class="footer">

    <div class="footer-grid">
        <h3>Navigation</h3>
        <ul class="list1">
            <li class="active"><a style="cursor: pointer;"  onclick="loadCall('indexpart')">HOME</a></li>
            <li><a style="cursor: pointer;" onclick="loadCall('record')">RECORD LABELS</a></li>
            <li><a style="cursor: pointer;" onclick="loadCall('radio/1')">DISCOVER</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                   aria-expanded="false">WORK<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a onclick="loadCall('/radio/1')" style="cursor: pointer;" >Tracks</a></li>
                    <li><a onclick="loadCall('/allvideos')" style="cursor: pointer;">Videos/Movies</a></li>
                    <li><a onclick="loadCall('/allMovies')" style="cursor: pointer;">Movies</a></li>


                </ul>
            </li>
            <li><a onclick="loadCall('/radio/1')" style="cursor: pointer;" >All Tracks</a></li>
            <li><a onclick="loadCall('/allvideos')" style="cursor: pointer;">All Videos/Movies</a></li>

        </ul>
    </div>
    <div class="footer-grid">
        <h3>Our Accounts</h3>
        <ul class="list1">
            <li><a>Your Account</a></li>
            <li><a  href="https://www.facebook.com/fairyrecords/"  target="_blank"><i class="fa fa-facebook"> </i> Facebook</a></li>
            <li><a href="https://www.youtube.com/channel/UC8pYNvVJ2Lk2zfoNGJJc8Dw"> <i class="fa fa-youtube"> </i> Youtube</a></li>
            <li><a href="https://twitter.com/fairy_records" target="_blank"><i class="fa fa-twitter"> </i> Twitter</a></li>
            <li><a href="https://www.instagram.com/fairyrecords/" target="_blank"><i class="fa fa-instagram"> </i> Instagram</a></li>
            <li><a href="https://www.linkedin.com/in/fairy-records-2b025b14a/" target="_blank"><i class="fa fa-linkedin"> </i> Linkedin</a></li>

        </ul>
    </div>
    <div class="footer-grid">
        <h3>Our Support</h3>
        <ul class="list1">
            <li><a style="cursor: pointer;" onclick="loadCall('record')">Labels</a></li>
            <li><a style="cursor: pointer;" onclick="loadCall('contactus')">Contact Us</a></li>

        </ul>
    </div>
    <div class="footer-grid">
        <h3>Newsletter</h3>
        <p class="footer_desc">Drop your e-mail. We will contact with you very soon.</p>
        <div class="search_footer">
            <form>
                <input type="text" placeholder="Email...." required="">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <div class="footer-grid footer-grid_last">
        <h3>About Us</h3>
        <p class="footer_desc">.</p>
        <p class="f_text">Name: &nbsp;&nbsp;&nbsp;IQBAL SUKHI</p>
        <p class="f_text">Phone: &nbsp;&nbsp;&nbsp;+91-9888810533</p>
        <p class="email">Email : &nbsp;<span><a href="mailto:info@fairyrecords.com">info@fairyrecords.com</a></span></p>
    </div>
    <div class="clearfix"></div>
</div>
</div>
<!--footer section start-->
<!--<footer>
  </footer>-->
<!--footer section end-->
<!-- /w3l-agile -->
<!-- main content end-->
<div class="modal fade" id="password_modal">
    <div class="modal-dialog modal-content ">
        <div class="modal-header">
            <h3>Change Password <span class="extra-title muted"></span></h3>
        </div>
        <div class="modal-body form-horizontal">
            <div class="control-group">
                <label for="current_password" class="control-label">Current Password</label>
                <div class="controls">
                    <input name="current_password" type="password">
                </div>
            </div>
            <div class="control-group">
                <label for="new_password"  class="control-label">New Password</label>
                <div class="controls">
                    <input name="new_password" id="pass" type="password">
                </div>
            </div>
            <div class="control-group">
                <label for="confirm_password" class="control-label">Confirm Password</label>
                <div class="controls">
                    <input name="confirm_password" type="password">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button href="#" class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button href="#" class="btn btn-primary" id="password_modal_save" onclick="changePassword()">Save changes</button>
        </div>
    </div>
</div>
</section>

<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
<script>

    var TrackID = 0;
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
    function swap_Text(e) {

        $('#small-dialog').html(document.getElementById(e).innerHTML);

    }


    //$.get('');
</script>


<script type="text/javascript">
    <?php
    if(!empty(Session::get('info'))){
        $arr=json_decode(Session::get('info'),true);
?>
    function changePassword() {
        showLoad();
        var e = document.getElementById('pass');
        // alert(e.value);
        if (e.value == '') {
            toast('Must fill the fields.');
            return false;
        }

        $.get('changepassword/' + e.value + '/<?=$arr[0]['id']?>', function (data) {
            //alert(data);
            toast('Password Change Successfully.')
            hideLoad();
        });
    }
    <?php
    }
    ?>
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
                    changePoint:480,
                    visibleItems: 2
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: {
                    changePoint:800,
                    visibleItems: 4
                }
            }
        });
    }

    function loadflex2() {


        $("#flexiselDemo2").flexisel({
            visibleItems: 5,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: false,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 2
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: {
                    changePoint:800,
                    visibleItems: 4
                }
            }
        });
    }
    function loadflex3() {



        $("#flexiselDemo3").flexisel({
            visibleItems: 5,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: false,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 2
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: {
                    changePoint:800,
                    visibleItems: 4
                }
            }
        });
    }

    function toast(t) {

        var x = document.getElementById("snackbar");
        x.innerHTML=t;
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
    function loadflex4() {


        $("#flexiselDemo5").flexisel({
            visibleItems: 5,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: false,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 2
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: {
                    changePoint:800,
                    visibleItems: 4
                }
            }
        });
    }

function loadTrack(id,name,url) {
    showLoad();
    $.get('getTrackUrl/'+id,function (data) {
        $('#track_name').html('<marquee behavior="scroll" style="width:200px;"  scrollamount="2" loop="loop" ><h4 style="font-weight: 800; text-shadow: 2px 3px 4px rgba(106, 106, 106, 0.62);   ">'+name+'</h4></marquee>');
        $('#track_img').html('<img src="uploads/'+url+'" style="box-shadow:2px 2px 3px  rgba(106, 106, 106, 0.62);" width="50px" class="img-responsive" />');
        $('#audioPlayer').html('<audio id="audio-player" autoplay controls="controls">'+
                '<source src="uploadTracks/'+data+'" type="audio/ogg"></source>'+
                '<source src="uploadTracks/'+data+'" type="audio/mpeg"></source>'+
                +'</audio>');
        customAudio();
        hideLoad();
    });x

}
    function  customAudio() {
        $('#audio-player').mediaelementplayer({
            alwaysShowControls: true,
            features: ['playpause', 'progress', 'volume'],
            audioVolume: 'horizontal',
            iPadUseNativeControls: true,
            iPhoneUseNativeControls: true,
            AndroidUseNativeControls: true
        });
    }
    function showLoad() {
        $('#loading').fadeIn(200);
        $('#llogo').addClass('loading1');



    }
    function hideLoad() {
        $('#loading').fadeOut(200);
        $('#llogo').removeClass('loading1');

    }

    function loadCall(url) {
        showLoad();
        $.ajax({
            url: url,
            type: 'GET',
            success: function (data) {
                $('#loaded').html(data);
                var body = $("html");
                var top = body.scrollTop(); // Get position of the body
                k=1;

                if (top != 0) {

                    body.animate({scrollTop: 0}, '1000');
                }

                hideLoad();



            }

        });

    }

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '177505802797392',
            xfbml      : true,
            version    : 'v2.10'
        });
        FB.AppEvents.logPageView();


        FB.getLoginStatus(function(response) {

            statusChangeCallback(response);
        });
    };
    // loadflex1();
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<script type="text/javascript" src="js/jquery.flexisel.js"></script>


<!--audio-->
<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
<!---->
<script>
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {


        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
            // Logged into your app and Facebook.

            testAPI();
        } else {
            // The person is not logged into your app or we are unable to tell.
           // document.getElementById('status').innerHTML = 'Please log ' +
             //       'into this app.';
        }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }


    // Load the SDK asynchronously


    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me?fields=id,name,email', function(resp) {

            $.post('createCheckLogin',{'email':resp.id,'pass':'12345'},function (data) {

                if(data=="Yes"){
                    toast("Logged In");
                    if(c==0) {
                        window.location.reload();
                    }

                }
                if(data=="No" ){
                    $.get('createFB/' + resp.name + '/' + resp.id, function (data) {
                        toast('Account is created successfully.Default Password is 12345');
                    });
                }
            });
            console.log('Successful login for: ' + response.name);
           // document.getElementById('status').innerHTML =
             //       'Thanks for logging in, ' + response.name + '!';
        });
    }
var c=0;
    <?php
    if(!empty(Session::get('info'))){
        {
            ?>
            c=1;
    <?php
        }
    }
    ?>

    function onSuccess(googleUser) {
        var profile = googleUser.getBasicProfile();
        gapi.client.load('plus', 'v1', function () {
            var request = gapi.client.plus.people.get({
                'userId': 'me'
            });
            //Display the user details
            request.execute(function (resp) {

                var profileHTML = '<div class="profile"><div class="head">Welcome '+resp.name.givenName+'! <a href="javascript:void(0);" onclick="signOut();">Sign out</a></div>';
                profileHTML += '<img src="'+resp.image.url+'"/><div class="proDetails"><p>'+resp.displayName+'</p><p>'+resp.emails[0].value+'</p><p>'+resp.gender+'</p><p>'+resp.id+'</p><p><a href="'+resp.url+'">View Google+ Profile</a></p></div></div>';
                $('.userContent').html(profileHTML);
                $('#gSignIn').slideUp('slow');
                $.post('createCheckLogin',{'email':resp.emails[0].value,'pass':'12345'},function (data) {

                    if(data=="Yes"){
                        toast("Logged In");
                        if(c==0) {
                            window.location.reload();
                        }
                        FB.logout(function(response) {
                            alert(response);
                        });
                    }
                    if(data=="No" ){
                        $.get('createFB/' + resp.name.givenName + '/' + resp.emails[0].value, function (data) {
                            toast('Account is created successfully.Default Password is 12345');
                        });
                    }
                });
            });
        });
    }
    function onFailure(error) {
        alert(error);
    }
    function renderButton() {
        gapi.signin2.render('gSignIn', {
            'scope': 'profile email',
            'width': 240,
            'height': 40,
            'longtitle': true,
            'theme': 'dark',
            'onsuccess': onSuccess,
            'onfailure': onFailure
        });
    }

    function signOut() {

        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            $('.userContent').html('');
            $('#gSignIn').slideDown('slow');

        });
        FB.logout();
    }
    FB.logout(function(response) {
        alert(response);
    });

    function unsetShare() {
        $.get('unsetShare', function (data) {

        });
    }

    function setTitle(str) {
        document.title=str;
    }
</script>

<script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
</body>
</html>

