<?php
/**
 * Created by PhpStorm.
 * User: worldwiki
 * Date: 19/9/17
 * Time: 1:42 AM
 */

?>
<script>
    $(".fb-comments").attr('data-href','{!! $url !!}');
    FB.XFBML.parse();
    (function(d, s, id) {
;
        var js, fjs = d.getElementsByTagName(s)[0];
        alert(js);
        if (d.getElementById(id)) return;

        js = d.createElement(s); js.id = id;

        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=722749584508039";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>
<div class="fb-comments" data-href="{!! $url !!}" data-width="100%" data-numposts="5"></div>

