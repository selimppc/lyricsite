<?php
/**
 * The template for displaying search forms in _s
 *
 * @package inka
 */
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>"  method="get" class="search">
<input type="text" placeholder="<?php echo esc_attr_x( 'Search the blog&hellip;', 'placeholder', "wizard" ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s"  title="<?php echo esc_attr_x( 'Search the blog&hellip;', 'label', "wizard" ); ?>" />
   <span></span>

 <button type="submit"><i class="fa fa-search"></i></button>
   </form>