$(document).ready(
    function () {
        
        $('.mobNav').hide();
        $('.fa-bars').on('click', function () {
            $('.mobNav').slideToggle(1000);
            return false;
        });
        $(".slider-wrapper").owlCarousel({
            items: 1,
            nav: false,
            loop: true,
            autoplay: true,
            autoplayHoverPause: true,
            fluidSpeed: 600,
            autoplaySpeed: 600,
            navSpeed: 600,
            dotsSpeed: 600,
            dragEndSpeed: 600
        });
        
        $('.top').on('click', function(){
           $('html,body').animate({scrollTop:0},1300); 
            return false;
        });
        
        $('.down').on('click', function(){
            $('html,body').animate({scrollTop: $('.main-head').height()+105}, 1000);
            return false;
        });
        
        /*преимущества*/
        
        $('a[href="##"]').on('click', function(){
            $('html,body').animate({scrollTop: $('.main-head').height()+105}, 1000);
            return false;
        });
        
        /*что мы умеем*/
        
        $('a[href="###"]').on('click', function(){
            $('html,body').animate({scrollTop: $('.main-head').height()+105+$('.section1').height()+300}, 1000);
            return false;
        });
        
        /*отзывы*/
        
         $('a[href="####"]').on('click', function(){
            $('html,body').animate({scrollTop: $('.main-head').height()+105+$('.section1').height()+200+$('.section2').height()+400}, 1000);
            return false;
        });
        
//        $('.section1').waypoint(function(){
//            $(".section1 .icon_out").each(function(index) {
//            var ths = $(this);
//            setInterval(function() {
//                ths.addClass("on");
//            }, 200*index);
//        });
//   
//        }, {offset: "15%"});
//        
//        $(".section2").waypoint(function() {
//            
//            $(".section2 .wrapper_car").each(function(index) {
//            var ths = $(this);
//            setInterval(function() {
//                ths.removeClass("card-off").addClass("card-on");
//            }, 200*index);
//            });
//        }, 
//        {offset : "15%"});
//        
    }
);
