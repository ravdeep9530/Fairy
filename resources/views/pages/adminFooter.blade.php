<!-- jQuery -->
<script src="../vendor/jquery/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
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

</body>

</html>
<script>
    function showLoad() {
        $('#loading').fadeIn(200);
    }
    function hideLoad() {
        $('#loading').fadeOut(200);
    }
    function toast(t) {

        var x = document.getElementById("snackbar");
        x.innerHTML=t;
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
    $(document).ready(function() {
        $('#dt').DataTable();
    } );


    function getTable() {
        showLoad();
$('#p_head').html('<i class="fa fa-music fa-fw"></i> Tracks');
        $.get('getTab',function (data) {
            //alert(data);
            $('#dtable').html(data);
            $('#dt').DataTable();
            hideLoad();
        });

    }
    function getCRTable() {
        showLoad();
        $('#p_head').html('<i class="fa fa-music fa-fw"></i> Contact Us Requests');
        $.get('showCRequests',function (data) {
            //alert(data);
            $('#dtable').html(data);
            $('#dt').DataTable();
            hideLoad();
        });

    }
    <?php
    if(!empty(Session::get('info'))){
    $arr=json_decode(Session::get('info'),true);
            }
    ?>
    function changePassword() {
        showLoad();
        var e=document.getElementById('pass');
       // alert(e.value);
        if(e.value=='')
        {
            toast('Must fill the fields.');
            return false;
        }

        $.get('changepassword/'+e.value+'/<?=$arr[0]['id']?>',function (data) {
            //alert(data);
            toast('Password Change Successfully.')
            hideLoad();
        });

    } function getPRTable() {
        showLoad();
        $('#p_head').html('<i class="fa fa-microphone fa-fw"></i> Recording Requests');
        $.get('showPRequests',function (data) {
            //alert(data);
            $('#dtable').html(data);
            $('#dt').DataTable();
            hideLoad();
        });

    } function getLRTable() {
        showLoad();
        $('#p_head').html('<i class="fa fa-product-hunt fa-fw"></i> Label Requests');
        $.get('showLRequests',function (data) {
            //alert(data);
            $('#dtable').html(data);
            $('#dt').DataTable();
            hideLoad();
        });

    }
    function getVTable() {
showLoad();
        $('#p_head').html('<i class="fa fa-video-camera fa-fw"></i> Videos');
        $.get('getVTab',function (data) {
            //alert(data);
            $('#dtable').html(data);
            $('#dt').DataTable();
            hideLoad();
        });

    }
    function getCTable() {
showLoad();
        $('#p_head').html('<i class="fa fa-user fa-fw"></i> Users');
        $.get('getCTab',function (data) {
            //alert(data);
            $('#dtable').html(data);
            $('#dt').DataTable();
            hideLoad();
        });

    }
    function getMTable() {
showLoad();
        $('#p_head').html('<i class="fa fa-user fa-fw"></i> Users');
        $.get('getMTab',function (data) {
            //alert(data);
            $('#dtable').html(data);
            $('#dt').DataTable();
            hideLoad();
        });

    }
    function delT(e) {

        if(confirm('Are You Sure?')) {
            showLoad();
            $.get('delT/' + e, function (data) {
                getTable();
hideLoad();
                toast("Delete Successfully!!");
            });
        }
    }
    function delV(e) {

        if(confirm('Are You Sure?')) {
            showLoad();
            $.get('delV/' + e, function (data) {
                getVTable();
hideLoad();
                toast("Delete Successfully!!");
            });
        }

    }
    function delM(e) {

        if(confirm('Are You Sure?')) {
            showLoad();
            $.get('delM/' + e, function (data) {
                getMTable();
hideLoad();
                toast("Delete Successfully!!");
            });
        }

    }
    function delC(e) {

        if(confirm('Are You Sure?')){
            showLoad();
        $.get('delC/'+e,function (data) {
          getCTable();
hideLoad();
            toast("Delete Successfully!!");
        });}

    }


    function changeT(e,id) {
      //  alert(e.value+'-'+id);
        showLoad();
        $.get('updateT/'+id+'/'+e.value,function (data) {
            //alert(data);
            getTable();
            toast("Updated Successfully!!");
            hideLoad();
        });

    }
    function changeV(e,id) {
//alert(e.value+'-'+id);
        showLoad();
        $.get('updateV/'+id+'/'+e.value,function (data) {
            getVTable();
            toast("Updated Successfully!!");
            hideLoad();
        });

    }
    function changeM(e,id) {
//alert(e.value+'-'+id);
        showLoad();
        $.get('updateM/'+id+'/'+e.value,function (data) {
            getMTable();
            toast("Updated Successfully!!");
            hideLoad();
        });

    }
</script>