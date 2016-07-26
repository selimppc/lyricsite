<?php 
/* 
Template Name: Homepage
*/
 //header
 get_header();
 
 global $post;  $postid = $post->ID;
 $menu_name=get_post_meta($postid, 'dbt_menu_name', true );

$detph=1;
$submenu_nav=ot_get_option("enable_submenus_navigation");
if(isset($submenu_nav[0]) && $submenu_nav[0]=="yes"){	$detph=0;}


//get the pages 
    if ( olida_isMobile() == TRUE ){
//mobile devices
	$menuname=(get_option_tree('mobi_menu','', false));
	if($menuname!='')
	wp_nav_menu( array( 'menu'=>$menuname,'container' => '','items_wrap'=> '<div id="%1$s" class="%2$s">%3$s</div>', 'echo' => true, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '','menu_class' => 'flv-pages','menu_id'=> '', 'depth' => $detph, 'walker' => new olida_description_walker3()));
	elseif( $menu_name!='') 
	wp_nav_menu(array('container' => '','items_wrap'=> '<div id="%1$s" class="%2$s">%3$s</div>', 'echo' => true, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '','menu_class' => 'flv-pages', 'depth' => $detph, 'menu'=> $menu_name, 'walker' => new olida_description_walker3()));
	}else{
	
//dektop theme

	if(isset($menu_name) && $menu_name!=''){	
	wp_nav_menu(array('container' => '','items_wrap'=> '<div id="%1$s" class="%2$s">%3$s</div>', 'echo' => true, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '','menu_class' => 'flv-pages','menu'=> $menu_name, 'depth' => $detph, 'walker' => new olida_description_walker3()));
	}else {
		if(isset($menuid["primary"]) && $menuid["primary"]!=0){		
	wp_nav_menu(array('container' => '','items_wrap'=> '<div id="%1$s" class="%2$s">%3$s</div>', 'echo' => true, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '','menu_class' => 'flv-pages','theme_location' => 'primary', 'depth' => $detph, 'walker' => new olida_description_walker3()));
		}else{	
	echo"<h2 class='outlined-title' style='margin-top:120px;text-align:center;color:white;position:relative;'>".__("Please go to 'Appearance => Menus' and set the primary menu in 'Theme Locations' section")."</h2>";
		}
}
}
//footer
 get_footer();  ?>
