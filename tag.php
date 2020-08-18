<?php get_header(); ?>
    <script>
        dataLayer.push({
            'contentGrouping': 'Blog'
        });
    </script>
    <main>
        <section class="pt-0">
            <div class="container">
                <div class="title style_2 mb60 text-center">
                    <h4 class=""><?php single_tag_title(); ?></h4></div>
                <div class="row">
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
                    
                    <div class="col-xs-12 col-md-8 col-lg-9 pb-4">
                        <?php
                        $showposts = 5; // -1 shows all posts
                        $do_not_show_stickies = 1; // 0 to show stickies
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args=array(
                            'showposts' => $showposts,
                            'caller_get_posts' => $do_not_show_stickies,
                            'paged' => $paged
                        );
                        $my_query = new WP_Query($args); ?>
                            <?php query_posts($args); if( have_posts() ) :?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <div class="box box_blog bg-white rounded-lg shadow-sm box_hover mb30">
                                        <div class="date_style gradient_1 text-white rounded text-center p-2 position-absolute"> 
                                            <span><?php the_date('j'); ?></span>
                                            <span><?php the_time('F'); ?></span> 
                                            <span class="rounded"><?php the_time('Y'); ?></span>
                                        </div>
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
                                                <div class="tag position-relative float-right pr-4 mt-2 mb-2">
                                                دسته بندی : <?php the_category(' , '); ?>
                                                </div> 
                                                <a href="<?php the_permalink(); ?>">
                                                    <span>ادامه مطلب</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php wp_pagenavi( array( 'query' => $my_query )); ?>
                        <?php endif; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>