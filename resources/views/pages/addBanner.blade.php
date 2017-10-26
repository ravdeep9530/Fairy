<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22/9/17
 * Time: 11:32 PM
 */
?>

@include('pages.adminHeader');

<div class="container" style="background-color: #ffffff;">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Add New Banner</h3>
                </div>
                <div class="panel-body">
                    <form id="detail_form"  method="post" enctype="multipart/form-data" action="#">
                        <fieldset>
                            <div class="form-group">
                                <input type="hidden" name="_token" id="_token" value="<?=csrf_token()?>">
                                <input class="form-control" placeholder="Banner Title" id="tt" maxlength="15" required name="t_name" type="text" autofocus>
                            </div>


                            <div class="form-group">
                                <label>Banner Poster<small>(width:1200px and Height:600px)</small>:</label>
                                <input   id="db"  name="b_image" type="file" required  >
                            </div>






                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" id="firstUpSubmit"  class="btn btn-lg btn-success btn-block" value="Submit" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 login-panel panel" id="track_upload_panel" style="display: block;">

            <div class="panel-heading">
                <h4 class="panel-title">Banner</h4>
            </div>
            <div class=" panel-body table-responsive" >
                <table class="table table-responsive table-bordered">
                    <tbody>
                    <th>Banner ID</th><th>Banner Name</th><th>Banner</th><th>IsActive</th>
                    @foreach($banners as $row)
                        <tr><td>{!! $row->banner_id !!}</td>
                            <td>{!! $row->banner_name !!}</td>
                            <td><img src="uploads/{!! $row->banner_url !!}" width="100px" class="img-responsive" /></td>
                            <td><select onchange="changeIS(this,'{!! $row->banner_id !!}')" class="" id="{!! $row->banner_id !!}">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                </select><?php if($row->isActive==0){
                                        ?>
                                        <script>
                                       document.getElementById('{!! $row->banner_id !!}').value=0;
                                        </script>

<?php } ?></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <br/>

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
            url: '/banner',
            data: fdata,
            success: function (data) {
                TrackID=data;
                // alert(data);
                //   $('#track_upload_panel').fadeIn(1000);
                // uploadGo();
                document.getElementById('detail_form').reset();
                toast(""+data);
                window.location.reload();
                // $('#firstUpSubmit').prop('disabled',true);
            },
            processData: false,
            contentType: false
        });






    });
    $('#update_form').on('submit', function (e) {



        e.preventDefault();
        var fdata=new FormData(document.getElementById('update_form'));

        $.ajax({
            type: 'post',
            url: '/banner',
            data: fdata,
            success: function (data) {
                TrackID=data;
                // alert(data);
                //   $('#track_upload_panel').fadeIn(1000);
                // uploadGo();
                document.getElementById('detail_form').reset();
                toast(""+data);
                window.location.reload();
                // $('#firstUpSubmit').prop('disabled',true);
            },
            processData: false,
            contentType: false
        });






    });
    var globalTrackFlag=0;


    var my_func = function(event) {
        // alert("me and all my relatives are owned by China");
        event.preventDefault();
    };
function changeIS(e,id) {

    $.get('updateBanner/'+id+'/'+e.value,function (data) {
        //alert(data);
        window.location.reload();
    });

}
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
