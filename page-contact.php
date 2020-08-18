<?php /* Template Name: ارتباط */ ?>
<?php get_header(); ?>
    <main>
        <!-- id="map" missed -->
        <div class="box box_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d794.0946235292621!2d55.16453332918947!3d37.23872636642321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f82bf3ea0b168cf%3A0xc2aabae63a3547de!2sGolestan%20Province%2C%20Gonbad%20Kavus%2C%2017th%20Shahrivar%20Square%2C%20Iran!5e0!3m2!1sen!2s!4v1579787805264!5m2!1sen!2s" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="breadcrumbs float-right w-100">
            <div class="container" style="color:#777;">
                <span>
                    <span>
                        <?php get_breadcrumb(); ?>
                    </span>
                </span>
            </div>
        </div>
        <section class="contact_page default-form pt-0">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xs-12 col-md-6 col-lg-7">
                        <ul class="box_info">
                            <li class="mb20"><strong>تلفن و فکس</strong>شما می‌توانید برای دریافت اطلاعات بیشتر در زمینه‌های ویزا، وقت سفارت، پیکاپ، اقامت و تور با ما تماس بگیرید. کارشناسان ما، پله به پله با شما همراه خواهند بود تا مراحل لازم را به راحتی هر چه طی کنید&#8230;
                                <br />
                                <?php
                                    $fixNumber = ot_get_option('fix_number', false);
                                    if ( $fixNumber !== false ) {
                                        echo '<h2><a title="تماس با ما" href="tel:+98'. $fixNumber .'" target="_blank" rel="nofollow">0'. $fixNumber .'</a></h2>';
                                    }
                                ?>
                                <?php
                                    $phoneNumber = ot_get_option('phone_number', false);
                                    if ( $phoneNumber !== false ) {
                                        echo '<h2><a title="تماس با ما" href="tel:+98'. $phoneNumber .'" target="_blank" rel="nofollow">0'. $phoneNumber .'</a></h2>';
                                    }
                                ?>
                                <?php
                                    $timeWork = ot_get_option('time_work', false);
                                    if ( $timeWork !== false ) {
                                        echo '<p>ساعت کاری موسسه : '. $timeWork .'</p>';
                                    }
                                ?>
                                </li>
                            <li>
                                <strong>پشتیبانی آنلاین و ایمیل</strong>همچنین شما این امکان را دارید تا با ما از طریق چت آنلاین (پایین صفحه سمت راست) در ارتباط باشید و یا برای ما یک ایمیل بفرستید. فرم تماس با ما نیز در اختیار شماست.<br>
                                <br>
                                <?php
                                    $emailCo = ot_get_option('email_co', false);
                                    if ( $emailCo !== false ) {
                                        echo '<div class="float-left">'.$emailCo.'</div>';
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-5 col-lg-4 float-left">
                        <div class="box bg-white rounded-lg shadow-sm bg-white rounded-lg shadow-sm_none">
                            <h5 class=" mb50">فرم تماس با ما</h5>
                            <div role="form" class="wpcf7" id="wpcf7-f49244-p8118-o1" lang="fa-IR" dir="rtl">
                                <div class="screen-reader-response"></div>
                                <form action="/contact/#wpcf7-f49244-p8118-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="49244" />
                                        <input type="hidden" name="_wpcf7_version" value="5.1.6" />
                                        <input type="hidden" name="_wpcf7_locale" value="fa_IR" />
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f49244-p8118-o1" />
                                        <input type="hidden" name="_wpcf7_container_post" value="8118" />
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 mb20">
                                            <label class="label">نام و نام خانوادگی</label>
                                            <br />
                                            <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span>
                                        </div>
                                        <div class="col-xs-12 mb20">
                                            <label class="label">ایمیل</label>
                                            <br />
                                            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span>
                                        </div>
                                        <div class="col-xs-12 mb20">
                                            <label class="label">شماره موبایل</label>
                                            <br />
                                            <span class="wpcf7-form-control-wrap mobile"><input type="text" name="mobile" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span>
                                        </div>
                                        <div class="col-xs-12 mb20">
                                            <label class="label">متن پیام</label>
                                            <br />
                                            <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span>
                                        </div>
                                        <div class="col-xs-12 mb20 w-100">
                                            <span class="wpcf7-form-control-wrap department"><select name="department" class="wpcf7-form-control wpcf7-select form-control p-1" aria-invalid="false"><option value="پشتیبانی">پشتیبانی</option><option value="مدیریت">مدیریت</option><option value="مالی">مالی</option></select></span>
                                        </div>
                                        <div class="col-xs-12">
                                            <input type="submit" value="ارسال" class="wpcf7-form-control wpcf7-submit btn_ia gradient_1 pull-left" />
                                        </div>
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(35.765998, 51.432466), // New York

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{
                        "featureType": "all",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "on"
                        }]
                    }, {
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "saturation": 36
                        }, {
                            "color": "#000000"
                        }, {
                            "lightness": 40
                        }]
                    }, {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "visibility": "on"
                        }, {
                            "color": "#000000"
                        }, {
                            "lightness": 16
                        }]
                    }, {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 20
                        }]
                    }, {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 17
                        }, {
                            "weight": 1.2
                        }]
                    }, {
                        "featureType": "administrative.country",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#fa4e4c"
                        }]
                    }, {
                        "featureType": "administrative.locality",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#c4c4c4"
                        }]
                    }, {
                        "featureType": "administrative.neighborhood",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#fa4e4c"
                        }]
                    }, {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 20
                        }]
                    }, {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 21
                        }, {
                            "visibility": "on"
                        }]
                    }, {
                        "featureType": "poi.business",
                        "elementType": "geometry",
                        "stylers": [{
                            "visibility": "on"
                        }]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#fa4e4c"
                        }, {
                            "lightness": "0"
                        }]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#ffffff"
                        }]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#fa4e4c"
                        }]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 18
                        }]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#575757"
                        }]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#ffffff"
                        }]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#2c2c2c"
                        }]
                    }, {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 16
                        }]
                    }, {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#999999"
                        }]
                    }, {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 19
                        }]
                    }, {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 17
                        }]
                    }]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(35.765998, 51.432466),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
<?php get_footer(); ?>