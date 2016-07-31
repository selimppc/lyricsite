<?php 
if(isset($_POST['flv_submitted'])) {if(!isset($ymaill))$ymaill=ot_get_option('c_email');  olida_send_message($ymaill);}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if gte IE 9 ]><html class="no-js ie9" lang="en"> <![endif]-->
<head>
<meta charset="<?php esc_attr(bloginfo('charset')); ?>" /><title><?php bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="<?php esc_attr(bloginfo('html_type')); ?>; charset=<?php esc_attr(bloginfo('charset')); ?>" />	
<meta name="generator" content="WordPress <?php esc_attr(bloginfo('version')); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php /*favicon*/ $favicon = "#"; if (ot_get_option('favico')){ $favicon = ot_get_option('favico');} ?>
<link rel="shortcut icon" href="<?php echo esc_url($favicon); ?>" type="image/x-icon" />
<?php	wp_head();  ?>
</head>


<body <?php body_class(); ?>  > 



<?php 
$show_loading=ot_get_option("loading_page_display");
if(!isset($show_loading[0]) || !$show_loading[0]=="yes"){
?>

<!--Page Loader-->
<div class="loader-wrapper">
	<div class="loader">Loading...</div>
</div>
<!--End-->
<?php } ?>

<?php
if(is_home() || is_search()){	$out_title=get_the_title(get_option('page_for_posts', true));	$our_id=olida_get_page_id($out_title);	$postid=$our_id;
}else{ global $post;  
if(isset($post->ID))$postid = $post->ID; global $wp_query;
 if(is_404())$page_title="404";   elseif(is_category())$page_title="category";	else  $page_title = strtolower($wp_query->post->post_title);
 $postid= olida_get_page_id($page_title); 
 if( is_single()){$postid=get_the_ID();	} if(is_home() || is_archive() || is_search())  {$out_title=get_the_title( get_option('page_for_posts', true));$postid=olida_get_page_id($out_title);}
}
?>
<style>
    .over-no {
        position: absolute;
        left: 100px;
        top: 25px;
        z-index: 2;
    }
    .over-no img{
        width: 120px;
    }
</style>

<div class="over-no">
    <?php $lurl=get_home_url();if(ot_get_option("logo_url")) {$lurl=ot_get_option("logo_url"); }
    $logo=ot_get_option("logo");   if($logo==''){$logo= THEME_URL . 'images/logo.png';}
    $logo_w=ot_get_option("logo_w");
    $logo_h=ot_get_option("logo_h");
    ?>
    <a href="<?php echo esc_url($lurl); ?>" class="navbar-brand">
        <img alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" src="<?php echo esc_attr($logo); ?>" <?php if($logo_w!=''){ ?>width="<?php echo esc_attr($logo_w); ?>" <?php } ?> <?php if($logo_h!=''){ ?> height="<?php echo esc_attr($logo_h); ?>" <?php } ?>  /></a>
</div>


<!--Main Menu Wrapper Start-->
<div id="main-menu" class="left">
	<!--Menu Burger-->
    <div class="nav-open">
        <a href="#" class="nav-btn" data-action="open">
        	<div class="burger-wrap">
                <div class="menu-burger">
                    <div class="menu1"></div>
                    <div class="menu2"></div>
                    <div class="menu3"></div>
                </div>
            </div>
        </a>
    </div>

    
    <!--Sidebar Navigation Start-->
	<div class="sidebar-nav">
    	<div class="nav-inner-wrap">
    	
            <!--Menu Close-->
            <div class="nav-close">
                <a href="#" class="nav-btn" data-action="close">
                    <div class="menu-close">
                        <div class="menu1"></div>
                        <div class="menu2"></div>
                    </div>
                </a>
            </div>
            
            <!--Logo Start-->
            <div class="logo">
            	
            	 <?php $lurl=get_home_url();if(ot_get_option("logo_url")) {$lurl=ot_get_option("logo_url"); }
		    $logo=ot_get_option("logo");   if($logo==''){$logo= THEME_URL . 'images/logo.png';}
			$logo_w=ot_get_option("logo_w");
			$logo_h=ot_get_option("logo_h");
			?>
        	<a href="<?php echo esc_url($lurl); ?>" class="navbar-brand">
        		<img alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" src="<?php echo esc_attr($logo); ?>" <?php if($logo_w!=''){ ?>width="<?php echo esc_attr($logo_w); ?>" <?php } ?> <?php if($logo_h!=''){ ?> height="<?php echo esc_attr($logo_h); ?>" <?php } ?>  /></a>
            </div>
            <!--Logo End-->
            
            <!--Navigation Menu Start-->
            <nav>
        
<?php 
$template = get_post_meta($postid, '_wp_page_template', true ); 
 if($template=="homepage-template.php"){
$menu_name=get_post_meta($postid, 'dbt_menu_name', true );
}
else{
	$menu_name='';
}
$menuid=get_nav_menu_locations(); 


if (olida_isMobile() == TRUE) {
	$menuname = (ot_get_option('mobi_menu'));
	if($menuname && $menuname!=''){
wp_nav_menu( array( 'menu' =>$menuname, 'container'=>false ,  'menu_class' => 'nav-menu', 'walker'=>new olida_description_walker2()) ); 	
	}else{
	if(isset($menuid["primary"]) && $menuid["primary"]!=0){	
wp_nav_menu( array( 'theme_location' => 'primary','container'=>false , 'menu_class' => 'nav-menu', 'walker'=>new olida_description_walker2()) ); 
		}
	}
}else{
	if($menu_name && $menu_name!=''){
wp_nav_menu( array( 'menu' =>$menu_name, 'container'=>false ,  'menu_class' => 'nav-menu', 'walker'=>new olida_description_walker2()) ); 	
	}else{
		if(isset($menuid["primary"]) && $menuid["primary"]!=0){	
wp_nav_menu( array( 'theme_location' => 'primary', 'container'=>false ,  'menu_class' => 'nav-menu', 'walker'=>new olida_description_walker2()) ); 	
		}
	}

}
?>

            </nav>
            <!--Navigation Menu End-->
		
		</div>
    </div>
    <!--Sidebar Navigation End-->
    
</div>
<!--Main Menu Wrapper End-->

	
<?php 
    if($template!="homepage-template.php" && !is_404())			
	{ 	
	  $top_header=get_post_meta($postid, 'dbt_header', TRUE);
	  $page_title= get_query_var('pagename');
      $out_title=get_the_title( get_option('page_for_posts', true));
      $our_id=olida_get_page_id($out_title);

	?>
<div id="fullpage" class="fullpageDisable"></div>
<div class="container-wrapper">
	<?php } else { ?>

<!--Fullpage Wrapper Start-->
<div id="fullpage">
<?php } ?>

