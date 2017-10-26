<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/10/17
 * Time: 9:45 PM
 */
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12"><br/><br/><br/><br/></div>
        <div class="col-lg-12 login-panel panel" >
            <div class="panel-heading" >
                <div class="panel-title text-center " ><h3 class="label1"  style="text-shadow:2px 2px 2px rgba(106, 103, 103, 0.76); box-shadow: 2px 2px 2px rgba(106, 103, 103, 0.76);">
                        <b>Contact Us</b></h3></div>


            </div>

        </div>
        <div class="panel-body panel">
            <center><div class="col-lg-6">
                    <center><img src="images/@.png" class="img-responsive" /></center>
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
                        <div class="input-group">

                            <textarea  required  placeholder="Enter Message" name="msg" class="form-control intext"></textarea>

                            <div class="input-group-btn">
                                <button type="button"  style=" background-color: #E03616; border-color: #E03616;"  class="btn btn-search label1 btn-info">
                                    <span class="fa fa-envelope"></span>
                                    <span class="label-icon">Message</span>
                                </button>
                            </div>
                        </div>

                        <div class="text-center col-lg-12">
                            <center><button class="btn  btn-danger btn-lg  text-center" style="border-radius: 0; background-color: #E03616;">Submit</button></center>
                        </div>
                        <div class="col-lg-12"></div>
                    </form>
                </div></center>
            <div class="col-lg-5">
                <br/><br/>
                <br/><br/>
                <br/><br/>
                <br/>
                <div class=" well well-sm" style="background-color: rgba(245, 255, 245, 0.76);">

                <ul>
                    <li><i class="fa fa-user"></i> Contact Person Name:<b>IQBAL SUKHI</b></li><br/>
                    <li><i class="fa fa-home"></i> Address:Kup Kalan,Malerkotla Dist:Sangrur 148021</li><br/>
                    <li><i class="fa fa-phone"></i> Contact Person Mobile:<b>+91-9888810533</b></li><br/>
                    <li><i class="fa fa-envelope"></i> Email:<b><a href="mailto:info@fairyrecords.com"> info@fairyrecords.com   </a></b></li><br/>

                </ul>
                </div>
            </div>


        </div>
        <div class="col-lg-12">
            <br/>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3433.683900392676!2d75.87615331512872!3d30.614677981678476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDM2JzUyLjgiTiA3NcKwNTInNDIuMCJF!5e0!3m2!1sen!2sus!4v1507537572790" class="col-lg-12" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    </div>
</div>
<script>
    $('#proposal_form').on('submit', function (e) {


        e.preventDefault();
        var fdata = new FormData(document.getElementById('proposal_form'));

        $.ajax({
            type: 'post',
            url: 'contact',
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

