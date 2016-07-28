<?php
/*
  Plugin Name: FLV Portfolio
  Description: Creates cool portfolios - Wizzard theme
  Version: 1.7.2
  Author: Fialovy
 */

$flv_path = plugins_url('', __FILE__) . '/';


$fialovy_gallery_nr = 10;

if ( ! class_exists( 'flvPortfolio' ) ) {
	
class flvPortfolio{
	
	function __construct() {
		
$flv_shortcode = 'portfolio';		
add_action('init', array(&$this, 'handle_init'),10);

add_shortcode($flv_shortcode, array(&$this, 'show_shortcode'));
add_shortcode('related_projects', 'related_projects_func');

add_shortcode('flv_' . $flv_shortcode, array(&$this, 'show_shortcode'));
$arg = array('description' => "my description", 'parent' => "cat_ID");

	
$fialovy_latest_nr=0;	
add_shortcode('latest_projects', 'latest_func');


//add_action('admin_menu' , array(&$this, 'flv_enable_pages'));
add_action('admin_init', array(&$this, 'handle_admin_init'));

	}
	
  public static function handle_init(){
        global $flv_path;
		
		  wp_enqueue_script('thickbox');
	      wp_enqueue_style('thickbox');
	      wp_enqueue_script('media-upload');
          wp_enqueue_script('jquery');

          $labels = array(
            'name' => 'Portfolio Items',
            'singular_name' => 'Portfolio Item'
          );
		  $options_new = get_option( 'flv_port_admin_settings' );
		  $slug="flv_portfolio";

		  
          $args = array(
            'labels' => $labels,
            'query_var' => true,
            'public' => true,
            'has_archive' => true, 
            'hierarchical' => false,
            'supports' => array('title','editor','thumbnail','comments','excerpt'),
            'taxonomies' =>array('category','post_tag','portfolio_category'),
            'rewrite' => array( 'slug' => $slug, 'with_front' => true)
          ); 

 register_post_type('flv_portfolio',$args);
 
    }
      public static  function show_shortcode($atts){
   
       extract( shortcode_atts( array(
        'categories'=>'categories',
        'category_ids'=>'categories',
        'style'=>'categories',
        'source'=>'source',
        'order'=>'asc',
        'orderby'=>'asc',
        'layout'=>'default',
        'columns'=>'4',
        'target'=>'_blank',
	), $atts ) );
	
 $columns=4; $source="flv_portfolio"; $order="asc"; $orderby="";$thumb_height="Custom Thumbnail Size";

	if(isset($atts['thumb_height']))$thumb_height=$atts['thumb_height'];
	if(isset($atts['source']) && ($atts['source']=="post" || $atts['source']=="posts" ))$source="post";
	if(isset($atts['source']) && ($atts['source']=="wordpress" || $atts['source']=="gallery" ))$source="wordpress";
	if(isset($atts['order']))$order=$atts['order'];
	if(isset($atts['orderby']))$orderby=$atts['orderby'];
	if(isset($atts['layout']))$shortcode_layout=$atts['layout'];else $shortcode_layout="default";
	if(isset($atts['columns']))$columns=$atts['columns'];else $columns=4;
	
	if(isset($atts['target']))$target=$atts['target'];else $target="_blank";

	
$i=0;$j=0;$k=0;$l=0;$aux=0;
	if(isset($atts['category_ids']) && $atts['category_ids']!=''){$portfolio_category_ids = explode(", ",$atts['category_ids']);}
	if(isset($atts['categories']) && $atts['categories']!=''){ $portfolio_category = explode(", ",$atts['categories']);
	if($portfolio_category[0][0]==" ")$portfolio_category[0]= substr($portfolio_category[0], 1);
	}	else{$portfolio_category=array();$portfolio_category[0]="anything";	}

 
$options_new = get_option( 'flv_port_admin_settings' );
	  
global $fialovy_gallery_nr;$fialovy_gallery_nr++;

$items_column=$columns;$inline=0;$fialovy_gallery_item_nr=0;$gal_nr=0;$gals=array();   $foutput="";
   

if($source=="post" || $source=="flv_portfolio")	 /////////////////////////////================================================normal	 
       {
       	
if($shortcode_layout=="masonry"){	

    $foutput.=' <div class="portfolio-panel1">';
    } else {
     $foutput.=' <div class="portfolio-page">';
    }
		
       	
		    $args=array('post_type'=>$source,
            'posts_per_page' => '1500',
            'order'=>$order,
            'orderby'=>$orderby
            );
        $wquery = new WP_Query( $args );

   $foutput3='';

if($portfolio_category[0]!="anything"){		
     $foutput.='<div class="portfolio-filter">
                    	<ul>
				<li  class="selected filter" data-category="cat-all">'.__('All Categories', 'wizard').'</li>';							
foreach($portfolio_category as $category){
	if($category!=''){
$foutput.='<li class="filter" data-category="cat-'.get_cat_ID($category).'">'.$category.'</li>';
}
}				
$foutput.='</ul></div>';
} 

if($columns==2){
$foutput.='<div class="flv_container2 portfolio-item gallery'.$fialovy_gallery_nr.'" >	<div class="megafolio-container norounded noborder">';	
}elseif($columns==3){
$foutput.='<div class="flv_container3 portfolio-item gallery'.$fialovy_gallery_nr.'" >	<div class="megafolio-container norounded noborder">';
}elseif($columns==5){
$foutput.='<div class="flv_container5 portfolio-item gallery'.$fialovy_gallery_nr.'" >	<div class="megafolio-container norounded noborder">';
}elseif($columns==6){
$foutput.='<div class="flv_container6 portfolio-item gallery'.$fialovy_gallery_nr.'" >	<div class="megafolio-container norounded noborder">';
}else{
$foutput.='<div class="flv_container4 portfolio-item gallery'.$fialovy_gallery_nr.'" >	<div class="megafolio-container norounded noborder">';	   	
}

	
$flv_id=0;
    $foutput2='';
	 $foutput3='';
	 
		if(count($wquery->posts)==0){ $foutput.="Items not found";}
		 else     
		foreach($wquery->posts as $port){      	 $ok=0; $postid = $port->ID;
        if($portfolio_category[0]=="anything"){	$ok=1;	}
		else{if(isset($portfolio_category_ids))
			$ids=count($portfolio_category_ids);else $ids=0;
		if($ids){$post_categories = wp_get_post_categories( $postid );
            foreach($post_categories as $c){     $cat = get_category( $c );
			foreach($portfolio_category_ids as &$v) {  $v = strtolower($v);}if(in_array($cat->cat_ID,$portfolio_category_ids))    {  $ok++;}          }
            }else{   $post_categories = wp_get_post_categories( $postid );
			foreach($portfolio_category as &$v) {  $v = strtolower($v);}   foreach($post_categories as $c){    $cat = get_category( $c );	if(in_array(strtolower($cat->name),$portfolio_category)) {  $ok++;}}
			}	}      
        
if($ok!=0){

	  $flv_id ++;
	$lightbox_type=get_post_meta($postid, 'meta_post_lightbox_type', true);
	$thumb_lightbox_video_type = get_post_meta($postid, 'meta_post_lightbox_video_type', true);
	if($lightbox_type=='')$lightbox_type="none";
	
    $page_url=get_permalink($postid);

    $aux = (wp_get_attachment_image_src( get_post_thumbnail_id($postid),'large')); 
	if($aux[0]=='')	$aux[0]=THEME_URL. 'images/blank.png';
	$meta_bigimage = get_post_meta($postid, 'flv_bigimage', true);   
	$post_cats='';	$post_categ=wp_get_post_categories( $postid );
	$cat_nr=count($post_categ);for($g=0;$g<$cat_nr;$g++){	 $cat = get_category($post_categ[$g] );	$post_cats.=$cat->name;	if($g!=$cat_nr-1)	{$post_cats.=" / ";}	}

	$fialovy_gallery_item_nr++;

	$postid = $port->ID;
	$lightbox_type=get_post_meta($postid, 'meta_post_lightbox_type', true);
	$thumb_lightbox_video_type = get_post_meta($postid, 'meta_post_lightbox_video_type', true);

	if($lightbox_type=='')$lightbox_type="none";





$foutput.='<div class="mega-entry cat-all ';
                
	
	 $defaults = array('fields' => 'ids');      $post_categories = wp_get_post_categories( $postid ,$defaults);         

  foreach($post_categories as $c){
                    $cat = get_category( $c );
	
			if(isset($ids) && $ids!=''){
				if(in_array($cat->cat_ID,$portfolio_category_ids))
				{ 
			   $foutput.=' cat-'.$cat->cat_ID;
			  }
			    }
				else{
                    $cat = get_category( $c );
				if(in_array(strtolower($cat->name),$portfolio_category))
			    $foutput.=' cat-'. get_cat_ID( $cat->name);	
				}
            }  
  
   if($meta_bigimage==''){$meta_bigimage=$aux[0];}
$foutput.='" id="entry-'.$flv_id.'" data-src="'.$meta_bigimage.'" data-width="800" data-height="527">';


$size="full";



	

$foutput.='
<div class="mega-hover">
         
    <div class="mega-hovertitle">'.__($port->post_title).'
        <div class="mega-hoversubtitle">'.__($port->post_excerpt).'</div>
    </div>

    <a target="'.$target.'" href="'.$page_url.'">
    	<div class="mega-hoverlink"><i class="fa fa-link"></i></div>
    </a>';

$class='';

if($lightbox_type=="image")	{
	
	$foutput.='<a href="'.$meta_bigimage.'"  title="'.__($port->post_title).'" class="'.$class.' portfolio fancybox">';
	}
elseif($lightbox_type=="gallery"){
	$images_gallery = get_post_meta($postid, 'flv_gallery', true);
	$gal_nr=$postid;
	$gals[$gal_nr]=substr(str_replace(", ","",$images_gallery), 0, -1);
    $pieces = explode('"', $gals[$gal_nr]);
	
	$foutput.='<script type="text/javascript">jQuery(document).ready(function($) {
	jQuery(".manual'.$gal_nr.'").click(function() {	jQuery.fancybox([';
		for($h =0;$h<count($pieces);$h++)
		if($h%2!=0)
		if($h==count($pieces)-1)
		$foutput.="'".$pieces[$h]."'";
		else
		$foutput.="'".$pieces[$h]."', ";
	$gals[$gal_nr].
	$foutput.='], {"padding"		: 0,"transitionIn"		: "none","transitionOut"		: "none","type"              : "image","changeFade"        : 0, helpers: {  overlay: { locked: false  }  }		});});});</script>';
	$foutput.='<a class="'.$class.' portfolio manual'.$gal_nr.'"  title="'.__($port->post_title).'" href="javascript:;">';	
	}				 
elseif($lightbox_type=="video")	{
		if($thumb_lightbox_video_type=="youtube"){
		$thumb_lightbox_youtube_id = get_post_meta($postid, 'meta_post_lightbox_youtube_id', true);
		$foutput.='<a title="'.__($port->post_title).'" class="'.$class.' various fancybox.iframe portfolio" href="http://www.youtube.com/embed/'.$thumb_lightbox_youtube_id.'?autoplay=1">';
         }
		elseif($thumb_lightbox_video_type=="vimeo"){
			$thumb_lightbox_vimeo_id= get_post_meta($postid, 'meta_post_lightbox_vimeo_id', true);
		$foutput.='<a title="'.__($port->post_title).'" class="'.$class.' various fancybox.iframe portfolio" href="http://player.vimeo.com/video/'.$thumb_lightbox_vimeo_id.'?autoplay=true">';
		}
		elseif($thumb_lightbox_video_type=="flash"){
			$thumb_lightbox_flash_id= get_post_meta($postid, 'meta_post_lightbox_flash_id', true);
		$foutput.='<a title="'.__($port->post_title).'" class="various6" href="'.$thumb_lightbox_flash_id.'">';
		}
		elseif($thumb_lightbox_video_type=="external_site"){
		$thumb_lightbox_external_site= get_post_meta($postid, 'meta_post_lightbox_external_site', true);
		$thumb_lightbox_inline_width_ext="600";
			$thumb_lightbox_inline_w_ext= get_post_meta($postid, 'meta_post_lightbox_window_w_ext', true);
			if($thumb_lightbox_inline_w_ext!='')$thumb_lightbox_inline_width_ext=$thumb_lightbox_inline_w_ext;
			$thumb_lightbox_inline_height_ext="400";
			$thumb_lightbox_inline_h_ext= get_post_meta($postid, 'meta_post_lightbox_window_h_ext', true);
			if($thumb_lightbox_inline_h_ext!='')$thumb_lightbox_inline_height_ext=$thumb_lightbox_inline_h_ext;
		
		$idd=$fialovy_gallery_nr;$idd.=$flv_id;
		$inline++;	

		$foutput.='<a title="'.__($port->post_title).'" class="inline'.$inline.' fancybox.iframe"  href="'.$thumb_lightbox_external_site.'">';
		$foutput.='<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery(".inline'.$inline.'").fancybox({
					width		: '.$thumb_lightbox_inline_width_ext.',
					height		: '.$thumb_lightbox_inline_height_ext.',
					autoSize	: false,
					openEffect	: "elastic",
					closeEffect	: "none",
					autoDimensions:false
		});
		}); </script>';	
			
		}
		elseif($thumb_lightbox_video_type=="inline_content"){
			$thumb_lightbox_inline_content= get_post_meta($postid, 'meta_post_lightbox_inline_content', true);
			$thumb_lightbox_inline_width="600";
			$thumb_lightbox_inline_w= get_post_meta($postid, 'meta_post_lightbox_window_w', true);
			if($thumb_lightbox_inline_w!='')$thumb_lightbox_inline_width=$thumb_lightbox_inline_w;
			$thumb_lightbox_inline_height="400";
			$thumb_lightbox_inline_h= get_post_meta($postid, 'meta_post_lightbox_window_h', true);
			if($thumb_lightbox_inline_h!='')$thumb_lightbox_inline_height=$thumb_lightbox_inline_h;
	
		$idd=$fialovy_gallery_nr;$idd.=$flv_id;
		$inline++;
		$foutput2.='<div class="hide_flv" id="inline_'.$idd.'" >'.do_shortcode($thumb_lightbox_inline_content).'</div>';
		$foutput.='<a title="'.__($port->post_title).'"  class="inline'.$inline.'" href="#inline_'.$idd.'">';
		$foutput.='<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery(".inline'.$inline.'").fancybox({
					width		: '.$thumb_lightbox_inline_width.',
					height		: '.$thumb_lightbox_inline_height.',
					autoSize	: false,
					openEffect	: "elastic",
					closeEffect	: "none",
					autoDimensions:false
		});
		});</script>';
		
		}
		elseif($thumb_lightbox_video_type=="gmaps"){
			$thumb_lightbox_gmaps= get_post_meta($postid, 'meta_post_lightbox_gmaps', true);
			$idd=$fialovy_gallery_nr;$idd.=$flv_id;
			
	$latitude=get_post_meta($postid, 'meta_post_lightbox_lang', true);
	if($latitude=="")$latitude=-6.248411;
	$longitude=get_post_meta($postid, 'meta_post_lightbox_long', true);
	if($longitude=="")$longitude=106.833801;

	$foutput2.='<div id="inline'.$idd.'"  class="hide_flv" style="width:100%; height:100%;overflow:hidden;">';
	$foutput2.='<object width="100%" height="100%" data="http://maps.google.com/maps?f=q&source=s_q&hl=en';
    $foutput2.='&geocode=&q=centre&sll='.$latitude.','.$longitude.'&sspn=0.006328,0.017885&ie=UTF8&spn=0.032789,0.051745&output=embed"></object><br><small><a href="http://maps.google.com/maps?f=q&source=s_q&hl=en';
    $foutput2.='&geocode=&q=centre&sll='.$latitude.','.$longitude.'&sspn=0.006328,0.017885&ie=UTF8&spn=0.032789,0.051745&output=embed"></a></small></div>';

		$foutput.='<a title="'.__($port->post_title).'" class="various1" href="#inline'.$idd.'">';
		}
	 }  
elseif($lightbox_type=="external")	{
		$urll=get_post_meta($postid, 'flv_external_url', true);
	$foutput.='<a title="'.__($port->post_title).'" class="portfolio" target="'.$target.'" href="'.$urll.'">';
	 } 

$foutput.='<div class="mega-hoverview"><i class="fa fa-search-plus"></i></div>
    </a>
         
</div>
</div>';
	
	}
   }
					
$foutput.='</div></div></div>';	

$foutput.=$foutput3;
$foutput.=$foutput2;
		 }

      return $foutput;
    }
    
        public static  function handle_admin_init(){
       add_meta_box('screen_options', 'Portfolio Item Settings', 'flv_screen_opt', 'flv_portfolio', 'normal', 'high');
       
		register_setting( 'flv_port_admin_settings', 'flv_port_admin_settings', array('flvPortfolio', 'settings_validate'));

	
	add_settings_section( 'port_settings', __( '', 'fialovy' ), array('flvPortfolio', 'section_port_settings' ),'flv_port_admin_settings');
	
	add_settings_field( 'port_featured_height', __( '', 'fialovy' ), array('flvPortfolio', 'section_featured_height' ),'flv_port_admin_settings', 'port_settings');
	add_settings_field( 'port_featured_width', __( '', 'fialovy' ), array('flvPortfolio', 'section_featured_width' ),'flv_port_admin_settings', 'port_settings');
	
	add_settings_field( 'port_2_col_height', __( '', 'fialovy' ), array('flvPortfolio', 'section_port_2_height' ),'flv_port_admin_settings', 'port_settings');
	add_settings_field( 'port_2_col_width', __( '', 'fialovy' ), array('flvPortfolio', 'section_port_2_width' ),'flv_port_admin_settings', 'port_settings');
	
	add_settings_field( 'port_3_col_height', __( '', 'fialovy' ), array('flvPortfolio', 'section_port_3_height' ),'flv_port_admin_settings', 'port_settings');
	add_settings_field( 'port_3_col_width', __( '', 'fialovy' ), array('flvPortfolio', 'section_port_3_width' ),'flv_port_admin_settings', 'port_settings');
	
	add_settings_field( 'port_4_col_height', __( '', 'fialovy' ), array('flvPortfolio', 'section_port_4_height' ),'flv_port_admin_settings', 'port_settings');
	add_settings_field( 'port_4_col_width', __( '', 'fialovy' ), array('flvPortfolio', 'section_port_4_width' ),'flv_port_admin_settings', 'port_settings');
	
	add_settings_field( 'port_5_col_height', __( '', 'fialovy' ), array('flvPortfolio', 'section_port_5_height' ),'flv_port_admin_settings', 'port_settings');
	add_settings_field( 'port_5_col_width', __( '', 'fialovy' ), array('flvPortfolio', 'section_port_5_width' ),'flv_port_admin_settings', 'port_settings');
	

	 }

public static function settings_validate($input) {

			return $input;
		}
 
public static  function flv_enable_pages(){
   	    $page_title = __('Portfolio Settings', 'fialovy');
		$menu_title = __('Settings', 'fialovy');
		$capability = 'manage_options';
		$function =  array( 'flvPortfolio', 'flv_enable_settings');
		$parent_slug='edit.php?post_type=flv_portfolio';
add_submenu_page($parent_slug, $page_title, $menu_title, $capability, basename(__FILE__), $function);

   }
   
/* height */
public static  function section_port_settings() 	{}

public static function section_featured_height() 	{ $options = get_option( 'flv_port_admin_settings' );   $value='';if(isset($options['port_featured_height'])) {$value=$options['port_featured_height'];}   ?>
	 <tr> <th scope="row">Portfolio Latest Projects - Image Height:</th>   <td><input type="text" name="flv_port_admin_settings[port_featured_height]" value="<?php echo esc_attr($value); ?>" /> <span class="desc">(default: 375)</span></td> </tr>    	    <?php		}

public static function section_port_2_height() 	{ $options = get_option( 'flv_port_admin_settings' );   $value='';if(isset($options['port_2_col_height'])) {$value=$options['port_2_col_height'];}   ?>
	 <tr> <th scope="row">Portfolio 2 Columns - Image Height:</th>   <td><input type="text" name="flv_port_admin_settings[port_2_col_height]" value="<?php echo esc_attr($value); ?>" /> <span class="desc">(default: 445)</span></td> </tr>    	    <?php		}

public static function section_port_3_height() 	{ $options = get_option( 'flv_port_admin_settings' );   $value='';if(isset($options['port_3_col_height'])) {$value=$options['port_3_col_height'];}   ?>
	 <tr> <th scope="row">Portfolio 3 Columns - Image Height:</th>  <td><input type="text" name="flv_port_admin_settings[port_3_col_height]" value="<?php echo esc_attr($value); ?>" /> <span class="desc">(default: 555)</span></td> </tr>    	    <?php		}

public static function section_port_4_height() 	{ $options = get_option( 'flv_port_admin_settings' );   $value='';if(isset($options['port_4_col_height'])) {$value=$options['port_4_col_height'];}   ?>
	 <tr> <th scope="row">Portfolio 4 Columns - Image Height:</th>  <td><input type="text" name="flv_port_admin_settings[port_4_col_height]" value="<?php echo esc_attr($value); ?>" /> <span class="desc">(default: 240)</span></td> </tr>    	    <?php		}

public static function section_port_5_height() 	{ $options = get_option( 'flv_port_admin_settings' );   $value='';if(isset($options['port_5_col_height'])) {$value=$options['port_5_col_height'];}   ?>
	 <tr> <th scope="row">Portfolio 5 Columns - Image Height:</th>  <td><input type="text" name="flv_port_admin_settings[port_5_col_height]" value="<?php echo esc_attr($value); ?>" /> <span class="desc">(default: 240)</span></td> </tr>    	    <?php		}




/* wdith */

public static function section_featured_width() 	{ $options = get_option( 'flv_port_admin_settings' );   $value='';if(isset($options['port_featured_width'])) {$value=$options['port_featured_width'];}   ?>
	 <tr> <th scope="row">Portfolio Latest Projects - Image Width:</th>   <td><input type="text" name="flv_port_admin_settings[port_featured_width]" value="<?php echo esc_attr($value); ?>" /> <span class="desc">(default: 500)</span></td> </tr>    	    <?php		}

public static function section_port_2_width() 	{ $options = get_option( 'flv_port_admin_settings' );   $value='';if(isset($options['port_2_col_width'])) {$value=$options['port_2_col_width'];}   ?>
	 <tr> <th scope="row">Portfolio  2 Columns - Image Width:</th>   <td><input type="text" name="flv_port_admin_settings[port_2_col_width]" value="<?php echo esc_attr($value); ?>" /> <span class="desc">(default: 555)</span></td> </tr>    	    <?php		}

public static function section_port_3_width() 	{ $options = get_option( 'flv_port_admin_settings' );   $value='';if(isset($options['port_3_col_width'])) {$value=$options['port_3_col_width'];}   ?>
	 <tr> <th scope="row">Portfolio 3 Columns - Image Width:</th>  <td><input type="text" name="flv_port_admin_settings[port_3_col_width]" value="<?php echo esc_attr($value); ?>" /> <span class="desc">(default: 555)</span></td> </tr>    	    <?php		}

public static function section_port_4_width() 	{ $options = get_option( 'flv_port_admin_settings' );   $value='';if(isset($options['port_4_col_width'])) {$value=$options['port_4_col_width'];}   ?>
	 <tr> <th scope="row">Portfolio 4 Columns - Image Width:</th>  <td><input type="text" name="flv_port_admin_settings[port_4_col_width]" value="<?php echo esc_attr($value); ?>" /> <span class="desc">(default: 320)</span></td> </tr>    	    <?php		}

public static function section_port_5_width() 	{ $options = get_option( 'flv_port_admin_settings' );   $value='';if(isset($options['port_5_col_width'])) {$value=$options['port_5_col_width'];}   ?>
	 <tr> <th scope="row">Portfolio 5 Columns - Image Width:</th>  <td><input type="text" name="flv_port_admin_settings[port_5_col_width]" value="<?php echo esc_attr($value); ?>" /> <span class="desc">(default: 320)</span></td> </tr>    	    <?php		}




public static  function flv_enable_settings(){
   	 ?>
			<div class="wrap">
				<div id="icon-options-general" class="icon32"><br></div>
				<h2><?php _e('Portfolio Settings', 'fialovy'); ?></h2>

		<form method="post" action="options.php" class="flv-custom-port-table">
	<table class="form-table wp-list-table widefat fixed posts">
		<thead>
		 <th style="width:15%" class="manage-column " id="options" scope="col">Option name</th>
        <th style="width:85%" class="manage-column " id="value" scope="col">Value</th>
        </thead>
        <tr class="flv-important3"><th scope="row"></th><td><h3>Portfolio Thumbnail Sizes </h3></td></tr>
        
        <?php settings_fields('flv_port_admin_settings'); ?>
		<?php do_settings_sections('flv_port_admin_settings'); ?>
       
    </table>
					<p class="submit">
						<input name="Submit" type="submit" class="button-primary" value="<?php _e('Save Changes', 'fialovy'); ?>" />
					</p>
				</form>
				<div class="desc"><strong>NOTE:</strong> You may need to <a href="http://wordpress.org/plugins/force-regenerate-thumbnails/">regenerate your thumbnails</a> after changing sizes.</div>
			</div>

		<?php
   }

}

function flv_screen_opt() {
  global $post,$flv_path;
  /* General options */
  $flv_bigimage = get_post_meta($post->ID, 'flv_bigimage', true);
  $flv_ext_url = get_post_meta($post->ID, 'flv_external_url', true);
  $flv_client = get_post_meta($post->ID, 'flv_client', true);
  $flv_price = get_post_meta($post->ID, 'flv_price', true);
  $flv_gallery= get_post_meta($post->ID, 'flv_gallery', true);
  $values = get_post_custom($post->ID);

  $text2 = isset( $values['meta_post_lightbox_vimeo_id'] ) ? esc_attr( $values['meta_post_lightbox_vimeo_id'][0] ) : '';
  $text3 = isset( $values['meta_post_lightbox_youtube_id'] ) ? esc_attr( $values['meta_post_lightbox_youtube_id'][0] ) : '';
  
  
  $text4 = isset( $values['meta_post_lightbox_flash_id'] ) ? esc_attr( $values['meta_post_lightbox_flash_id'][0] ) : '';
  $text6 = isset( $values['meta_post_lightbox_external_site'] ) ? esc_attr( $values['meta_post_lightbox_external_site'][0] ) : '';
  $text7 = isset( $values['meta_post_lightbox_inline_content'] ) ? esc_attr( $values['meta_post_lightbox_inline_content'][0] ) : '';
  $text8 = isset( $values['meta_post_lightbox_lang'] ) ? esc_attr( $values['meta_post_lightbox_lang'][0] ) : '';
  $text9 = isset( $values['meta_post_lightbox_long'] ) ? esc_attr( $values['meta_post_lightbox_long'][0] ) : '';

$text10 = isset( $values['meta_post_lightbox_window_w'] ) ? esc_attr( $values['meta_post_lightbox_window_w'][0] ) : '';
$text11 = isset( $values['meta_post_lightbox_window_h'] ) ? esc_attr( $values['meta_post_lightbox_window_h'][0] ) : '';

$text101 = isset( $values['meta_post_lightbox_window_w_ext'] ) ? esc_attr( $values['meta_post_lightbox_window_w_ext'][0] ) : '';
$text102 = isset( $values['meta_post_lightbox_window_h_ext'] ) ? esc_attr( $values['meta_post_lightbox_window_h_ext'][0] ) : '';
  

  $selected3 = isset( $values['meta_post_lightbox_type'] ) ? esc_attr( $values['meta_post_lightbox_type'][0] ) : '';
  $selected4 = isset( $values['meta_post_lightbox_video_type'] ) ? esc_attr( $values['meta_post_lightbox_video_type'][0] ) : '';



echo'<input type="hidden" name="flv_nonce" value="'. wp_create_nonce('flv_nonce') .'" />
<div id="options"> 
<div id="lightboxx">
      
	  
<div>
<table cellpadding="0" cellspacing="5" style="width:100%">
<tr>
<td style="width:10%">'.__("Client").':</td>
<td><input class="textinput" type="text"  name="flv_client" value="'.$flv_client.'"  style="width:90%;"  /></td>
</tr>
</table>
</div>

<div>
<table cellpadding="0" cellspacing="5" style="width:100%">
<tr>
<td style="width:10%">'.__("Price").':</td>
<td><input class="textinput" type="text"  name="flv_price" value="'.$flv_price.'"  style="width:90%;"  /></td>
</tr>
</table>
</div>
<br/><br/>
<h3 class="flv-important4">'.__("Lightbox Settings").'</h3>
<br/>
		<label for="meta_post_lightbox_type">'.__("Select type").':</label>
		<select name="meta_post_lightbox_type" id="meta_post_lightbox_type" style="width:200px;">
			<option value="image" '. selected( $selected3, "image" ,false).'>'.__("Single Image").'</option>
			<option value="external" '. selected( $selected3, "external" ,false).'>'.__("External URL").'</option>
			<option value="gallery" '.selected( $selected3, "gallery",false).'>'.__("Image Gallery").'</option>
			<option value="video" '.selected( $selected3, "video",false).'>'.__("Video&#38;Others").'</option>
		</select>
	<br/>
	
<div class="opt22" style="display:none;">
<table cellpadding="0" cellspacing="5" style="width:100%">
<tr>
<td style="width:10%">'.__("External URL").':</td>
<td><input class="textinput upload" type="text"  name="flv_external_url" value="'.$flv_ext_url.'"  style="width:90%;"  /></td>
</tr>
</table>
</div>	

	<div class="opt4" style="display:none;">
	<table cellpadding="0" cellspacing="5" style="width:100%">
<tr>
<td style="width:10%">'.__("Big Image").':</td>
<td><img width="16" height="20" style="vertical-align:middle;" src="'.$flv_bigimage.'"/> <input class="textinput upload"type="text" id="screen-thumbnail" name="flv_bigimage" value="'.$flv_bigimage.'" style="width:75%;" /> <button class="flv_upload button">Upload</a></td>
</tr>
</table>
</div>	

<div class="opt40" style="display:none;">
<table cellpadding="0" cellspacing="5" style="width:100%">
<tr>
<td style="width:10%">'.__("Insert Images").':</td>';
 if($flv_gallery=='')$flv_gallery=" ";
echo'<td><textarea style="display:none" name="flv_gallery" id="flv_gallery">'.$flv_gallery.'</textarea>
<div id="my_special_div2">'.olida_transform2($flv_gallery).'</div><button  id="_unique_name_button" class="flv_upload_slide2 button2 button">Upload</button>	</td>
</tr>
</table>
</div>

	<table class="opt30"  id="tabel" cellpadding="0" cellspacing="5" style="width:100%;display:none;">
	<tr>
	<td style="width:10%">'.__("Select type").':</td>
      <td>
	    <select name="meta_post_lightbox_video_type" id="meta_post_lightbox_video_type" style="width:100px;">
		<option value="vimeo" '. selected( $selected4, "vimeo" ,false).'>'.__("Vimeo").'</option>
		<option value="youtube" '. selected( $selected4, "youtube" ,false).'>'.__("Youtube").'</option>
	    <option value="flash" '.selected( $selected4, "flash" ,false).'>'.__("Flash").'</option>
		<option value="external_site" '. selected( $selected4, "external_site",false ).'>'.__("Iframe - External link").'</option>
		<option value="inline_content" '. selected( $selected4, "inline_content" ,false).'>'.__("Inline Content").'</option>
		<option value="gmaps" '. selected( $selected4, "gmaps",false ).'>'.__("Google maps").'</option>
	   </select>
       </td>
        </tr>
       <br/>
	  <tr class="opt6" style="display:none;">  <label for="meta_post_lightbox_vimeo_id">
	  <td style="width:10%">'.__("Id of video").':</td> </label>
      <td><input class="textinput upload" style="width:30%;" type="text" id="meta_post_lightbox_vimeo_id" name="meta_post_lightbox_vimeo_id" value="'.$text2.'" /></td>
      </tr>
      <tr class="opt7" style="display:none;"><label for="meta_post_lightbox_youtube_id">
	  <td style="width:10%">'.__("Id of video").':</td> </label>
      <td><input class="textinput upload" style="width:30%;" type="text" id="meta_post_lightbox_youtube_id" name="meta_post_lightbox_youtube_id" value="'.$text3.'" /></td>
      </tr> 
      <tr class="opt8" style="display:none;"><label for="meta_post_lightbox_flash_id">
	  <td style="width:10%">'.__("Url of swf").':</td> </label>
      <td><input class="textinput upload" style="width:90%;" type="text" id="meta_post_lightbox_flash_id" name="meta_post_lightbox_flash_id" value="'. $text4 .'" /><br/> eg: http://www.adobe.com/jp/events/cs3_web_edition_tour/swfs/perform.swf</td>
      </tr>
      <tr class="opt10" style="display:none;"><label for="meta_post_lightbox_external_site">
	  <td style="width:10%">'.__("External Website").':</td> </label>
      <td><input class="textinput upload" style="width:90%;" type="text" id="meta_post_lightbox_external_site" name="meta_post_lightbox_external_site" value="'. $text6.'" /><br/> eg: http://www.apple.com</td>
      </tr>
      <tr class="opt101" style="display:none;"><label for="meta_post_lightbox_window_w_ext">
	  <td style="width:10%">'.__("widnow width").':</td> </label>
      <td><input class="textinput upload" style="width:90%;" type="text" id="meta_post_lightbox_window_w_ext" name="meta_post_lightbox_window_w_ext" value="'. $text101.'" />in pixels</td>
      </tr>
      <tr class="opt102" style="display:none;"><label for="meta_post_lightbox_window_h_ext">
	  <td style="width:10%">'.__("window height").':</td> </label>
      <td><input class="textinput upload" style="width:90%;" type="text" id="meta_post_lightbox_window_h_ext" name="meta_post_lightbox_window_h_ext" value="'. $text102.'" />in pixels</td>
      </tr>
      <tr class="opt11" style="display:none;"><label for="meta_post_lightbox_inline_content">
	  <td style="width:10%">'.__("Inline Content").':</td> </label>
      <td><textarea rows="5" cols="20" class="textinput upload" style="width:90%;" type="text" id="meta_post_lightbox_inline_content" name="meta_post_lightbox_inline_content">'.$text7.'</textarea></td>
      </tr>
      <tr class="opt111" style="display:none;"><label for="meta_post_lightbox_window_w">
	  <td style="width:10%">'.__("widnow width").':</td> </label>
      <td><input class="textinput upload" style="width:90%;" type="text" id="meta_post_lightbox_window_w" name="meta_post_lightbox_window_w" value="'. $text10.'" />in pixels</td>
      </tr>
      <tr class="opt121" style="display:none;"><label for="meta_post_lightbox_window_h">
	  <td style="width:10%">'.__("window height").':</td> </label>
      <td><input class="textinput upload" style="width:90%;" type="text" id="meta_post_lightbox_window_h" name="meta_post_lightbox_window_h" value="'. $text11.'" />in pixels</td>
      </tr>
      <tr class="opt12" style="display:none;">
      <label for="meta_post_lightbox_lang">
	  <td style="width:5%">'.__("Latitude").':</td> </label>
      <td><input class="textinput upload" style="width:80%;" type="text" id="meta_post_lightbox_lang" name="meta_post_lightbox_lang" value="'. $text8.'" /></td>
      <label for="meta_post_lightbox_long">
	  <td style="width:5%">'.__("Longitude").':</td> </label>
      <td><input class="textinput upload" style="width:80%;" type="text" id="meta_post_lightbox_long" name="meta_post_lightbox_long" value="'. $text9 .'" /></td>
     
         </tr>
  </table>

</div>
 <br/>
<h3></h3>
 <br/>

</div>';

}

add_action('save_post', 'flv_update_opt');
function flv_update_opt($post_id) {
global $post;

if(isset($post) && $post->post_type!='flv_portfolio')
return $post_id;

/* Check autosave */
if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
return $post_id;
}

if ( isset($_POST['flv_nonce'])  ) {
$nonce=$_REQUEST['flv_nonce'];
if (! wp_verify_nonce($nonce, 'flv_nonce') ) wp_die('Security check');
}

if( isset( $_POST['flv_bigimage'] ) )
update_post_meta($post->ID,'flv_bigimage',$_POST['flv_bigimage']);
if( isset( $_POST['flv_external_url'] ) )
update_post_meta($post->ID,'flv_external_url',$_POST['flv_external_url']);

if( isset( $_POST['flv_gallery'] ) )
update_post_meta($post->ID,'flv_gallery',$_POST['flv_gallery']);


if( isset( $_POST['flv_client'] ) )
update_post_meta($post->ID,'flv_client',$_POST['flv_client']);

if( isset( $_POST['flv_price'] ) )
update_post_meta($post->ID,'flv_price',$_POST['flv_price']);

if( isset( $_POST['meta_post_lightbox_type'] ) )
update_post_meta($post->ID,'meta_post_lightbox_type',$_POST['meta_post_lightbox_type']);
if( isset( $_POST['meta_post_lightbox_video_type'] ) )
update_post_meta($post->ID,'meta_post_lightbox_video_type',$_POST['meta_post_lightbox_video_type']);
if( isset( $_POST['meta_post_lightbox_vimeo_id'] ) )
update_post_meta($post->ID,'meta_post_lightbox_vimeo_id',$_POST['meta_post_lightbox_vimeo_id']);
if( isset( $_POST['meta_post_lightbox_youtube_id'] ) )
update_post_meta($post->ID,'meta_post_lightbox_youtube_id',$_POST['meta_post_lightbox_youtube_id']);


if( isset( $_POST['meta_post_lightbox_flash_id'] ) )
update_post_meta($post->ID,'meta_post_lightbox_flash_id',$_POST['meta_post_lightbox_flash_id']);
if( isset( $_POST['meta_post_lightbox_external_site'] ) )
update_post_meta($post->ID,'meta_post_lightbox_external_site',$_POST['meta_post_lightbox_external_site']);
if( isset( $_POST['meta_post_lightbox_window_w'] ) )
update_post_meta($post->ID,'meta_post_lightbox_window_w',$_POST['meta_post_lightbox_window_w']);
if( isset( $_POST['meta_post_lightbox_window_h'] ) )
update_post_meta($post->ID,'meta_post_lightbox_window_h',$_POST['meta_post_lightbox_window_h']);

if( isset( $_POST['meta_post_lightbox_window_w_ext'] ) )
update_post_meta($post->ID,'meta_post_lightbox_window_w_ext',$_POST['meta_post_lightbox_window_w_ext']);
if( isset( $_POST['meta_post_lightbox_window_h_ext'] ) )
update_post_meta($post->ID,'meta_post_lightbox_window_h_ext',$_POST['meta_post_lightbox_window_h_ext']);

if( isset( $_POST['meta_post_lightbox_inline_content'] ) )
update_post_meta($post->ID,'meta_post_lightbox_inline_content',$_POST['meta_post_lightbox_inline_content']);
if( isset( $_POST['meta_post_lightbox_lang'] ) )
update_post_meta($post->ID,'meta_post_lightbox_lang',$_POST['meta_post_lightbox_lang']);
if( isset( $_POST['meta_post_lightbox_long'] ) )
update_post_meta($post->ID,'meta_post_lightbox_long',$_POST['meta_post_lightbox_long']);
if( isset( $_POST['meta_post_title_type'] ) )
update_post_meta($post->ID,'meta_post_title_type',$_POST['meta_post_title_type']);

}

add_action('admin_head', 'the_port_head');
function the_port_head(){
        global $post;
    if(isset($post) && $post->post_type=='flv_portfolio'){
           
?>
        <script>
        jQuery(document).ready(function($){

       orig_send_to_editor=window.send_to_editor;
 $('.textinput.upload').change(function(){
                $this = $(this);
                $this.prev().attr('src', $this.val());
            })
          jQuery('.flv_upload').click(function() {
     	   window.upl_target = jQuery(this).prev();
            tb_show('', 'media-upload.php?post_id=<?php _e($post->ID); ?>&type=image&amp;TB_iframe=1');
         window.send_to_editor = function(html) { imgurl = jQuery(html).attr('href');
 window.upl_target.val(imgurl);
window.upl_target.trigger("change");
 tb_remove();
    
             window.send_to_editor = orig_send_to_editor;
         }

         return false;
     }); 


  jQuery('.flv_upload_slide2').click(function(e) {
  	window.upl_target3 = jQuery(this).prev().prev();
    var send_attachment_bkp = wp.media.editor.send.attachment;
    var button = jQuery(this);

    wp.media.editor.send.attachment = function(props, attachment){ 
     	ceva=window.upl_target3.val();
     	ceva+= '"'+attachment.url+'", ';
        window.upl_target3.val(ceva);

var sp_div=button.prev();
var url=attachment.url;
sp_div.append("<span><img class='special_img' src='"+url.trim()+"'/><span class='xicon'></span></span>");
sp_div.find(".xicon").click(function(){
var txt2='"'+jQuery(this).prev().attr('src')+'", ';
var textarea = jQuery(this).parent().parent().parent().find("#flv_gallery");
var txt = textarea.val();
textarea.val(txt.replace(txt2, ''));
	jQuery(this).parent().hide("slow").remove();
})
    }
    wp.media.editor.open(button);
    return false;
  });
  jQuery('.add_media').on('click', function(){
    _custom_media = false;
  });
    ////end
        });
        </script>
        <?php
    }
}

function olida_transform2($text){
		$fout='';
		if($text!=' '){
		$fout=str_replace ('", "', "</span><span> ", $text);
		$fout=substr_replace($fout,'</span>', -3, -1);
		$fout=substr_replace($fout,'<span>', 0, 2);
		}
		return $fout;
	}



/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ related_projects ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
$fialovy_related_gallery_nr=200;

function related_projects_func($atts, $content2) {
	global $fialovy_related_gallery_nr;
	$fialovy_related_gallery_nr++;
	$func_output='';
	$inline=200;
	  	

    $foutput2='';
	 $foutput3='';
	 
	$tsinheight="auto";   if (isset($atts['thumb_height'])) $tsinheight = $atts['thumb_height'];
	$items_column=20;   if (isset($atts['number'])) $items_column = $atts['number'];
if(isset($atts['target']))$target=$atts['target'];else $target="_blank";

  	global $post;  $postid = $post->ID;      
	$post_categories = wp_get_post_categories($postid);

$func_output.= '<div class="owl-carousel"> ';
                
 
 $args=array(  'post_type' => 'flv_portfolio','post__not_in' => array($post->ID), 'category__and' => $post_categories,'numberposts'     => $items_column,'orderby' => 'rand' ) ;
	$myposts = get_posts( $args );
	if(count($myposts)<$items_column){
		$args= array(  'post_type' => 'flv_portfolio','post__not_in' => array($post->ID),'category__in' => $post_categories ,'numberposts'     => $items_column,'orderby' => 'rand' ) ;
	}
 wp_reset_postdata(); 
	$myposts = get_posts( $args );


	$flv_id=200;
	foreach( $myposts as $post ) :  setup_postdata($post); 

$port=$post;
	$postid=$post->ID;
    $flv_id++;
	
	$lightbox_type=get_post_meta($postid, 'meta_post_lightbox_type', true);
	$thumb_lightbox_video_type = get_post_meta($postid, 'meta_post_lightbox_video_type', true);
	if($lightbox_type=='')$lightbox_type="none";



    $page_url=get_permalink($postid);

    $aux = (wp_get_attachment_image_src( get_post_thumbnail_id($postid),'large')); 
	if($aux[0]=='')	$aux[0]=THEME_URL. 'images/blank.png';
	$meta_bigimage = get_post_meta($postid, 'flv_bigimage', true);   


	$gal_nr=0;
	
	$gals=array();
    $postid = $post->ID;


	
	$func_output.='<div class="related-work-thumb">
					<div class="mega-hover">

					<div class="mega-hovertitle">'.get_the_title().'
						<div class="mega-hoversubtitle">'.__($post->post_excerpt).'</div>
					</div>
                             
					<a target="'.$target.'" href="'.$page_url.'">
						<div class="mega-hoverlink"><i class="fa fa-link"></i></div>
					</a>';
		$class='';			
if($lightbox_type=="image")	{
	
	$func_output.='<a href="'.$meta_bigimage.'"  title="'.__($port->post_title).'" class="'.$class.' portfolio fancybox">';
	}
elseif($lightbox_type=="gallery"){
	$images_gallery = get_post_meta($postid, 'flv_gallery', true);
	$gal_nr=$postid;
	$gals[$gal_nr]=substr(str_replace(", ","",$images_gallery), 0, -1);
    $pieces = explode('"', $gals[$gal_nr]);
	
	$func_output.='<script type="text/javascript">jQuery(document).ready(function($) {
	jQuery(".manual'.$gal_nr.'").click(function() {	jQuery.fancybox([';
		for($h =0;$h<count($pieces);$h++)
		if($h%2!=0)
		if($h==count($pieces)-1)
		$func_output.="'".$pieces[$h]."'";
		else
		$func_output.="'".$pieces[$h]."', ";
	$gals[$gal_nr].
	$func_output.='], {"padding"		: 0,"transitionIn"		: "none","transitionOut"		: "none","type"              : "image","changeFade"        : 0, helpers: {  overlay: { locked: false  }  }		});});});</script>';
	$func_output.='<a class="'.$class.' portfolio manual'.$gal_nr.'"  title="'.__($port->post_title).'" href="javascript:;">';	
	}				 
elseif($lightbox_type=="video")	{
		if($thumb_lightbox_video_type=="youtube"){
		$thumb_lightbox_youtube_id = get_post_meta($postid, 'meta_post_lightbox_youtube_id', true);
		$func_output.='<a title="'.__($port->post_title).'" class="'.$class.' various fancybox.iframe portfolio" href="http://www.youtube.com/embed/'.$thumb_lightbox_youtube_id.'?autoplay=1">';
         }
		elseif($thumb_lightbox_video_type=="vimeo"){
			$thumb_lightbox_vimeo_id= get_post_meta($postid, 'meta_post_lightbox_vimeo_id', true);
		$func_output.='<a title="'.__($port->post_title).'" class="'.$class.' various fancybox.iframe portfolio" href="http://player.vimeo.com/video/'.$thumb_lightbox_vimeo_id.'?autoplay=true">';
		}
		elseif($thumb_lightbox_video_type=="flash"){
			$thumb_lightbox_flash_id= get_post_meta($postid, 'meta_post_lightbox_flash_id', true);
		$func_output.='<a title="'.__($port->post_title).'" class="various6" href="'.$thumb_lightbox_flash_id.'">';
		}
		elseif($thumb_lightbox_video_type=="external_site"){
		$thumb_lightbox_external_site= get_post_meta($postid, 'meta_post_lightbox_external_site', true);
		$thumb_lightbox_inline_width_ext="600";
			$thumb_lightbox_inline_w_ext= get_post_meta($postid, 'meta_post_lightbox_window_w_ext', true);
			if($thumb_lightbox_inline_w_ext!='')$thumb_lightbox_inline_width_ext=$thumb_lightbox_inline_w_ext;
			$thumb_lightbox_inline_height_ext="400";
			$thumb_lightbox_inline_h_ext= get_post_meta($postid, 'meta_post_lightbox_window_h_ext', true);
			if($thumb_lightbox_inline_h_ext!='')$thumb_lightbox_inline_height_ext=$thumb_lightbox_inline_h_ext;
		
		$idd=$fialovy_related_gallery_nr;$idd.=$flv_id;
		$inline++;	

		$func_output.='<a title="'.__($port->post_title).'" class="inline'.$inline.' fancybox.iframe"  href="'.$thumb_lightbox_external_site.'">';
		$func_output.='<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery(".inline'.$inline.'").fancybox({
					width		: '.$thumb_lightbox_inline_width_ext.',
					height		: '.$thumb_lightbox_inline_height_ext.',
					autoSize	: false,
					openEffect	: "elastic",
					closeEffect	: "none",
					autoDimensions:false
		});
		}); </script>';	
			
		}
		elseif($thumb_lightbox_video_type=="inline_content"){
			$thumb_lightbox_inline_content= get_post_meta($postid, 'meta_post_lightbox_inline_content', true);
			$thumb_lightbox_inline_width="600";
			$thumb_lightbox_inline_w= get_post_meta($postid, 'meta_post_lightbox_window_w', true);
			if($thumb_lightbox_inline_w!='')$thumb_lightbox_inline_width=$thumb_lightbox_inline_w;
			$thumb_lightbox_inline_height="400";
			$thumb_lightbox_inline_h= get_post_meta($postid, 'meta_post_lightbox_window_h', true);
			if($thumb_lightbox_inline_h!='')$thumb_lightbox_inline_height=$thumb_lightbox_inline_h;
	
		$idd=$fialovy_related_gallery_nr;$idd.=$flv_id;
		$inline++;
		$foutput2.='<div class="hide_flv" id="inline_'.$idd.'" >'.do_shortcode($thumb_lightbox_inline_content).'</div>';
		$func_output.='<a title="'.__($port->post_title).'"  class="inline'.$inline.'" href="#inline_'.$idd.'">';
		$func_output.='<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery(".inline'.$inline.'").fancybox({
					width		: '.$thumb_lightbox_inline_width.',
					height		: '.$thumb_lightbox_inline_height.',
					autoSize	: false,
					openEffect	: "elastic",
					closeEffect	: "none",
					autoDimensions:false
		});
		});</script>';
		
		}
		elseif($thumb_lightbox_video_type=="gmaps"){
			$thumb_lightbox_gmaps= get_post_meta($postid, 'meta_post_lightbox_gmaps', true);
			$idd=$fialovy_related_gallery_nr;$idd.=$flv_id;
			
	$latitude=get_post_meta($postid, 'meta_post_lightbox_lang', true);
	if($latitude=="")$latitude=-6.248411;
	$longitude=get_post_meta($postid, 'meta_post_lightbox_long', true);
	if($longitude=="")$longitude=106.833801;

	$foutput2.='<div id="inline'.$idd.'"  class="hide_flv" style="width:100%; height:100%;overflow:hidden;">';
	$foutput2.='<object width="100%" height="100%" data="http://maps.google.com/maps?f=q&source=s_q&hl=en';
    $foutput2.='&geocode=&q=centre&sll='.$latitude.','.$longitude.'&sspn=0.006328,0.017885&ie=UTF8&spn=0.032789,0.051745&output=embed"></object><br><small><a href="http://maps.google.com/maps?f=q&source=s_q&hl=en';
    $foutput2.='&geocode=&q=centre&sll='.$latitude.','.$longitude.'&sspn=0.006328,0.017885&ie=UTF8&spn=0.032789,0.051745&output=embed"></a></small></div>';

		$func_output.='<a title="'.__($port->post_title).'" class="various1" href="#inline'.$idd.'">';
		}
	 }  
elseif($lightbox_type=="external")	{
		$urll=get_post_meta($postid, 'flv_external_url', true);
	$func_output.='<a title="'.__($port->post_title).'" class="portfolio" target="'.$target.'" href="'.$urll.'">';
	 } 
								

				//	<a class="fancybox" data-fancybox-group="related-group" href="'.$aux[0].'" title="'.get_the_title().'">
	$func_output.='<div class="mega-hoverview"><i class="fa fa-search-plus"></i></div>
					</a>
				</div>

				<figure class="fit-img">
					<img src="'.$aux[0].'" alt="related work" />
				</figure>
				
				
			</div>';
				
	
	   endforeach;
	   wp_reset_postdata(); 

$func_output.= '</div>
		<div class="carousel-nav">
			<div class="btn prev"><i class="fa fa-chevron-left"></i></div>
			<div class="btn next"><i class="fa fa-chevron-right"></i></div>
		</div>'; 

$func_output.=$foutput3;
$func_output.=$foutput2;
										
return $func_output;

}


$fialovy_latest_nr=0;	
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ latest_projects ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
function latest_func($atts, $content2) {
	global $fialovy_latest_nr;
	$fialovy_latest_nr++;
	$foutput='';
	$inline=200;$gal_nr=rand();
	 $fialovy_latest_item_nr=0;$fialovy_masonry_item_nr=0; 
	 
$total_nr=9;   if (isset($atts['number'])) {$total_nr = $atts['number'];}
if(isset($atts['target']))$target=$atts['target'];else $target="_blank";

	if(isset($atts['categories']) && $atts['categories']!=''){ $portfolio_category = explode(", ",$atts['categories']);
	if($portfolio_category[0][0]==" ")$portfolio_category[0]= substr($portfolio_category[0], 1);
	}	else{$portfolio_category=array();$portfolio_category[0]="anything";	}

 $source="flv_portfolio";
$options_new = get_option( 'flv_port_admin_settings' );
	  
global $fialovy_gallery_nr;$fialovy_gallery_nr++;

$inline=0;$fialovy_gallery_item_nr=0;$gal_nr=0;$gals=array();   $foutput="";
   

if($source=="post" || $source=="flv_portfolio")	
       {
		    $args=array('post_type'=>$source,
            'posts_per_page' => $total_nr,
            'order'=>'desc',
            'orderby'=>'date',
            'category_name'=>$portfolio_category[0]
            );
        $wquery = new WP_Query( $args );

   $foutput3='';


$foutput.='   
 <div class="portfolio-panel3">
 <div id="portfolioTabs" class="portfolio-tabs-wrapper">';	


$count=0;
   $foutput.='<ul class="portfolio-tabs-list">';
    foreach ($wquery->posts as $port){ $count++; 
	$small = (wp_get_attachment_image_src( get_post_thumbnail_id($port->ID),'port_small')); 
                	$foutput.='<li>
                    	<a href="#portfolio-tabs-'.$count.'">
                        	<span class="thumbnail-hover"></span>
                        	<img src="'.$small[0].'" alt="thumbnail" />
                        </a>
                    </li>';
	}

    $foutput.='</ul>
       
                <div id="tabs_container" class="portfolio-detail-wrapper">';
$count=0;      
          foreach ($wquery->posts as $port){  $count++;
		  $large = (wp_get_attachment_image_src( get_post_thumbnail_id($port->ID),'port_large'));
		  $output = strip_shortcodes(preg_replace('/\s+/', ' ',strip_tags ($port->post_content,"p"))); 
		  $output_array = array();
		  $excerptt = array();
		  $page_url=get_permalink($port->ID);
		  if($output){$output_array=explode(' ',$output);}else{$output_array='';} 
		
			if(count($output_array)>0 && $output_array!=''){$excerptt= array_slice($output_array, 0, 40);}else{$excerptt='';}
			if($excerptt){	$contentt=implode(' ',$excerptt); }else{$contentt='';	
			}
		
                    $foutput.='<div id="portfolio-tabs-'.$count.'" class="portfolio-tabs">

                    	<figure class="portfolio-tabs-img">
                        	<img src="'.$large[0].'" alt="portfolio" />
                        </figure>
                    
                        <section class="portfolio-tabs-detail">
                        	<h2>'.__($port->post_title).'</h2>
                            <div class="item-list-description">'.$contentt.'</div>
                            <div class="button raised dark-grey ripple">
                                <a target="'.$target.'" href="'.esc_url($page_url).'">'.__('Read More Details', 'wizard').'</a>
                            </div>
                        </section>
                        
                    </div>';
                    }  
                    


$foutput.='</div>';
}

  $foutput.='  </div></div>';
						
return $foutput;
}

	// Initiation call of plugin
	$flvPort = new flvPortfolio(__FILE__);
}





?>
