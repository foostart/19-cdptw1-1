jQuery(document).ready(function($) {
	$(".main-menu .navbar-header .navbar-toggle").click(function () {
        if($(".header-style-two .main-menu .navbar-collapse").hasClass("show"))
        {
            $(".header-style-two .main-menu .navbar-collapse").removeClass("show");
        }
        else
        {
            $(".header-style-two .main-menu .navbar-collapse").addClass("show");
        }
    });
});