<?php /* Template Name: فرم ها */ ?>
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
        <section class="pt-0">
            <div class="container">
                <div class="title style_2 mb60">
                    <h4 class="">فرم ها، اسناد و مدارک</h4>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-10">
                        <div class="panel-group panel_download bg-white rounded-lg shadow-sm bg-white rounded-lg shadow-sm_none" id="accordion" aria-multiselectable="true">
                            <?php 
                            $aminmoori= new WP_Query(array(
                            'post_type' => 'forms',
                            'post_status' => 'publish',
                            'order' => 'DESC',
                            'orderby' => 'ID')); ?> 
                            <?php if($aminmoori->have_posts()) : ?>
                                <?php while($aminmoori->have_posts()) : $aminmoori->the_post(); ?>
                                    <div class="panel">
                                        <div class="panel-heading"> 
                                            <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $slug = get_queried_object()->post_name; ?><?php echo the_ID(); ?>" aria-expanded="false"><?php the_title(); ?></a>
                                        </div>
                                        <div id="<?php echo $slug = get_queried_object()->post_name; ?><?php echo the_ID(); ?>" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <ul class="w-100">
                                                    <?php the_content(); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?> 
                            <?php endif; wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>