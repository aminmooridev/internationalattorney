<?php get_header(); ?>
    <main>
        <section class="cover text-white p-0">
            <div class="owl-carousel owl-theme" id="fullslider" style="">
                <div class="item">
                    <div class="main_center">
                        <div class="container"> 
                            <strong class="mb10"></strong>
                            <h3 class=" mb20">ویزای ترکیه</h3>
                            <p class="text_ordered text-justify text-white mb40"> انواع ویزای ترکیه، در موسسه حقوقی بین المللی گیتی آفرین میزان</p>
                            <a class="btn_ia btn_border btn_arrow hover_transition" href="<?php echo get_home_url(); ?>/contact">اطلاعات بیشتر</a>
                        </div>
                    </div>
                    <noscript>
                        <img class="img_wid" src="<?php echo get_template_directory_uri(); ?>/uploads/2018/03/3.jpg">
                    </noscript>
                        <img class="lazyload img_wid" src="<?php echo get_template_directory_uri(); ?>/uploads/2018/03/3.jpg">
                </div>
            </div>
        </section>
        <section class="border-sec pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-4">
                        <div class="title ico ico_visa mainPageVisa">
                            <h2 class="mb10">ویزا های ترکیه</h2>
                            <p class="text_ordered text-justify mb30 text-justify"> موسسه حقوقی بین المللی گیتی آفرین میزان ، از اولین مرحله تا دریافت ویزا یا وقت سفارت، پله به پله با شما همراه خواهد بود تا شما تمامی مراحل لازم را به راحتی و اطمینان هر چه تمام طی کنید…</p> <a class="btn_ia btn_arrow gradient_1 mb50" href="visa/index.html" title="ویزا">اطلاعات بیشتر</a></div>
                    </div>
                    <div class="col-xs-12 col-lg-8">
                        <div class="owl-carousel owl-theme hiatus" id="visaslider">
                            <?php $cat_posts= new WP_Query(array(
                            'post_type'=>'post','post_status'=>'publish','order'=>'DESC',
                            'orderby'=>'ID','cat'=>'1','posts_per_page'=>'10'));  
                            if($cat_posts->have_posts()):
                            while($cat_posts->have_posts()): $cat_posts->the_post();?>
                                <div class="item">
                                    <a class="box box_visa bg-white rounded-lg shadow-sm box_hover border-0 text-white" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <div class="info">
                                            <h2 class="float-right"><?php the_title(); ?></h2>
                                        </div>
                                            <noscript>
                                                <?php the_post_thumbnail('post-image-visas-index', array('class' => 'img_wid')); ?>
                                            </noscript>
                                            <?php the_post_thumbnail('post-image-visas-index', array('class' => 'lazyload img_wid')); ?> 
                                    </a>
                                </div>
                            <?php endwhile; endif; wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="border-sec">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6"> 
                    <a class="box ico ico_pickup box_cat bg-white rounded-lg shadow-sm gradient_2 box_hover border-0 text-white" href="%d9%be%db%8c%da%a9%d8%a7%d9%be-%d9%88%db%8c%d8%b2%d8%a7/index.html" title=""><h2 class=" mb20">پیکاپ</h2><p class="text_ordered text-justify"> از آنجایی که جهت درج ویزا نیازی به حضور شخص نیست، پاسپورت‌ها می‌توانند از طریق یک نماینده به سفارت تحویل داده شوند. از مزایای پیکاپ، هزینه پایین آن نسبت به هزینه اقامت در کشور مقصد است.</p> <span>اطلاعات بیشتر</span> </a></div>
                    <div class="col-xs-12 col-md-6"> <a class="box ico ico_migration box_cat bg-white rounded-lg shadow-sm gradient_3 box_hover border-0 text-white" href="immigration/index.html" title=""><h2 class=" mb20">مهاجرت</h2><p class="text_ordered text-justify"> خدمات مهاجرت توسط کارشناسان مجرب ایران آنکارا با دقت و حساسیت بسیار و شفافیت هر چه تمام انجام می‌شود. در طول فرآیند دریافت اقامت، ما در تمامی مراحل کنار شما هستیم تا بهترین نتیجه را دریافت کنید.</p> <span>اطلاعات بیشتر</span> </a></div>
                </div>
            </div>
        </section>
        <section class="backgammon">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-4 mainPageTour">
                        <div class="title ico ico_tours">
                            <h2 class=" mb20">آخرین مطالب</h2>
                            <p class="text_ordered text-justify mb30"> تورهایی به جذاب‌ترین مناطق دنیا در هتل‌های محبوب، همراه با خدمات اخذ ویزا، بیمه مسافرتی، ترانسفر فرودگاهی و ...</p> 
                            <a class="btn_ia btn_arrow gradient_1 mb30" href="<?php echo get_home_url(); ?>/blog" title="مشاهده مطالب">مشاهده مطالب</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-8">
                        <div class="row">
                            <?php if ( have_posts() ) : ?>
                                <?php while ( have_posts() ) : the_post(); ?> 
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <a class="box box_tour style_1 bg-white rounded-lg shadow-sm box_hover mb30" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <div class="wall">
                                                <noscript>
                                                    <?php the_post_thumbnail('post-image-index', array('class' => 'img_wid')); ?>
                                                </noscript>
                                                    <?php the_post_thumbnail('post-image-index', array('class' => 'lazyload img_wid')); ?>
                                            </div>
                                            <div class="info">
                                                <h3 class="name float-right "><?php the_title(); ?></h3>
                                                <!-- <div class="stay float-left"> 
                                                    <span class="number">7</span> 
                                                    <span>شب</span>
                                                </div> -->
                                                <div class="border_top">
                                                    <div class="price">
                                                        <p>نویسنده : <?php the_author(); ?></p> 
                                                        <span class="tariffs"><?php if(function_exists('the_views')) { the_views(); } ?>
                                                            <small>بازدید</small>
                                                        </span>
                                                    </div>
                                                    <span class="btn_ia gradient_1">ادامه مطلب</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-8 col-lg-offset-2">
                        <div class="opinion_big box">
                            <div class="owl-carousel owl-theme hiatus" id="commentslider">
                                <?php $cat_posts= new WP_Query(array(
                                'post_type'=>'testimonial','post_status'=>'publish','order'=>'DESC',
                                'orderby'=>'ID','posts_per_page'=>'5'));  
                                if($cat_posts->have_posts()):
                                while($cat_posts->have_posts()): $cat_posts->the_post();?>
                                    <div class="item">
                                        <div class="avatar ico ico_opinion mb20"><span><?php the_title(); ?></span></div>
                                        <p class="text_ordered text-justify"><?php the_content(); ?></p>
                                    </div>
                                <?php endwhile; endif; wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>