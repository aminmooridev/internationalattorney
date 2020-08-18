<!DOCTYPE html>
<html dir="rtl" lang="fa">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109269367-1"></script>
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/js/manifest.json">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-109269367-1');

        var loginSuccessCallback = null,
            loginSuccessParams = null;
    </script>
    <script type="text/javascript">
        (function() {
            var now = new Date();
            var version = now.getFullYear().toString() + "0" + now.getMonth() + "0" + now.getDate() + "0" + now.getHours();
            var head = document.getElementsByTagName("head")[0];
            var link = document.createElement("link");
            link.rel = "stylesheet";
            link.href = "https://app.najva.com/static/css/local-messaging.css" + "?v=" + version;
            head.appendChild(link);
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.async = true;
            script.src = "https://app.najva.com/static/js/scripts/nilgam-1246415-29df2db4-c459-4633-b712-d30a034f811c.js" + "?v=" + version;
            head.appendChild(script);
        })()
    </script>
    <script type="text/javascript">
        (function(add, cla) {
            window['UserHeatTag'] = cla;
            window[cla] = window[cla] || function() {
                (window[cla].q = window[cla].q || []).push(arguments)
            }, window[cla].l = 1 * new Date();
            var ul = document.createElement('script');
            var tag = document.getElementsByTagName('script')[0];
            ul.async = 1;
            ul.src = add;
            tag.parentNode.insertBefore(ul, tag);
        })('https://uh.nakanohito.jp/uhj2/uh.js', '_uhtracker');
        _uhtracker({
            id: 'uh9SgFGoEN'
        });
    </script>
    <script>
        // (function(h,o,t,j,a,r){
        //     h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        //     h._hjSettings={hjid:1467472,hjsv:6};
        //     a=o.getElementsByTagName('head')[0];
        //     r=o.createElement('script');r.async=1;
        //     r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        //     a.appendChild(r);
        // })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <script>
        ! function(t, e, n) {
            t.yektanetAnalyticsObject = n, t[n] = t[n] || function() {
                t[n].q.push(arguments)
            }, t[n].q = t[n].q || [];
            var a = new Date,
                r = a.getFullYear().toString() + "0" + a.getMonth() + "0" + a.getDate() + "0" + a.getHours(),
                c = e.getElementsByTagName("script")[0],
                s = e.createElement("script");
            s.id = "ua-script-yn-470-adv";
            s.dataset.analyticsobject = n;
            s.async = 1;
            s.type = "text/javascript";
            s.src = "https://cdn.yektanet.com/rg_woebegone/scripts_v2/yn-470-adv/rg.complete.js"
        }(window, document, "yektanet");
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link media="all" href="<?php echo get_template_directory_uri(); ?>/css/autoptimize_59136fa3197db3e9fc084370750c3af4.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>
        <?php if (is_home () ) { 
                bloginfo('name');
            } elseif ( is_category() ) { 
                single_cat_title(); 
                echo ' - ' ; 
                bloginfo('name'); 
            } elseif (is_single() ) { 
                single_post_title(); 
            } elseif (is_page() ) { 
                bloginfo('name'); 
                echo ': '; 
                single_post_title(); 
            } else { 
                wp_title('',true); 
            } 
        ?>
    </title>
    <!-- <script data-cfasync='false'>
        window.$crisp = [];
        CRISP_RUNTIME_CONFIG = {
            locale: 'fa'
        };
        CRISP_WEBSITE_ID = 'ed3a189e-8c3c-46d2-a31c-4d4e9d8030f9';
        (function() {
            d = document;
            s = d.createElement('script');
            s.src = 'https://client.crisp.chat/l.js';
            s.async = 1;
            d.getElementsByTagName('head')[0].appendChild(s);
        })();
    </script> -->
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link rel="canonical" href="index.html" />
    <link rel="next" href="page/2/index.html" />
    <meta property="og:locale" content="fa_IR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:url" content="<?php echo get_home_url(); ?>/" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
    <meta name="twitter:title" content="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>" />
    <meta name="twitter:site" content="@iranankara" />
    <link rel='dns-prefetch' href='http://ajax.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s1.mediaad.org/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <link rel='https://api.w.org/' href='wp-json/index.html' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.3.2" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo.png" type="image/x-icon" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#side">
    <div class="modal fade" id="announcement_modal" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <noscript>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/modal.png" alt="">
                    </noscript>
                        <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/img/modal.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <header class="bg-white">
        <div class="head">
            <div class="container">
                <h1 class="logo float-right pl-3 ml-3">
                    <a href="<?php echo get_home_url(); ?>" title=""></a>
                </h1> 
                <span class="link ml-3 float-right">
                    <?php bloginfo('name'); ?>
                </span>
                <?php
                    $fixNumber = ot_get_option('fix_number', false);
                    if ( $fixNumber !== false ) {
                        echo '<ul class="user float-left calldesktopContainer"><li>
                        <a class="calldesktop" href="tel:+98'. $fixNumber . '" title="">
                        <i class="newIco ico__phone__3"></i>0'. $fixNumber .'</a></li></ul>';
                    }
                ?>
                <?php
                    $fixNumber = ot_get_option('fix_number', false);
                    if ( $fixNumber !== false ) {
                        echo '<ul class="user float-left callmobileContainer"><li><a class="callmobile" href="tel:+98'. $fixNumber .'"><i class="newIco ico__phone__3"></i>0'. $fixNumber .'</a></li></ul>';
                    }
                ?>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                    <div id="menu-primary" class="nav navbar-nav">
                        <?php
                            $get = httpGet('http://localhost/attorney/wp-json/menus/v1/menus/HM');
                            $decode = json_decode($get);
                            $items = $decode->items;
                            foreach ($items as $item) {
                            if ($item->child_items !== null) {
                                echo '<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-63614 nav-item dropdown-toggle active">
                                <a  href="' . $item->url . '" class="nav-link dropdown-toggle active" data-toggle="dropdown" >' . $item->title . '</a>
                                <div class="dropdown-menu"><div class="container"><div class="row">';
                                foreach ($item->child_items as $child) {
                                    echo '<a class="dropdown-item col-md-6 pt-4 href="' . $child->url . '">' . $child->title . '</a>';
                                }
                                    echo '</div></div></div></li>';
                                } else {
                                    echo '<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-63647 nav-item active"><a class="nav-link active" href="' . $item->url . '">' . $item->title . '</a></li>';
                                }
                            } 
                        ?>
                    </ul>
                </div>
                <div class="search-box">
                    <svg width="20px" height="20px">
                        <path d="M12.9 14.32c-1.34 1.049-3.050 1.682-4.908 1.682-4.418 0-8-3.582-8-8s3.582-8 8-8c4.418 0 8 3.582 8 8 0 1.858-0.633 3.567-1.695 4.925l0.013-0.018 5.35 5.33-1.42 1.42-5.33-5.34zM8 14c3.314 0 6-2.686 6-6s-2.686-6-6-6v0c-3.314 0-6 2.686-6 6s2.686 6 6 6v0z"></path>
                    </svg>
                </div>
            </div>
        </nav>
        <?php get_search_form(); ?>
    </header>