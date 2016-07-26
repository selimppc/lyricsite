<?php 
/* 
Template Name: Portfolio
*/
 get_header();
 

	 while ( have_posts() ) : the_post(); 
	 
	global $post;  $postid = $post->ID;


	$shortcode_layout=get_post_meta($postid, 'dbt_portfolio_s_layout', TRUE); 
	$shortcode_columns=get_post_meta($postid, 'dbt_portfolio_s_columns', TRUE); 
	$shortcode_rows=get_post_meta($postid, 'dbt_portfolio_s_rows', TRUE); 
	$shortcode_categ=get_post_meta($postid, 'dbt_portfolio_s_categories', TRUE); 
	$shortcode_order=get_post_meta($postid, 'dbt_portfolio_s_order', TRUE); 
	$shortcode_orderby=get_post_meta($postid, 'dbt_portfolio_s_orderby', TRUE); 
	$shortcode_content=get_post_meta($postid, 'dbt_portfolio_s_content', TRUE); 
	$shortcode_columns=get_post_meta($postid, 'dbt_portfolio_columns', TRUE); 

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

     
    	<!--Portfolio Title and Filter Start-->
        <div class="container">
            <div class="row">
            	<div class="inner-wrapper">
                
                	<!--Block Title-->
    				<div class="block-title">
    					<h1> <?php echo get_the_title($postid); ?> </h1>
    				</div>
    				<!--End-->
    	</div>
            </div>
        </div>
     
        <!--Portfolio Title and Filter End-->
        			
<?php $port_categories="";	if(isset($shortcode_categ[0]) && $shortcode_categ[0]!=""){	

		foreach($shortcode_categ as $category){
		$port_categories.=$category.", ";
		}
} 


$shortcode='';
$shortcode='[portfolio columns="'.$shortcode_columns.'" layout="'.$shortcode_layout.'" columns="'.$shortcode_columns.'" rows="'.$shortcode_rows.'" categories="'.$port_categories.'" order="'.$shortcode_order.'" ';
if($shortcode_orderby!="likes"){$shortcode.='orderby="'.$shortcode_orderby.'" ';}else{$shortcode.='meta_key="post_likes_count" orderby="meta_value" ';	}
$shortcode.=' ]';

echo do_shortcode($shortcode); ?>  

<?php if($shortcode_content!=''){ ?>

    <?php   echo'<div class="flvpage-content">'.do_shortcode($shortcode_content).'</div>';  ?>  

<?php }  ?>
			<?php endwhile; // end of the loop. 

//footer
 get_footer();  ?>
