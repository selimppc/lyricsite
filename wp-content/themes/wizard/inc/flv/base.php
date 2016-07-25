<?php 

if (class_exists('Vc_Base')) { 
class Vc_Base_flv extends Vc_Base {
	public function addShortcodesCustomCss($id = NULL) {
		if ( ! is_singular() ) return;
		$id = get_the_ID();
		$page_id = get_the_ID();
		$template = get_post_meta($page_id , '_wp_page_template', true ); 
		if($template=="homepage-template.php"){

$menuid=get_nav_menu_locations(); //$menuid["primary"]	
$menu_name=get_post_meta($page_id, 'dbt_menu_name', true );
$mobile_menuname=(get_option_tree('mobi_menu','', false));
  
$menu = wp_get_nav_menu_object($menu_name);
$mobile_menu = wp_get_nav_menu_object( $mobile_menuname);
$menu_primary = wp_get_nav_menu_object($menuid["primary"]);

//print_r( $menu);
if(isset($menu_name) && $menu_name!=''){
$menu_items = wp_get_nav_menu_items( $menu->term_id );
foreach( (array) $menu_items as $key => $menu_item ){
$id=$menu_item->object_id;
$shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
if ( ! empty( $shortcodes_custom_css ) ) {echo '<style type="text/css" data-type="vc_shortcodes-custom-css">'; echo $shortcodes_custom_css;echo '</style>';}
}
}

if($mobile_menuname!=''){
$menu_items2 = wp_get_nav_menu_items( $mobile_menu->term_id );
foreach( (array) $menu_items2 as $key => $menu_item ){
$id=$menu_item->object_id;
$shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
if ( ! empty( $shortcodes_custom_css ) ) {echo '<style type="text/css" data-type="vc_shortcodes-custom-css">'; echo $shortcodes_custom_css;echo '</style>';}
}
}

if(isset($menuid["primary"]) && $menuid["primary"]!=0){
$menu_items3 = wp_get_nav_menu_items( $menu_primary->term_id );
foreach( (array) $menu_items3 as $key => $menu_item ){
$id=$menu_item->object_id;
$shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
if ( ! empty( $shortcodes_custom_css ) ) {echo '<style type="text/css" data-type="vc_shortcodes-custom-css">'; echo $shortcodes_custom_css;echo '</style>';}
}
}

}else{
		if ( $id ) {
			$shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
			if ( ! empty( $shortcodes_custom_css ) ) {
				echo '<style type="text/css" data-type="vc_shortcodes-custom-css">';
				echo $shortcodes_custom_css;
				echo '</style>';
			}
		}
		}
	}
}
$vcd= new Vc_Base_flv();
$vcd->addShortcodesCustomCss(); 
}


?>