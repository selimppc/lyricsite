<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package inka
 */

get_header(); 

$color=ot_get_option("404_color",'');
$ov_color=ot_get_option("404_ov_color",'');
$img=ot_get_option("404_img",'');
$ov_color_op=ot_get_option("404_ov_opacity",'');

?>


<!--Container Wrapper Start-->
<div class="container-wrapper">
	
    <!--Single Page Header Start-->
    <div class="page-header" data-bg-color="<?php echo esc_attr($color); ?>" data-image-src="<?php echo esc_attr($img); ?>">
    	<div class="fit-screen-wrap">
            <div class="container">
            	
		
            <?php echo do_shortcode(ot_get_option("404_content",'')); ?>
			
                
                
            	
	 </div>
        </div>
        <div class="overlay" data-bg-color="<?php echo esc_attr($ov_color); ?>" data-opacity="<?php echo esc_attr($ov_color_op); ?>"></div>
    </div>
    <!--Single Page Header End-->
    
   

</div>
        
<?php get_footer();  ?>

