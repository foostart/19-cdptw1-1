<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<header class='type-7001'>
   <!---NAVIGATOR-->
   <div class="m1-navi-boder">
    <div class="m1-navi">
        <div class="m1-navi-logo">
            <a href="#">Délicious</a>
        </div>
        <div class="m1-navi-menus toggle-transition">
            <ul>
                <li>
                    <a href="#" class="m1-navi-menus-Activity">Homes</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Menu</a>
                </li>
                <li><a href="#">Reservation</a></li>
                <li>
                    <a href="#">Gallery</a>
                    <ul class="m1-navi-menus-subMenu">
                        <li><a href="#">Restaurant</a></li>
                        <li><a href="#">Coffee Shop</a></li>
                        <li><a href="#">Sushi Bar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Features</a>
                </li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Contact</a></li>

            </ul>
        </div>
        <div class="m1-navi-icon">
            <div class="m1-navi-icon-cart">
                <a class="m1-navi-cart-icon" href="#">
                    <div class="icon"> <div class="products cart-empty">0</div> </div>
                    
                </a>
                <div class="m1-widget_shopping_cart">
                    <ul class="m1-cart_list">
                        <li class="empty">No products in the cart.</li>
                    </ul>
                </div>
            </div>
            <div class="m1-navi-icon-search">
                <button class="m1-search-btn"><i class="fa fa-search"></i></button>
            </div>
            <div class="m1-navi-icon-mobile-btn">
                <i class="fa fa-reorder"></i>
            </div>
        </div>
    </div>
</div>
<!--SLIDE SHOW-->
<div class="m1-banner">
    <ul>
        <li>
            <div class="m1-banner-img">

            </div>
        </li> 
    </ul>
    <div class="m1-banner-caption">
        <div class="m1-banner-caption-layer layer-0">People</div>
        <div class="m1-header-line-layer layer-a"></div>
        <div class="m1-banner-caption-layer layer-1">Team of professionals</div>
        
    </div>
</div>
</header>