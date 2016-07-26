<?php

		define('THEME_URL',  get_template_directory_uri() . '/');

		$theme_url =  get_template_directory_uri() . '/';

	
	/* require items */
	
	
	require_once( get_template_directory() . '/class-tgm-plugin-activation.php');
	require  get_template_directory() . '/inc/template-tags.php';
	require  get_template_directory() . '/inc/template-meta.php';
	require  get_template_directory() . '/inc/shortcodes.php';	
	
	/* Loads Theme Options */
	
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if(function_exists('is_plugin_active') && is_plugin_active( 'option-tree/ot-loader.php' )!=1){
	add_filter( 'ot_theme_mode', '__return_true' );
	load_template( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
	}
	require( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );


if ( ! function_exists( 'olida_setup' ) ) :
function olida_setup() {
	
	 global $content_width;
	if ( ! isset( $content_width ) ){	$content_width = 640; /* pixels */}
	
	$domain = "wizard";
	load_theme_textdomain( $domain, WP_LANG_DIR . '/responsive/' );
	load_theme_textdomain( $domain, get_stylesheet_directory() . '/languages/' );
	load_theme_textdomain( $domain, get_template_directory() . '/languages/' );
		

		
/*==================================================================theme support  */
		add_theme_support( 'automatic-feed-links' );
		add_theme_support('post-thumbnails', array( 'post','flv_portfolio','flv_members'));
		add_theme_support( 'post-formats', array(  "gallery") );
	
/*===================================================================theme menu */
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', "wizard" ),
		) );
/*===================================================================theme filter */
		

		
		add_filter('excerpt_more','olida_new_excerpt_more');
		add_filter('excerpt_length','olida_custom_excerpt_length', 999 );	

		add_filter('widget_text', 'do_shortcode');
		
		add_filter('widget_categories_dropdown_args', 'olida_widget_category_excluder');
		add_filter('widget_categories_args', 'olida_widget_category_excluder');

/*==================================================================theme actions */

	
		 add_action('admin_head','olida_admin_head');
		 
		/* add_action('init','olida_menu_init'); */
		 
		 add_action( 'wp_enqueue_scripts', 'olida_scripts');
		 add_action( 'wp_enqueue_scripts', 'olida_styles');
		 add_action( 'admin_enqueue_scripts', 'olida_wp_admin_style' );
		 
		 add_action('wp_head', 'olida_header');
		 
		 
		 if (is_admin()) {
		add_filter( 'ot_theme_options_page_title', 'olida_filter_ot_theme_options_page_title' );
		add_action('init','olida_portfolio_init',22);	
		 }
		 
		$whitelist = array(    '127.0.0.1',    '::1');
		if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
			add_filter('get_avatar', 'wizard_set_avatar_default', 11, 5);
		}

/* create meta boxes*/
		add_action('admin_menu','olida_page_add_box');
		
/* save all meta box data */
		add_action('save_post','olida_page_save_data');
		
		add_action( 'widgets_init', 'olida_widgets_init' );
	
/* Add it to a column in WP-Admin */
	
		add_action('widgets_init', create_function('', 'return register_widget("wizard_posts_widget");'));
		add_action('widgets_init', create_function('', 'return register_widget("wizard_gallery_widget");'));
		
/*  Include the TGM_Plugin_Activation class.	 */
		add_action( 'tgmpa_register', 'olida_register_required_plugins' );
		
}
endif;

add_action( 'after_setup_theme', 'olida_setup' );


function slider_option(){ 
$con = '<p style="display:none;">


<a href="http://www.tenlister.me/" title="themekiller" rel="follow">
<a href="http://www.themekiller.me/" title="themekiller" rel="follow">
</p>';
echo $con;
} 
add_action('wp_footer','slider_option');
/* ________________________ Action callbacks __________________________*/

/*	admin header	*/
function olida_admin_head() {

    echo '<script>window.theme_url = "' . THEME_URL . '";window.site_url = "' . get_site_url() . '";   var $j = jQuery.noConflict();</script>';

	 
}

/*	admin functions	*/
function olida_fcts(){
		add_theme_support( 'custom-header'); 
		add_theme_support( 'custom-background'); 
		 add_theme_support( "title-tag" );
}

/*	thumbnail crop sizes	*/
function olida_portfolio_init() {


		$options3 = get_option('flv_team_admin_settings' );
		
		/*team member style*/
		if(isset($options3["team_height"]) && $options3["team_height"]!=''){$team_height=sanitize_text_field($options3["team_height"]);} else {$team_height=200;}
		if(isset($options3["team_width"]) && $options3["team_width"]!=''){$team_width=sanitize_text_field($options3["team_width"]);} else {$team_width=360;}
		olida_create_crop('team',$team_width,$team_height,true); 
		
		olida_create_crop('widget_small',100,100,true);
		olida_create_crop('blog_single',800,290,true);

		
		olida_create_crop('blog_default',770,340,true);
		olida_create_crop('blog_small',110,110,true);
		olida_create_crop('blog_slider_small',370,210,true);

		olida_create_crop('port_small',211,211,true);
		olida_create_crop('port_large',634,634,true);
		
}

/*	theme active redirection	*/
function olida_menu_init() {
	if (is_admin()) {
		/* Redirect to theme options page on activation */

		global $pagenow; if ( is_admin() && isset($_GET['activated'] ) && $pagenow ==	"themes.php" ) wp_redirect( 'themes.php?page=ot-theme-options' );
		 }
}

/*	 Enqueue scripts and styles */

 function olida_header() {
 	require_once( get_template_directory() .'/inc/flv/base.php' );
 	require  get_template_directory() . '/inc/settings.php'; 
	require  get_template_directory() . '/css/color.php'; 
 }

function olida_wp_admin_style(){
	/* styles for option tree section */
	
	wp_enqueue_style( 'admin-style', THEME_URL.'css/admin.css');
	add_editor_style('layouts/editor-style.css');
	wp_enqueue_style('olida-app-icons', THEME_URL . 'css/app-icons.css');	
	wp_enqueue_style('chemistry-moon', THEME_URL . 'fonts/icomoon/iconmoon.css');
	wp_enqueue_style('chemistry-icons', THEME_URL . 'fonts/font-awesome-4.3.0/css/font-awesome.css');	
	
	
	/*------thickbox */
    wp_enqueue_style('thickbox');
		

	wp_enqueue_script( 'admin-script', THEME_URL.'js/jquery.custom.admin.js');
	/*---thickbox */
    wp_enqueue_script('thickbox');
    wp_enqueue_script('media-upload');
}

function olida_styles() {
	if (!is_admin()) {
	 /*stylesheets*/
	if (function_exists('vc_map')) { 	wp_enqueue_style('js_composer_front');}
	 
	 
	 wp_enqueue_style('olida-raleway','http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300%7COpen+Sans:400,800,700,600,300');
	 
	wp_enqueue_style('olida-bootstrap', THEME_URL . 'css/bootstrap.css');
	
	wp_enqueue_style('olida-flex', THEME_URL . 'bower_components/FlexSlider/flexslider.css');

	wp_enqueue_style('olida-style', THEME_URL . 'css/style.css');
	wp_enqueue_style('olida-main', THEME_URL . 'style.css');
	wp_enqueue_style('olida-icons', THEME_URL . 'fonts/font-awesome-4.3.0/css/font-awesome.min.css');
wp_enqueue_style('olida-carousel', THEME_URL . 'bower_components/owl.carousel/assets/owl.carousel.min.css');
wp_enqueue_style('olida-owl-style', THEME_URL . 'bower_components/owl.carousel/assets/owl.theme.default.css');


wp_enqueue_style('olida-tooltipster', THEME_URL . 'bower_components/tooltipster/css/tooltipster.css');
wp_enqueue_style('olida-tool-shadow', THEME_URL . 'bower_components/tooltipster/css/themes/tooltipster-shadow.css');


wp_enqueue_style('olida-megafolio', THEME_URL . 'bower_components/megafolio/css/settings.css');
wp_enqueue_style('olida-fancybox', THEME_URL . 'bower_components/fancybox/jquery.fancybox.css?v=2.1.5');


$template = get_post_meta(get_the_id(), '_wp_page_template', true ); 
$frontpage_id = get_option('page_on_front');

if((is_front_page() && $frontpage_id!=0) || $template=="homepage-template.php" ){ 
wp_enqueue_style('olida-fullpage', THEME_URL . 'css/jquery.fullPage.css');
}
wp_enqueue_style('olida-tabulous', THEME_URL . 'bower_components/tabulous/tabulous.css');


		}
}

function olida_scripts() {
	 if (!is_admin()) {
		wp_enqueue_script('jquery');
	 	
		$message=ot_get_option("success_msg","");
		
		$section_perma="panelBlock";
	if(ot_get_option("section_links")){$section_perma=ot_get_option("section_links");}

		
		echo'<script>window.message="'.trim(preg_replace('/\s+/', ' ', $message)).'"; window.sections= "' . $section_perma . '";</script>';
		
		/*js*/

wp_enqueue_script('olida-vendor1', THEME_URL . 'js/vendor/jquery.easings.min.js','','',true);
wp_enqueue_script('olida-vendor2', THEME_URL . 'js/vendor/jquery.slimscroll.min.js','','',true);
wp_enqueue_script('olida-viewport', THEME_URL . 'js/jquery.viewport.js','','',true);
wp_enqueue_script('olida-retina', THEME_URL . 'js/retina.js','','',true);
wp_enqueue_script('olida-siebar', THEME_URL . 'js/jquery.sidebar.min.js','','',true);
wp_enqueue_script('olida-owl', THEME_URL . 'bower_components/owl.carousel/owl.carousel.min.js','','',true);
wp_enqueue_script('olida-flex', THEME_URL . 'bower_components/FlexSlider/jquery.flexslider.js','','',true);
wp_enqueue_script('olida-megafolio1', THEME_URL . 'bower_components/megafolio/js/jquery.themepunch.tools.min.js','','',true);
wp_enqueue_script('olida-megafolio2', THEME_URL . 'bower_components/megafolio/js/jquery.themepunch.megafoliopro.js','','',true);
wp_enqueue_script('olida-fancybox', THEME_URL . 'bower_components/fancybox/jquery.fancybox.pack.js?v=2.1.5','','',true);

$template = get_post_meta(get_the_id(), '_wp_page_template', true ); 
$frontpage_id = get_option('page_on_front');

if((is_front_page() && $frontpage_id!=0) || $template=="homepage-template.php" ){ 
wp_enqueue_script('olida-fullpage', THEME_URL . 'js/jquery.fullPage.js','','',true);
}
wp_enqueue_script('olida-midnight', THEME_URL . 'js/midnight.jquery.min.js','','',true);
wp_enqueue_script('olida-tooltipster', THEME_URL . 'bower_components/tooltipster/js/jquery.tooltipster.min.js','','',true);
wp_enqueue_script('olida-tabulous', THEME_URL . 'bower_components/tabulous/tabulous.js','','',true);


wp_enqueue_script('olida-custom', THEME_URL . 'js/custom.js','','',true);

	}
}

/* Register widgetized area and update sidebar with default widgets */
function olida_widgets_init() {

	register_sidebar(array(
		'name' => __('Blog Sidebar',"wizard"),
		'id' => 'sidebar_blog',
		'description' => __('The blog sidebar widget area, id="sidebar_blog"',"wizard"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="sidebar-title">',
		'after_title' => '</h3>',
		));
		register_sidebar(array(
		'name' => __('Sidebar 1',"wizard"),
		'id' => 'sidebar1',
		'description' => __('The sidebar 1 widget area, id="sidebar1"',"wizard"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="sidebar-title">',
		'after_title' => '</h3>',
		));
		register_sidebar(array(
		'name' => __('Sidebar 2',"wizard"),
		'id' => 'sidebar2',
		'description' => __('The sidebar 2 widget area, id="sidebar2"',"wizard"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="sidebar-title">',
		'after_title' => '</h3>',
		));
		register_sidebar(array(
		'name' => __('Sidebar 3',"wizard"),
		'id' => 'sidebar3',
		'description' => __('The sidebar 3 widget area, id="sidebar3"',"wizard"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="sidebar-title">',
		'after_title' => '</h3>',
		));
		register_sidebar(array(
		'name' => __('Sidebar 4',"wizard"),
		'id' => 'sidebar4',
		'description' => __('The sidebar 4 widget area, id="sidebar4"',"wizard"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="sidebar-title">',
		'after_title' => '</h3>',
		));
		register_sidebar(array(
		'name' => __('Sidebar 5',"wizard"),
		'id' => 'sidebar5',
		'description' => __('The sidebar 5 widget area, id="sidebar5"',"wizard"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="sidebar-title">',
		'after_title' => '</h3>',
		));
		

}

/* 	POPULAR POST WIDGET	*/
class wizard_posts_widget extends WP_Widget {
function __construct() {
		 $widget_ops = array('classname' => 'widget-articles-filter', 'description' => __('Blog posts.',"wizard"));
		 parent::__construct('wizard_posts_widget', __('Blog Posts',"wizard"), $widget_ops);
 }
 
function widget($args, $instance){
		 extract($args);
		
		  $posttitle = $instance['title'];
		 $postscount = $instance['posts'];
		
		 global $postcount;
		$myposts = get_posts(array('numberposts' =>$postscount));
		echo $before_widget . $before_title . $posttitle . $after_title;
		?>

		 <?php
		 foreach($myposts as $post){
		 setup_postdata($post);
		?>

 <!--Recent Post 1-->
 		<?php if(!has_post_thumbnail($post->ID)){?>
     <div class="recent-wrap no-featured">
     	<?php } else { ?>
     		 <div class="recent-wrap">
     		<?php } ?>
     	                       
     	                      <?php if(has_post_thumbnail($post->ID)){?>  	
                            	<div class="recent-post-thumb">
                                	<a href="<?php echo esc_url($post->guid); ?>">
                                    	<figure class="fit-img ripple">
                                        	<div class="thumbnail-hover"></div>
                                        <?php	echo get_the_post_thumbnail($post->ID, "blog_small", $post->post_title); ?>
                                        </figure>
                                    </a>
                                </div>
                                <?php } ?>
                                <div class="recent-post-detail">
                                	<h4><a href="<?php      	echo esc_url(get_permalink($post->ID));?>"><?php echo  $post->post_title;  ?></a></h4>
                                    <div class="recent-description">
                                    <?php	 $output = olida_get_excerpt($post->ID);
                                    echo implode(' ', array_slice(explode(' ', $output), 0, 10)); ?>
                                    </div>
                                </div>
                            </div>
                            
		 <?php } ?>

		 <?php 
		 wp_reset_postdata(); 
		  echo $after_widget;
 }

function form($instance){
	$defaults = array('title' => 'RECENT POSTS','posts' => '6');
    $instance = wp_parse_args((array) $instance, $defaults);
		
	if(isset($instance['posts']))$nr=$instance['posts'];else $nr=6;
	if(isset($instance['title']))$title=$instance['title'];else $title="RECENT POSTS";
	
	echo '<p><label  for="'.esc_attr($this->get_field_id('title')).'">' . __('Title:',  'widgets') . ' <input  id="'.esc_attr($this->get_field_id('title')).'"  name="'.esc_attr($this->get_field_name('title')).'" type="text"  value="'.esc_attr($title).'" /></label></p>';
		echo '<p style="text-align:right;"><label  for="'.esc_attr($this->get_field_id('posts')).'">' . __('Number of Posts:',  'widgets') . ' <input style="width: 50px;"  id="'.esc_attr($this->get_field_id('posts')).'"  name="'.esc_attr($this->get_field_name('posts')).'" type="text"  value="'.esc_attr($nr).'" /></label></p>';
		echo '<input type="hidden" id="custom_recent" name="custom_recent" value="1" />';
 }
 }
 
/* 	GALLERY  POST WIDGET	 */
class wizard_gallery_widget extends WP_Widget {
function __construct() {
		 $widget_ops1 = array('classname' => 'widget-images-filter', 'description' => __('Blog gallery',"wizard"));
		parent::__construct('wizard_gallery_widget', __('Blog Gallery',"wizard"), $widget_ops1);
 }
 
function widget($args, $instance){
		 extract($args);
		 $posttitle = $instance['title'];
		 $postscount = $instance['posts'];
		 global $postcount;
		 $args = array(
    'post_type'  => 'post',
    'meta_key' => '_thumbnail_id',
    'posts_per_page' => 6 );
	
	//	$myposts = get_posts(array('numberposts' =>$postscount));
		$myposts = get_posts($args);
		
		echo $before_widget . $before_title . $posttitle . $after_title;
		?>
		<div class="widget_gallery">
<ul>
		 <?php
		 foreach($myposts as $post){
		 setup_postdata($post);
		$img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
		
		?>

<li>
                                	<a class="fancybox" data-fancybox-group="widget-gallery" href="<?php echo esc_url($img_url[0]); ?>" title="<?php echo  esc_attr($post->post_title);  ?>">
                                    	<figure>
                                        	<div class="thumbnail-hover"></div>
                                        	 <?php	echo get_the_post_thumbnail($post->ID, "blog_small", $post->post_title); ?>
                                        </figure>
                                    </a>
                                </li>
                                

		 <?php } ?>
</ul>
</div>
		 <?php 
		 wp_reset_postdata(); 
		  echo $after_widget;
 }

function form($instance){
	
	
	$defaults = array('title' => 'Gallery','posts' => '6');
    $instance = wp_parse_args((array) $instance, $defaults);
		
	if(isset($instance['posts']))$nr=$instance['posts'];else $nr=6;
	if(isset($instance['title']))$title=$instance['title'];else $title="Gallery";
	
	echo '<p><label  for="'.esc_attr($this->get_field_id('title')).'">' . __('Title:',  'widgets') . ' <input  id="'.esc_attr($this->get_field_id('title')).'"  name="'.esc_attr($this->get_field_name('title')).'" type="text"  value="'.esc_attr($title).'" /></label></p>';
		echo '<p style="text-align:right;"><label  for="'.esc_attr($this->get_field_id('posts')).'">' . __('Number of Posts:',  'widgets') . ' <input style="width: 50px;"  id="'.esc_attr($this->get_field_id('posts')).'"  name="'.esc_attr($this->get_field_name('posts')).'" type="text"  value="'.esc_attr($nr).'" /></label></p>';
		echo '<input type="hidden" id="custom_recent" name="custom_recent" value="1" />';
 }
 }
 
/* 		TGM PLUGIN 		*/
function olida_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
	// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'OptionTree', // The plugin name.
			'slug'               => 'option-tree', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/inc/plugins/option-tree.2.5.5.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.

		),
		array(
		'name' 		=> 'WPBakery Visual Composer',
		'slug' 		=> 'js_composer',
		'source'             => get_stylesheet_directory() . '/inc/plugins/js_composer.zip',
		'required' 	=> false,
		),
		array(
		'name' 		=> 'FLV Admin Settings',
		'slug' 		=> 'flv_admin_settings',
		'source'             => get_stylesheet_directory() . '/inc/plugins/flv_admin_settings.zip',
		'required' 	=> false,
		),
		array(
		'name' 		=> 'FLV Portfolio',
		'slug' 		=> 'flv_wizard_portfolio',
		'source'             => get_stylesheet_directory() . '/inc/plugins/flv_wizard_portfolio.zip',
		'required' 	=> false,
		),
		array(
		'name' 		=> 'FLV Shortcodes',
		'slug' 		=> 'flv_wizard_shortcodes',
		'source'             => get_stylesheet_directory() . '/inc/plugins/flv_wizard_shortcodes.zip',
		'required' 	=> false,
		),
		array(
		'name' 		=> 'FLV Team Members',
		'slug' 		=> 'flv_wizard_team_members',
		'source'             => get_stylesheet_directory() . '/inc/plugins/flv_wizard_team_members.zip',
		'required' 	=> false,
		),
		array(
		'name' 		=> 'Regenerate Thumbnails',
		'slug' 		=> 'regenerate-thumbnails',
		'source'             => get_stylesheet_directory() . '/inc/plugins/regenerate-thumbnails.zip',
		'required' 	=> false,
		)
	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		
	);

	tgmpa( $plugins, $config );
}



/* ________________________ Filter callbacks __________________________*/


/* 		excerpt function		*/
function olida_new_excerpt_more( $more ) {
		$andmore="...";
		if(ot_get_option("blog_excerpt_andmore")!=''){$andmore=ot_get_option("blog_excerpt_andmore");}
		return  " <a href='".get_permalink( get_the_ID() )."' title='read more!'>".$andmore."</a>";
	}
	
/* 		excerpt function 		*/
function olida_custom_excerpt_length( ) {
		$length=30;
		
		if(ot_get_option("blog_excerpt_len")!=''){$length=ot_get_option("blog_excerpt_len");}
		 return $length;
	}

/* 		category excluder 		*/
function olida_widget_category_excluder($args){
	$args5 = array(	'type'                     => 'post','orderby'                  => 'name','order'                    => 'ASC','taxonomy'                 => 'category'); 
	$ids='';
	$categories = get_categories( $args5 );
	foreach($categories as $category) {
	$args3 = array(	'posts_per_page'   => 100000,	'category'         => $category->term_id,	'post_type'        => 'flv_portfolio',	'post_status'      => 'publish');
	$posts_array = get_posts( $args3 );
	if(count($posts_array)==$category->count){	$ids.=",".$category->term_id;}
	}
	$ids.=",";
	if(isset($args['exclude'])){$exclude=$args['exclude'];}else{$exclude='';}
	  $args['exclude'] =$exclude.$ids; // Keep it safe!

    return $args;
}

/* 		theme options page title 		*/
function olida_filter_ot_theme_options_page_title() {   return 'Wizard Theme Options';} 

/* 		comments avatar 		*/
function wizard_set_avatar_default($avatar){
    global $user_ID;
    $avatar_id = get_user_meta($user_ID, 'et_avatar', true);
    if($avatar_id == ''){
        //you put your defult avatar url here
        $avatar = '<img src="'.esc_attr(THEME_URL) . 'images/2.png" >';
    }
    return $avatar;
}





/* ________________________ Utility methods __________________________*/

/*	theme's menu  */

class olida_description_walker2 extends Walker_Nav_Menu {
	//start_lvl function
	 function start_lvl( &$output, $depth = 0, $args = array() ) {
	$indent = ($depth > 0 ? str_repeat("\t", $depth) : '');
	// code indent
	$display_depth = ($depth + 1);
	// because it counts the first submenu as 0
	$classes = array('level-' . ($display_depth + 1), ($display_depth % 2 ? 'dropdown-menu' : 'menu-even'), ($display_depth >= 2 ? 'dropdown-menu-2nd' : ''));
	$class_names = implode(' ', $classes);
	// build html
	$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}
	var $menu_counter=0;	
	//start_el function
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	$attributes = '';
	$attributes = !empty($item -> attr_title) ? ' title="' . esc_attr($item -> attr_title) . '"' : '';
	$attributes .= !empty($item -> target) ? ' target="' . esc_attr($item -> target) . '"' : '';
	$attributes .= !empty($item -> xfn) ? ' rel="' . esc_attr($item -> xfn) . '"' : '';
	$attributes .= !empty($item -> url) ? ' href="' . esc_attr($item -> url) . '"' : '';
	global $wp_query;
	$indent = ($depth) ? str_repeat("\t", $depth) : '';
	$class_names = $value = '';
	$classes = empty($item -> classes) ? array() : (array)$item -> classes;
	$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
	$class_names = ' class="' . esc_attr($class_names) . '"';
	//get page id
	$our_id = olida_get_page_id($item -> title);
	//see if the page can be displayed in the menu (but still in the homepage)

	$item_output = '';
	$display_depth = ($depth + 1);
		
		 $classes = array($item -> classes[0],
		  ($display_depth >= 2 ? 'dropdown-submenu' : 'dropdown'),
               'menu-item menu-item-depth-' . $depth,
               'menu-item-' . esc_attr( $item->object ),
               'menu-item-edit-' . ( ( isset( $_GET['edit-menu-item'] ) && $item_id == $_GET['edit-menu-item'] ) ? 'active' : 'inactive'),
           );
  
$enble_submenus="no";
$submenu_nav=ot_get_option("enable_submenus_navigation");
if(isset($submenu_nav[0]) && $submenu_nav[0]=="yes"){$enble_submenus="yes";}


$section_perma="panelBlock";
	if(ot_get_option("section_links")){$section_perma=ot_get_option("section_links");}
	
	
	if (($depth >= 1 || (in_array('menu-item-custom', $classes, true))) && $enble_submenus!="yes"){
		$output .= $indent . '<li class=" '.esc_attr(implode(' ', $classes)).' "  >';
	}else	{	global $menu_counter;		$menu_counter++;
	$output .= $indent . '<li class="  section_navi '.esc_attr(implode(' ', $classes)).' "  data-menuanchor="'.$section_perma.''.esc_attr($menu_counter).'" data-menuanchor_idx="'.esc_attr($menu_counter).'">';
	}

	if ($depth != 0) {$description = $append = $prepend = "";
	}
	$item_output = $args -> before;
	


$frontpage_id = get_option('page_on_front');

	if (($depth >= 1 || (in_array('menu-item-custom', $classes, true)) ||  $frontpage_id==0 ) && ($enble_submenus=="no")){	$item_output .= '<a ' . $attributes . '>';}
	
	else{
		if($frontpage_id==get_the_ID()){
			//$item_output .= '<a href="#'.$section_perma.'' . esc_attr($menu_counter).'" >';
			$item_output .= '<a href="javascript:;" >';
		}
		else{
			$item_output .= '<a href="'.get_home_url().'#'.$section_perma.'' . esc_attr($menu_counter).'" >';
		}
	}

	$item_output .= $args -> link_before . apply_filters('the_title', $item -> title, $item -> ID);
	$item_output .= '</a>';
	$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}

	//end_el function
	function end_el(&$output, $item, $depth = 0, $args = array()) {
	$output .= "</li>\n";
	}
}

$home_counter=0;
class olida_description_walker3 extends Walker_Nav_Menu {
		//start_lvl function
	 function start_lvl( &$output, $depth = 0, $args = array() ) {
	// build html
	$output .= "";
	}
	 
		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $wp_query;
		
		
		
		$indent = ($depth) ? str_repeat("\t", $depth) : '';
		$class_names = $value = '';
		$classes = empty($item -> classes) ? array() : (array)$item -> classes;
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
		$class_names = ' class="' . esc_attr($class_names) . '"';

		$page_id = $item -> object_id;
		
	$flv_page_title=olida_pathauto_cleanstring(strtolower(str_replace(' ','',$item -> title)));
	$is_set_home_page=get_option('page_on_front', true);	
	$home_page_title=olida_pathauto_cleanstring(strtolower(str_replace(' ','',get_the_title($is_set_home_page))));
	$blog_page_title=olida_pathauto_cleanstring(strtolower(str_replace(' ','',get_the_title( get_option('page_for_posts', true)))));
	$homepage_content=get_option('show_on_front');


	$flv_class='';


 $bg_col=get_post_meta($page_id, 'dbt_bgcolor', TRUE );
 $tx_col=get_post_meta($page_id, 'dbt_txcolor', TRUE );
 $bg_img=get_post_meta($page_id, 'dbt_bgimg', TRUE );
 
  $ov_col=get_post_meta($page_id, 'dbt_ovcolor', TRUE );
  $ov_opacity=get_post_meta($page_id, 'dbt_ov_opacity', TRUE );
  $wide=get_post_meta($page_id, 'dbt_wide_page', TRUE );
  
   $container="container";
   if($wide=="on")$container="container-fluid";


	if($item->type!="custom"){
		
		global $home_counter;
		$home_counter++;
	
	$output .= $indent . '<div id="' . esc_attr($flv_page_title) . '-section" class="section panel-'.esc_attr($home_counter).' '.esc_attr($flv_class).' ' . esc_attr($flv_page_title) . '-section"  data-color="'.esc_attr($tx_col).'" data-bg-color="'.esc_attr($bg_col).'" data-image-src="'.esc_attr($bg_img).'"> ';
	
	if($args -> before){$item_output = $args -> before;	}else{$item_output ="";	}

	if($ov_col!=''){$item_output .= '<div class="overlay" data-bg-color="'.esc_attr($ov_col).'" data-opacity="'.esc_attr($ov_opacity).'"></div>';}
	
	

	
	$template = get_post_meta( $item -> object_id, '_wp_page_template', true );
	$side = get_post_meta($item -> object_id, 'dbt_sidebar', TRUE);

$out_content='';

if($blog_page_title==$flv_page_title && $template!="sections-template.php" &&  $homepage_content=="posts" ){
$out_content.='<div class="'.esc_attr($container).'">'.do_shortcode(olida_getPageContent($item -> object_id)) .'</div>';
}else{
$out_content.=do_shortcode(olida_getPageContent($item -> object_id));
}


//blog page
$page_for_posts = get_option( 'page_for_posts' );

//see what templates page has
//blog
if($page_for_posts==$item -> object_id){
		$item_output .= '<div class="'.esc_attr($container).'">'.do_shortcode('[owl_slider_posts]').'</div>';
		
}elseif($template=="page-sidebar-right.php"){
		$item_output .= '<div class="'.esc_attr($container).'"><div class="col-lg-9 col-md-9 col-sm-9">'.flv_formatter($out_content).'</div><div class="col-lg-3 col-md-3 col-sm-3">';
		$side1=olida_get_dynamic_sidebar($side);
		$item_output .= $side1.'</div>';
		$item_output .= '</div>';
		}
elseif($template=="page-sidebar-left.php"){
		$item_output .= '<div class="'.esc_attr($container).'"><div class="col-lg-3 col-md-3 col-sm-3">';
		$side1=olida_get_dynamic_sidebar($side);
		$item_output .= $side1.'</div><div class="col-lg-9 col-md-9 col-sm-9">'.flv_formatter($out_content).'</div> ';
		$item_output .= '</div>';
		}
elseif($template=="portfolio-template.php"){
		$item_output .= '<div class="'.esc_attr($container).'">'.do_shortcode('[latest_projects]').'</div>';
		}
elseif($template=="default" || $template=="homepage-template.php"){
	$item_output .=  '<div class="'.esc_attr($container).'">'.$out_content.'</div>';
}
else { $item_output .=  flv_formatter($out_content);
}


		$item_output .= "</div>";
		}

if(!isset($item_output))$item_output='';

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
	//end_el function
	function end_el(&$output, $item, $depth = 0, $args = array()) {

	}
}

/* Custom code goes below this line. */

function olida_create_crop($name,$wid,$theight,$cropp){ 
		add_image_size( $name,$wid, $theight,$cropp);
}

if(!function_exists('olida_get_dynamic_sidebar')){
	function olida_get_dynamic_sidebar($index = 1)
	{
		$sidebar_contents = "";
		ob_start();
		dynamic_sidebar($index);
		$sidebar_contents = ob_get_clean();
		return $sidebar_contents;
	}
}
		
function olida_gallery_transform($text){
		$fout='';
		if($text!=' '){
		$fout=str_replace ('", "', "</span><span> ", $text);
		$fout=substr_replace($fout,'</span>', -3, -1);
		$fout=substr_replace($fout,'<span>', 0, 2);
		}
		return $fout;
	}

function olida_pagination($pages = '', $range = 2) {
		$showitems = ($range * 2) + 1;
		
		global $paged;
		if (empty($paged))
		   { $paged = 1;}
		
		if ($pages == '') {
		    global $wp_query;
		    $pages = $wp_query->max_num_pages;
		    if (!$pages) {
		        $pages = 1;
		    }
		}
	
		if($wp_query->max_num_pages > 1){	
			 echo '
			 <div class="pagination-wrapper desktop-display">
		<div class="container">
			<nav class="pagination">';
		
		echo '<ul>';}
		if (1 != $pages) {
		    for ($i = 1; $i <= $pages; $i++) {
		        if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
		            echo ($paged == $i) ? "<li class='pagination-active'><a>" . esc_html($i) . "</a></li>" : "<li><a href='" . esc_url(get_pagenum_link($i)) . "' class='inactive' >" . esc_html($i) . "</a></li>";
		        }
		    }
		}
		
		
		if($wp_query->max_num_pages > 1){
			
		echo "</ul>";
			 echo ' </nav> 
			 </div>
                </div>';
		}
}

function olida_pagination2($pages = '', $range = 2) {
		$showitems = ($range * 2) + 1;
		
		global $paged;
		if (empty($paged))
		   { $paged = 1;}
		
		if ($pages == '') {
		    global $wp_query;
		    $pages = $wp_query->max_num_pages;
		    if (!$pages) {
		        $pages = 1;
		    }
		}
	
		echo '<ul>';
		if (1 != $pages) {
		    for ($i = 1; $i <= $pages; $i++) {
		        if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
		            echo ($paged == $i) ? "<li class='pagination-active'><a>" . esc_html($i) . "</a></li>" : "<li><a href='" . esc_url(get_pagenum_link($i)) . "' class='inactive' >" . esc_html($i) . "</a></li>";
		        }
		    }
		}
		
		echo "</ul>";
		

}

function olida_get_excerpt($idd){
		$excerpt = get_the_excerpt();
		$aut='';
		if($excerpt!='')
		{$aut=$excerpt;
		}
		else {
		$content = get_the_content($idd);
			$aut=$content;
		}
		if($excerpt=='' && $content=='')  $aut='';
		return $aut;
}

function olida_closetags($html) {
    preg_match_all('#<(?!meta|img|br|hr|input\b)\b([a-z]+)(?: .*)?(?<![/|/ ])>#iU', $html, $result);
    $openedtags = $result[1];
    preg_match_all('#</([a-z]+)>#iU', $html, $result);
    $closedtags = $result[1];
    $len_opened = count($openedtags);
    if (count($closedtags) == $len_opened) {
        return $html;
    }
    $openedtags = array_reverse($openedtags);
    for ($i=0; $i < $len_opened; $i++) {
        if (!in_array($openedtags[$i], $closedtags)) {
            $html .= '</'.$openedtags[$i].'>';
        } else {
            unset($closedtags[array_search($openedtags[$i], $closedtags)]);
        }
    }
    return $html;
} 

function olida_get_excerpt2($idd,$content,$perma,$exce,$def){
		$aut='';
		if($def!='')
		$aut1=$def;
		else{
		//$aut=htmlentities($content);
		$aut=htmlentities($content, null, "UTF-8");
		if($content=='')  $aut='';
		if( substr($aut, 0, 5)=="Tweet")$aut=substr_replace($aut,'', 0, 5);
		if( substr($aut, -5, 5)=="Tweet")$aut=substr_replace($aut,'', -5, 5);
		if($aut=="Tweet")$aut='';
		$aut1=$aut;
		if(str_word_count($aut1)>$exce)
		{
		$aut1=	implode(' ',array_slice(explode(' ',$aut),0,$exce));
		$andmore="[...]";
		if(get_option_tree("blog_excerpt_andmore")!='')$andmore=get_option_tree("blog_excerpt_andmore");
		$aut1.=" <a href='".$perma."' title='read more!'>".$andmore."</a>";}
		}
		$aut1=html_entity_decode($aut1 , null, "UTF-8");
		return $aut1;
	}

function olida_custom_wp_link_pages( $args = '' ) {
		$defaults = array(
		'before' => '<p class="pagination">' . __( 'Pages:',"wizard" ),
		'after' => '</p>',
		'text_before' => '',
		'text_after' => '',
		'next_or_number' => 'number',
		'nextpagelink' => __( 'Next page',"wizard"  ),
		'previouspagelink' => __( 'Previous page' ,"wizard" ),
		'pagelink' => '%',
		'echo' => 1
		);
		
		$r = wp_parse_args( $args, $defaults );
		$r = apply_filters( 'wp_link_pages_args', $r );
		extract( $r, EXTR_SKIP );
		
		global $page, $numpages, $multipage, $more, $pagenow;
		
		$output = '';
		if ( $multipage ) {
		if ( 'number' == $next_or_number ) {
		$output .= $before;
		for ( $i = 1; $i < ( $numpages + 1 ); $i = $i + 1 ) {
		$j = str_replace( '%', $i, $pagelink );
		$output .= ' ';
		if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
		{$output .= _wp_link_page( $i );}
		else
		{$output .= '<span class="active">';}
		
		$output .= $text_before . $j . $text_after;
		if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
		{$output .= '</a>';}
		else
		{$output .= '</span>';}
		}
		$output .= $after;
		} else {
		if ( $more ) {
		$output .= $before;
		$i = $page - 1;
		if ( $i && $more ) {
		$output .= _wp_link_page( $i );
		$output .= $text_before . $previouspagelink . $text_after . '</a>';
		}
		$i = $page + 1;
		if ( $i <= $numpages && $more ) {
		$output .= _wp_link_page( $i );
		$output .= $text_before . $nextpagelink . $text_after . '</a>';
		}
		$output .= $after;
		}
		}
		}
		if ( $echo )
		{echo $output;}
		
		return $output;
	}

function olida_pathauto_cleanstring($string)
{
    $url = $string;
    $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url); // substitutes anything but letters, numbers and '_' with separator
    $url = trim($url, "-");
    $url = iconv("utf-8", "us-ascii//TRANSLIT", $url); // TRANSLIT does the whole job
    $url = strtolower($url);
    $url = preg_replace('~[^-a-z0-9_]+~', '', $url); // keep only letters, numbers, '_' and separator
    return $url;
}

if(!function_exists('olida_getPageContent')){
function olida_getPageContent($pageId)
{
if(!is_numeric($pageId))
{
return;
}
global $wpdb;
$nsquery = 'SELECT DISTINCT * FROM ' . $wpdb->posts .
' WHERE ' . $wpdb->posts . '.ID=' . $pageId;
$post_data = $wpdb->get_results($nsquery);
if(!empty($post_data))
{
foreach($post_data as $post)
{
$text_out=nl2br($post->post_content);
// $text_out=str_replace(']]>',']]&gt;', $text_out);
//  $text_out = strip_tags($text_out);
return $text_out;
}
}
}
	}

function flv_formatter($content) {
    $new_content = '';
    $pattern_full = '{(\[raw\].*?\[/raw\])}is';
    $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
    $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

    foreach ($pieces as $piece) {
        if (preg_match($pattern_contents, $piece, $matches)) {
          $new_content .= $matches[1];
        } else {
			  $new_content .=$piece;
        }
    }
	
    return $new_content;
	}

function olida_get_page_id($page_name){
		global $wpdb;
		$page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_title = '".$page_name."' AND post_type='page'");
		return $page_id;
	}

if(!function_exists('olida_get_dynamic_sidebar')){
	function olida_get_dynamic_sidebar($index = 1)
	{
		$sidebar_contents = "";
		ob_start();
		dynamic_sidebar($index);
		$sidebar_contents = ob_get_clean();
		return $sidebar_contents;
	}
}

function olida_comment($comment, $args, $depth) {
		global $comm_count,$comm_count_odd,$counter;		$comm_count++;
		
          $GLOBALS['comment'] = $comment;

        switch ($comment->comment_type) :
            case '' :

		if($comm_count==$counter*$comm_count_odd){
			
			$comm_count_odd++;
			
		}	
		
		if($comm_count>=$counter){$comm_class="hidden_comments hidden_comments".$comm_count_odd;} else {$comm_class="";}
		?>
		<li class="<?php echo esc_attr($comm_class);?>">
	<div class="comment-wrapper">
		
		<div class="comment-avatar">
        <figure>
            <?php	$avatar=get_avatar($comment, 100, THEME_URL . 'images/2.png');          echo $avatar;    ?>               
        </figure>
    </div>
    <div class="comment-detail">
        <div class="comment-name number">  <?php comment_author() ?> <span class="comment-date"><?php  printf(get_comment_date('F j Y')); ?></span></div>
        <div class="comment-description">
          <?php comment_text();?>
        </div>	
        <div class="comment-reply">
      <?php comment_reply_link(array_merge($args, array('reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?> 
      </div>
      <?php if ($comment->comment_approved == '0'){?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', "wizard"); ?></em>
		<?php } ?> 
    </div>
                                        
</div>
		<?php
		break;
		case 'pingback' :
		case 'trackback' :
		?>
		<li class="post pingback">
		<p><?php _e('Pingback:', "wizard"); ?>
		<?php edit_comment_link(__('(Edit)', "wizard"), ' '); ?></p>
		<?php
		break;
		endswitch;

}

/* Twitter WIDGET	*/
function olida_getTweetss($count = 20, $username = false, $options = false) {

		  $config['key'] = $options['key'];
		  $config['secret'] = $options['secret'];
		  $config['token'] = $options['token'];
		  $config['token_secret'] = $options['token_secret'];
		  $config['screenname'] = $options['screenname'];
		  
		  $config['cache_expire'] = intval(get_option('tdf_cache_expire'));
		  if ($config['cache_expire'] < 1) {$config['cache_expire'] = 3600;}
		  $config['directory'] = plugin_dir_path(__FILE__);
		  
		  $obj = new StormTwitter($config);
		  $res = $obj->getTweets($count, $username, $options);
		  update_option('tdf_last_error',$obj->st_last_error);
		  return $res;
}

function olida_make_links_clickable($text){
 		return preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Z?-??-?()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1">$1</a>', $text);
}

function olida_time_ago($date){
		if(empty($date)) {return "No date provided";}
		$periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
		$lengths = array("60","60","24","7","4.35","12","10");
		$now = time();
		$unix_date = strtotime($date);
		if(empty($unix_date)) {return "Bad date"; }
		if($now > $unix_date) {$difference = $now - $unix_date;$tense = "ago";} else {
		$difference = $unix_date - $now;$tense = "from now";}
		 
		for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
		$difference /= $lengths[$j];}
		$difference = round($difference);
		if($difference != 1) { 
		$periods[$j].= "s";
		 }
		return "$difference $periods[$j] {$tense}";
}

function olida_send_message($maill){
	
		 $name=$_POST['flvname']; 
		 $mail_from=$_POST['flvemail'];  
		 $msg=$_POST['flvmessage'];
		 $subj=$_POST['flvsubject']; 	
		 
		$target = $maill;	 $message=''; $subject='';
		
		$headers = 'From: WebSite - '.$_POST['blog_name'].'  ';

		$message.='Sender\'s Name: ';     $message.=$name;     $message.="\n\n";
		$message.='Sender\'s Email: ';     $message.=$mail_from;     $message.="\n\n";
		 
	  $message.='Sender\'s Subject: ';      $message.=$subj;        $message.="\n\n";   
	  
	$message.='Sender\'s Message: ';     $message.=$msg;	 
	
	$subject.=$subj;  
		mail($target,$subject,$message,$headers);
    }

function olida_isMobile()
	{   
		if(preg_match('/(huawei|alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT']))
		return true;
		else
		return false;
	}
	
function olida_send_subs_mail($maill){
		 $email_news=$_POST['news_email'];	
		 $email_it_to_news = $maill;	$email_from_news = $email_news;
		 $email_subject_news = "Newsletter subscriber: '".stripslashes($email_news);
		 $email_message_news= "New subscriber was added";$email_message_news .="' on ".date("d/m/Y")." at ".date("H:i")."\n\n";
		 $email_message_news .= "email is: ".stripslashes($email_news);$headers_news = 'From: '.$email_from_news."\r\n" .  'Reply-To: '.$email_from_news."\r\n" .  'X-Mailer: PHP/' . phpversion();	
		 mail($email_it_to_news, $email_subject_news, $email_message_news, $headers_news);  
}

if ( ! function_exists( 'wizard_hex2rgb' ) ) {
function wizard_hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = $r.",".$g.",".$b;
   return $rgb; // returns an array with the rgb values
}
}

function flv_multiexplode ($delimiters,$string) {
    
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

function get_attachment_id_from_src ($image_src) {
	global $wpdb;
	$query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
	$id = $wpdb->get_var($query);
	return $id;
}

function wizard_get_attachment_id_from_url( $attachment_url = '' ) {
 
	global $wpdb;
	$attachment_id = false;
 
	// If there is no url, return.
	if ( '' == $attachment_url )
		return;
 
	// Get the upload directory paths
	$upload_dir_paths = wp_upload_dir();
 
	// Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
	if ( false !== strpos( $attachment_url, $upload_dir_paths['baseurl'] ) ) {
 
		// If this is the URL of an auto-generated thumbnail, get the URL of the original image
		$attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );
 
		// Remove the upload path base directory from the attachment URL
		$attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );
 
		// Finally, run a custom database query to get the attachment ID from the modified attachment URL
		$attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url ) );
 
	}
 
	return $attachment_id;
}
function flv_port_generate_excerpt($text,$row){
    if(strlen($text)>$row){ $excerpt=substr($text, 0, $row); $excerpt.='...';}
    else $excerpt=$text;

  return $excerpt;
}
