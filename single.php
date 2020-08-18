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
                    <div class="col-xs-12 col-md-3 col-lg-3">
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
                    <div class="col-xs-12 col-md-9 col-lg-9">
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <article>
                                    <div class="box box_post bg-white rounded-lg shadow-sm bg-white rounded-lg shadow-sm_none">
                                        <header>
                                            <div class="box p-4">
                                                <h1 class="float-right pl-5 title-post"><?php the_title(); ?></h1>
                                                <div class="date_style gradient_1 text-white rounded text-center p-2 position-absolute"> 
                                                    <span><?php the_date('j'); ?></span>
                                                    <span><?php the_time('F'); ?></span> 
                                                    <span class="rounded"><?php the_time('Y'); ?></span>
                                                </div>
                                            </div>
                                        </header>
                                        <noscript>
                                            <?php the_post_thumbnail('post-image-single-blog', array('class' => 'img_wid')); ?>
                                        </noscript>
                                            <?php the_post_thumbnail('post-image-single-blog', array('class' => 'lazyload img_wid')); ?>
                                        <div class="text_ordered mb40 table-responsive pt-2">
                                            
                                            <?php the_content(); ?>

                                            <!-- <div class="actionButton blog_cta box gradient_1 pattern mb20">لیست مشاغل موردنیاز کانادا
                                                <a href="https://nilgam.com/wp-content/uploads/2019/11/canad-jobs.pdf">
                                                    <span class="btn_ia pull-left">دانلود کنید</span>
                                                </a>
                                            </div> -->
                                            <?php 

                                                $excerpt = get_the_excerpt();
                                                if( $excerpt != false ){
                                                echo "<blockquote>". $excerpt ."</blockquote>";
                                            } ?>
                                            
                                            
                                    
                                            <p>
                                                <br /> 
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
                                            <div style="text-align:left" class="yasr-auto-insert-visitor">
                                                <div id="yasr_visitor_votes_62734" class="yasr-visitor-votes">
                                                    <div class="yasr-container-custom-text-and-visitor-rating"> <span id="yasr-custom-text-before-visitor-rating">به این مقاله امتیاز دهید:</span></div>
                                                    <div id="yasr-visitor-votes-rater-de5c852891a3a" class="yasr-rater-stars-visitor-votes" data-rater-postid="62734" data-rating="5" data-rater-starsize="24" data-rater-readonly="false" data-rater-nonce="93967b218e" data-issingular="true"></div><span id="yasr-visitor-votes-container-after-stars-de5c852891a3a" class='yasr-visitor-votes-after-stars-class'><span class="yasr-total-average-container" id="yasr-total-average-text_62734"> [تعداد: 2 &nbsp; &nbsp;میانگین: 5/5] </span></span>
                                                </div>
                                            </div>
                                            <script type="application/ld+json">{"@context":"http:\/\/schema.org\/","@type":"BlogPosting","datePublished":"\u06f1\u06f3\u06f9\u06f8-\u06f1\u06f1-\u06f2 \u06f1\u06f0:\u06f0\u06f0:\u06f0\u06f9 +\u06f0\u06f3:\u06f3\u06f0","headline":"\u0627\u0633\u06a9\u06cc\u0644 \u0648\u0631\u06a9\u0631 skilled worker \u06a9\u0627\u0646\u0627\u062f\u0627 \u0686\u06cc\u0633\u062a\u061f","mainEntityOfPage":{"@type":"WebPage","@id":"https:\/\/nilgam.com\/what-is-canada-skilled-worker"},"author":{"@type":"Person","name":"\u0645\u0647\u062f\u06cc \u0645\u06cc\u06a9\u0627\u0626\u06cc\u0644\u06cc"},"publisher":{"@type":"Organization","name":"\u0646\u06cc\u0644\u06af\u0627\u0645 - \u0627\u06cc\u0631\u0627\u0646 \u0622\u0646\u06a9\u0627\u0631\u0627","logo":{"@type":"ImageObject","url":"","width":0,"height":0}},"dateModified":"\u06f1\u06f3\u06f9\u06f8-\u06f9-\u06f1\u06f7 \u06f1\u06f5:\u06f2\u06f5:\u06f4\u06f7 +\u06f0\u06f3:\u06f3\u06f0","image":{"@type":"ImageObject","url":"https:\/\/nilgam.com\/wp-content\/uploads\/2019\/11\/Canada-Job.jpeg","width":800,"height":575},"name":"\u0627\u0633\u06a9\u06cc\u0644 \u0648\u0631\u06a9\u0631 skilled worker \u06a9\u0627\u0646\u0627\u062f\u0627 \u0686\u06cc\u0633\u062a\u061f"}</script>
                                        </div>
                                        <span class="box foot_bottom">
                                            <div class="tag position-relative float-right pr-4 mt-2 mb-2">دسته بندی :
                                                <?php the_category(' , '); ?>
                                            </div>
                                            <div class="share float-left"> 
                                                <span class="float-right"><?php if(function_exists('the_views')) { the_views(); } ?> بازدید</span>
                                                <span class="float-left">
                                                    نویسنده : <?php the_author(); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        <?php endif; ?>
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