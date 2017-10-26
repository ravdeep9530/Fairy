<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@include('header')
<div id="loaded"></div>
    <!--body wrapper end-->
@include('footer')

<script>

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });


var k=0;





    function getComment(url) {

        $.get('getComment/'+url,function (data) {
            $('#comment').html(data);
        });
    }



    </script>

<?php

if(!empty(Session::get('url'))){
?>
<script>
    loadCall('<?=Session::get('url')?>');
    unsetShare();

</script>
<?php
}else{
?>
<script>
    loadCall("indexpart");
</script>
<?php
}
?>