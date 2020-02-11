jQuery(document).ready(function() {
    jQuery(".hamburger i ").click(function(){
        jQuery("header nav").css({"margin-left": "0"});
        jQuery("header nav").css({"visibility": "visible"});
        $margin_check =  jQuery("header nav").css("margin-left");
        if( $margin_check == '0px') {
            jQuery("header nav").css({"margin-left": "-767px"});
            jQuery("header nav").css({"visibility": "hidden"});
        }else{
            jQuery("header nav").css({"margin-left": "0px"});
            jQuery("header nav").css({"visibility": "visible"});
        }
    });
    if (jQuery(window).width() < 767) {
        jQuery("nav ul li").click(function() {
            jQuery("header nav").css({"margin-left": "-767px"});
            
        });
    } 
});

