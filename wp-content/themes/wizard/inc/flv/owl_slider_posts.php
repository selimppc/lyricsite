<?php

if (!class_exists('WPBakeryShortCode_owl_slider_posts')) { $fialovy_owl_slider_posts_nr=0;
class WPBakeryShortCode_owl_slider_posts extends FLV_Container {


}}


vc_map( array(
    "name" => __("Owl Slider From Posts", "js_composer"),
    "base" => "owl_slider_posts",
    "category" => __('Content',"wizard"),
    "icon"=>"icon-map2",
    "content_element" => true,
    "show_settings_on_create" => true,
  "is_container" => false,
    "params" => array(
        // add params same as with any other content element
	 array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Posts Category " ,"wizard"),
         "param_name" => "source_posts_category",
         "value" => __(" " ,"wizard"),
         "description" => __("enter the name of the posts category" ,"wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Posts Number " ,"wizard"),
         "param_name" => "posts_number",
         "value" => __("9" ,"wizard"),
         "description" => __("enter the number of posts" ,"wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Excerpt length" ,"wizard"),
         "param_name" => "excerpt_length",
         "value" => __("200" ,"wizard"),
         "description" => __(" " ,"wizard")
      ),
     array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Dots","wizard"),
         "param_name" => "dots",
         "value" => array("yes","no"),
         "description" => __(" ","wizard")
      ),
     
    )
) );

?>