<?php get_header(); ?>
    <main>
        <div class="breadcrumbs">
            <div class="container" style="color:#777;"> 
                <span>
                    <span>
                        <?php get_breadcrumb(); ?>
                    </span>
                </span>
            </div>
        </div>
        <section class="pt-0 single-sec">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-9">
                        <?php 
                        $aminmoori= new WP_Query(array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'order' => 'DESC',
                        'orderby' => 'ID',
                        'posts_per_page' =>'1' )); ?> 
                        <?php if($aminmoori->have_posts()) : ?>
                            <?php while($aminmoori->have_posts()) : $aminmoori->the_post(); ?>
                                <article>
                                    <div class="box box_post bg-white rounded-lg shadow-sm bg-white rounded-lg shadow-sm_none">
                                        <!-- <header>
                                            <div class="box p-4">
                                                <h1 class="float-right pl-5 title-post"><?php the_title(); ?></h1>
                                                <div class="date_style gradient_1 text-white rounded text-center p-2 position-absolute"> 
                                                    <span><?php the_date('j'); ?></span>
                                                    <span><?php the_time('F'); ?></span> 
                                                    <span class="rounded"><?php the_time('Y'); ?></span>
                                                </div>
                                            </div>
                                        </header> -->
                                        <noscript>
                                            <img src="<?php echo z_taxonomy_image_url($cat->term_id,'post-image-single-blog'); ?>" class="img_wid"/>
                                        </noscript>
                                            <img src="<?php echo z_taxonomy_image_url($cat->term_id,'post-image-single-blog'); ?>" class="lazyload img_wid"/>
                                            
                                        <div class="text_ordered mb40 table-responsive pt-2">
                                            
                                            <h2><?php single_cat_title(); ?></h2>
                                            <br>
                                            <br>
                                            <?php echo category_description( get_category_by_slug( 'category-slug' )->term_id ); ?>
                                            <p>
                                                <a class="topMargin20 mb40 actionButtonAnchor mb20" href="tel:+989120377793" target="_blank" rel="nofollow">
                                                    <span class="actionButton box gradient_1 pattern">مشاورین ما منتظر صدای گرم شما هستند.
                                                        <span class="guideBanner phone" style="display: block;" title="">
                                                            <i class="guideBannerIco newIco ico__phone__2"></i>09120377793
                                                        </span>
                                                    </span>
                                                </a>
                                            </p>
                                            <div style="text-align:left" class="yasr-auto-insert-overall">
                                                <div class='yasr-overall-rating'>
                                                    <div class="yasr-rater-stars" id="yasr-overall-rating-rater-e15a82c3538d8" data-rating="-1" data-rater-starsize="24"></div>
                                                </div>
                                            </div>
                                            <?php
                                                $tabs = get_terms( [
                                                    'taxonomy' => 'category',
                                                    'child_of' => get_queried_object_id()
                                                ] );
                                            ?> 
                                            <center>
                                                <div class="amintab">
                                                    <?php foreach ( $tabs as $tab ) : ?>
                                                        <button class="tablinks" onclick="openCity(event, '<?php echo 'details-tab-' . $tab->term_id; ?>')"><?php echo $tab->name; ?></button>
                                                    <?php endforeach; ?>
                                                </div>
                                            </center>

                                            <!-- Tab content -->
                                            <?php foreach ( $tabs as $tab ) : ?>
                                                <div id="<?php echo 'details-tab-' . $tab->term_id; ?>" class="amintabcontent" style="padding-top: 25px">
                                                    <?php
                                                        $tab_posts = new WP_Query( [
                                                            'category__in' => array( get_queried_object_id() , $tab->term_id )
                                                        ] );
                                                        
                                                        while ( $tab_posts->have_posts() ) :
                                                            $tab_posts->the_post();
                                                    ?>
                                                    
                                                    <div class="box box_blog bg-white rounded-lg shadow-sm box_hover mb30">
                                                        <div class="wall">
                                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                            <noscript>
                                                                <?php the_post_thumbnail('post-image-blog', array('class' => 'img_wid')); ?>
                                                            </noscript>
                                                                <?php the_post_thumbnail('post-image-blog', array('class' => 'lazyload img_wid')); ?>
                                                            </a>
                                                        </div>
                                                        <div class="info">
                                                            <h3 class=" mb10">
                                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                                            </h3>
                                                            <div class="mb10 font-8 text-justify text-secondary content-blog"><?php the_excerpt(); ?></div>
                                                            <div class="border_top">
                                                                <a href="<?php the_permalink(); ?>">
                                                                    <span>ادامه مطلب</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endwhile; ?>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?> 
                        <?php endif; wp_reset_query(); ?>
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-3">
 
                        <?php dynamic_sidebar( 'sidebar_single' ); ?>  

                        <div class="widget-box mb20">
                            <div class="header">
                                <h3>آخرین مطالب</h3>
                            </div>
                            <div class="dwqa-popular-questions">
                                <ul>
                                <?php $randoms= new WP_Query(array(
                                'post_type'=>'post','post_status'=>'publish','order'=>'DESC','orderby'=>'rand',
                                'posts_per_page'=>'5'));
                                if($randoms->have_posts()) : while($randoms->have_posts()) : $randoms->the_post();?>
                                    <li><a href="<?php the_permalink(); ?>" class="question-title"><?php the_title(); ?></a></li>
                                <?php endwhile; endif; wp_reset_query(); ?>   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="commentBack pt-0">
            <div class="container">
                <div class="row">
                    <div class=" col-xs-12 col-md-8 col-lg-9">
                        <div class="box box_post bg-white rounded-lg shadow-sm bg-white rounded-lg shadow-sm_none">
                            <section class="end__content border__gradient">
                                <div>
                                    <h2 class="text-center mb40">نظرات</h2>
                                    <div id="comments" class="comments-area">
                                        <div id="respond" class="comment-respond">
                                            <h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow" id="cancel-comment-reply-link" href="/what-is-canada-skilled-worker#respond" style="display:none;">لغو پاسخ</a></small></h3>
                                            <form action="https://nilgam.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                                                <div class="col-xs-12 col-md-5 col-lg-4">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-12">
                                                            <div class="box__input mb20"><i class="ico ico__user"></i>
                                                                <input id="author" placeholder="نام و نام خانوادگی" class="hover__transition" name="author" type="text" value="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 col-md-12">
                                                            <div class="box__input mb20"><i class="ico ico__email"></i>
                                                                <input id="email" placeholder="ایمیل" name="email" type="text" value="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-7 col-lg-8">
                                                    <div class="box__input">
                                                        <textarea id="comment" name="comment" class="hover__transition mb40" aria-required="true" placeholder="متن نظر ..."></textarea>
                                                    </div>
                                                </div>
                                                <p class="form-submit">
                                                    <input name="submit" type="submit" id="submit" class="btn__nilgam blue__background btn__shadow hover__transition mb40" value="ارسال" />
                                                    <input type='hidden' name='comment_post_ID' value='62734' id='comment_post_ID' />
                                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                </p>
                                                <p style="display: none;">
                                                    <input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="51a2c54a5d" />
                                                </p>
                                                <p style="display: none;">
                                                    <input type="hidden" id="ak_js" name="ak_js" value="172" />
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                    <script>
                                        $url = window.location.hash;
                                        if ($url) {
                                            document.write('<p class="commentSubmitMsg mb30">');
                                            document.write('    نظر شما ثبت شد و پس از تایید نمایش داده می شود.')
                                            document.write('</p>')
                                        } else {
                                            console.log("nothing");
                                        }
                                    </script>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <script>
            dataLayer.push({
                'contentGrouping': 'Blog'
            });
            // window.onload=function() {
            //     var table = $('.text_ordered').find('table').addClass('table table-bordered table-striped');
            // }
        </script>
<?php get_footer(); ?>