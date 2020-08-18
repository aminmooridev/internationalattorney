<?php

function httpGet($url){
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    //curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output=curl_exec($ch);
 
    curl_close($ch);
    return $output;
}

//menus
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'منوی هدر' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
add_action( 'init', 'register_my_menus' );

//widget-sidebar
function sidebar_single_widgets_init() {
    register_sidebar( array(
		'name' => 'ستون کناری صفحه مطلب',
		'id' => 'sidebar_single',
		'before_widget' => '<div class="widget-box mb20">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="header"><h3>',
		'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'sidebar_single_widgets_init' );
//widgets-footer
function col1footer_widgets_init() {
    register_sidebar( array(
		'name' => 'ستون اول فوتر',
		'id' => 'col1footer',
		'before_widget' => '<div id="fml1" class="panel-collapse collapse show in"><div class="panel-body mb20"><div class="menu-footer-container">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="panel-heading text-white" role="tab"><h4 class="">',
		'after_title'   => '</h4><a class="label_menu_footer" data-toggle="collapse" href="#fml1"><i class="newIco ico__arrow__down__2"></i></a></div>',
    ) );
}
add_action( 'widgets_init', 'col1footer_widgets_init' );
function col2footer_widgets_init() {
    register_sidebar( array(
		'name' => 'ستون دوم فوتر',
		'id' => 'col2footer',
		'before_widget' => '<div id="fml1" class="panel-collapse collapse show in"><div class="panel-body mb20"><div class="menu-footer-container">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="panel-heading text-white" role="tab"><h4 class="">',
		'after_title'   => '</h4><a class="label_menu_footer" data-toggle="collapse" href="#fml1"><i class="newIco ico__arrow__down__2"></i></a></div>',
    ) );
}
add_action( 'widgets_init', 'col2footer_widgets_init' );
function col3footer_widgets_init() {
    register_sidebar( array(
		'name' => 'ستون سوم فوتر',
		'id' => 'col3footer',
		'before_widget' => '<div id="fml1" class="panel-collapse collapse show in"><div class="panel-body mb20"><div class="menu-footer-container">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="panel-heading text-white" role="tab"><h4 class="">',
		'after_title'   => '</h4><a class="label_menu_footer" data-toggle="collapse" href="#fml1"><i class="newIco ico__arrow__down__2"></i></a></div>',
    ) );
}
add_action( 'widgets_init', 'col3footer_widgets_init' );
function col4footer_widgets_init() {
    register_sidebar( array(
		'name' => 'ستون چهارم فوتر',
		'id' => 'col4footer',
		'before_widget' => '<div id="fml1" class="panel-collapse collapse show in"><div class="panel-body mb20"><div class="menu-footer-container">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="panel-heading text-white" role="tab"><h4 class="">',
		'after_title'   => '</h4><a class="label_menu_footer" data-toggle="collapse" href="#fml1"><i class="newIco ico__arrow__down__2"></i></a></div>',
    ) );
}
add_action( 'widgets_init', 'col4footer_widgets_init' );

//setting image
add_theme_support( 'post-thumbnails');
add_image_size( 'post-image-index', 223, 170, true );
add_image_size( 'post-image-visas-index', 300, 260, true );
add_image_size( 'post-image-single-blog', 825, 592, true );
add_image_size( 'post-image-blog', 250, 179, true );

// Register Custom Post Type
function testimonial_post_type() {

	$labels = array(
		'name'                  => 'مشتریان',
		'singular_name'         => 'testimonial',
		'menu_name'             => 'مشتریان',
		'name_admin_bar'        => 'مشتریان',
		'archives'              => 'بایگانی مشتریان',
		'attributes'            => 'ویژگی های مشتریان',
		'all_items'             => 'همه مشتریان',
		'add_new_item'          => 'افزودن مشتری جدید',
		'add_new'               => 'افزودن مشتری',
		'new_item'              => 'مشتری جدید',
		'edit_item'             => 'ویرایش مشتری',
		'update_item'           => 'به روز رسانی مشتری',
		'view_item'             => 'نمایش مشتری',
		'view_items'            => 'دیدن مشتریان',
		'search_items'          => 'جستجوی مشتری',
		'not_found'             => 'پیدا نشد',
		'not_found_in_trash'    => 'در سطل زباله پیدا نشد',
		'featured_image'        => 'تصویر شاخص',
		'set_featured_image'    => 'قراردادن به عنوان تصویر شاخص',
		'remove_featured_image' => 'پاک تصویر شاخص',
		'use_featured_image'    => 'استفاده به عنوان تصویر شاخص',
		'insert_into_item'      => 'درج در مشتری',
		'uploaded_to_this_item' => 'در مشتری بارگذاری شد',
		'items_list'            => 'لیست مشتریان',
		'items_list_navigation' => 'فهرست لیست مشتریان',
		'filter_items_list'     => 'فیلتر لیست مشتریان',
	);
	$args = array(
		'label'                 => __( 'testimonial'),
		'description'           => 'ثبت دیدگاه های مشتریان',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'				=> 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'testimonial_post_type', 0 );

// Register Custom Post Type
function forms_post_type() {

	$labels = array(
		'name'                  => 'فرم ها',
		'singular_name'         => 'forms',
		'menu_name'             => 'فرم ها',
		'name_admin_bar'        => 'فرم ها',
		'archives'              => 'بایگانی فرم ها',
		'attributes'            => 'ویژگی های فرم ها',
		'all_items'             => 'همه فرم ها',
		'add_new_item'          => 'افزودن فرم جدید',
		'add_new'               => 'افزودن فرم',
		'new_item'              => 'فرم جدید',
		'edit_item'             => 'ویرایش فرم',
		'update_item'           => 'به روز رسانی فرم',
		'view_item'             => 'نمایش فرم',
		'view_items'            => 'دیدن فرم ها',
		'search_items'          => 'جستجوی فرم',
		'not_found'             => 'پیدا نشد',
		'not_found_in_trash'    => 'در سطل زباله پیدا نشد',
		'insert_into_item'      => 'درج در فرم',
		'uploaded_to_this_item' => 'در فرم بارگذاری شد',
		'items_list'            => 'لیست فرم ها',
		'items_list_navigation' => 'فهرست لیست فرم ها',
		'filter_items_list'     => 'فیلتر لیست فرم ها',
	);
	$args = array(
		'label'                 => __( 'forms'),
		'description'           => 'ثبت فرم ها',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'				=> 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'forms', $args );

}
add_action( 'init', 'forms_post_type', 0 );
//breadcrumb
function get_breadcrumb() {

	echo ' <a href=" '.home_url().' "> صفحه نخست </a> &gt; ';
	if (is_category() || is_single()) {
		$categories = get_the_category( $post_id );
		foreach ($categories as $category){
			echo '<a href="' . get_category_link($category->term_id) . '">'. $category->cat_name . '</a>';
		}
			if (is_single()) {
				echo " &gt; <strong class='breadcrumb_last' aria-current='page'><a>";
				the_title();
				echo "</a></strong>";
			}
		echo "</a>";
	} elseif (is_page()) {
		echo "<strong class='breadcrumb_last' aria-current='page'><a>";
		echo the_title();
		echo "</a></strong>";
	} elseif (is_search()) {
		echo " &gt; نتیجه جستجوی ... ";
		echo "<strong class='breadcrumb_last' aria-current='page'><a>";
		echo the_search_query();
		echo '</a></strong>';
	}
	echo '</a>';
}
function wpd_subcategory_template( $template ) {
    $cat = get_queried_object();
    if( $cat->cat_ID=3 ){
		$template = locate_template( 'category-countries.php' );
	} else if( 0 < $cat->category_parent ) {
		$template = locate_template( 'category.php' );
	}
    return $template;
}
add_filter( 'category_template', 'wpd_subcategory_template' );