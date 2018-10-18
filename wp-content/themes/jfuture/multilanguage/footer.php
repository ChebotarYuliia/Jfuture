<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

    <footer class="container-fluid">
        <div class="wrapper over-n">
            <h6 class="text-center"><?php echo __('[:en]The JFuture project exists thanks to the TORAT MOSHE educational network with the support of the EURO-ASIAN JEWISH CONGRESS.[:ru]Проект JFuture существует благодоря образовательной сети Торат Моше  при поддержке Евро-Азиатского еврейского Конгресса[:]'); ?></h6>
            <div class="galery">
                <div class="wr-photo">
                    <div class="photo">
                        <img src="<?php echo get_template_directory_uri();?>/images/logoFooter.png" alt="">
                    </div>
                </div>
                <div class="wr-photo">
                    <div class="photo">
                        <img src="<?php echo get_template_directory_uri();?>/images/logoFooter3.png" alt="">
                    </div>
                </div>
                <div class="wr-photo">
                    <div class="photo">
                        <img src="<?php echo get_template_directory_uri();?>/images/logoFooter2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="wr-map">
                <h5 class="text-uppercase text-center"><?php echo __('[:en]JOIN US[:ru]ПРИСОЕДИНИЛИСЬ К НАМ[:]'); ?> </h5>
                <div class="box-map">
                    <div class="map" id="map"></div> 
                    <div id="content1"></div>
                </div>
            </div>
            <div class="row box-inf footer-bg">
                <div class="col-lg-4 col-xs-12 col-md-4">
                    <ul>
                        <li><span><?php echo __('[:en]We will contct you[:ru]Мы свяжемся с Вами[:]'); ?></span></li>
                        <li><a href="#unique" class="scroll-navigation"><?php echo __('[:en]Why us[:ru]Почему мы[:]'); ?></a></li>
                        <li><a href="#principles" class="scroll-navigation"><?php echo __('[:en]Our principles[:ru]Наши принципы[:]'); ?></a></li>
                        <li><a href="#education" class="scroll-navigation"><?php echo __('[:en]Training[:ru]Обучение[:]'); ?></a></li>
                        <li><a href="#contact" class="scroll-navigation"><?php echo __('[:en]Submit application[:ru]Подать заявку[:]'); ?></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 col-md-4">
                    <ul>
                        <li><span><?php echo __('[:en]Contacts[:ru]Контакты[:]'); ?></span></li>
                        <li><?php echo __('[:en]Ukraine, Kharkov[:ru]Украина, Харьков[:]'); ?> </li>
                        <li><?php echo __('[:en]St. Chernyshevsky, 7[:ru]Ул. Чернышевского, 7[:]'); ?> </li>
                        <li><?php echo __('[:en]Теl: +38 050 302 57 24 [:ru]Тел: +38 050 302 57 24 [:]'); ?> </li>
                        <li>Email: Jfutureglobal@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 col-md-4 ">
                    <span class="span-h"><?php echo __('[:en]We will contact you[:ru]Мы свяжемся с Вами[:]'); ?></span>
                    <form>
                        <input type="email" class="form-control" placeholder="e-mail">
                        <button class="btn" type="submit"><?php echo __('[:en]Send[:ru]Отправить[:]'); ?></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row icon-bar">
            <div class="col-lg-4 col-sm-4 col-xs-6 col-md-4 col-xs-4">
                <a href="#" class="wr-soc" target="_blank">
                    <img src="<?php echo get_template_directory_uri();?>/images/v.png">
                    <div class="cont">
                        <strong><?php echo __('[:en]Vkontakte[:ru]Вконтакте[:]'); ?></strong>
                        <span>2,033k</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 col-xs-4">
                <a href="https://www.facebook.com/JFuture.community" class="wr-soc" target="_blank">
                    <img src="<?php echo get_template_directory_uri();?>/images/f.png">
                    <div class="cont">
                        <strong>Facebook</strong>
                        <span>2,033k</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 col-xs-4">
                <a href="https://www.instagram.com/jfuture.community/" class="wr-soc" target="_blank">
                    <img src="<?php echo get_template_directory_uri();?>/images/i.png">
                    <div class="cont">
                        <strong>Instagram</strong>
                        <span>2,033k</span>
                    </div>
                </a>
            </div>
        </div>
        <i data-offset="70" class="parallax bg-09"></i>
    </footer>
</div>
    <div class="mfp-hide">
        <div id="video" class="video-popup">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                        <div class="video__container">
                            <iframe width="100%" height="440" src="https://www.youtube.com/embed/E7VAVvvB1QQ?autoplay=1&mute=1"
                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen mute=1></iframe>
                        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mfp-hide">
        <div id="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                        <div class="contact-form__container">
                            <h5><?php echo __('[:en]CONTACT WITH US[:ru]СВЯЗЬ С НАМИ[:]'); ?></h5>
                            <form action="" class="contact-form pbz_form clear-styles" data-error-title="Ошибка отправки!"
                                data-error-message="Попробуйте отправить заявку через некоторое время."
                                data-success-title="Спасибо за заявку!"
                                data-success-message="Наш менеджер свяжется с вами в ближайшее время.">
                                <div class="contact-form__row">
                                    <input type="text"  name="name" placeholder="<?php echo __('[:en]Name[:ru]Имя[:]'); ?>" data-title="Имя" class="custom-intup">
                                    <input type="tel" name="phone" data-title="<?php echo __('[:en]Phone[:ru]Телефон[:]'); ?>" data-validate-required="Обязательное поле" data-validate-uaphone="Неправильный номер" placeholder="+38 (0__) __ __ ___" class="custom-intup">
                                </div>
                                <div class="contact-form__row">
                                    <input  type="email" name="email" placeholder="Email" data-title="Email" data-validate-required="Обязательное поле" data-validate-email="Неправильный email" class="custom-intup">
                                    <select name="" id=""  class="chosen-select city-select">
                                        <option selected="selected" value=""><a href=""><?php echo __('[:en]Ukraine[:ru]Украина[:]'); ?></a> </option>
                                        <option value=""><a href=""<?php echo __('[:en]Poland[:ru]Польша[:]'); ?>></a></option>
                                    </select>
                                </div>
                                <div class="contact-form__row">
                                    <select name="" id=""  class="chosen-select city-select">
                                        <option selected="selected" value=""><a href=""><?php echo __('[:en]Kharkov[:ru]Харьков[:]'); ?></a> </option>
                                        <option value=""><a href=""><?php echo __('[:en]Kiev[:ru]Киев[:]'); ?></a></option>
                                    </select>
                                </div>
                                <label for="teaxtarea" class="custom-label"><?php echo __('[:en]Yout question?[:ru]Ваш Вопрос?[:]'); ?> </label>
                                <textarea class="custom-textarea" name="" id="teaxtarea" cols="20" rows="7" name="question" data-title="question"></textarea>
                                <button type="submit" class="contact-form__btn"><?php echo __('[:en]CONNECT[:ru]СВЯЗАТЬСЯ[:]'); ?> </button>
                            </form>
                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mfp-hide">
        <div id="contact-form-parent">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                        <div class="contact-form__container">
                            <h5><?php echo __('[:en]PARENTS AND CHILDREN [:ru]РОДИТЕЛИ И ДЕТИ[:]'); ?></h5>
                            <form action="" class="contact-form pbz_form clear-styles" data-error-title="Ошибка отправки!"
                                data-error-message="Попробуйте отправить заявку через некоторое время."
                                data-success-title="Спасибо за заявку!"
                                data-success-message="Наш менеджер свяжется с вами в ближайшее время.">
                                <div class="contact-form__row">
                                    <input type="text"  name="name" placeholder="<?php echo __('[:en]Your name[:ru]Ваше имя[:]'); ?>" data-title="Имя" class="custom-intup">
                                    <input type="text"  name="name" placeholder="<?php echo __('[:en]Child name[:ru]Имя Ребенка[:]'); ?>" data-title="Имя" class="custom-intup">
                                </div>
                                <div class="contact-form__row">
                                    <input  type="email" name="email" placeholder="Email" data-title="Email" data-validate-required="Обязательное поле" data-validate-email="Неправильный email" class="custom-intup">
                                    <input type="tel" name="phone" data-title="Телефон" data-validate-required="Обязательное поле" data-validate-uaphone="Неправильный номер" placeholder="+38 (0__) __ __ ___" class="custom-intup">
                                </div>
                                <div class="contact-form__row">
                                    <select name="" id=""  class="chosen-select city-select">
                                        <option selected="selected" value=""><a href=""><?php echo __('[:en]Ukraine[:ru]Украина[:]'); ?></a> </option>
                                        <option value=""><a href=""><?php echo __('[:en]Poland[:ru]Польша[:]'); ?></a></option>
                                    </select>
                                    <select name="" id=""  class="chosen-select city-select">
                                        <option selected="selected" value=""><a href=""><?php echo __('[:en]Kharkov[:ru]Харьков[:]'); ?></a> </option>
                                        <option value=""><a href=""><?php echo __('[:en]Kiev[:ru]Киев[:]'); ?></a></option>
                                    </select>
                                </div>
                                <label for="teaxtarea" class="custom-label"><?php echo __('[:en]Yout question?[:ru]Ваш Вопрос?[:]'); ?>  </label>
                                <textarea class="custom-textarea" name="" id="teaxtarea" cols="20" rows="7" name="question" data-title="question"></textarea>
                                <button type="submit" class="contact-form__btn"><?php echo __('[:en]CONNECT[:ru]СВЯЗАТЬСЯ[:]'); ?> </button>
                            </form>
                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="mfp-hide">
        <div id="thank-you">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
                        <div class="thank-you__container">
                            <h5><?php echo __('[:en]THANK YOU[:ru]СПАСИБО[:]'); ?> !<br><?php echo __('[:en]WE WILL CONTACT YOU[:ru]МЫ СВЯЖЕМСЯ С ВАМИ[:]'); ?></h5>
                            
                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo __('[:en]https://maps.googleapis.com/maps/api/js?key=AIzaSyCgqs_0_glakYRIvqjMSYoJIdeBHpV4tE0&language=en[:ru]https://maps.googleapis.com/maps/api/js?key=AIzaSyCgqs_0_glakYRIvqjMSYoJIdeBHpV4tE0[:]'); ?>"></script>
        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var mapOptions = {
                    zoom: 3,
                    scrollwheel: false,
                    center: new google.maps.LatLng(38.985753, 36.014664),
                    styles: [
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                    ]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                var image = new google.maps.MarkerImage('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MjIyRUZERDNDNjI2MTFFODhFRDM4NUU4NzI4Qjc5NTIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MjIyRUZERDRDNjI2MTFFODhFRDM4NUU4NzI4Qjc5NTIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoyMjJFRkREMUM2MjYxMUU4OEVEMzg1RTg3MjhCNzk1MiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoyMjJFRkREMkM2MjYxMUU4OEVEMzg1RTg3MjhCNzk1MiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PnzeMn4AAAB2SURBVHjaYny6hAEGfIG4EIhNofzTQNwHxFtAHCaoYAsQbwJiRyDmgWIQezNUjoERaKIPVAAf8AOZWMRAGBSCFJoQodCEiYE4wAhSeIYIhadBCvuJUNjPBPVxKx5FILnNMDfWALE/EO8H4q9QDGL7QeUYAAIMADR4FeeMImAhAAAAAElFTkSuQmCC',
                    new google.maps.Size(10, 10),
                    new google.maps.Point(0,0),
                    new google.maps.Point(5, 5));
                // Let's also add a marker while we're at it
                var marker1 = new google.maps.Marker({
                    position: new google.maps.LatLng(53.144611, 29.224921),
                    map: map,
                    icon: image,
                    // title: 'Бобруйск \n+375445 437899, \nvul. Sacyjalistyčnaja 36, Babrujsk 213826, \nBelarus \nhttps://www.facebook.com/JFutureBobruisk'
                });
                var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(53.904850, 27.556290),
                    map: map,
                    icon: image,
                    // title: 'Минск  \n+375293912385, \nVul. Kropotkina, 22, Minsk, Belarus, \nhttps://www.facebook.com/JFutureMinsk'
                });
                var marker3 = new google.maps.Marker({
                    position: new google.maps.LatLng(41.718467, 44.827151),
                    map: map,
                    icon: image,
                    // title: 'Тбилиси   \n+995599738770, \nv25 Kote Afkhazi St, Tbilisi, Georgia \nhttps://www.facebook.com/JFutureTbilisi'
                });
                var marker4 = new google.maps.Marker({
                    position: new google.maps.LatLng(19.082149, 72.875005),
                    map: map,
                    icon: image,
                    // title: 'Мумбаи    \n+918879733929, \nNariman House, Azad Nagar, Colaba, \nMumbai, Maharashtra 400005, India \nhttps://www.facebook.com/JFutureMumbai'
                });
                var marker5 = new google.maps.Marker({
                    position: new google.maps.LatLng(43.219626, 76.861764),
                    map: map,
                    icon: image,
                    // title: 'Алматы   \n+87073612111, \nKlochkov St 28, Almaty 050008, Kazakhstan \nhttps://www.facebook.com/JFutureAlmaty'
                });
                var marker6 = new google.maps.Marker({
                    position: new google.maps.LatLng(42.874075, 74.572288),
                    map: map,
                    icon: image,
                    // title: 'Бишкек \n+0559206029, \n4th Microdistrict, 36, Bishkek, Kyrgyzstan \nhttps://www.facebook.com/pg/JFutureBishkek'
                });
                var marker7 = new google.maps.Marker({
                    position: new google.maps.LatLng(47.011531, 28.862656),
                    map: map,
                    icon: image,
                    // title: 'Кишинев   \n+37378477763, \nKonstantin Varnav street, 6 Chisinau, Moldova \nhttps://www.facebook.com/pg/JFutureKishinev'
                });
                var marker8 = new google.maps.Marker({
                    position: new google.maps.LatLng(44.788727, 20.453423),
                    map: map,
                    icon: image,
                    // title: 'Белград \n+381644926364, \nKneza Miloša 61, Belgrade, Serbia \nhttps://www.facebook.com/pg/JFutureBelgrade'
                });
                var marker9 = new google.maps.Marker({
                    position: new google.maps.LatLng(47.011531, 28.862656),
                    map: map,
                    icon: image,
                    // title: 'Кишинев   \n+37378477763, \nKonstantin Varnav street, 6 Chisinau, Moldova \nhttps://www.facebook.com/pg/JFutureKishinev'
                });
                var marker10 = new google.maps.Marker({
                    position: new google.maps.LatLng(41.298466, 69.238875),
                    map: map,
                    icon: image,
                    // title: 'Ташкент  \n+998977143770, \nFidokor Street, 7, Tashkent, Uzbekistan \nhttps://www.facebook.com/pg/JFutureTashkent'
                });
                var marker11 = new google.maps.Marker({
                    position: new google.maps.LatLng(59.434207, 24.750435),
                    map: map,
                    icon: image,
                    // title: 'Таллин \n+37258092383, \nKaru 16, 10120 Tallinn, Estonia \nhttps://www.facebook.com/JFutureTalin'
                });
                var marker12 = new google.maps.Marker({
                    position: new google.maps.LatLng(52.233252, 20.995959),
                    map: map,
                    icon: image,
                    // title: 'Варшава  \n48663663837, \nPrzejazd 2 Warsaw Poland 02654 \nhttps://www.facebook.com/pg/JFutureWarsaw '
                });        
                

                var content1 = '<div id="iw-container">' +
                    '<p class="iw-title"><?php echo __('[:en]Bobruisk[:ru]Бобруйск'); ?></p>' +
                    '<p class="iw-info">375445 437899,</p>' +
                    '<p class="iw-info">ul. Sacyjalistyčnaja 36, Belarus</p>' +
                    '<a href="https://www.facebook.com/JFutureBobruisk" tagret="_blank" class="iw-info">https://www.facebook.com/JFutureBobruisk</a>' +
                  '</div>';
                var content2 = '<div id="iw-container">' +
                    '<p class="iw-title"><?php echo __('[:en]Minsk[:ru]Минск'); ?></p>' +
                    '<p class="iw-info">+375293912385,</p>' +
                    '<p class="iw-info">vul. Kropotkina, 22, Minsk, Belarus,</p>' +
                    '<a href="https://www.facebook.com/JFutureMinsk" tagret="_blank" class="iw-info">https://www.facebook.com/JFutureMinsk</a>' +
                    '</div>';
                var content3 = '<div id="iw-container">' +
                    '<p class="iw-title"><?php echo __('[:en]Tbilisi[:ru]Тбилиси'); ?></p>' +
                    '<p class="iw-info">+995599738770,</p>' +
                    '<p class="iw-info">v25 Kote Afkhazi St, Tbilisi, Georgia,</p>' +
                    '<a href="https://www.facebook.com/JFutureTbilisi" tagret="_blank" class="iw-info">https://www.facebook.com/JFutureTbilisi</a>' +
                    '</div>';
                var content4 = '<div id="iw-container">' +
                    '<p class="iw-title"><?php echo __('[:en]Mumbai[:ru]Мумбаи'); ?></p>' +
                    '<p class="iw-info">+918879733929,</p>' +
                    '<p class="iw-info">Nariman House, Azad Nagar, Colaba,</p>' +
                    '<p class="iw-info">Mumbai, Maharashtra 400005, India</p>' +
                    '<a href="https://www.facebook.com/JFutureMumbai" tagret="_blank" class="iw-info">https://www.facebook.com/JFutureMumbai</a>' +
                    '</div>';
                var content5 = '<div id="iw-container">' +
                    '<p class="iw-title"><?php echo __('[:en]Almaty[:ru]Алматы'); ?></p>' +
                    '<p class="iw-info">+87073612111,</p>' +
                    '<p class="iw-info">Klochkov St 28, Almaty 050008, Kazakhstan</p>' +
                    '<a href="https://www.facebook.com/JFutureAlmaty" tagret="_blank" class="iw-info">https://www.facebook.com/JFutureAlmaty</a>' +
                    '</div>';
                var content6 = '<div id="iw-container">' +
                    '<p class="iw-title"><?php echo __('[:en]Bishkek[:ru]Бишкек'); ?></p>' +
                    '<p class="iw-info">+0559206029,</p>' +
                    '<p class="iw-info">4th Microdistrict, 36, Bishkek, Kyrgyzstan</p>' +
                    '<a href="https://www.facebook.com/pg/JFutureBishkek" tagret="_blank" class="iw-info">https://www.facebook.com/pg/JFutureBishkek</a>' +
                    '</div>';
                var content7 = '<div id="iw-container">' +
                    '<p class="iw-title"><?php echo __('[:en]Kishinev[:ru]Кишинев'); ?></p>' +
                    '<p class="iw-info">+37378477763,</p>' +
                    '<p class="iw-info">Konstantin Varnav street, 6 Chisinau, Moldova</p>' +
                    '<a href="https://www.facebook.com/pg/JFutureKishinev" tagret="_blank" class="iw-info">https://www.facebook.com/pg/JFutureKishinev</a>' +
                    '</div>';
                var content8 = '<div id="iw-container">' +
                    '<p class="iw-title"><?php echo __('[:en]Belgrade[:ru]Белград'); ?></p>' +
                    '<p class="iw-info">+381644926364,</p>' +
                    '<p class="iw-info">Kneza Miloša 61, Belgrade, Serbia</p>' +
                    '<a href="https://www.facebook.com/pg/JFutureBelgrade" tagret="_blank" class="iw-info">https://www.facebook.com/pg/JFutureBelgrade</a>' +
                    '</div>';
                var content9 = '<div id="iw-container">' +
                    '<p class="iw-title"><?php echo __('[:en]Kishinev[:ru]Кишинев'); ?></p>' +
                    '<p class="iw-info">+37378477763,</p>' +
                    '<p class="iw-info">Konstantin Varnav street, 6 Chisinau, Moldova</p>' +
                    '<a href="https://www.facebook.com/pg/JFutureKishinev" tagret="_blank" class="iw-info">https://www.facebook.com/pg/JFutureKishinev</a>' +
                    '</div>';
                var content10 = '<div id="iw-container">' +
                    '<p class="iw-title"><?php echo __('[:en]Tashkent[:ru]Ташкент'); ?></p>' +
                    '<p class="iw-info">+998977143770,</p>' +
                    '<p class="iw-info">Fidokor Street, 7, Tashkent, Uzbekistan</p>' +
                    '<a href="https://www.facebook.com/pg/JFutureTashkent" tagret="_blank" class="iw-info">https://www.facebook.com/pg/JFutureTashkent</a>' +
                    '</div>';
                var content11 = '<div id="iw-container">' +
                    '<p class="iw-title"><?php echo __('[:en]Tallinn[:ru]Таллин'); ?></p>' +
                    '<p class="iw-info">+37258092383,</p>' +
                    '<p class="iw-info">Karu 16, 10120 Tallinn, Estonia</p>' +
                    '<a href="https://www.facebook.com/JFutureTalin" tagret="_blank" class="iw-info">https://www.facebook.com/JFutureTalin</a>' +
                    '</div>';
                var content12 = '<div id="iw-container">' +
                    '<p class="iw-title"><?php echo __('[:en]Warsaw[:ru]Варшава'); ?></p>' +
                    '<p class="iw-info">48663663837,</p>' +
                    '<p class="iw-info">Przejazd 2 Warsaw Poland 02654</p>' +
                    '<a href="https://www.facebook.com/pg/JFutureWarsaw" tagret="_blank" class="iw-info">https://www.facebook.com/pg/JFutureWarsaw</a>' +
                    '</div>';

                    // A new Info Window is created and set content
                    var infowindow1 = new google.maps.InfoWindow({
                        content: content1, 
                        // Assign a maximum value for the width of the infowindow allows
                        // greater control over the various content elements
                        maxWidth: 300
                    });
                     var infowindow2 = new google.maps.InfoWindow({
                        content: content2, 
                        maxWidth: 300
                    });
                    var infowindow3 = new google.maps.InfoWindow({
                        content: content3, 
                        maxWidth: 300
                    });
                    var infowindow4 = new google.maps.InfoWindow({
                        content: content4, 
                        maxWidth: 300
                    });
                    var infowindow5 = new google.maps.InfoWindow({
                        content: content5, 
                        maxWidth: 300
                    });
                    var infowindow6 = new google.maps.InfoWindow({
                        content: content6, 
                        maxWidth: 300
                    });
                    var infowindow7 = new google.maps.InfoWindow({
                        content: content7, 
                        maxWidth: 300
                    });
                    var infowindow8 = new google.maps.InfoWindow({
                        content: content8, 
                        maxWidth: 300
                    });
                    var infowindow9 = new google.maps.InfoWindow({
                        content: content9, 
                        maxWidth: 300
                    });
                    var infowindow10 = new google.maps.InfoWindow({
                        content: content10, 
                        maxWidth: 300
                    });
                    var infowindow11 = new google.maps.InfoWindow({
                        content: content11, 
                        maxWidth: 300
                    });
                    var infowindow12 = new google.maps.InfoWindow({
                        content: content12, 
                        maxWidth: 300
                    });

                    // This event expects a click on a marker
                    // When this event is fired the Info Window is opened.
                    google.maps.event.addListener(marker1, 'click', function() {
                        infowindow1.open(map,marker1);
                    });
                    google.maps.event.addListener(marker2, 'click', function() {
                        infowindow2.open(map,marker2);
                    });
                    google.maps.event.addListener(marker3, 'click', function() {
                        infowindow3.open(map,marker3);
                    });
                    google.maps.event.addListener(marker4, 'click', function() {
                        infowindow4.open(map,marker4);
                    });
                    google.maps.event.addListener(marker5, 'click', function() {
                        infowindow5.open(map,marker5);
                    });
                    google.maps.event.addListener(marker6, 'click', function() {
                        infowindow6.open(map,marker6);
                    });
                    google.maps.event.addListener(marker7, 'click', function() {
                        infowindow7.open(map,marker7);
                    });
                    google.maps.event.addListener(marker8, 'click', function() {
                        infowindow8.open(map,marker8);
                    });
                    google.maps.event.addListener(marker9, 'click', function() {
                        infowindow9.open(map,marker9);
                    });
                    google.maps.event.addListener(marker10, 'click', function() {
                        infowindow10.open(map,marker10);
                    });
                    google.maps.event.addListener(marker11, 'click', function() {
                        infowindow11.open(map,marker11);
                    });
                    google.maps.event.addListener(marker12, 'click', function() {
                        infowindow12.open(map,marker12);
                    });

                    // Event that closes the Info Window with a click on the map
                    google.maps.event.addListener(map, 'click', function() {
                        infowindow1.close();
                        infowindow2.close();
                        infowindow3.close();
                        infowindow4.close();
                        infowindow5.close();
                        infowindow6.close();
                        infowindow7.close();
                        infowindow8.close();
                        infowindow9.close();
                        infowindow10.close();
                        infowindow11.close();
                        infowindow12.close();
                    });
            }

        </script>
<?php wp_footer(); ?>
</body>
</html>