<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package inka
 */



get_header();  ?>

       	
<?php 
 global $wp_query;
 $post_class='';
 
      $out_title=get_the_title(get_option('page_for_posts', true));
	  $front=is_front_page();
      $our_id=olida_get_page_id($out_title);
	   $template = get_post_meta($our_id, '_wp_page_template', true );
      $sidebar = get_post_meta( $our_id, 'dbt_sidebar', TRUE ); 
	  $side='sidebar_blog';
	if($sidebar=="Blog Sidebar")$side='sidebar_blog';elseif($sidebar=="Sidebar 1")$side='sidebar1';elseif($sidebar=="Sidebar 2")$side='sidebar2';elseif($sidebar=="Sidebar 3")$side='sidebar3';elseif($sidebar=="Sidebar 4")$side='sidebar4';elseif($sidebar=="Sidebar 5")$side='sidebar5';
?> 
	   <!-- 
      /*
      |**************************************************************************
      |  Blog
      |  
      |**************************************************************************
      |
      | 
      |
      */
   -->

<?php 
if($front!=1){
$header_banner=get_post_meta($our_id, 'dbt_header_banner', TRUE);
$header_bg=get_post_meta($our_id, 'dbt_header_bg', TRUE);

if($header_banner!="" && $front!=1 && $template!="homepage-template.php"){	?>
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
<?php }} ?>



    <!--Single Page Content Body Start-->
    <div class="page-sidebar" data-midnight="darkColor">
    	<div class="container nopadding">
        	<div class="page-sidebar-wrapper">

           
	 <div class="content-wrapper">
                	<div class="inner-wrapper">
	

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php 	$post_class="";			?>
				<div id="post-<?php esc_attr(the_ID()); ?>"  <?php post_class($post_class." blog-entry"); ?> >
				<?php	
				$postid=get_the_id();

				$format=get_post_format($postid);
				get_template_part( 'content-default', $format );	
				
				 ?>
				</div>
					

			<?php endwhile; ?>
			
		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>
		
		
			
</div>	
</div>	


   <!--Pagination For Small Devices Start-->
                <div class="pagination-wrapper small-devices">
                    <div class="container">
                        <nav class="pagination">
                            <?php		olida_pagination($pages = '', $range = 2);					?>
                        </nav>
                    </div>
                </div>
                <!--Pagination For Small Devices End-->
                
                <div class="box-divider"></div>

		 <div class="sidebar-wrapper">
               <div class="inner-wrapper">
	<?php $side1=olida_get_dynamic_sidebar($side); echo(do_shortcode($side1)); ?>
	</div>
	</div>



	</div> <!-- end load row -->
     </div>
   </div><!-- end posts-container -->
   

				  <?php		olida_pagination($pages = '', $range = 2);					?>

	
	
	
	
<?php get_footer(); ?>