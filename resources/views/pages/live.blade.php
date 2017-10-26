<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 9/10/17
 * Time: 5:39 PM
 */
?>
@include('pages.adminHeader')
<div class="container">
    <div class="col-lg-10  panel panel-body col-lg-offset-2">
        <div class="col-lg-6 col-lg-offset-2">


            <form method="post" action="insertLive" >
<div class="input-group">
    <label for="live_link">Insert Live Telecast Youtube link and click on live</label>
    <input type="hidden" name="_token" id="_token" value="<?=csrf_token()?>">

    <textarea id="live_link" required class="form-control" placeholder="Insert Live Telecast Youtube link and click on live" name="live_link">
</textarea>

</div>
        <div class=" input-group">
            <br/>
<input class="btn btn-success btn-block" type="submit" value="Live"/>
        </div>
            </form>
    </div>
        <div class="col-md-10 login-panel panel" id="track_upload_panel" style="display: block;">

            <div class="panel-heading">
                <h4 class="panel-title">LIVE Detail</h4>
            </div>
            <div class=" panel-body table-responsive" >
                <table class="table table-responsive table-bordered">
                    <tbody>
                    <th>Live ID</th><th>Live Link</th><th>Created Date</th><th>Action</th>
                    @foreach($live as $row)
                        <tr><td>{!! $row->live_id !!}</td>
                            <td>{!! $row->link !!}</td>
                            <td>{!! $row->modified_date !!}</td>
                            <td><button class="btn btn-success btn-sm" onclick="location.href='deleteLive/{!! $row->live_id !!}'" >Delete</button></td>
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
