<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1252">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-push-1"> 
                <h3>Nếu bạn muốn trở thành một đầu bếp giỏi, bạn phải làm việc với những đầu bếp giỏi. Và đó chính xác là những gì tôi đã làm.</h3>
                <h6 class="vamtam-font-style-2 with-color">Michael Strahan</h6>
                <p>❈</p>
            </div>
        </div>
    </div>
</div>        





