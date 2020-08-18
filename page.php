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
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <p>
                                    <strong>
                                        <?php the_title(); ?>
                                    </strong>
                                </p>
                                <div style="text-align: justify">
                                    <?php the_content() ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
        </section>
<?php get_footer(); ?>