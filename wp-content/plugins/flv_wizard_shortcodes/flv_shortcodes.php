<?php 
/*
Plugin Name: FLV Shortcodes
Plugin URI: 
Version: 1.8
Author: Fialovy
Author URI: http://fialovy.com/
Description: Shortcodes - Wizard theme
*/
         
$flv_path = plugins_url('', __FILE__) . '/';

// Begin Shortcodes


class BoostrapShortcodes {

  function __construct() {
    add_action( 'init', array( $this, 'add_shortcodes' ) );

  }


  /*--------------------------------------------------------------------------------------
    *
    * add_shortcodes
    *
    *
    *-------------------------------------------------------------------------------------*/
  function add_shortcodes() {
  	
 $flv_section= 0;$flv_icon_nr = 0;	$fialovy_pricing_tables_nr = 0;$args_tab = array(); $loc_usage=0; $l_buffer=0;$tw_count=0;$flv_icon_2_nr=0;$fialovy_accordion_nr=0;
 $tabs_item_nr=0;$tab_item_nr=0;$flv_map_nr = 0;$fialovy_testi_nr = 0;$fialovy_testimonial_nr = 10;$fialovy_pattern=0; $fialovy_flex_nr=0;
$service_counter=0;$fialovy_testimonial_slider_nr=0;$fialovy_sudo_slider_nr=0;$fialovy_sudo_slide_nr=0;
 $fialovy_owl_slider_nr=0; $fialovy_owl_slider_posts_nr=0;$fialovy_testimonial_slide_nr=0;
     $fialovy_bx_slider_nr=10;
       

/*------------- DONE -----------*/
/* - */
add_shortcode('section',  array( $this,'section_func'));/********* done *********/

add_shortcode('heading1',  array( $this,'heading1_func'));/* - */
add_shortcode('heading2',  array( $this,'heading2_func'));/* - */
add_shortcode('heading3',  array( $this,'heading3_func'));/* - */
add_shortcode('heading4',  array( $this,'heading4_func'));/* - */
add_shortcode('heading5',  array( $this,'heading5_func'));/* - */
add_shortcode('heading6',  array( $this,'heading6_func'));/* - */


	add_shortcode('related_posts',  array( $this, 'related_posts_func'));
	
	
	add_shortcode('progress_bar', array( $this, 'progress_bar_func' ));/* - */
	add_shortcode('next_btn',  array( $this,'next_btn_func')); /* - */

 	add_shortcode('blockquote',  array( $this,'blockquote_func'));/* - */
 	add_shortcode('blockquote1',  array( $this,'blockquote1_func'));/* - */

 	add_shortcode('button', array( $this, 'bs_button' ));  /* - */
    add_shortcode('blog_list',  array( $this,'blog_list_func')); 

	add_shortcode('column', array( $this, 'bs_column' )); 	
	add_shortcode('flvcontactform',  array( $this,'contactform_func')); 

    add_shortcode('location_img',  array( $this,'location_img_func'));  /* - */


	add_shortcode('row', array( $this, 'bs_row' )); 	

    add_shortcode('span', array( $this, 'bs_span' )); /* - */


add_shortcode('testimonial_slider',  array( $this,'testimonial_func')); /* - */
add_shortcode('testimonial_slide',  array( $this,'testimonial_slide')); /* - */


	add_shortcode('vimeo',  array( $this,'vimeo_func'));   
	add_shortcode('youtube',  array( $this,'youtube_func'));  
	
	add_shortcode('clear',  array( $this,'clear_func')); /* - */
	add_shortcode('space',  array( $this,'space_func')); /* - */
	add_shortcode('left',  array( $this,'left_func'));  /* - */
	add_shortcode('right',  array( $this,'right_func')); /* - */
	add_shortcode('center',  array( $this,'center_func')); /* - */
	

add_shortcode('owl_slider_posts',  array( $this,'owl_slider_posts_func'));  /* - */
add_shortcode('owl_slider',  array( $this,'owl_slider_func'));  /* - */
add_shortcode('owl_slide_style1',  array( $this,'owl_slide1_func'));  /* - */
add_shortcode('owl_slide_style2',  array( $this,'owl_slide2_func'));  /* - */
add_shortcode('owl_slide_style3',  array( $this,'owl_slide3_func'));  /* - */
add_shortcode('owl_slide_style4',  array( $this,'owl_slide4_func'));  /* - */
add_shortcode('owl_slide_title',  array( $this,'owl_slide5_func'));  /* - */



	add_shortcode('flex_slider',  array( $this,'flex_slider_func')); 
	add_shortcode('flex_slide',  array( $this,'flex_slide_func'));
	

	add_shortcode('social_icons',  array( $this,'social_icons_func')); 
	add_shortcode('social_icon',  array( $this,'social_icon_func'));

	add_shortcode('title',  array( $this,'title_func')); /* - */
	add_shortcode('sub_title_left',  array( $this,'sub_title_left_func')); /* - */
	add_shortcode('sub_title_right',  array( $this,'sub_title_right_func')); /* - */
	
	add_shortcode('icon',  array( $this, 'icon_func'));  /* - */
	add_shortcode('service_icon',  array( $this,'service_icon_func'));/* - */
	
	add_shortcode('video_bg',  array( $this,'video_bg_func'));/* - */
	
} 


function social_icons_func( $atts , $content) {
		$func_out='';
	 extract(shortcode_atts(array(
        "class" => ""
     ), $atts));


$func_out.='<div class="social-media '.$class.'"> <ul>'.do_shortcode( $content) .'</ul></div>';	

	return $func_out;
    }

function social_icon_func( $atts , $content) {
		$func_output='';
	 extract(shortcode_atts(array(
        "type" => "twitter",
        "link" => "#",
        "target" => "self"
     ), $atts));
$func_output='<li><a  href="'.$link.'" target="'.$target.'"><i class="fa fa-'.$type.'"></i></a></li>';
	 return $func_output;
    }




function video_bg_func( $atts , $content) {
	  $func_output='';
	  
	   $video_w=800;  if(isset($atts['video_w'])) $video_w=$atts['video_w'];
	   $video_h=955;  if(isset($atts['video_h'])) $video_h=$atts['video_h'];
	   
	   $image_src='';  if(isset($atts['image_src'])) $image_src=$atts['image_src'];
	   if(is_numeric($image_src) &&  $image_src!=''){$image_src= wp_get_attachment_image_src($image_src,"full");$image_src=$image_src[0];}
	   
	   $video_mp4='';  if(isset($atts['video_mp4'])) $video_mp4=$atts['video_mp4'];
	   $video_webm='';  if(isset($atts['video_webm'])) $video_webm=$atts['video_webm'];
	   
	   $enable_audio='no';  if(isset($atts['audio'])) $enable_audio=$atts['audio'];

	if($enable_audio=="yes")	{
	$func_output.='<div class="myVideo" data-image-src="'.$image_src.'"><video onclick="this.play();"  poster="'.$image_src.'" autoplay="autoplay" autobuffer loop="loop" controls="controls" width="'.$video_w.'" height="'.$video_h.'">';	
	}else{
	$func_output.='<div class="myVideo" data-image-src="'.$image_src.'"><video onclick="this.play();"  poster="'.$image_src.'" autoplay="autoplay" autobuffer loop="loop" muted="" controls="controls" width="'.$video_w.'" height="'.$video_h.'">';	
	}

if($video_mp4!=''){$func_output.='<source src="'.$video_mp4.'" type="video/mp4" />';}
if($video_webm!=''){$func_output.='<source src="'.$video_webm.'" type="video/webm" />';}

$func_output.='</video></div><div class="video-caption">'.$content.'</div>';

  return $func_output;
}

function related_posts_func( $atts ) {
	  $func_output='';
      $total_number=5;  if(isset($atts['number'])) $total_number=$atts['number'];
	  $excerpt_length=90; if(isset($atts['excerpt_length']))$excerpt_length=$atts['excerpt_length'];
	   
	global $post;  $postid = $post->ID;      
	$post_categories = wp_get_post_categories($postid);

	$args=array(  'post_type' => 'post','post__not_in' => array($post->ID),'category__and' => $post_categories,'numberposts'     => $total_number,'orderby' => 'rand' ) ;
	$myposts = get_posts( $args );
	if(count($myposts)<$total_number){
		$args= array(  'post_type' => 'post','post__not_in' => array($post->ID),'category__in' => $post_categories ,'numberposts'     => $total_number,'orderby' => 'rand' ) ;
	}
 wp_reset_postdata(); 
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) :  
	
	setup_postdata($post); 
	
$postid = $post->ID; 
$page_url=get_permalink($postid);

$img=THEME_URL . 'images/lightpaperfibers.png';

		$func_output.='<div class="col-sm-4">
                                	<div class="box">
                                    	<div class="related-post-thumbnail ripple">
                                        	<a href="'.$page_url.'">
                                            	<figure>
                                                	<div class="thumbnail-hover"></div>';
         if(has_post_thumbnail($postid)){
		$func_output.=get_the_post_thumbnail( $postid,"blog_related",  array('alt' => $post->post_title,'class'=>'img-responsive'));
		}else{
		$func_output.='<img src="'.$img.'" class="img-responsive" alt="img"/>';
		}                                       
     
	    $func_output.='</figure></a>
                                        </div>
                                        <h3 class="related-post-title"><a href="'.$page_url.'">'.$post->post_title.'</a></h3>
                                        <div class="related-post-description">'.strip_shortcodes(olida_closetags(strip_tags(flv_port_generate_excerpt($post->post_content,$excerpt_length)))).'</div>
                                    </div>
                                </div>';	

			  	
	endforeach;
	  wp_reset_postdata(); 
				

     return $func_output;
}




/*--------------------------------------------------------------------------------------
    *
    * title
    *
    *-------------------------------------------------------------------------------------*/

    
 function title_func($atts, $content){
   $fout='';

	$fout.='<div class="dark"><div class="block-title"><h1>'.do_shortcode($content).'</h1></div></div>';
    return $fout;
    }
 
 function sub_title_left_func($atts, $content){
   $fout='';

	$fout.='<h3 class="page-subtitle">'.do_shortcode($content).'</h3>';
    return $fout;
    }
  
 function sub_title_right_func($atts, $content){
   $fout='';

	$fout.='<h2 class="page-subtitle_right">'.do_shortcode($content).'</h2>';
    return $fout;
    }
 
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ owl_slider_posts ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/  


function owl_slider_posts_func($atts, $content2) {
global $fialovy_owl_slider_posts_nr;     $fialovy_owl_slider_posts_nr++;

 $post_category="none";    if(isset($atts['source_posts_category']) && $atts['source_posts_category']!='')  $post_category = $atts['source_posts_category'];
 $post_number=3;    if(isset($atts['posts_number']) && $atts['posts_number']!='')  $post_number = $atts['posts_number'];
 $excerpt_length=200;    if(isset($atts['excerpt_length']) && $atts['excerpt_length']!='')  $excerpt_length = $atts['excerpt_length'];

$dots="true";    if(isset($atts['dots']) && $atts['dots']!='yes')  $dots = "false";

	$func_output2='';
	$func_output2.='<div class="animate-fadeInUp">
                        <div id="owl_blog_slider_'.$fialovy_owl_slider_posts_nr.'" class="owl-carousel box-carousel-wrapper">';
	
if($post_category!="none"){
	$cat_id=get_cat_ID( $post_category );
	 $args= array(  'post_type' => 'post' ,'numberposts'   => $post_number,'orderby' => 'desc' ,'category'=>$cat_id) ;
}else{
	 $args= array(  'post_type' => 'post' ,'numberposts'   => $post_number,'orderby' => 'desc' ) ;
} 
	
$my_posts = get_posts( $args );
foreach( $my_posts as $post ) :  setup_postdata($post); 

$postid = $post->ID;	$port=$post;  $size="blog_slider_small";$page_url=get_permalink($postid); $page_url=get_permalink($postid);
$comments_count = wp_count_comments($postid);
 if(get_the_category($postid)){$category = get_the_category($postid);}else{$category[0] = '';}

if(get_the_post_thumbnail( $postid)!=''){
$func_output2.=' <div class="carousel-item">
                                <div class="carousel-inner">
                                    <figure>
                                     '.get_the_post_thumbnail( $postid,$size,  array('alt' => $port->post_title,'class'=>'img-responsive')).'
                                    </figure>
                                    <div class="content-block-detail">
                                        <div class="fab ripple">
                                            <a href="'.$page_url.'"><i class="fa fa-plus"></i></a>
                                        </div>
                                        <h3>'.$port->post_title.'</h3>
                                        <div class="item-list-description">'.olida_closetags(strip_tags(flv_port_generate_excerpt($post->post_content,$excerpt_length))).'</div>
                                    </div>
                                    <div class="blog-meta number">
                                        <ul>
                                            <li><a href="'.$page_url.'">'. get_the_date('d/m',$postid).'</a></li>
                                            <li><a href="'.get_category_link($category[0]->term_id).'">'.$category[0]->cat_name.'</a></li>
                                            <li><a href="'.$page_url.'#comments_section">'.$comments_count->total_comments.'</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>';
}else{
	$func_output2.='<div class="carousel-item">
                                <div class="carousel-inner">
                                    <div class="content-block-detail">
                                        <div class="fab ripple">
                                            <a href="'.$page_url.'"><i class="fa fa-plus"></i></a>
                                        </div>
                                        <h3>'.$port->post_title.'</h3>
                                        <div class="item-list-description">'.olida_closetags(strip_tags(flv_port_generate_excerpt($post->post_content,$excerpt_length))).'</div>
                                    </div>
                                    <div class="blog-meta number">
                                        <ul>
                                           <li><a href="'.$page_url.'">'. get_the_date('d/m',$postid).'</a></li>
                                            <li><a href="'.get_category_link($category[0]->term_id).'">'.$category[0]->cat_name.'</a></li>
                                            <li><a href="'.$page_url.'#comments_section">'.$comments_count->total_comments.'</a></li>
                                       </ul>
                                    </div>
                                </div>
                            </div>';					
}

endforeach;	

	$func_output2.='</div></div>';
		
$func_output2.='<script>jQuery(document).ready(function () {
     var owlBlock = jQuery("#owl_blog_slider_'.$fialovy_owl_slider_posts_nr.'");
	owlBlock.owlCarousel({
		dots: '.$dots.',
		responsiveClass: true,
		responsive:{
			0:{
				items:1
			},
			720:{
				items:2
			},
			768:{
				items:2
			},
			960:{
				items:3
			},
			1024:{
				items:3
			}
		}
	});
});</script>';


	return $func_output2;
}
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ owl_slider ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/  


function owl_slider_func($atts, $content2) {
global $fialovy_owl_slider_nr;     $fialovy_owl_slider_nr++;

	$dots="true";    if(isset($atts['dots']) && $atts['dots']!='yes')  $dots = "false";
	$type="style1";
	$class="box-carousel-wrapper";    if(isset($atts['type'])) {

	if($atts['type']=="style1"){$class="box-carousel-wrapper owl_slide1";$type="style1";}
	elseif($atts['type']=="style2"){$class="full-carousel-wrapper owl_slide2";$type="style2";}
	elseif($atts['type']=="style4"){$class="portfolio-panel2 full-carousel-wrapper owl_slide4";$type="style4";}
	else{$class="full-carousel-wrapper block-content content-block2 owl_slide3";$type="style3";}
}

	$func_output2='';
	$func_output2.='<div  id="home-slider-'.$fialovy_owl_slider_nr.'" class="owl-carousel '.$class.'">';
	$func_output2.=do_shortcode($content2);
	$func_output2.='</div>';
	if($type=="style2" || $type=="style3" || $type=="style4" ){
	$func_output2.=' <div class="carousel-nav">
            	<div class="btn prev"><i class="fa fa-chevron-left"></i></div>
                <div class="btn next"><i class="fa fa-chevron-right"></i></div>
            </div>';	}
	if($type=="style2"){		
$func_output2.='<script>jQuery(document).ready(function () {
var owlTeam = jQuery("#home-slider-'.$fialovy_owl_slider_nr.'");
	owlTeam.owlCarousel({
		dots: '.$dots.',
		responsiveClass: true,
		responsive:{
			0:{
				items:1
			},
			720:{
				items:2
			},
			768:{
				items:2
			},
			960:{
				items:3
			},
			1024:{
				items:3
			}
		}
	});
	jQuery(".btn.next").on("click", function(){
		owlTeam.trigger("next.owl.carousel", [500]);
	})
	jQuery(".btn.prev").on("click", function(){
		owlTeam.trigger("prev.owl.carousel", [500]);

	})
});	
	</script>';
	}
else{
	$func_output2.='<script>jQuery(document).ready(function () {
var owlTeam = jQuery("#home-slider-'.$fialovy_owl_slider_nr.'");
	owlTeam.owlCarousel({
		dots: '.$dots.',
		responsiveClass: true,
		responsive:{
			0:{
				items:1
			},
			720:{
				items:2
			},
			768:{
				items:2
			},
			960:{
				items:3
			},
			1024:{
				items:4
			}
		}
	});
		jQuery(".btn.next").on("click", function(){
		owlTeam.trigger("next.owl.carousel", [500]);
	})
	jQuery(".btn.prev").on("click", function(){
		owlTeam.trigger("prev.owl.carousel", [500]);

	})
});	
	</script>';
}


	return $func_output2;
}
	
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ owl_slide1 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/  

function owl_slide1_func($atts, $content) {
	
 $image='';if(isset($atts['image']))   $image = $atts['image'];
if(is_numeric($image) &&  $image!=''){$image= wp_get_attachment_image_src($image,"full");$image=$image[0];}
	
$url = '#';    if(isset($atts['url']) )  $url =$atts['url'];
$title = '';    if(isset($atts['title']) )  $title =$atts['title'];
$class = '';    if(isset($atts['class']) )  $class =$atts['class'];
 $func_output='';

$func_output.='	<div class="carousel-item '.$class.'">
                            <div class="carousel-inner">
                                <figure>
                                    <img src="'.$image.'" alt="thumbnail" />
                                </figure>
                                <div class="content-block-detail">
                                    <div class="fab ripple">
                                        <a href="'.$url.'"><i class="fa fa-plus"></i></a>
                                    </div>
                                    <h3>'.$title.'</h3>
                                    <div class="item-list-description">'.do_shortcode($content).'</div>
                                </div>
                            </div>
                        </div>
                ';
			
    return $func_output;
}
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ owl_slide2 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/  

function owl_slide2_func($atts, $content) {
	
 $image='';if(isset($atts['image']))   $image = $atts['image'];
if(is_numeric($image) &&  $image!=''){$image= wp_get_attachment_image_src($image,"full");$image=$image[0];}
$url = '#';    if(isset($atts['url']) )  $url =$atts['url'];
$title = '';    if(isset($atts['title']) )  $title =$atts['title'];
$icon = '';    if(isset($atts['icon']) )  $icon =$atts['icon'];
$bg_color="#313131"; if(isset($atts['bg_color']))   $bg_color=$atts['bg_color']; 
$tx_color="#ffffff"; if(isset($atts['tx_color']))   $tx_color=$atts['tx_color']; 

$class = '';    if(isset($atts['class']) )  $class =$atts['class'];	
	
$btn_text = 'More Details';    if(isset($atts['btn_text']) )  $btn_text =$atts['btn_text'];
	
 $func_output='';

$func_output.='<div class="carousel-item '.$class.'" data-bg-color="'.$bg_color.'" data-image-src="'.$image.'" data-color="'.$tx_color.'">
                	<div class="carousel-inner item">
                    	<div class="service-item">
                        	<a href="'.$url.'">
                                <div class="box-icon">
                                    <i data-color="'.$tx_color.'" class="fa fa-'.$icon.'"></i>
                                </div>
                            </a>
                            <h2 data-color="'.$tx_color.'">'.$title.'</h2><div class="item-list-description" data-color="'.$tx_color.'">'.do_shortcode($content).'</div><div class="button raised dark-grey ripple"><a href="'.$url.'">'.$btn_text.'</a></div>
                        </div>
                    </div>
                </div>';
			
    return $func_output;
}
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ owl_slide3 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/  

function owl_slide3_func($atts, $content) {
	
 $image='';if(isset($atts['image']))   $image = $atts['image'];
if(is_numeric($image) &&  $image!=''){$image= wp_get_attachment_image_src($image,"full");$image=$image[0];}
	$url = '#';    if(isset($atts['url']) )  $url =$atts['url'];
$title = '';    if(isset($atts['title']) )  $title =$atts['title'];
$class = '';    if(isset($atts['class']) )  $class =$atts['class'];
$bg_color="#313131"; if(isset($atts['bg_color']))   $bg_color=$atts['bg_color']; 	
$tx_color="#ffffff"; if(isset($atts['tx_color']))   $tx_color=$atts['tx_color']; 
$icon = '';    if(isset($atts['icon']) )  $icon =$atts['icon'];

$btn_text = 'More Details';    if(isset($atts['btn_text']) )  $btn_text =$atts['btn_text'];
	
 $func_output='';

$func_output.='<div class="carousel-item '.$class.'" data-color="'.$tx_color.'" data-bg-color="'.$bg_color.'" >
            	<div class="block-thumb-wrap ripple">
                    <a href="'.$url.'">
                        <div class="content-block-thumb fit-img">
                            <img src="'.$image.'" alt="thumbnail" />
                        </div>
                    </a>
                </div>
                <div class="content-block-detail" data-bg-color="'.$bg_color.'">
                	<div class="top-triangle" data-shape-color="'.$bg_color.'"></div>
                	<h3 data-color="'.$tx_color.'">'.$title.'</h3>
					<div class="item-list-description" data-color="'.$tx_color.'">'.do_shortcode($content).'</div>
                    <a class="read-more" href="'.$url.'">'.$btn_text.'</a>
                </div>
            </div>';
			
    return $func_output;
}
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ owl_slide4 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/  

function owl_slide4_func($atts, $content) {
	 $image='';if(isset($atts['image']))   $image = $atts['image'];
if(is_numeric($image) &&  $image!=''){$image= wp_get_attachment_image_src($image,"full");$image=$image[0];}
	$url = '#';    if(isset($atts['url']) )  $url =$atts['url'];
$title = '';    if(isset($atts['title']) )  $title =$atts['title'];
$categ = '';    if(isset($atts['categ']) )  $categ =$atts['categ'];
$class = '';    if(isset($atts['class']) )  $class =$atts['class'];

	
 $func_output='';

$func_output.='<div class="carousel-item fit-img '.$class.'" data-image-src="images/blank.gif">
            	<a href="'.$url.'">
            		<img src="'.$image.'" alt="portfolio" />
                    <div class="portfolio-detail">
                    	<h3>'.$title.'</h3>
                        <div class="portfolio-category">
                        	Category
                            <span>'.$categ.'</span>
                        </div>
                    </div>
                </a>
            </div>';
			
    return $func_output;
}

/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ owl_slide5 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/  

function owl_slide5_func($atts, $content) {
	
 $image='';if(isset($atts['image']))   $image = $atts['image'];
if(is_numeric($image) &&  $image!=''){$image= wp_get_attachment_image_src($image,"full");$image=$image[0];}
 
$class = '';    if(isset($atts['class']) )  $class =$atts['class'];	
$title = '';    if(isset($atts['title']) )  $title =$atts['title'];
$tx_color="#ffffff"; if(isset($atts['tx_color']))   $tx_color=$atts['tx_color']; 
$bg_color="#313131"; if(isset($atts['bg_color']))   $bg_color=$atts['bg_color']; 	
	
 $func_output='';

$func_output.=' <div class="carousel-item carousel-title '.$class.'"   data-bg-color="'.$bg_color.'" data-image-src="'.$image.'">
            	<div class="carousel-inner title">
                    	
            		<div class="carousel-block-title">
            			<h1 data-color="'.$tx_color.'">'.$title.'</h1>
            			<div></div>
            		</div>
                        
            	</div>
            	<div class="overlay" data-bg-color="'.$bg_color.'" data-opacity="0.5"></div>
            </div> ';
			
    return $func_output;
}


/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ flex_slider ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/  


function flex_slider_func($atts, $content2) {
	 global $fialovy_flex_nr;
     $fialovy_flex_nr ++;
	 
	  $controlNav = 'false';    if(isset($atts['controlNav']) && $atts['controlNav']=='yes')  $controlNav = 'true';
	    $directionNav = 'false';    if(isset($atts['directionNav']) && $atts['directionNav']=='yes')  $directionNav = 'true';
	   $slideshow = 'true';    if(isset($atts['slideshow']) && $atts['slideshow']=='no')  $slideshow = 'false';
	   $pauseOnHover = 'true';    if(isset($atts['pauseOnHover']) && $atts['pauseOnHover']=='no')  $pauseOnHover = 'false';
	  $multipleKeyboard = 'true';    if(isset($atts['multipleKeyboard']) && $atts['multipleKeyboard']=='no')  $multipleKeyboard = 'false';
	  

$animationSpeed = '800';    if(isset($atts['animationSpeed']) )  $animationSpeed =$atts['animationSpeed'];	  
$class = '';    if(isset($atts['class']) )  $class =$atts['class'];


	$func_output2='';
	$func_output2.='<div class="slider-panel">
	<div id="flex_slider_'.$fialovy_flex_nr.'" class="slider-panel-wrapper  flexslider '.$class.'"><ul class="slides">';
	$content2=do_shortcode($content2);
	//$content2=preg_replace("/<br\W*?\/>/", "", $content2);
	$func_output2.=$content2;
	$func_output2.='</ul></div>';
	$func_output2.='<ul class="slide-nav">
        	<li>
            	<a class="slide-prev prev" href="prev"><i class="fa fa-angle-left"></i></a>
            </li>
            <li>
            	<a class="slide-next next" href="next"><i class="fa fa-angle-right"></i></a>
            </li>
        </ul></div>';

	$func_output2.="<script>jQuery(window).on('load', function() {	
		 jQuery('#flex_slider_".$fialovy_flex_nr."').flexslider({
        	controlNav: ".$controlNav.",
			directionNav: ".$directionNav.",
			slideshow: ".$slideshow.",
			animationSpeed:  ".$animationSpeed.",
			multipleKeyboard:  ".$multipleKeyboard.",
			pauseOnHover: ".$pauseOnHover."
      });
     jQuery('#flex_slider_".$fialovy_flex_nr."').parents('.scroll_section').addClass('flex_bg');
     var bgImage = '#flex_slider_".$fialovy_flex_nr." .slides li';
	 
      jQuery(bgImage).css('background-image', function () {
		var bg = ('url(' + jQuery(this).data('image-src') + ')');
		return bg;
	});
	});
	jQuery(window).on('load resize', function() {
		var fitHeight = jQuery(window).height();
		var slideHeight = jQuery('#flex_slider_".$fialovy_flex_nr."');
		slideHeight.height(fitHeight);
	});
	</script>";
	return $func_output2;
}
	
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ flex_slide ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/  

function flex_slide_func($atts, $content) {
	$image = '';    
	$caption = '';
	$overlay_color='#212121';
	$overlay_opacity='0.5';
	
	if(isset($atts['image']) && $atts['image']!='')  $image = $atts['image'];
	if(is_numeric($image)){$image= wp_get_attachment_image_src($image,"full");$image=$image[0];}
	
	if(isset($atts['overlay_color']))  $overlay_color = $atts['overlay_color'];
	if(isset($atts['overlay_opacity']))  $overlay_opacity = $atts['overlay_opacity'];
	

	$func_output='';
	$func_output.='<li  data-image-src="'.$image.'" >
	<div class="overlay" data-bg-color="'.$overlay_color.'" data-opacity="'.$overlay_opacity.'"></div>
                <div class="flex-caption">
                  '.$content.'
                 </div>
            </li>';
    return $func_output;
}












function heading1_func($atts, $content) {$func_output=''; if( isset($atts['xclass']))$class = $atts['xclass'];else $class='';
$func_output.='<h1 class="'.$class.'">'.do_shortcode($content).'</h1>';return $func_output;}
function heading2_func($atts, $content) {$func_output=''; if( isset($atts['xclass']))$class = $atts['xclass'];else $class='';
$func_output.='<h2 class="'.$class.'">'.do_shortcode($content).'</h2>';return $func_output;}
function heading3_func($atts, $content) {$func_output=''; if( isset($atts['xclass']))$class = $atts['xclass'];else $class='';
$func_output.='<h3 class="'.$class.'">'.do_shortcode($content).'</h3>';return $func_output;}
function heading4_func($atts, $content) {$func_output=''; if( isset($atts['xclass']))$class = $atts['xclass'];else $class='';
$func_output.='<h4 class="'.$class.'">'.do_shortcode($content).'</h4>';return $func_output;}
function heading5_func($atts, $content) {$func_output=''; if( isset($atts['xclass']))$class = $atts['xclass'];else $class='';
$func_output.='<h5 class="'.$class.'">'.do_shortcode($content).'</h5>';return $func_output;}
function heading6_func($atts, $content) {$func_output=''; if( isset($atts['xclass']))$class = $atts['xclass'];else $class='';
$func_output.='<h6 class="'.$class.'">'.do_shortcode($content).'</h6>';return $func_output;}


function next_btn_func($atts, $content){

 $func_output='';
	$func_output.='
	<div class="mouse-scroll">
        	<a id="moveSectionDown" href="#">
        		<img src="'.THEME_URL.'images/mouse-scroll.png" alt="mouse scroll" />
            </a>
        </div>';
    return $func_output;
}


/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ twitter ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

function twiiterr_func($atts, $content) {
        $func_output = '';
		global $tw_count;$tw_count++;
		$user="beantowndesign";
		$number="3";
		$consumer_key='iEdZIY9TqWYqDQtnNyWzQ';
		$consumer_secret='PztL2UCU2As9km7V3DI3bdaLcriHLa7gE0kuwJ7Ox4';
		$access_token='31509047-yZQ1BJcJ4WYMkvnPnDiNkEg4W3sixunjjpa8PeT7a';
		$access_token_secret='5mtqW6GTOKk7MhHyR28JhOHReHlgGDirLhQpop4E';
		
		if(isset($atts["user"]) && $atts["user"]!="") $user=$atts["user"]; 
		if(isset($atts["number"]) && $atts["number"]!="") $number=$atts["number"];
		if(isset($atts["consumer_key"]) && $atts["consumer_key"]!="") $consumer_key=$atts["consumer_key"];
		if(isset($atts["consumer_secret"]) && $atts["consumer_secret"]!="") $consumer_secret=$atts["consumer_secret"];
		if(isset($atts["access_token"]) && $atts["access_token"]!="") $access_token=$atts["access_token"];
		if(isset($atts["access_token_secret"]) && $atts["access_token_secret"]!="") $access_token_secret=$atts["access_token_secret"];


$default_options = array('key'=>$consumer_key, 'secret'=>$consumer_secret, 'token'=>$access_token,'token_secret'=>$access_token_secret,'screenname'=>$user);
$tweets = olida_getTweetss($number, $user,$default_options);
  $func_output.='<div class="container  text-center">
                    <i class="fa fa-twitter twitter-icon" data-animated="0"></i>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-offset-0">
                        <div class="content-slider" data-animated="0">';
  foreach($tweets as $tweet){
  	if(isset($tweet["text"])){
$func_output.='<div class="slide twitter-feed">
                                    <p class="white">'.olida_make_links_clickable($tweet["text"]).'</p>
                                    <p class="date white">'.olida_time_ago($tweet["created_at"]).'</p>
                                </div>';

  }          
 }   
 $func_output.=' <ul class="bullets"></ul></div>
                        </div>
                    </div>
                </div>';	
		 return $func_output;
	}


function section_func($atts, $content){
	global $flv_section;$flv_section++;
	
/* general */
$wide="no";   if(isset($atts['wide']) && $atts['wide']=="yes")   $wide="yes"; 
$height="";   if(isset($atts['height']))   $height=$atts['height']; 
$extra_class="";   if(isset($atts['class']))   $extra_class=$atts['class']; 

$show_homepage="no";   if(isset($atts['show_homepage']))   $show_homepage=$atts['show_homepage']; 


/* background */
$bg_color=""; if(isset($atts['bg_color']))   $bg_color=$atts['bg_color']; 
$text_color=""; if(isset($atts['text_color']))   $text_color=$atts['text_color']; 

$bg_image=""; if(isset($atts['bg_image']))   $bg_image=$atts['bg_image']; 
if(is_numeric($bg_image)){$bg_image= wp_get_attachment_image_src($bg_image,"full");$bg_image=$bg_image[0];}

$bg_img_width=""; if(isset($atts['bg_image_width']))   $bg_img_width=$atts['bg_image_width']; 

/* overlay */
$overlay_pattern="none"; if(isset($atts['overlay_pattern']))   $overlay_pattern=$atts['overlay_pattern']; 
$overlay_color="#000000"; if(isset($atts['overlay_color']) && $atts['overlay_color']!='')   $overlay_color=$atts['overlay_color']; 
$overlay_color_hexa=wizard_hex2rgb($overlay_color);
$overlay_opacity="0.5"; if(isset($atts['overlay_opacity']) && $atts['overlay_opacity']!='')   $overlay_opacity=$atts['overlay_opacity']; 

$func_output='';

$template = get_post_meta(get_the_ID(), '_wp_page_template', true );

if($show_homepage=="yes" && $template=="homepage-template.php" || $show_homepage=="no"){
	
$func_output.='<style scoped>';
if($text_color!=''){$func_output.=".home_section_".$flv_section." .row,.home_section_".$flv_section.",.home_section_".$flv_section." p{color:".$text_color." !important;}";}
$func_output.='</style>';


$func_output.='<div  class="home_section_'.$flv_section.' scroll_section '.$extra_class.'" ';

if($bg_image!=''){$func_output.=' data-image-src="'.$bg_image.'"';}
if($bg_color!=''){$func_output.=' data-bg-color="'.$bg_color.'"';}
$func_output.=" style='";
if($text_color!=''){$func_output.="color:".$text_color." !important;'";}

 if($bg_image!=''){$func_output.="background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  overflow: hidden;";}
$func_output.="'";  

$func_output.='><div class="section_inner_'.$flv_section.'" ';
$func_output.='style="height:100%;';
if($overlay_pattern!='none'){$func_output.='background:rgba('.$overlay_color_hexa.','.$overlay_opacity.');} ';}
if($height!=''){$func_output.='height:'.$height.'px;overflow:hidden;';}
$func_output.='">';


if($wide!="yes"){$func_output.='<div class="container"><div class="row">';}
$func_output.=do_shortcode($content);
if($wide!="yes"){$func_output.='</div></div>';}
$func_output.='</div></div>';

}
    return $func_output;
}


function space_func($atts, $content) {$func_output=''; $size= 20;    if(isset($atts['size']) && $atts['size']!='')  $size = $atts['size'];$func_output.='<div class="row"></div><div class="gap_'.$size.'"></div>';return $func_output;}

function clear_func($atts, $content) {$func_output='';$func_output.='<div class="row"></div>';return $func_output;}

function left_func($atts, $content) {global $l_buffer;$func_output='';$class='';if(isset($atts['class'])){$class=$atts['class'];}$func_output.='<div class="'.$class.' alignleft">';$func_output.=do_shortcode($content);$func_output.='</div>';$l_buffer+=0.5;return $func_output;}

function right_func($atts, $content) {global $l_buffer;$func_output='';$class='';if(isset($atts['class'])){$class=$atts['class'];}$func_output.='<div class="'.$class.' alignright">';$func_output.=do_shortcode($content);$func_output.='</div>';$l_buffer+=0.5;return $func_output;}

function center_func($atts, $content) {global $l_buffer;$func_output='';$class='';if(isset($atts['class'])){$class=$atts['class'];}$func_output.='<div class="'.$class.' action-container center aligncenter">';$func_output.=do_shortcode($content);$func_output.='</div>';$l_buffer+=0.5;return $func_output;}


/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ progress_bar_func ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/ 

function progress_bar_func($atts, $content) {
	

$percent='65';if(isset($atts['percent']))$percent=$atts['percent']; 

$func_output='';
$func_output.=' <div class="progress-bar-wrapper">
                        	<div class="progress">
                        		<div class="progress-bar number" role="progressbar" aria-valuenow="'.$percent.'" aria-valuemin="0" aria-valuemax="100" data-percentage="'.$percent.'"><span class="progress-title">'.$content.'</span><span class="progress-percentage">'.$percent.'%</span></div>
                        	</div>
                 </div>';
return $func_output;
}


/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ testimonial_slider ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/  


function testimonial_func($atts, $content2) {
	 global $fialovy_testimonial_slider_nr,$fialovy_testimonial_slide_nr,$fialovy_testimonial_slide_nrr;
     $fialovy_testimonial_slider_nr++;
	 $func_output='';
	  

	
	 	$func_output.='<div class="content-slider-parent"><div class="content-slider" data-animated="0" style="width:100%;">';	
	 	$func_output.=do_shortcode($content2); 
		
	if($fialovy_testimonial_slide_nr==1){
	  	$func_output.="</div>
                    </div>
                </div>";$fialovy_testimonial_slide_nr=0; }
		if($fialovy_testimonial_slide_nrr>2){
		$func_output.='<div class="bullets"></div>
                <a href="#" class="arrow-left"><i class="fa fa-angle-left"></i></a>
                <a href="#" class="arrow-right"><i class="fa fa-angle-right"></i></a>';}
     $func_output.=' </div></div> ';
	 return $func_output;
}
	
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ testimonial_slide ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/  

function testimonial_slide($atts, $content) {
	
	 global $fialovy_testimonial_slide_nr, $fialovy_testimonial_slide_nrr;
     $fialovy_testimonial_slide_nr++;$fialovy_testimonial_slide_nrr++;

	$name = '';
	$company = '';
    $image='';
	$stars_nr="1";
	$message='';
    if(isset($atts['image']))   $image = $atts['image'];
	if(isset($atts['company']))   $company = $atts['company'];
    if(isset($atts['name']))  $name = $atts['name'];
	if(isset($atts['stars_nr']))  $stars_nr = $atts['stars_nr'];
	if(isset($atts['message']))  $message = $atts['message'];
	
if(is_numeric($image) &&  $image!=''){$image= wp_get_attachment_image_src($image,"full");$image=$image[0];}

	$func_output2='';
if($fialovy_testimonial_slide_nr==1){
	$func_output2.='<div class="slide" style="width:100%;">
                    <div class="container">
                        <div class="row">';
}
	$func_output2.='<div class="col-lg-6 col-md-6 col-sm-6">
                   <div class="testimonial">
                  <img src="'.$image.'" class="image" width="80" height="80" alt="" />
                    <p>'.do_shortcode($message).'</p>
                    <p class="info uppercase">'.$name.' <em>'.$company.'</em>&nbsp;&nbsp;&nbsp;<span class="stars">';
					
  for($i=0;$i<$stars_nr;$i++){
  	 $func_output2.='<i class="fa fa-star"></i>';
  }
   $func_output2.='</span></p>
                    </div>
                   </div>';
				   
if($fialovy_testimonial_slide_nr==2){
	$func_output2.='</div>
                    </div>
                </div>';
  $fialovy_testimonial_slide_nr=0;
}

	return $func_output2;
}


/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ contact_form ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/ 
  
 
function contactform_func($atts) {
	
	$ymaill='';
if(isset($atts['to_email'])) $ymaill=$atts['to_email'];else $ymaill=ot_get_option('c_email');


$message=get_option_tree("success_msg","",false); 
	

 $func_output='';
$url = get_site_url();
$pageURL="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$val=get_option_tree('contact_fields','',false,true);
$fields=array();
if(count($val) >= 1){$fields=$val;}


	 if((isset($emailSent) && $emailSent == true))
		{$func_output.='<div class="notice confirmation">'.$message.'<span></span></div>';}
	 else{

$form_name="Your Name"; if(ot_get_option('c_form_name') != "Your Name" && ot_get_option('c_form_name') != '') { $form_name=ot_get_option('c_form_name');}
$form_email="Your Email"; if(ot_get_option('c_form_email') != "Your Email" && ot_get_option('c_form_email') != '') { $form_email=ot_get_option('c_form_email');}
$form_subject="Your Subject"; if(ot_get_option('c_form_subject') != "Your Subject" && ot_get_option('c_form_subject') != '') { $form_subject=ot_get_option('c_form_subject');}
$form_message="Your Message"; if(ot_get_option('c_form_message') != "Your Message" && ot_get_option('c_form_message') != '') { $form_message=ot_get_option('c_form_message');}
$form_send="Send Your Message"; if(ot_get_option('c_form_send') != "Send Your Message" && ot_get_option('c_form_send') != '') { $form_send=ot_get_option('c_form_send');}

$blog_name = $_SERVER['HTTP_HOST'];
    $func_output.='<div class="flvcontactform">
    <div class="box contact-form-wrapper">
        <form id="commentform" method="post" name="contact"  class="contact-form submit-form">
    <input type="text" name="to_email" id="to_email" value="'.$ymaill.'" style="display:none;" role="input"/>
    <input type="text" name="blog_name" id="blog_name" value="'.$blog_name.'" style="display:none;" role="input"/>
                        
                            <div class="row">
                                <div class="col-sm-6 addpadding">
                                    <div class="box text-input">
                                        <input id="name" type="text" name="flvname" class="flvname" required />
                                        <label>'.__($form_name, 'wizard').'</label>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="col-sm-6 addpadding">
                                    <div class="box text-input">
                                        <input id="email" type="text" name="flvemail"  class="flvemail" required />
                                        <label>'.__($form_email, 'wizard').'</label>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="box text-input">
                                <input id="mysubject" type="text"  class="flvsubject" name="flvsubject" required />
                                <label>'.__($form_subject, 'wizard').'</label>
                                <span></span>
                            </div>
                            
                            <div class="box text-input textarea">
                                <textarea id="mymessage" name="flvmessage" class="flvmessage" required></textarea>
                                <label>'.__($form_message, 'wizard').'</label>
                                <span></span>
                            </div>';

	$func_output.='<div class="button raised dark-grey">
	<input type="submit" value="'.__($form_send, 'wizard').'"  name="flvcontact" id="submit" class="button button-small submit flvsubmit"/>
<input type="hidden" name="flv_submitted" id="flv_submitted" value="true" /></div>';
 
  $func_output.='    <div class="clearfix"></div></form></div></div>';
   }
   return $func_output;

}





/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ blog list ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

function blog_list_func($atts, $content) {
    $func_output='';

	$orderby='date';if(isset($atts['orderby']))$orderby=$atts['orderby'];
	$order='desc';if(isset($atts['order']))$order=$atts['order'];
	$number=get_option('posts_per_page');if(isset($atts['number']))$number=$atts['number'];
	$exce=100;if(isset($atts['excerpt_length']))$exce=$atts['excerpt_length'];
	
	
//GET the posts
	
$myposts = get_posts(array('orderby' => $orderby,'numberposts' =>$number,'order'=>$order));

$infos=array();	if(ot_get_option('posts_fields','')) { $infos=ot_get_option('posts_fields','');}

 foreach($myposts as $po){
 	$link= get_permalink($po->ID);
	$title=$po->post_title;
$def_exce=$po->post_excerpt;
	
$func_output.='<div id="post-'.$po->ID.'" class="article row" >';
$func_output.='<div class="col-lg-2 col-md-3 col-sm-3 text-right">';

 if(isset($infos) && !in_array("date",$infos)){  
	$func_output.='<div class="date"><strong>'.get_the_time("d",$po->ID).'</strong>'.get_the_time("M",$po->ID).'</div>';

 }

$func_output.='<div class="blog-info uppercase">';

 if(isset($infos) && !in_array("author",$infos)) {   $func_output.='<p>'. __("By ","olida").'<a href="'. get_author_posts_url(get_the_author_meta('ID',$po->post_author)).'"> '. get_the_author_meta('user_nicename',$po->post_author).'</a></p>';      } 

 if(  isset($infos) && !in_array("categories",$infos)) { 
	$categories = get_the_category($po->ID);
    if ($categories && $categories[0]->name!="Uncategorized") {
    $func_output.='<p>'.__("In ","olida"); 
    $seperator = ', ';$output = '';
	if($categories){foreach($categories as $category) {
	if( $category->name!="Uncategorized")	$output.= '<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ,'swag'), $category->name ) ) . '">'.$category->cat_name.'</a>'.$seperator;
	}
	$func_output.=trim($output, $seperator);
}    		 $func_output.= '</p>';
} 
 }	

  if(  isset($infos) && !in_array("comments_number",$infos) && comments_open($po->ID)){
 		$func_output.='<p><i class="fa fa-comments"></i> <a  href="'.$link.'#flv_comment">';
		$comm_nr=get_comments_number($po->ID);	$func_output.=$comm_nr;
		$func_output.='</a></p>'; } 

   
   $func_output.='</div></div><div class="col-lg-10 col-md-9 col-sm-9">';
 $format = get_post_format( $po->ID );  
 if($format=="quote")
 {
$quote= get_post_meta($po->ID, 'dbt_quote', true);
$func_output.='<div class="quote">'.$quote .'</div>	';
 	
 }else{	

$func_output.='<h3><a href="'.$link.'">'.$title.'</a></h3>';

$show_featured='yes';	if(ot_get_option('featured_image_disp','')){	$show_featured=ot_get_option('featured_image_disp','');}
		if(isset($show_featured[0]) && $show_featured[0]!='yes') {


if($format=="gallery"){
$image = wp_get_attachment_image_src( get_post_thumbnail_id($po->ID),'full');
		$images_gallery = get_post_meta($po->ID, 'dbt_post_gallery', true);
		$images=explode(", ", $images_gallery);
		if(count($images)!=1){
		 $func_output.='<div class="content-slider-parent"><div class="content-slider post_carousel_'.$po->ID.'">';
		for($j=0;$j<count($images)-1;$j++){$attachment= str_replace ('"','',$images[$j]);     $func_output.='<img src="'.$attachment.'" class="slide full-width-image" alt="img"/>'; } 
		 $func_output.='<a href="#" class="arrow-left"><i class="fa fa-angle-left"></i></a>
             <a href="#" class="arrow-right"><i class="fa fa-angle-right"></i></a>
             </div></div>';
		}	
}elseif($format=="audio"){
$aud= get_post_meta($po->ID, 'dbt_audio_name', false,true);
if(isset($aud[0]) && $aud[0]!='') {	
 $func_output.='<div class="audio-wrapper">
<iframe src="https://w.soundcloud.com/player/?url='.$aud[0].'&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
</div>';
}	
}elseif($format=="video"){
	$ids= get_post_meta($po->ID, 'dbt_post_video_id', false,true);
		if( isset($ids[0]) && $ids[0]!='') {
			 $func_output.='<div class="video">';
		$videotype= get_post_meta($po->ID, 'dbt_video_select', false,true);
		
		$vwidth = get_post_meta($po->ID, 'dbt_post_video_width', false,true);
		$vheight = get_post_meta($po->ID, 'dbt_post_video_height', false,true);
		$vvwidth="100%";$vvheight=400;if(isset($vwidth[0]))$vvwidth=$vwidth[0];if(isset($vheight[0]))$vvheight=$vheight[0];
		$vids='';if(!isset($vwidth[0]))$vids='vids';
		if (isset($ids[0]) && $ids[0] != '') 
		{
			if ($videotype[0] == "vimeo" || $videotype == "vimeo"){ $func_output.='<iframe src="http://player.vimeo.com/video/' . $ids[0] . '" width="'.$vvwidth.'" height="'.$vvheight.'"  class="post-slider-border  generalframe '.$vids.'"></iframe>'; }
		else {
			 $func_output.='<iframe src="http://www.youtube.com/embed/' . $ids[0] . '?wmode=transparent" width="'.$vvwidth.'" height="'.$vvheight.'" class="post-slider-border  generalframe '.$vids.'"></iframe>';
		   }
		}
		 $func_output.='</div>';	
		}
}else{
 if(has_post_thumbnail($po->ID)) {
		  $func_output.=get_the_post_thumbnail($po->ID,"blog_default",  array('alt' => $title,'class'=>'article-image full-width-image full-max-image'));
		}  
		}
}
	
		
 $expt2="exce";$expt=ot_get_option('blog_excerpt',''); if($expt=="Total post content")$expt2="total";
 if($expt2=="total"){ 
               $func_output.= get_the_content($po->ID); 
          }else{ $output=olida_get_excerpt2($po->ID,$po->post_content,$link,$exce,$def_exce);  
    		$func_output.='<p>'.do_shortcode(olida_closetags($output)).'<br/></p>   '; 
               }   
       $func_output.='<a href="'.$link.'" class="learn-more uppercase">'. __("Learn more","olida").'</a>';
   }
 $func_output.='</div></div>';
}
	
 
 return $func_output;
 }




/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ service_icon ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/ 


function service_icon_func($atts, $content) {
global $service_counter;
$class='';if(isset($atts['type']))$class=$atts['type'];
$urll='#';if(isset($atts['url']))$urll=$atts['url']; 
$target='self';if(isset($atts['target']))$target=$atts['target']; 
$title='';if(isset($atts['title']))$title=$atts['title']; 

$tooltip='yes';if(isset($atts['tooltip']))$tooltip=$atts['tooltip']; 

$size='default';if(isset($atts['size']))$size=$atts['size']; 

$eclass="col-lg-5ths col-md-3 col-sm-4";
if($size=="fullwidth"){$eclass="";}

$func_output='';

	       if($tooltip=='yes'){
			 $func_output.=' <div class="services-panel1 dark">
	<div class="'.$eclass.' service-box nopadding service-tooltip animate-fadeIn aligncenter" title="'.strip_tags($content).'">'; 
		   }else{
			 $func_output.='  <div class="services-panel1 dark">
	<div class="'.$eclass.' service-box nopadding animate-fadeIn aligncenter" >';
		   }

	$func_output.='<a href="'.$urll.'" target="'.$target.'">
        <div class="box-icon">
            <i class="fa fa-'.$class.'"></i>
        </div>
        <h3>'.$title.'</h3>
    </a>
</div>
</div>';

return $func_output;
} 
 /*--------------------------------------------------------------------------------------
    *
    * vimeo
    *
    *-------------------------------------------------------------------------------------*/

function vimeo_func($atts) {
    global $l_buffer;
    $func_output='';
$aut=0;
$hd=0;
    if(isset($atts['width'])) $w=$atts['width'];
    if(isset($atts['height'])) $h=$atts['height'];
	if(isset($atts['autoplay']) && $atts['autoplay']=="yes") $aut=1;
	if(isset($atts['hd']) && $atts['hd']=="yes") $hd=1;
	$vids='';
	if(!isset($atts['width']))
	$vids='vids';
if(isset($atts['width']) && isset($atts['height']))
    {$func_output.='<div class="movie_contaner" style="margin-bottom:-6px;width:'.$w.'px;max-height:'.$h.'px;"><iframe style="width:100%;max-height:100%;" src="http://player.vimeo.com/video/'.$atts['id'].'?title=0&amp;byline=0&amp;portrait=0&amp;autoplay='.$aut.'';
    if($hd==1)
	 $func_output.='&amp;hd_off=0';
     $func_output.='" width="'.$w.'" height="'.$h.'" ></iframe></div>';}
else
	{$func_output.='<iframe class="'.$vids.'" style="margin-bottom:-6px !important;width:100%;max-height:100%;min-height:250px;" src="http://player.vimeo.com/video/'.$atts['id'].'?title=0&amp;byline=0&amp;portrait=0&amp;autoplay='.$aut.'';
 if($hd==1)
  $func_output.='&amp;hd_off=0';
  $func_output.='" ></iframe>';
	}
    return $func_output;
}

 /*--------------------------------------------------------------------------------------
    *
    * youtube
    *
    *-------------------------------------------------------------------------------------*/

function youtube_func($atts) {
    global $l_buffer;
    $func_output='';
$aut=0;
$hd=0;
    if(isset($atts['width'])) $w=$atts['width'];
    if(isset($atts['height'])) $h=$atts['height'];
	if(isset($atts['autoplay']) && $atts['autoplay']=="yes") $aut=1;
	if(isset($atts['hd']) && $atts['hd']=="yes") $hd=1;
		$vids='';
	if(!isset($atts['width']))
	$vids='vids';
	
	if(isset($atts['width']) && isset($atts['height']))
    {$func_output.='<div class="movie_contaner" style="margin-bottom:-6px;width:'.$w.'px;max-height:'.$h.'px;"><iframe style="width:100%;max-height:100%;"  src="http://www.youtube.com/embed/'.$atts['id'].'?autoplay='.$aut.'';
    if($hd==1)
    $func_output.='&amp;hd='.$hd.'';
    $func_output.='"  width="'.$w.'" height="'.$h.'" allowfullscreen></iframe></div>';
	}else{
	 $func_output.='<iframe   style="margin-bottom:-6px !important;width:100%;max-height:100%;min-height:250px;" class="'.$vids.'" src="http://www.youtube.com/embed/'.$atts['id'].'?autoplay='.$aut.'';
	 if($hd==1)
    $func_output.='&amp;hd='.$hd.'';
    $func_output.='"  allowfullscreen></iframe>';
	 }
	//$func_output.='<div style="width:'.$w.';height:'.$h.';"><object width="'.$w.'" height="'.$h.'"><param name="movie" value="http://www.youtube.com/v/'.$atts['id'].'?version=3&amp;hl=en_US"></param><param name="wmode" value="transparent"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/'.$atts['id'].'?version=3&amp;hl=en_US" type="application/x-shockwave-flash" width="'.$w.'" height="'.$h.'" allowscriptaccess="always" wmode="transparent" allowfullscreen="true"></embed></object></div>';

    return $func_output;


}


  /*--------------------------------------------------------------------------------------
    *
    * blockquote
    *
    *-------------------------------------------------------------------------------------*/

 function blockquote_func($atts, $content){
   $fout='';

	$name=''; if(isset($atts["name"]))$name= $atts["name"];
	
	$fout.=' <blockquote>'.do_shortcode($content).'</blockquote>';
    return $fout;
    }
 
  /*--------------------------------------------------------------------------------------
    *
    * blockquote
    *
    *-------------------------------------------------------------------------------------*/

 function blockquote1_func($atts, $content){
   $fout='';

	$name=''; if(isset($atts["first_letter"]))$name= $atts["first_letter"];
	
	$fout.='<blockquote class="blockquote2"><span>'.$name.'</span>'.do_shortcode($content).'</blockquote>';
    return $fout;
    }
    




/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ location_img ++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/ 

function location_img_func($atts, $content) {
    global $l_buffer;
	global $loc_usage;$loc_usage++;

    $func_output='';
	   extract( shortcode_atts( array(
		'lat' => 'something',
		'long' => 'somethinga',
		'language' => 'somethinga',
               'width' => 'somethinga',
               'height' => 'somethinga',
                 'zoom' => 'somethinga'
	), $atts ) );
	
	$latitude=$lat;
	$longitude=$long;
        $w=395;
        $h=200;
		$zoom=14;
        if(isset($atts['width']))         $w=$atts['width'];
		if(isset($atts['zoom']))$zoom=$atts['zoom'];
        if(isset($atts['height']))            $h=$atts['height'];
		
   $chr= substr($w, -1, 1);   
  
   if($chr=="%") 
 {
$func_output.='<div class="map_google" style="width:'.$w.'; height:'.$h.'px;">';}
   else
$func_output.='<div class="map_google" style="width:'.$w.'px; height:'.$h.'px;">';  	

$func_output.='<object width="'.$w.'" height="'.$h.'" data="https://maps.google.com/maps?q='.$latitude.','.$longitude;
$func_output.='&amp;hl=';
if($language)
$func_output.=$language;
else
$func_output.='en';
$func_output.='&amp;ll='.$latitude.','.$longitude.'&amp;spn=0.013716,0.033023&amp;output=embed&amp;z='.$zoom.'"></object><br><small><a href="https://maps.google.com/maps?q='.$latitude.','.$longitude;
$func_output.='&amp;hl=';
if($language)
$func_output.=$language;
else
$func_output.='en';
$func_output.='&amp;ll='.$latitude.','.$longitude.'&amp;spn=0.013716,0.033023&amp;output=embed&amp;z='.$zoom.'"></a></small>';
	$func_output.='</div>';

    $l_buffer+=0.5;
    return $func_output;
}

 /*--------------------------------------------------------------------------------------
    *
    * icons
    *
    *-------------------------------------------------------------------------------------*/



function icon_func($atts, $content) {
	global $flv_icon_nr;
	$flv_icon_nr++;
$func_output='';

$sign='no';if(isset($atts['sign']) && $atts['sign']=="yes")$sign="yes";
$class='plus';if(isset($atts['type']))$class=$atts['type'];
$urll='#';if(isset($atts['link']))$urll=$atts['link']; 
$size="23";if(isset($atts['size']))$size=$atts['size']; 
$shadow="no";if(isset($atts['shadow']) && $atts['shadow']=="yes")$shadow="yes" ;
$target="self";if(isset($atts['target']))$target=$atts['target'];

$color="#333333";if(get_option_tree("theme_color")!='')$color=get_option_tree("theme_color");
if(isset($atts['color']))$color=$atts['color']; 
$colorhover="#E96546";if(isset($atts['hover_color']))$colorhover=$atts['hover_color']; 

if($urll!="#"){$func_output.='<a href="'.$urll.'" target="'.$target.'" class="iicon" ';

$func_output.='>';}

$func_output.='<i class="fa fa-'.$class.'  '.'icn-'.$flv_icon_nr.'"';
if($sign=="no"){
$func_output.=' style="font-size:'.$size.'px !important;color:'.$color.';';
if($shadow=="yes"){$func_output.='text-shadow:2px 2px 0 #181818;';}
$func_output.='"';

$func_output.=' onMouseOver="this.style.color=\''.$colorhover.'\'"    onMouseOut="this.style.color=\''.$color.'\'"';
} 


$func_output.='></i>';
if($urll!="#"){$func_output.='</a>';}
$func_output.=' ';
return $func_output;
} 
  
  /*--------------------------------------------------------------------------------------
    *
    * bs_button
    *
    * //DW mod added xclass var
    *-------------------------------------------------------------------------------------*/
  function bs_button($atts, $content = null) {
     extract(shortcode_atts(array(
       "icon" => "none",
        "type" => false,
        "size" => false,
        "uppercase"=> false,
        "link" => '',
        "target" => false,
        "xclass" => false,
         "color" => false,
        "title" => false,
        "data" => false,
        "shape"=>'rectangle'
     ), $atts));

      if($data) { 
          $data = explode('|',$data);
          foreach($data as $d):
            $d = explode(',',$d);    
                $data_props .= 'data-'.$d[0]. '="'.$d[1].'" ';
          endforeach;
      }

	  if($shape=="round")$shape_class="fab";else $shape_class="button raised";
	  
     $return  =  '<div class="'.$shape_class.' ripple ';
	  if($icon!="none"){ $return  .=  'icon ';}
     $return .= ($uppercase=="yes") ? '  uppercase'  : ' ';
     $return .= ($type) ? ' ' . $type : '';
     $return .= ($size) ? ' ' . $size : ' small';
     $return .= ($xclass) ? ' ' . $xclass : '';
	 $return .= ($color) ? ' ' . $color : ' white';
     $return .= '">';
     
	 if($icon!="none"){ $return .= '<div>';}
	 
      $return .= '<a href="' . $link . '"';
       $return .= ($target) ? ' target=' . $target : '';
     $return .= ($title) ? ' title="' . $title . '"' : '';
	 if(isset($data_props)){$return .= ($data_props) ? ' ' . $data_props : '';}
	 $return .= '>';
	 if($shape!="round"){
	 if($icon!="none"){$return .='<i class="fa fa-'.$icon.'"></i>';}
	 }else{
	 	$return .='<i class="fa fa-plus"></i>';
	 }
	 if($shape!="round"){$return .=do_shortcode( $content );}
	 
	  if($icon!="none"){ $return .= '</div>';}
	  
	 $return .='</a> ';
$return .='</div> ';
     return $return;
  }




  /*--------------------------------------------------------------------------------------
    *
    * bs_span
    *
    *-------------------------------------------------------------------------------------*/
  function bs_span( $atts, $content = null ) {
    extract(shortcode_atts(array(
       "class" => ''
    ), $atts)); 
    return '<span class="' . $class . '  ">' . do_shortcode( $content ) . '</span>';

  }




  /*--------------------------------------------------------------------------------------
    *
    * bs_row
    *
    *
    *-------------------------------------------------------------------------------------*/
  function bs_row( $atts, $content = null ) {

    return '<div class="row">' . do_shortcode( $content ) . '</div>';

  }




  /*--------------------------------------------------------------------------------------
    *
    * bs_column
    *
    *-------------------------------------------------------------------------------------*/
  function bs_column( $atts, $content = null ) {
    extract(shortcode_atts(array(
      "lg" => false,
      "md" => false,
      "sm" => false,
      "xs" => false,
      "offset-lg" => false,
      "offset-md" => false,
      "offset-sm" => false,
      "offset-xs" => false,
      "pull-lg" => false,
      "pull-md" => false,
      "pull-sm" => false,
      "pull-xs" => false,
      "push-lg" => false,
      "push-md" => false,
      "push-sm" => false,
      "push-xs" => false,
      "class" => false,
    ), $atts));
    $return  =  '<div class="';
    $return .= ($lg) ? 'col-lg-' . $lg . ' ' : '';
    $return .= ($md) ? 'col-md-' . $md . ' ' : '';
    $return .= ($sm) ? 'col-sm-' . $sm . ' ' : '';
    $return .= ($xs) ? 'col-xs-' . $xs . ' ' : '';
	$return .= ($class) ? ' ' . $class . ' ' : '';
    $return .= (isset($atts["offset-lg"])) ? 'col-lg-offset-' . $atts["offset-lg"] . ' ' : '';
    $return .= (isset($atts["offset-md"])) ? 'col-md-offset-' . $atts["offset-md"] . ' ' : '';
    $return .= (isset($atts["offset-sm"])) ? 'col-sm-offset-' . $atts["offset-sm"] . ' ' : '';
    $return .= (isset($atts["offset-xs"])) ? 'col-xs-offset-' . $atts["offset-xs"] . ' ' : '';
    $return .= (isset($atts["pull-lg"])) ? 'col-lg-pull-' . $atts["pull-lg"] . ' ' : '';
    $return .= (isset($atts["pull-md"])) ? 'col-md-pull-' . $atts["pull-md"] . ' ' : '';
    $return .= (isset($atts["pull-sm"])) ? 'col-sm-pull-' . $atts["pull-sm"] . ' ' : '';
    $return .= (isset($atts["pull-xs"])) ? 'col-xs-pull-' . $atts["pull-xs"] . ' ' : '';
    $return .= (isset($atts["push-lg"])) ? 'col-lg-push-' . $atts["push-lg"] . ' ' : '';
    $return .= (isset($atts["push-md"])) ? 'col-md-push-' . $atts["push-md"] . ' ' : '';
    $return .= (isset($atts["push-sm"])) ? 'col-sm-push-' . $atts["push-sm"] . ' ' : '';
    $return .= (isset($atts["push-xs"])) ? 'col-xs-push-' . $atts["push-xs"] . ' ' : '';
    $return .= '">' . do_shortcode( $content ) . '</div>';

    return $return;
  }

 






}

new BoostrapShortcodes();



 ?>