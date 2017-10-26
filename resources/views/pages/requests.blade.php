@include('pages.adminHeader');
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Requests</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-phone fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">

                            <div>Contact US!</div>
                        </div>
                    </div>
                </div>
                <a style="cursor: pointer;" onclick="getCRTable()">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-microphone fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">

                            <div>Recording Proposal!</div>
                        </div>
                    </div>
                </div>
                <a style="cursor: pointer;" onclick="getPRTable()">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-product-hunt fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">

                            <div>Label Request!!</div>
                        </div>
                    </div>
                </div>
                <a style="cursor: pointer;" onclick="getLRTable()">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>



    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b id="p_head"><i class="fa fa-music fa-fw"></i> Requests</b>
                    <div class="pull-right">
                        <div class="btn-group">
                            <img src="images/8.gif" class="img-responsive" id="loading" style="display: none;" />
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->



                <!-- /.panel -->

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive" >
                                <div id="dtable"></div>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.col-lg-4 (nested) -->

                        <!-- /.col-lg-8 (nested) -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel-body -->
    </div>

    <!-- /.col-lg-8 -->

    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@include('pages.adminFooter');
<script>
    getCRTable();
</script>