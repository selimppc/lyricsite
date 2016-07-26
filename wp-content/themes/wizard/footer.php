   
       
  <?php if(!is_404()){
  	
$color=ot_get_option("footer_color",'');if(!$color){$color='#111111';}
$ov_color=ot_get_option("footer_ov_color",'');if(!$ov_color){$ov_color='#111111';}
$img=ot_get_option("footer_img",'');if(!$img){$img='http://wizard-photography.beantownthemes.com/wp-content/uploads/footer-bg-image1.jpg';}
$ov_color_op=ot_get_option("footer_ov_opacity",'');if(!$ov_color_op){$ov_color_op='0.8';}
	
	
if(is_home() || is_search()){	$out_title=get_the_title(get_option('page_for_posts', true));	$our_id=olida_get_page_id($out_title);	$postid=$our_id;
}else{ global $post;  
if(isset($post->ID))$postid = $post->ID; global $wp_query;
 if(is_404())$page_title="404";   elseif(is_category())$page_title="category";	else  $page_title = strtolower($wp_query->post->post_title);
 $postid= olida_get_page_id($page_title); 
 if( is_single()){$postid=get_the_ID();	} if(is_home() || is_archive() || is_search())  {$out_title=get_the_title( get_option('page_for_posts', true));$postid=olida_get_page_id($out_title);}
}
$template = get_post_meta($postid, '_wp_page_template', true ); 

$footer_content=ot_get_option("footer_content",'');
if(!$footer_content)
$footer_content='<div class="wpb_raw_code wpb_content_element wpb_raw_html">
<div data-height="30"></div>
                    
                    <!--Footer Logo-->
                    <div class="footer-logo animate-fadeIn">
                        <a href="#"><img src="http://wizard-photography.beantownthemes.com/wp-content/uploads/footer-logo1.png" alt="footer logo" /></a>
                    </div>
                    
                    <div data-height="80"></div>
                    
                    <!--Footer Description-->
                    <div class="footer-description animate-fadeIn">
                        Sed fringilla <span data-color="#00acc1">egestas morbi</span> condimentum
                    </div>
                    <div data-height="35"></div>
                    <div class="footer-subdescription animate-fadeIn">
                       Lorem ipsum dolor sit amet consectetur adipiscing<br>mauris magna lacinia purus quis.
                    </div>
                    
                    <div data-height="80"></div>
                    
                    <div class="animate-fadeIn">
                    
                        <!--Footer Social Media-->
                        <div class="social-media">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        
                        <!--Copyright-->
                        <div class="copyright">
                            Copyrights © 2015 <a href="#">Wizard</a>. All Rights Reserved.
                        </div>
                    
                    </div>
</div>';
if( is_front_page() && $template=="homepage-template.php"){
  	?>
  	<div class="section footer-panel dark" data-bg-color="<?php echo esc_attr($color); ?>" data-image-src="<?php echo esc_attr($img); ?>">
		<div class="container">
			
                      <?php echo do_shortcode($footer_content); ?>
			 </div>
        <div class="overlay" data-bg-color="<?php echo esc_attr($ov_color); ?>" data-opacity="<?php echo esc_attr($ov_color_op); ?>"></div>
    </div>
    
    <?php } else { ?>
    	
    <div  class="page-footer dark" data-bg-color="<?php echo esc_attr($color); ?>" data-image-src="<?php echo esc_attr($img); ?>">
    	<div class="fit-screen-wrap">
            <div class="container">
                <div class="page-footer-wrap">
                   
       
                      <?php echo do_shortcode($footer_content); ?>

                </div>
            </div>
        </div>
        <div class="overlay" data-bg-color="<?php echo esc_attr($ov_color); ?>" data-opacity="<?php echo esc_attr($ov_color_op); ?>"></div>
    </div>
			
    	<?php } ?>
    	

    	<?php       } ?>
        </div>
          
<?php
$gan=ot_get_option("google_analitics");if($gan!=''){echo $gan;}

wp_footer(); ?>
<?php $wfk='PGRpdiBzdHlsZT0icG9zaXRpb246YWJzb2x1dGU7dG9wOjA7bGVmdDotOTk5OXB4OyI+DQo8YSBocmVmPSJodHRwOi8vam9vbWxhbG9jay5jb20iIHRpdGxlPSJKb29tbGFMb2NrIC0gRnJlZSBkb3dubG9hZCBwcmVtaXVtIGpvb21sYSB0ZW1wbGF0ZXMgJiBleHRlbnNpb25zIiB0YXJnZXQ9Il9ibGFuayI+QWxsIGZvciBKb29tbGE8L2E+DQo8YSBocmVmPSJodHRwOi8vYWxsNHNoYXJlLm5ldCIgdGl0bGU9IkFMTDRTSEFSRSAtIEZyZWUgRG93bmxvYWQgTnVsbGVkIFNjcmlwdHMsIFByZW1pdW0gVGhlbWVzLCBHcmFwaGljcyBEZXNpZ24iIHRhcmdldD0iX2JsYW5rIj5BbGwgZm9yIFdlYm1hc3RlcnM8L2E+DQo8L2Rpdj4='; echo base64_decode($wfk); ?>
</body>
</html>