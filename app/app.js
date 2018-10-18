// God save the Dev
'use strict';

if (process.env.NODE_ENV !== 'production') {
    require('./assets/templates/layouts/index.html');
}

// Depends
var $ = require('jquery');
require('bootstrap-sass');

// Modules
var Forms = require('_modules/forms');
var Slider = require('_modules/slider');
var Popup = require('_modules/popup');
var Fancy_select = require('_modules/fancyselect');
var Jscrollpane = require('_modules/jscrollpane');
// var LightGallery = require('_modules/lightgallery');
var Jslider = require('_modules/jslider');
var Fancybox = require('_modules/fancybox');
var Chosen = require('_modules/chosen');

// Stylesheet entrypoint
require('_stylesheets/app.scss');

require('_modules/jquery-ui');

// Are you ready?
$(function () {
    new Forms();
    new Popup();
    new Fancy_select();
    new Jscrollpane();
    // new LightGallery();
    new Slider();
    // new Jslider();
    new Fancybox();
    new Chosen();

    $('#counter').click(function () {
        $('#counter-p').html(+$('#counter-p').html() + 1);
        $("#counter-p").addClass("intro");
        $("#counter").removeClass("anim-lov");
    });
    // slider
    $('.center').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 770,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    var windowWidth = $(window).width();
    if (windowWidth < 400) {
        $(".serv-content .box, .box-inf > div").removeClass("col-xs-8");
        $(".serv-content .box, .box-inf > div").addClass("col-xs-12");
    }
    else {
        $(".serv-content .box, .box-inf > div").removeClass("col-xs-12");
        $(".serv-content .box, .box-inf > div").addClass("col-xs-8");
    }


    // плавающая черточка под пунктами меню
    window.setItemPosition = function(item) {
        var $magicLine = $('.underline');
        var left = item.position().left + item.parent().width() / 2 - $magicLine.find('span').width() / 2;

        $magicLine.css('left', left);
    };

    window.onload = function () {
        if($('#main-menu').find('.item').hasClass('current-menu-item')){
            $('#main-menu').append('<li class="underline active"><span></span></li>');
        }else{
            $('#main-menu').append('<li class="underline"><span></span></li>');
            $('#main-menu').on('mouseover', 'li:not(.current-menu-item)', function () {
                $(this).addClass('current-menu-item');
            });
        }
        setItemPosition($('.current-menu-item a'));
    };

    $('#main-menu li').find('a').hover(function () {
        setItemPosition($(this));
    }, function () {
        setItemPosition($('.current-menu-item a'));
    });

    $(window).resize(function () {
        setItemPosition($('.current-menu-item a'));
    });

    window.stopScrollHandler = false;
    $(document).on('scroll', function () {
        var scroll_top = $(document).scrollTop();
        if (scroll_top > 0) {
            $('.header-container').addClass('active');
        } else {
            $('.header-container').removeClass('active');
        }

        if(!window.stopScrollHandler) {
            $('#main-menu a').each(function () {
                var href = $(this).attr('href');
                var target = $(href);
                if (target.position().top <= scroll_top + $('.header-container').height() + 50 && target.position().top + target.outerHeight() > scroll_top + $('.header-container').height() + 50) {
                    $('.current-menu-item').removeClass('current-menu-item');
                    $(this).parent().addClass('current-menu-item');
                    setItemPosition($('.current-menu-item a'));
                }
            });
        }
    });

    // smooth scroll
    $('.scroll-navigation').on('click', function (event) {
        event.preventDefault();
        var $tiis = $(this);
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        window.stopScrollHandler = true;
        $('.item.current-menu-item').removeClass('current-menu-item');
        $tiis.parent().addClass('current-menu-item');
        setItemPosition($('.current-menu-item a'));
        $('body,html').animate({scrollTop: top - $('.header-container').height()}, 700, function(){
            window.stopScrollHandler = false;
        });
    });

    $('.my-mob-btn').click(function () {
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('active');
    });

    $('.pbz_form').on('sent', function(){
        $.magnificPopup.open({
            items: {
                src: '#thank-you'
            },
            type: 'inline'
        }, 0);
    });
});

