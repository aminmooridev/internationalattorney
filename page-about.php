<?php /* Template Name: درباره */ ?>
<?php get_header(); ?>
    <main>
        <section class="shot p-0">
            <div class="main_center text-white">
                <div class="container">
                    <div class="float-right">
                        <h1 class=""><?php the_title(); ?></strong>
                    </div>
                </div>
            </div>
            <noscript>
                <?php
                    $imageHeaderAbout = ot_get_option('image_header_about', false);
                    if ( $imageHeaderAbout !== false ) {
                        echo '<img width="1920" height="300" src="'.$imageHeaderAbout.'" class="attachment-post-thumbnail size-post-thumbnail wp-post-image"/>';
                    }
                ?>
            </noscript>
                <?php
                    $imageHeaderAbout = ot_get_option('image_header_about', false);
                    if ( $imageHeaderAbout !== false ) {
                        echo '<img width="1920" height="300" src="'.$imageHeaderAbout.'" class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image"/>';
                    }
                ?>
        </section>
        <div class="breadcrumbs">
            <div class="container" style="color:#777;"> 
                <span>
                    <span>
                        <?php get_breadcrumb(); ?>
                    </span>
                </span>
            </div>
        </div>
        <section class="pt-0 mt20">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-xs-12 col-md-8">
                        <?php
                            $linkVideoAbout = ot_get_option('link_video_about', false);
                            if ( $linkVideoAbout !== false ) {
                                echo $linkVideoAbout;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <div class="img_style">
                        <noscript>
                            <?php
                                $imageAbout = ot_get_option('image_about', false);
                                if ( $imageAbout !== false ) {
                                    echo '<img src="'.$imageAbout.'" class="aligncenter wp-image-63813 size-full"/>';
                                }
                            ?>
                        </noscript>
                            <?php
                                $imageAbout = ot_get_option('image_about', false);
                                if ( $imageAbout !== false ) {
                                    echo '<img src="'.$imageAbout.'" class="lazyload aligncenter wp-image-63813 size-full"/>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <ul class="way_list">
                            <li style="list-style-type: none;">
                                <ol>
                                    <li>
                                        <?php
                                            $titleDescriptionAbout = ot_get_option('title_description_about', false);
                                            if ( $titleDescriptionAbout !== false ) {
                                                echo '<strong>'.$titleDescriptionAbout.'</strong>';
                                            }
                                        ?>
                                        <?php
                                            $descriptionAbout = ot_get_option('description_about', false);
                                            if ( $descriptionAbout !== false ) {
                                                echo $descriptionAbout;
                                            }
                                        ?>
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                </div>    
            </div>
        </section>
<?php get_footer(); ?>