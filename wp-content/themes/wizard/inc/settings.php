<?php  global $theme_url;	
$body_font_select=ot_get_option('body_font_select');if(ot_get_option('body_font_custom')) $body_font_select=ot_get_option('body_font_custom');
$menu_font_select=ot_get_option('menu_font_select');if(ot_get_option('menu_font_custom')) $menu_font_select=ot_get_option('menu_font_custom');
$h1_font_select=ot_get_option('h1_font_select');if(ot_get_option('h1_font_custom')) $h1_font_select=ot_get_option('h1_font_custom');
$h2_font_select=ot_get_option('h2_font_select');if(ot_get_option('h2_font_custom')) $h2_font_select=ot_get_option('h2_font_custom');
$h3_font_select=ot_get_option('h3_font_select');if(ot_get_option('h3_font_custom')) $h3_font_select=ot_get_option('h3_font_custom');
$h4_font_select=ot_get_option('h4_font_select');if(ot_get_option('h4_font_custom')) $h4_font_select=ot_get_option('h4_font_custom');
$h5_font_select=ot_get_option('h5_font_select');if(ot_get_option('h5_font_custom')) $h5_font_select=ot_get_option('h5_font_custom');
$h6_font_select=ot_get_option('h6_font_select');if(ot_get_option('h6_font_custom')) $h6_font_select=ot_get_option('h6_font_custom');

 if($body_font_select!='' && $body_font_select!="default") {?><link href="http://fonts.googleapis.com/css?family=<?php echo esc_attr($body_font_select); ?>" rel="stylesheet" type="text/css" />  <?php } 
 if($menu_font_select!='' && $menu_font_select!="default") {?><link href="http://fonts.googleapis.com/css?family=<?php echo esc_attr($menu_font_select); ?>" rel="stylesheet" type="text/css" />   <?php }
 if($h1_font_select!='' && $h1_font_select!="default") {?> <link href="http://fonts.googleapis.com/css?family=<?php echo esc_attr($h1_font_select); ?>" rel="stylesheet" type="text/css" />   <?php } 
 if($h2_font_select!='' &&  $h2_font_select !="default") {?> <link href="http://fonts.googleapis.com/css?family=<?php echo esc_attr($h2_font_select); ?>" rel="stylesheet" type="text/css" />   <?php } 
 if($h3_font_select!='' && $h3_font_select !="default") {?> <link href="http://fonts.googleapis.com/css?family=<?php echo esc_attr($h3_font_select); ?>" rel="stylesheet" type="text/css" />   <?php }
 if($h4_font_select!='' && $h4_font_select !="default") {?> <link href="http://fonts.googleapis.com/css?family=<?php echo esc_attr($h4_font_select); ?>" rel="stylesheet" type="text/css" />   <?php }
 if($h5_font_select!='' && $h5_font_select !="default") {?> <link href="http://fonts.googleapis.com/css?family=<?php echo esc_attr($h5_font_select); ?>" rel="stylesheet" type="text/css" />   <?php }
 if($h6_font_select!='' && $h6_font_select !="default") {?> <link href="http://fonts.googleapis.com/css?family=<?php echo esc_attr($h6_font_select); ?>" rel="stylesheet" type="text/css" />   <?php }

 if($menu_font_select!='default' && $menu_font_select!='' || $h1_font_select!='default' && $h1_font_select!='' || $h2_font_select!='default' && $h2_font_select!='' || $h3_font_select!='default' && $h3_font_select!='' || $h4_font_select!='default' && $h4_font_select!='' || $h5_font_select!='default' && $h5_font_select!='' || $h6_font_select!='default' && $h6_font_select!='' || $body_font_select!='default' && $body_font_select!=''){?><style>.item-list-description,p,a,ul li, ol li,.text-center div.white,.text-input,textarea,.slide-description-small,blockquote,span,strong,table,.page-footer,.footer-panel,.related-post-description,.featured-area-subtitle,.mega-hovertitle {<?php if($body_font_select!="default"){ ?>font-family:"<?php echo esc_attr($body_font_select); ?>" ,Helvetica, Arial, sans-serif !important;<?php } ?>font-weight:<?php ot_get_option('body_font_weight_select');?>;<?php $italic0=ot_get_option('body_font_style_select'); if($italic0=="italic") echo "font-style:italic;"; ?>;font-size:<?php ot_get_option('body_font_size_select');?>px;}ul#menu-short a{<?php if($menu_font_select!="default"){ ?>font-family:"<?php echo esc_attr($menu_font_select); ?>" ,Helvetica, Arial, sans-serif !important;<?php } ?>font-weight:<?php ot_get_option('menu_font_weight_select');?>;<?php $italic1=ot_get_option('menu_font_style_select'); if($italic1=="italic") echo esc_attr("font-style:italic!important;"); ?>;font-size:<?php ot_get_option('menu_font_size_select');?>px !important;}h1{<?php if($h1_font_select!="default"){ ?>font-family:"<?php echo esc_attr($h1_font_select); ?>", Arial, Helvetica, sans-serif !important;<?php } ?>font-weight:<?php ot_get_option('h1_font_weight_select');?>;<?php $italic2=ot_get_option('h1_font_style_select'); if($italic2=="italic") echo esc_attr("font-style:italic;"); ?>;font-size:<?php ot_get_option('h1_font_size_select');?>px;}h2{<?php if( $h2_font_select !="default"){ ?>font-family:"<?php echo esc_attr($h2_font_select); ?>", Arial, Helvetica, sans-serif !important;<?php } ?>font-weight:<?php ot_get_option('h2_font_weight_select');?>;<?php $italic3=ot_get_option('h2_font_style_select'); if($italic3=="italic") echo esc_attr("font-style:italic;"); ?>;font-size:<?php ot_get_option('h2_font_size_select');?>px;}h3{<?php if($h3_font_select !="default"){ ?>font-family:"<?php echo esc_attr($h3_font_select); ?>", Arial, Helvetica, sans-serif !important;<?php } ?>font-weight:<?php ot_get_option('h3_font_weight_select');?>;<?php $italic4=ot_get_option('h3_font_style_select'); if($italic4=="italic") echo esc_attr("font-style:italic;"); ?>;font-size:<?php ot_get_option('h3_font_size_select');?>px;}h4{<?php if($h4_font_select !="default"){ ?>font-family:"<?php echo $h4_font_select; ?>", Arial, Helvetica, sans-serif !important;<?php } ?>font-weight:<?php ot_get_option('h4_font_weight_select');?>;<?php $italic5=ot_get_option('h4_font_style_select'); if($italic5=="italic") echo esc_attr("font-style:italic;"); ?>;font-size:<?php ot_get_option('h4_font_size_select');?>px;}h5{<?php if($h5_font_select !="default"){ ?>font-family:"<?php echo esc_attr($h5_font_select); ?>", Arial, Helvetica, sans-serif !important;<?php } ?>font-weight:<?php ot_get_option('h5_font_weight_select');?>;<?php $italic6=ot_get_option('h5_font_style_select'); if($italic6=="italic") echo esc_attr("font-style:italic;"); ?>;font-size:<?php ot_get_option('h5_font_size_select');?>px;}h6{<?php if($h6_font_select !="default"){ ?>font-family:"<?php echo esc_attr($h6_font_select); ?>", Arial, Helvetica, sans-serif !important;<?php } ?>font-weight:<?php ot_get_option('h6_font_weight_select');?>;<?php $italic7=ot_get_option('h6_font_style_select'); if($italic7=="italic") echo esc_attr("font-style:italic;"); ?>;font-size:<?php ot_get_option('h6_font_size_select');?>px;}</style><?php }
  
//$options = get_option('flv_port_admin_settings' );

if(is_home()){
	$out_title=get_the_title(get_option('page_for_posts', true));
	$our_id=olida_get_page_id($out_title);
	$postid=$our_id;
	$page_id=$postid;
}else{
 global $wp_query;
 if(is_404() || is_search())$page_title="404";   elseif(is_category())$page_title="category";	else  $page_title = strtolower($wp_query->post->post_title);
 $page_id= olida_get_page_id($page_title); 
 if( is_single()){$page_id=get_the_ID();	}
 if(is_home() || is_archive() || is_search())  {$out_title=get_the_title( get_option('page_for_posts', true));$page_id=olida_get_page_id($out_title);}
}

$template = get_post_meta( $page_id, '_wp_page_template', true );

 $bg_col=get_post_meta($page_id, 'dbt_bgcolor', TRUE );
 $tx_col=get_post_meta($page_id, 'dbt_txcolor', TRUE );
 $bg_img=get_post_meta($page_id, 'dbt_bgimg', TRUE );
$frontpage_id = get_option('page_on_front');
?>


<?php if($template!="homepage-template.php"   && $frontpage_id!=0 && $bg_img!='') { ?>
<style  type="text/css">
body{background-image:<?php if($bg_img!=""){?>url(<?php echo $bg_img;?>)<?php } ?>;
background-size: cover;
background-position: center center;
 overflow: hidden;
 min-height: 100vh;
}
</style>
<?php } ?>

<?php if($template!="homepage-template.php" && $frontpage_id!=0) { ?>
<style  type="text/css">
background-color: <?php echo $bg_col;?>;
body *{
color: <?php echo $tx_col; ?> !important;	
}
</style>
<?php } ?>


<?php if(ot_get_option('extra_css')!=''){echo '<style>'.ot_get_option('extra_css').'</style>';} ?>	

<script type="text/javascript"> window.theme_url = "<?php echo THEME_URL; ?>";var $j = jQuery.noConflict();	</script>