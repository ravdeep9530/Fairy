<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/9/17
 * Time: 5:41 PM
 */
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12"><br/><br/><br/><br/></div>
        <div class="col-lg-12 login-panel panel" >
            <div class="panel-heading" >
                <div class="panel-title text-center " ><h3 class="label1"  style="text-shadow:2px 2px 2px rgba(106, 103, 103, 0.76); box-shadow: 2px 2px 2px rgba(106, 103, 103, 0.76);">
                        <b>Get Label Name For Your Song</b></h3></div>


            </div>

        </div>
        <div class="panel-body panel">
            <center><div class="col-lg-12">
                    <center><img src="images/if_microphone_701492.svg" style="height: 140px;" class="img-responsive"></center>
                    <br/>
                    <form id="proposal_form" method="post">
                        <div class="input-group">

                            <input type="text" required  placeholder="Enter Full Name" name="fname" class="form-control intext">

                            <div class="input-group-btn">
                                <button type="button"  style=" background-color: #E03616; border-color: #E03616;"  class="btn btn-search label1 btn-info">
                                    <span class="fa fa-user"></span>
                                    <span class="label-icon">Name</span>
                                </button>
                            </div>
                        </div> <div class="input-group">

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
</div>
<script>
    $('#proposal_form').on('submit', function (e) {


        e.preventDefault();
        var fdata = new FormData(document.getElementById('proposal_form'));

        $.ajax({
            type: 'post',
            url: 'labels',
            data: fdata,
            success: function (data) {

                // alert(data);
                $('#track_upload_panel').fadeIn(1000);
                toast(data);
                document.getElementById('proposal_form').reset();

            },
            processData: false,
            contentType: false
        });

    });
</script>