<?php
/**
 * The Template for displaying all single posts.
 *
 * @package inka
 */

get_header(); 

 global $post;  $postid = $post->ID;
 
	
		$template="Right Sidebar";
		$sidebar = ot_get_option("blog_single_sidebar");

		$side=$sidebar;
		
		if($sidebar=="Blog Sidebar")$side='sidebar_blog';
		elseif($sidebar=="Sidebar 1")$side='sidebar1';
		elseif($sidebar=="Sidebar 2")$side='sidebar2';
		elseif($sidebar=="Sidebar 3")$side='sidebar3';
		elseif($sidebar=="Sidebar 4")$side='sidebar4';
		elseif($sidebar=="Sidebar 5")$side='sidebar5';
 ?>

   <!-- 
      /*
      |**************************************************************************
      |  Blog Article
      |  
      |**************************************************************************
      |
      | 
      |
      */
   -->

<?php 
	global $post;  $postid = $post->ID; 
	 $infos=array();	if(ot_get_option('posts_fields','')) { $infos=ot_get_option('posts_fields','');} 
 ?>   
	
	
			<?php while ( have_posts() ) : the_post(); ?>
      
      
    <!--Single Page Header Start-->
    <div class="page-header-featured" data-bg-color="#212121">
        
     <?php   $format = get_post_format( $postid );
	
		
			if($format=="gallery"){

		$image = wp_get_attachment_image_src( get_post_thumbnail_id(),'full');
		$images_gallery = get_post_meta(get_the_ID(), 'dbt_post_gallery', true);
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
                <nav class="single-post-meta blog-post">
                	<ul>
                		
 <?php if(isset($infos) && !in_array("date",$infos)){
  	echo '<li><span>'.__("Date","wizard").'</span>';
	echo ' <a href="javascript:;">'.get_the_date( 'd' ).' '.get_the_date("M").' '.get_the_date("Y").'</a>';	
	echo '  </li>';	} ?>
                              

<?php if(  isset($infos) && !in_array("categories",$infos)) { ?>
<?php echo '<li><span>'.__("Category","wizard").'</span>';	?> 
<?php	
	$post_categories = wp_get_post_categories( $postid );
foreach($post_categories as $c){
	$cat = get_category( $c );
	echo ' <a href="javascript:;">'.$cat->name.'</a>';	
}

//$categories_list = get_the_category_list( __( ', ', 'gentleman' ) );
	//if ( $categories_list ) :	 printf( __( '%1$s', 'gentleman' ), $categories_list ); endif;	 ?>
<?php  echo '  </li>';	  } ?>


 <?php if(isset($infos) && !in_array("author",$infos)) { 
 echo '<li><span>'.__("By","wizard").'</span>';	?>    
<a href="javascript:;"><?php echo get_the_author(); ?></a>
 <?php  echo '  </li>';	  } ?> 
     
                        
<?php if(  isset($infos) && !in_array("comments_number",$infos) && comments_open()){ 
		echo '<li><span>'.__("Comments","wizard").'</span>';	?> 
<?php if ( ! post_password_required() && ( comments_open() ) ) :  comments_popup_link( __( '0', 'gentleman' ), __( '1', 'gentleman' ), __( '%', 'gentleman' ) );  endif; ?></a></p>  
<?php   echo '  </li>';	 } ?> 

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
       
    <!--Single Page Content Body Start-->
    <div class="page-sidebar" data-midnight="darkColor">
    	<div class="container nopadding">
        	<div class="page-sidebar-wrapper">
            	
 <!--Content Section Start-->
                <div class="content-wrapper">
                	<div class="inner-wrapper">
                		   

                                    <?php the_content();?>
                                    
                                         
         <?php 		$psnavi="no";
			$psnavi=ot_get_option('blog_single_navi');
			 if(isset($psnavi[0]) && $psnavi[0]=='yes') {
		
			olida_content_nav( 'nav-below' ); 
			} ?>
         
         
     <?php
           
	$taxonomy = "post_tag"; // can be category, post_tag, or custom taxonomy name
	$posttags = get_the_tags($postid);	
	if(count($posttags)>1){ ?>	
		  <div class="divider3"></div>
	<div class="col-xs-12">
     <i class="fa fa-tags"></i>
	
	<?php    _e('Tagged','wizard'); echo ": ";
	$curr=0;
		if ($posttags) {
			  foreach($posttags as $tag) {
			  	$curr++;
				$term_slug = $tag->name;$term = get_term_by('slug', $term_slug, $taxonomy);
				if($curr==1){
			  echo "<a href='". get_tag_link($tag->term_id)."'>".$tag->name."</a>";  
				} else {
			echo ", <a href='". get_tag_link($tag->term_id)."'>".$tag->name."</a> ";  	
				}
			  }
		} ?>
	</div>
	<div class="row"></div>
	<?php } ?>
               
               
                       
                 <div class="divider3"></div>
                 
              <?php 
	$hide_share_disp='no';	if(ot_get_option('share_disp')){$hide_share_disp=ot_get_option('share_disp');	}
	if(isset($hide_share_disp[0]) && $hide_share_disp[0]!='yes') { ?>
       <div class="post-share-bottom">
       	<h4><?php _e("Share This","wizard"); ?></h4>
       	 <ul>
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink( $post->ID)); ?>"><i class="fa fa-facebook"></i>Facebook</a></li>
            <li><a href="https://twitter.com/home?status=<?php echo esc_url(get_permalink( $post->ID)); ?>"><i class="fa fa-twitter"></i>Twitter</a></li>
            <li><a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink( $post->ID)); ?>"><i class="fa fa-google-plus"></i>Google Plus</a></li>
            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url(get_permalink( $post->ID)); ?>&title=<?php echo esc_attr($post->post_title); ?>"><i class="fa fa-linkedin"></i>LinkedIn</a></li>
        </ul>
         </div>
     <?php } ?>
                  


    
                        <!--Post Author Start-->
                        <div class="post-author">
                        	<div class="post-author-avatar">
                            	<figure>
                                	<?php echo get_avatar(  get_the_author_meta('ID'), "124x124" ); ?>
                                </figure>
                            </div>
                            <div class="post-author-detail">
                            	<h4><?php _e("About ","wizard"); echo get_the_author_meta('nickname'); ?></h4>
                                <div class="author-description">
                                <?php the_author_meta('description'); ?> 
                                </div>
                            </div>
                        </div>
                        <!--Post Author End-->
           
           
           
           
           <?php 
$ps_related="yes";
if(ot_get_option('blog_single_related'))$ps_related=ot_get_option('blog_single_related');

if($ps_related=="yes"){
	if ( shortcode_exists( 'related_posts' ) ) { 
$ps_related_title="Related Posts";

	
	?>
	 <div class="related-post">
                        	<h2 class="post-subtitle"><?php echo esc_html($ps_related_title);?></h2>
                            <div class="row">

						<?php echo do_shortcode("[related_posts number='3']"); ?>
						
						</div>
						</div>
	<?php }} ?>	
	

         
   <div class="post_pag">
            <?php olida_custom_wp_link_pages();?>
	</div>




          <?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ){
					comments_template();
					}
			?>
			
                        </div>
                    </div>      
  
	

 <div class="box-divider"></div>
                
                <!--Sidebar Section Start-->
                <div class="sidebar-wrapper">
                	<div class="inner-wrapper">
	<?php $side1=olida_get_dynamic_sidebar($side); echo(do_shortcode($side1)); ?>
	  </div>
        </div>
        
    
	  </div>
      </div>
    </div>
    <!--Single Page Content Body End-->
    
  	<?php endwhile; // end of the loop. ?>  
  	
<?php get_footer(); ?>

