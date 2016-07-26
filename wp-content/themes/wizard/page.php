<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package inka
 */

get_header(); ?>


				
	<?php while ( have_posts() ) : the_post(); ?>
				
	<?php 
	global $post;  $postid = $post->ID;
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
    <!--Single Page Content Body Start-->
    <div class="page-content" data-midnight="darkColor">
        <div class="container">
        <?php		
        if($header_banner==""){
        	echo '<h3>';
        		the_title(); 
			echo '</h3><br/>';
			 }
		
		 the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gentleman' ),
				'after'  => '</div>',
			) );
		?>
	
	<?php edit_post_link( __( 'Edit', 'gentleman' ), '<p class="entry-meta"><span class="edit-link">', '</span></p>' ); ?>
	

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

		</div>
		</div>

<?php get_footer(); ?>
