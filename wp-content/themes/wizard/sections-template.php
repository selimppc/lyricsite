<?php 
/* 
Template Name: Sections
*/
?>
<?php get_header(); ?>

	
<?php while ( have_posts() ) : the_post(); ?>
				
	<?php 
	global $post;  $postid = $post->ID;
		


$front=is_front_page();
$template = get_post_meta($postid, '_wp_page_template', true );



$header_banner=get_post_meta($postid, 'dbt_header_banner', TRUE);
$header_bg=get_post_meta($postid, 'dbt_header_bg', TRUE);

if($header_banner!=""){	?>
         <!--Single Page Header Start-->
    <div class="page-header" data-bg-color="#212121" data-image-src=" <?php echo esc_attr(do_shortcode($header_bg)); ?>">
    	<div class="fit-screen-wrap">
            <div class="container">
                <div class="page-header-wrap animate-fadeIn">
                   <?php echo do_shortcode($header_banner); ?>
                </div>
            </div>
        </div>
        <div class="overlay" data-bg-color="#212121" data-opacity="0.6"></div>
    </div>
    <!--Single Page Header End-->
<?php } ?>


	  
<div id="flv_layout">	
		<?php the_content(); ?>
		
	<?php edit_post_link( __( 'Edit', 'gentleman' ), '<p class="entry-meta"><span class="edit-link">', '</span></p>' ); ?>
	
			<?php endwhile; // end of the loop. ?>

   </div>
   
<?php get_footer(); ?>