<?php
/**
 * The template for displaying Error pages.
 *
 * @package WordPress
 * @subpackage gentleman
 * @since gentleman 1.0
 */

get_header(); ?>

<?php	if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php   	global $post;  $postid = $post->ID; $port=$post; 
 $infos=array();	if(ot_get_option('posts_fields','')) { $infos=ot_get_option('posts_fields','');} 
  ?>  

    <div class="page-header-featured" data-bg-color="#212121">
        
     <?php   $lightbox_type=get_post_meta($postid, 'meta_post_lightbox_type', true);
	 	$show_featured='yes';	if(ot_get_option('featured_image_disp')){$show_featured=ot_get_option('featured_image_disp');	}
	
		if($lightbox_type=="video"){
			 echo'<div class="featured-area">';
		$thumb_lightbox_video_type = get_post_meta($postid, 'meta_post_lightbox_video_type', true);

		if($thumb_lightbox_video_type=="youtube"){
		$thumb_lightbox_youtube_id = get_post_meta($postid, 'meta_post_lightbox_youtube_id', true);
		echo '<iframe width="100%"  style="min-height: 100vh;" src="http://www.youtube.com/embed/'.$thumb_lightbox_youtube_id.'?autoplay=1"></iframe>';
         }
		elseif($thumb_lightbox_video_type=="vimeo"){
			$thumb_lightbox_vimeo_id= get_post_meta($postid, 'meta_post_lightbox_vimeo_id', true);
		echo '<iframe width="100%"  style="min-height: 100vh;" src="//player.vimeo.com/video/'.$thumb_lightbox_vimeo_id.'?autoplay=1"></iframe>';
		}
		
			echo '</div>';
		}
		elseif($lightbox_type=="gallery"){

		$image = wp_get_attachment_image_src( get_post_thumbnail_id(),'full');
		$images_gallery = get_post_meta(get_the_ID(), 'flv_gallery', true);
		$images=explode(", ", $images_gallery);
	
      echo'  <div class="featured-area">
        	<div class="flexslider">
            	<ul class="slides" style="margin:0px;margin-left:-40px">';
             for($j=0;$j<count($images)-1;$j++){$attachment= str_replace ('"','',$images[$j]);   
             $alt_text = wizard_get_attachment_id_from_url($attachment); 
          echo'<li>
                    	<a class="fancybox" data-fancybox-group="group" href="'.$attachment.'" title="'.esc_attr($alt_text).'">
                        	<figure class="fit-img">
                                <img src="'.esc_attr($attachment).'" alt="featured image" />
                            </figure>
                        </a>
                    </li>';
			 } 
              echo'  </ul>
            </div>
        </div>
        <ul class="slide-nav">
        	<li>
            	<a class="slide-prev prev" href="prev"><i class="fa fa-angle-left"></i></a>
            </li>
            <li>
            	<a class="slide-next next" href="next"><i class="fa fa-angle-right"></i></a>
            </li>
        </ul>';

	} else { 
		 if (has_post_thumbnail()) {
		 	
			$thumb_size="blog_single";
			$header_bg= wp_get_attachment_image_src( get_post_thumbnail_id( $postid ), 'single-post-thumbnail' );
			 $alt_text = wizard_get_attachment_id_from_url($header_bg[0]); 
			
	 echo' <div class="featured-area">
        	<div class="flexslider">
            	<ul class="slides" style="margin:0px;margin-left:-40px">
            		<li>
                    	<a class="fancybox" data-fancybox-group="group" href="'.esc_url($header_bg[0]).'" title="'.esc_attr($alt_text).'">
                        	<figure class="fit-img">
                                <img src="'.esc_attr($header_bg[0]).'" alt="featured image" />
                            </figure>
                        </a>
                    </li>
                     </ul>
            </div>
        </div>';
		 }	}	?>
      
        <!--Overlay Title Start-->
        <div class="overlay-title">
        	<div class="container">
            	<h1><?php the_title(); ?></h1>
                <nav class="single-post-meta portfolio-post">
                	<ul class="number">
  <?php   
  
  
  $client = get_post_meta($postid, 'flv_client', true);
  $price = get_post_meta($postid, 'flv_price', true);
  if($client){
 		
	echo '<li><span>'.__("Client","wizard").'</span>';
	echo ' <a href="javascript:;">'.esc_html($client).'</a>';	
	echo '  </li>';	
  } ?>
<?php 


if(  isset($infos) && !in_array("categories",$infos)) { 
	

?>
<?php echo '<li><span>'.__("Category","wizard").'</span>';	?> 
<?php	
	$post_categories = wp_get_post_categories( $postid );
foreach($post_categories as $c){
	$cat = get_category( $c );
	echo ' <a href="javascript:;">'.esc_html($cat->name).'</a>';	
}
 ?>
<?php  echo '  </li>';	  } ?>

 <?php if(isset($infos) && !in_array("date",$infos)){
  	echo '<li><span>'.__("Date","wizard").'</span>';
	echo ' <a href="javascript:;">'.esc_html(get_the_date( 'd' )).' '.esc_html(get_the_date("M")).' '.esc_html(get_the_date("Y")).'</a>';	
	echo '  </li>';	} ?>
                             
     <?php   if($price){             		
	echo '<li><span>'.__("Price","wizard").'</span>';
	echo ' <a href="javascript:;">'.esc_html($price).'</a>';	
	echo '  </li>';	
	} ?>
                		
                    </ul>
                </nav>
                
                
                
                      <?php 
	$hide_share_disp='no';	if(ot_get_option('share_disp')){$hide_share_disp=ot_get_option('share_disp');	}
	if(isset($hide_share_disp[0]) && $hide_share_disp[0]!='yes') { ?>
       <ul class="post-social-media">
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink( $post->ID)); ?>"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/home?status=<?php echo esc_url(get_permalink( $post->ID)); ?>"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink( $post->ID)); ?>"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url(get_permalink( $post->ID)); ?>&title=<?php echo esc_attr($post->post_title); ?>"><i class="fa fa-linkedin"></i></a></li>
        </ul>
     <?php } ?>
     
            </div>
        </div>
        <!--Overlay Title End-->
        
    </div>
    <!--Single Page Header End-->


    
 <?php    
    
$options = get_option('flv_port_admin_settings' ); 
$section1type=$options['port_single_show_header'];
if(get_post_meta($postid, 'meta_portfolio_s_modal_layout', true)!=$section1type)
$section1type= get_post_meta($postid, 'meta_portfolio_s_modal_layout', true);   


$thumb_lightbox_video_type = get_post_meta($postid, 'meta_post_lightbox_video_type', true);
if($lightbox_type=='')$lightbox_type="none";
$section=''; $section=get_post_meta($postid, 'meta_post_section1', true);


$aux = (wp_get_attachment_image_src( get_post_thumbnail_id($postid),'large')); 
$meta_bigimage='';
$meta_bigimage = get_post_meta($postid, 'flv_bigimage', true); 
if($meta_bigimage==''){$meta_bigimage=$aux[0];}
									
?>
    <div class="page-content portfolio-single" data-midnight="darkColor">
        <div class="container">
            <div class="row">
 
			<?php	the_content();			?>

</div>
</div>
</div>
<?php

$rel_text = ot_get_option("port_single_related");
if(!$rel_text)$rel_text="Related Items";
?>
    <!--Single Page Related Work Start-->
    <div class="related-work">
    	<div class="container">
        	<h3 class="page-subtitle"><?php echo esc_html($rel_text); ?></h3>
        </div>
        <?php echo do_shortcode("[related_projects target='_self']"); ?>
       </div> 
<?php endwhile; ?>


<?php get_footer(); ?>