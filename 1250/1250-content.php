<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

    <div class="type-1250">
        <div class="m24-container">

            <div class="grid-1-1">
                <div>
                    <div class="sep"></div>
                </div>
            </div>

            <div class="limit-wrapper">
                <div class="row ">
                    <div class="grid-1-6">
                        <div class="grid-1-1">
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="grid-2-3">
                        <h4>Award</h4>
                        <p>
                            Vào tháng 7 năm 2006, Ramsay giành giải Catey cho “Nhà hàng độc lập của năm”, trở thành người thứ ba giành được ba giải thưởng Catey.
                        </p>


                        <ul class="logos">
                            
                                <li class="col-md-2 col-sm-2 col-xs-4">
                                    <img class="img-responsive" src="<?php echo $url_path ?>/images/h1.jpg" alt="award">
                                </li>
                                <li class="col-md-2 col-sm-2 col-xs-4">
                                    <img class="img-responsive" src="<?php echo $url_path ?>/images/h2.png" alt="award">
                                </li>
                                <li class="col-md-2 col-sm-2 col-xs-4">
                                    <img class="img-responsive" src="<?php echo $url_path ?>/images/h.png" alt="award">
                                </li>
                                <li class="col-md-2 col-sm-2 col-xs-4">
                                    <img class="img-responsive" src="<?php echo $url_path ?>/images/h4.jpg" alt="award">
                                </li>
                                <li class="col-md-2 col-sm-2 col-xs-4">
                                    <img class="img-responsive" src="<?php echo $url_path ?>/images/h5.gif" alt="award">
                                </li>
                                <li class="col-md-2 col-sm-2 col-xs-4">
                                    <img class="img-responsive" src="<?php echo $url_path ?>/images/h6.png" alt="award">
                                </li>

                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
