$(function(){
    $('#mainVisual .main_slide').slick({
        vertical: true,
        arrows: false,
        dots: true,
        autoplay: true,
        
    });

    $('.mbtn').on('click', function(){
        $('#header').toggleClass('on');
        $(this).toggleClass('on');
    });

    $('.gnb, h1, nav').on('scroll wheel touchmove' , function(e){
        if($('.mbtn').hasClass('on')) {
            e.preventDefault();
            e.stopPropagation();
            //return false;
        }
    })




})