<footer class="w-100 float-left">
            <div class="box__contac__us mb60">
                <div class="container"> 
                    <?php
                        $Address = ot_get_option('address', false);
                        if ( $Address !== false ) {
                            echo '<address class="float-right"><i class="newIco ico__placeholder"></i>'. $Address .'</address>';
                        }
                    ?>

                    <?php
                        $phoneNumber = ot_get_option('phone_number', false);
                        if ( $phoneNumber !== false ) {
                            echo '<a class="phone blue__background float-left" href="tel:+98'. $phoneNumber . '" title=""><i class="newIco ico__phone__2"></i><span>0'. $phoneNumber .'</span></a>';
                        }
                    ?>
                </div>
            </div>
            <div class="container">
                <div id="footer_menu">
                    <div class="row">
                        <div class="col-xs-12 col-md-3">
                            <div class="panel pr-3">
                                <?php dynamic_sidebar( 'col1footer' ); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="panel pr-3">
                                <?php dynamic_sidebar( 'col2footer' ); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="panel pr-3">
                                <?php dynamic_sidebar( 'col3footer' ); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="panel pr-3">
                                <?php dynamic_sidebar( 'col4footer' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center border border-secondary border-right-0 border-left-0 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-3 h-100 p-2 border-left border-secondary">
                            <a class="pt-1 pb-1 d-flex justify-content-center" href="<?php echo get_home_url(); ?>" title="">
                                <div class="logo-footer"></div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-md-5 h-100 p-2 border-left border-secondary d-none d-md-block">
                            <ul class="pt-1 pb-1 d-none d-md-flex justify-content-around">
                                <li>
                                        <noscript>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo/2.png" alt="">
                                        </noscript>
                                            <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/img/logo/2.png" alt="">
                                </li>
                                <li>
                                    <a class="pt-1 pb-1 d-flex justify-content-center" href="https://tripadvisor24.com">
                                        <noscript>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo/3.png" alt="">
                                        </noscript>
                                            <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/img/logo/3.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-md-4 h-100 p-2">
                            <div class="pt-4 pb-4 d-flex justify-content-around">
                                <?php
                                    $twitterLink = ot_get_option('twitter_link', false);
                                    if ( $twitterLink !== false ) {
                                        echo '<a href="https://twitter.com/'. $twitterLink .'" data-toggle="tooltip" data-placement="top" title="تویتر"><i class="newIco ico__twitter"></i></a>';
                                    }
                                ?>
                                <?php
                                    $facebookLink = ot_get_option('facebook_link', false);
                                    if ( $facebookLink !== false ) {
                                        echo '<a href="https://www.facebook.com/'. $facebookLink .'" data-toggle="tooltip" data-placement="top" title="فیس بوک"><i class="newIco ico__facebook"></i></a>';
                                    }
                                ?>
                                <?php
                                    $telegramLink = ot_get_option('telegram_link', false);
                                    if ( $telegramLink !== false ) {
                                        echo '<a href="https://t.me/'. $telegramLink .'" data-toggle="tooltip" data-placement="top" title="تلگرام"><i class="newIco ico__telegram"></i></a>';
                                    }
                                ?>
                                <?php
                                    $instagramLink = ot_get_option('instagram_link', false);
                                    if ( $instagramLink !== false ) {
                                        echo '<a href="https://www.instagram.com/'. $instagramLink .'" data-toggle="tooltip" data-placement="top" title="اینستاگرام"><i class="newIco ico__instagram"></i></a>';
                                    }
                                ?>
                                <?php
                                    $linkedinLink = ot_get_option('linkedin_link', false);
                                    if ( $linkedinLink !== false ) {
                                        echo '<a href="https://www.linkedin.com/'. $linkedinLink .'" data-toggle="tooltip" data-placement="top" title="لینکدین"><i class="newIco ico__linkedin"></i></a>';
                                    }
                                ?>
                                <?php
                                    $aparatLink = ot_get_option('aparat_link', false);
                                    if ( $aparatLink !== false ) {
                                        echo '<a href="https://www.aparat.com/'. $aparatLink .'" data-toggle="tooltip" data-placement="top" title="آپارات"><i class="newIco ico__aparat"></i></a>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright text-center mt-4">
                <p><span>©</span>2020 <a href="<?php echo get_home_url(); ?>" title="International-Attorney">International-Attorney</a>. All rights reserved</p><br>
                <p class="text_ordered text-justify mb30">
                    Develop By : <a href="https://instagram.com/aminmoori.dev">Amin Moori</a>
                </p>
            </div>
        </footer>
    </main>
    <!-- <div class="modal fade" id="modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title">خطا</h5>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->
    <noscript>
        <style>
            .lazyload {
                display: none;
            }
        </style>
    </noscript>
    <script data-noptimize="1">
        window.lazySizesConfig = window.lazySizesConfig || {};
        window.lazySizesConfig.loadMode = 1;
    </script>
    <script async data-noptimize="1" src='<?php echo get_template_directory_uri(); ?>/js/lazysizes.min5240.js?ao_version=2.6.1'></script>
    <script type='text/javascript'>
        var qpprFrontData = {
            "linkData": {
                "https:\/\/nilgam.com\/super-visa-2\/": [0, 0, ""],
                "https:\/\/nilgam.com\/%d8%a7%d8%ae%d8%b0-%d9%88%db%8c%d8%b2%d8%a7%db%8c-%d8%a2%d9%84%d9%85%d8%a7%d9%86\/": [0, 0, ""]
            },
            "siteURL": "https:\/\/nilgam.com",
            "siteURLq": "https:\/\/nilgam.com"
        };
    </script>
    <script type='text/javascript'>
        var yasrCommonData = {
            "postid": "61676",
            "ajaxurl": "https:\/\/nilgam.com\/wp-admin\/admin-ajax.php",
            "loggedUser": "",
            "visitorStatsEnabled": "no",
            "tooltipValues": ["\u0628\u062f\u060c \u0636\u0639\u06cc\u0641\u060c \u0639\u0627\u0644\u06cc\u060c \u062e\u0648\u0628\u060c \u062e\u06cc\u0644\u06cc \u0639\u0627\u0644\u06cc"],
            "loaderHtml": "<div id=\"loader-visitor-rating\" style=\"display: inline\">\u00a0  <img src=https:\/\/nilgam.com\/wp-content\/plugins\/yet-another-stars-rating\/img\/loader.gif title=\"yasr-loader\" alt=\"yasr-loader\">\n                                 <\/div>"
        };
    </script>
    <script type='text/javascript' src='https://s1.mediaad.org/serve/5150/retargeting.js'></script>
    <script type='text/javascript'>
        var fv_flowplayer_conf = {
            "fullscreen": "1",
            "swf": "\/\/nilgam.com\/wp-content\/plugins\/fv-wordpress-flowplayer\/flowplayer\/flowplayer.swf?ver=7.4.8.727",
            "swfHls": "\/\/nilgam.com\/wp-content\/plugins\/fv-wordpress-flowplayer\/flowplayer\/flowplayerhls.swf?ver=7.4.8.727",
            "speeds": [0.25, 0.5, 0.75, 1, 1.25, 1.5, 1.75, 2],
            "video_hash_links": "",
            "safety_resize": "1",
            "volume": "0.1",
            "mobile_native_fullscreen": "1",
            "video_position_save_enable": "1",
            "sticky_video": "",
            "sticky_place": "left-bottom",
            "sticky_width": "380",
            "script_hls_js": "https:\/\/nilgam.com\/wp-content\/plugins\/fv-wordpress-flowplayer\/flowplayer\/hls.min.js?ver=0.11.0",
            "script_dash_js": "https:\/\/nilgam.com\/wp-content\/plugins\/fv-wordpress-flowplayer\/flowplayer\/flowplayer.dashjs.min.js?ver=7.4.8.727",
            "script_dash_js_version": "2.7",
            "analytics": "UA-109269367-1",
            "chromecast": "1",
            "hlsjs": {
                "startLevel": -1,
                "fragLoadingMaxRetry": 3,
                "levelLoadingMaxRetry": 3,
                "capLevelToPlayerSize": true
            }
        };
        var fv_flowplayer_translations = {
            "0": "",
            "1": "Video loading aborted",
            "2": "Network error",
            "3": "Video not properly encoded",
            "4": "Video file not found",
            "5": "Unsupported video",
            "6": "Skin not found",
            "7": "SWF file not found",
            "8": "Subtitles not found",
            "9": "Invalid RTMP URL",
            "10": "Unsupported video format. Try installing Adobe Flash.",
            "11": "Click to watch the video",
            "12": "[This post contains video, click to play]",
            "video_expired": "<h2>Video file expired.<br \/>Please reload the page and play it again.<\/h2>",
            "unsupported_format": "<h2>Unsupported video format.<br \/>Please use a Flash compatible device.<\/h2>",
            "mobile_browser_detected_1": "Mobile browser detected, serving low bandwidth video.",
            "mobile_browser_detected_2": "Click here",
            "mobile_browser_detected_3": "for full quality.",
            "live_stream_failed": "<h2>Live stream load failed.<\/h2><h3>Please try again later, perhaps the stream is currently offline.<\/h3>",
            "live_stream_failed_2": "<h2>Live stream load failed.<\/h2><h3>Please try again later, perhaps the stream is currently offline.<\/h3>",
            "what_is_wrong": "Please tell us what is wrong :",
            "full_sentence": "Please give us more information (a full sentence) so we can help you better",
            "error_JSON": "Admin: Error parsing JSON",
            "no_support_IE9": "Admin: Video checker doesn't support IE 9.",
            "check_failed": "Admin: Check failed.",
            "playlist_current": "Now Playing",
            "playlist_item_no": "Item %d.",
            "playlist_play_all": "Play All",
            "playlist_play_all_button": "All",
            "playlist_replay_all": "Replay Playlist",
            "playlist_replay_video": "Repeat Track",
            "playlist_shuffle": "Shuffle Playlist",
            "video_issues": "Video Issues",
            "video_reload": "Video loading has stalled, click to reload",
            "link_copied": "Video Link Copied to Clipboard",
            "embed_copied": "Embed Code Copied to Clipboard",
            "subtitles_disabled": "Subtitles disabled",
            "subtitles_switched": "Subtitles switched to ",
            "warning_iphone_subs": "This video has subtitles, that are not supported on your device.",
            "warning_unstable_android": "You are using an old Android device. If you experience issues with the video please use <a href=\"https:\/\/play.google.com\/store\/apps\/details?id=org.mozilla.firefox\">Firefox<\/a>. <a target=\"_blank\" href=\"https:\/\/foliovision.com\/2017\/05\/issues-with-vimeo-on-android\">Why?<\/a>",
            "warning_samsungbrowser": "You are using the Samsung Browser which is an older and buggy version of Google Chrome. If you experience issues with the video please use <a href=\"https:\/\/www.mozilla.org\/en-US\/firefox\/new\/\">Firefox<\/a> or other modern browser. <a target=\"_blank\" href=\"https:\/\/foliovision.com\/2017\/05\/issues-with-vimeo-on-android\">Why?<\/a>",
            "warning_old_safari": "You are using an old Safari browser. If you experience issues with the video please use <a href=\"https:\/\/www.mozilla.org\/en-US\/firefox\/new\/\">Firefox<\/a> or other modern browser.",
            "warning_old_chrome": "You are using an old Chrome browser. Please make sure you use the latest version.",
            "warning_old_firefox": "You are using an old Firefox browser. Please make sure you use the latest version.",
            "warning_old_ie": "You are using a deprecated browser. If you experience issues with the video please use <a href=\"https:\/\/www.mozilla.org\/en-US\/firefox\/new\/\">Firefox<\/a> or other modern browser."
        };
        var fv_fp_ajaxurl = "index.html\/\/nilgam.com\/wp-admin\/admin-ajax.php";
        var fv_flowplayer_playlists = [];
    </script>
    <script type='text/javascript'>
        var fv_player_lightbox = {
            "lightbox_images": ""
        };
    </script>
    <script>
        jQuery(document).ready(function() {

        });
    </script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/autoptimize_ce8b1bc966f0b9bdc816f44bd1ee9a5a.js"></script>
    <script type="text/javascript">
        function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("amintabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        }
    </script>
    <style>
                /* Style the tab */
                .amintab {
                overflow: hidden;/* 
                border: 1px solid #ccc;
                background-color: #f1f1f1; */
                }

                /* Style the buttons that are used to open the tab content */
                .amintab button {
                background-color: inherit;
                /* float: right; */
                border: none;
                outline: none;
                cursor: pointer;
                padding: 6px 10px;
                transition: 0.3s;
                }

                /* Change background color of buttons on hover */
                .amintab button:hover {
                background-color: #ddd;
                border-radius:5px;
                }

                /* Create an active/current tablink class */
                .amintab button.active {
                background-color: #d2ac67;
                color: white;
                border-radius:5px;
                }

                /* Style the tab content */
                .amintabcontent {
                display: none;
                padding: 6px 12px;
                border-top: none;
                }
                .amintabcontent {
                animation: fadeEffect 1s; /* Fading effect takes 1 second */
                }

                /* Go from zero to full opacity */
                @keyframes fadeEffect {
                from {opacity: 0;}
                to {opacity: 1;}
                }
    </style>
    <?php wp_footer(); ?>
</body>

</html>