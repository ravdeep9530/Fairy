<?php
/**
 * Created by PhpStorm.
 * User: worldwiki
 * Date: 10/9/17
 * Time: 1:47 AM
 */
?>
@include('pages.adminHeader')

<div class="container" style="background-color: #ffffff;">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Add New Movie</h3>
                </div>
                <div class="panel-body">
                    <form id="detail_form"  method="post" enctype="multipart/form-data" action="#">
                        <fieldset>
                            <div class="form-group">
                                <input type="hidden" name="_token" id="_token" value="<?=csrf_token()?>">
                                <input class="form-control" placeholder="Movie Title" id="tt" maxlength="15" required name="t_name" type="text" autofocus>
                            </div>

                            <div class="form-group">

                                <input class="form-control" placeholder="Casting:" id="db" maxlength="15" required  name="s_name" type="text"  value="">
                            </div>
                            <div class="form-group">

                                <input class="form-control" placeholder="Label Name" id="db"  required name="l_name" type="text"  value="">
                            </div>
                            <div class="form-group">
                                <label>Trending Active:</label>
                                <input   id="db"  name="is_trending" type="checkbox"  value="Trending Active">

                            </div>
                            <div class="form-group">
                                <label>Poster:<small>(width:280 height:280)</small></label>
                                <input   id="db"  name="pt_image" type="file" required  >
                            </div>

                            <div class="form-group">
                                <label>Track Type:</label>
                                <select  class="form-control" name="t_type" required id="sq" style="width:66%">
                                    <option>Pop</option>

                                    <option>Jaz</option>
                                    <option>Rock</option>
                                    <option>Bhangra</option>
                                    <option>Sad</option>
                                    <option>Folk</option>
                                    <option>Sufi</option>

                                </select>
                            </div>


                            <div class="form-group">
                                <label>Description(Casting)</label>
                                <textarea class="form-control" required name="des" id="wtb"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Movie Url</label>
                                <textarea class="form-control" required name="video_url" id="wtb"></textarea>
                            </div>

                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" id="firstUpSubmit"  class="btn btn-lg btn-success btn-block" value="Submit" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 login-panel panel" id="track_upload_panel" style="display: none;">

            <div class="panel-heading">
                <h4 class="panel-title">Add  Track</h4>
            </div>
            <div class=" panel-body" >


                <div id="track_upload"></div>
                <br/>
                <div class="col-lg-12"><button class="btn btn-default btn-block" onclick="uploadGo()">Add More Track</button></div>

            </div>

        </div>
    </div>

</div>
@include('pages.adminFooter')
<script>

    var TrackID=0;
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
    $('#detail_form').on('submit', function (e) {



        e.preventDefault();
        var fdata=new FormData(document.getElementById('detail_form'));

        $.ajax({
            type: 'post',
            url: '/insertMovie_src',
            data: fdata,
            success: function (data) {
                TrackID=data;
                // alert(data);
                //   $('#track_upload_panel').fadeIn(1000);
                // uploadGo();
                document.getElementById('detail_form').reset();
                toast("Movie Auto generated id :"+data);
                // $('#firstUpSubmit').prop('disabled',true);
            },
            processData: false,
            contentType: false
        });






    });
    var globalTrackFlag=0;

    function uploadGo() {
        $('#track_upload').append('<div id="well'+globalTrackFlag+'" class="well">' +
                '<center><div id="load'+globalTrackFlag+'" class="col-lg-12" style=" left: 0; top: 20%; display: none;"><img src="/images/index.square-grid-loader.svg"></div></center>' +
                '<form  onsubmit="return uploadTrack('+globalTrackFlag+')" method="post" enctype="multipart/form-data" id="upload_form'+globalTrackFlag+'">'+
                '<input name="track_file"  class="text-nowrap" style=" width: 200px; word-wrap: break-word;" type="file" required  />'+
                '<input type="text" name="track_name" required placeholder="Enter Track name">' +

                '<input type="hidden" name="track_id" value="'+TrackID+'" >'+
                '<input name="__submit__" class="btn btn-success" id="sbtn'+globalTrackFlag+'"  type="submit" value="Upload"/>'+
                '</form>' +
                '<div id="progress"><div class="progress-bar progress progress-bar-success" style="width: 0%;"></div ><div class="status"></div></div>'+
                '<br/><div id="output'+globalTrackFlag+'"><!-- error or success results --></div><div>');
        globalTrackFlag=globalTrackFlag+1;
    }

    var my_func = function(event) {
        // alert("me and all my relatives are owned by China");
        event.preventDefault();
    };

    function uploadTrack(n) {
        var e=document.getElementById("upload_form"+n);
        e.addEventListener("submit", my_func, true);
        var fdata=new FormData(e);
        $('#load'+n).fadeIn(100);
        $.ajax({
            type: 'post',
            url: '/insertTrack',
            data: fdata,
            success: function (data) {

                $('#sbtn'+n).prop('disabled',true);
                $('#output'+n).html("<div class='alert alert-success'>"+data+"</div>")
                toast("Track Auto generated id :"+data);
                $('#load'+n).slideUp(500);
            },
            processData: false,
            contentType: false
        });
        return false;

    }

</script>
