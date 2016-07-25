<?php 
/* 
Template Name: Page With Right Sidebar
*/
?>


<?php get_header(); ?>

<?php

 global $post;  $postid = $post->ID;
  $template = get_post_meta($post->ID, '_wp_page_template', true );
 $pageid=$postid;
$sidebar = get_post_meta($pageid, 'dbt_sidebar', TRUE);
$side='sidebar_blog';
if($sidebar=="Blog Sidebar"){$side='sidebar_blog';}
elseif($sidebar=="Sidebar 1"){$side='sidebar1';}
elseif($sidebar=="Sidebar 2"){$side='sidebar2';}
elseif($sidebar=="Sidebar 3"){$side='sidebar3';}
elseif($sidebar=="Sidebar 4"){$side='sidebar4';}
elseif($sidebar=="Sidebar 5"){$side='sidebar5';}

?>
	
			<?php
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





<div class="page-content" data-midnight="darkColor">
        <div class="container">
        	
     <div class="col-lg-9 col-md-9 col-sm-9">
       			
	<?php  while ( have_posts() ) : the_post(); ?>	
			
				
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gentleman' ),
				'after'  => '</div>',
			) );
		?>
	
	<?php edit_post_link( __( 'Edit', 'gentleman' ), '<p  class="entry-meta"><span class="edit-link">', '</span></p>' ); ?>
	

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>
	
	</div>
				

	
	
<?php if($template=="page-sidebar-right.php"  || $template=="blog-page-sidebar-right.php"){?>
			<div class="col-lg-3 col-md-3 col-sm-3">
               <div class="inner-wrapper">
<?php  $side1=olida_get_dynamic_sidebar($side); echo(do_shortcode($side1)); ?>         
		</div></div>
<?php  } ?>


	 </div> <!-- end load row -->
     </div>


<?php get_footer(); ?>

    	
