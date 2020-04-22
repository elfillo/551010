"use strict";
$(document).ready(function(){
    $('.show_all').click(function(){
        var list = this.parentNode.children[3];
        $(list).toggleClass('show_full_list');
        var shortView = $(list).hasClass('show_full_list');
        if(!shortView){
            $(this).text('Смотреть весь список');
        }else{
            $(this).text('Свернуть');
        }
    }); 
});
//open mobile menu
$(document).ready(function(){
    var showMenu = false;
    $('.burger').click(function(){
        showMenu = !showMenu;
        if(showMenu){
            $('.header_nav__mobile_list').css({
                'display':'block',
                'height':'auto',
                'transition':'0.2s'
            });
            $('.burger span:nth-child(2)').css({
                'display':'none'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'rotate(45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
            $('.burger span:nth-child(3)').css({
                'transform':'rotate(-45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
        }else{
            $('.header_nav__mobile_list').css({
                'display':'none',
                'height':'0',
                'transition':'0.2s'
            }); 
            $('.burger span:nth-child(2)').css({
                'display':'block'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'
            
            });
            $('.burger span:nth-child(3)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'
            });
        }
    });
});

// стрелка вверх



$(document).ready(function(){   
    var scrollElem = document.getElementById("upstairs");
    $(window).scroll(function () {
   
    if ($(this).scrollTop() > 0) {  
        scrollElem.style.opacity = "1";
    } else {
        scrollElem.style.opacity = "0";
    }
    });

    $('#upstairs').click(function(){
        $('html').animate({scrollTop:0},1500);
        $('body').animate({scrollTop:0},1500);
    });
});


//выделение активной ссылки
$(function () {
    $(".header_nav_list li a").each(function () {
        window.location.href == this.href && $(this).addClass("active");
    })
});
$(function () {
    $(".side_nav_list li a").each(function () {
        window.location.href == this.href && $(this).addClass("active_side_nave");
    })
});
$(function () {
    $(".side_nav_list .sub-menu li a").each(function () {
        window.location.href == this.href && $(this).addClass("active_side_nave")
    })
});

$(function () {
    $(".header_nav--design li a").each(function () {
        window.location.href == this.href && $(this).parent().addClass("active_design");
    })
});

//hide modal window form
$(document).ready(function(){   
    $('.modal_show').click(function(){
        $('.modal_wrapper').css({'display':'flex'});
    });
    $('.modal_close').click(function(){
        $('.modal_wrapper').css({'display':'none'});
    });
});

//stick menu
$(function(){
     $(window).scroll(function() {
         if($(this).scrollTop() >= 110) {
            $('.header_nav').addClass('stickytop');
            $('.header_nav__mobile_list').addClass('stickytop_mobile_menu');
         }
         else{
            $('.header_nav').removeClass('stickytop');
            $('.header_nav__mobile_list').removeClass('stickytop_mobile_menu');
         }
     });
});
//stick advertising
$(document).ready(function(){
    if($(".advertising")[0] != undefined){
        var baner = $(".advertising").offset().top;
        var h = $(".advertising").height();
        var gallery = $(".photo_gallery").offset().top;
        var bottomOffSet = gallery - h;
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop();
            if(scrollTop >= baner && bottomOffSet >= scrollTop){
                $(".advertising").addClass('banner_stckytop');
            }else{
                $(".advertising").removeClass('banner_stckytop');
            }
        });
    }
});
