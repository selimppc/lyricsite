<?php
/**
 * @package inka
 */
/*  content - default */
global $post;
?>
<?php $infos = array();
	if (ot_get_option('posts_fields', '')) { $infos = ot_get_option('posts_fields', '');
	}
?>

                            <!--Blog Thumbnail-->
                            <div class="blog-entry-thumbnail ripple">
                            	<a href="<?php esc_url(the_permalink()); ?>">
                                	<figure>
                                    	<div class="thumbnail-hover"></div>
     <?php if (has_post_thumbnail()) {
		$show_featured = 'yes';
		if (ot_get_option('featured_image_disp', '')) {	$show_featured = ot_get_option('featured_image_disp', '');
		}
		if (isset($show_featured[0]) && $show_featured[0] != 'yes') {
			echo get_the_post_thumbnail(get_the_ID(), "blog_default", array('alt' => get_the_title()));
		}
	} ?>
                                    </figure>
                                </a>
                            </div>
                            
                            <!--Blog Title and Meta-->
                            <div class="blog-entry-title">
                            	<div class="post-date">
                                	<div class="date-wrap">
                                   <?php echo '<span>'.esc_attr(get_the_date('d')) . '</span>' . esc_attr(get_the_date("M")) ;	 ?> 
                                    </div>
                                </div>
                                <div class="post-title">
                                	<a href="<?php esc_url(the_permalink()); ?>">	<h2><?php the_title(); ?></h2></a>
                                    <div class="blog-meta">
                                        <ul>
   
       <li class="flv_dat">
   <?php echo '<a href="javascript:;">'.esc_attr(get_the_date( 'd' )).' '.esc_attr(get_the_date("M")).' '.esc_attr(get_the_date("Y")).'</a>';	?>
       	</li>
    <?php if(  isset($infos) && !in_array("categories",$infos)) { echo " <li class='flv_cat'> "; ?>
			<?php
		$categories_list = get_the_category_list(__(', ', 'gentleman'));
		if ($categories_list) :	 printf(__('%1$s', 'gentleman'), $categories_list);
		endif;
	 ?>
	  
	<?php 	echo " </li> ";  } ?>
	
        <?php if(isset($infos) && !in_array("author",$infos)) {  echo " <li class='flv_aut'> "; ?><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>"><?php echo get_the_author(); ?></a> <?php echo " </li> "; } ?> 
       
        <?php if(  isset($infos) && !in_array("comments_number",$infos) && comments_open()){
         	echo " <li class='flv_com'> "; 
		 if ( ! post_password_required() && ( comments_open() ) ) :  comments_popup_link( __( '0', 'gentleman' ), __( '1', 'gentleman' ), __( '%', 'gentleman' ) );  endif; ?>
		<?php  	echo " </li> ";   } ?> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
<!--Blog Description-->
<div class="blog-entry-description">
<?php $expt2 = "exce";
	$expt = ot_get_option('blog_excerpt', '');
	if ($expt == "Total post content")
		$expt2 = "total";
?>
<?php if($expt2=="total"){ ?>
  <?php the_content(); ?>
<div class="post_pag">
<?php olida_custom_wp_link_pages(); ?>
</div> 
<?php }else{ ?>
<p><?php $output = olida_get_excerpt(get_the_ID());
	echo do_shortcode($output);
 ?><br/></p>    
  <?php    } ?> 
   </div>
                            
                            
                            



		
                     

	
				

	
	 
              


