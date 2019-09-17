<?php
include '../config.php';

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1214">
    <header>
        <!--MENU-->
        <div class="navbar navbar-default navbar-fixed-top navbar-1" id="menu-home">
            <div class="container width-1214">
                <!--LOGO-->
                <div class="logo" id="demo">
                    <a href="#">
                        <img class="img-logo" src="<?php echo $url_path ?>/images/logo.png"
                             alt=""/>
                    </a>
                </div>
                <!--/END LOGO-->


                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed btn-menu" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!--MENU LIST-->
                    <ul class="nav navbar-nav">

                        <!--MENU ITEM-->
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">KT-Royal<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Giới thiệu</a></li>
                                <li><a href="#">Tổ chức</a></li>
                                <li><a href="#">Quy trình</a></li>
                                <li><a href="#">Báo giá</a></li>
                                <li><a href="#">Thiết bị</a></li>
                            </ul>
                        </li>
                        <!--/MENU ITEM-->

                        <!--MENU ITEM-->
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Dự án<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Ngoại thất</a></li>
                                <li><a href="#">Nội thất</a></li>
                                <li><a href="#">Phòng thay đồ</a></li>
                                <li><a href="#">Thi công thực tế</a></li>
                                <li><a href="#">WC</a></li>
                            </ul>
                        </li>
                        <!--/MENU ITEM-->

                        <!--MENU ITEM-->
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Dịch vụ<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Thiết kế nội thất căn hộ</a></li>
                                <li><a href="#">Thiết kế nội thất văn phòng</a></li>
                                <li><a href="#">Thiết kế nội thất nhà phố</a></li>
                                <li><a href="#">Thiết kế nội thất Shop/Coffee</a></li>
                            </ul>
                        </li>
                        <!--/MENU ITEM-->

                        <!--MENU ITEM-->
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Nhân sự<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Giám đốc</a></li>
                                <li><a href="#">Kỹ thuật</a></li>
                                <li><a href="#">Chất lượng</a></li>
                                <li><a href="#">Tài chính</a></li>
                            </ul>
                        </li>
                        <!--/MENU ITEM-->

                        <!--MENU ITEM-->
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Liên hệ<i class="fa fa-angle-down"></i></a>
                        </li>
                        <!--/MENU ITEM-->

                    </ul>
                    <!--/MENU LIST-->
                </div><!-- /.navbar-collapse -->
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="padding-header"></div>
        <!--/END MENU-->
    </header>
</div>






