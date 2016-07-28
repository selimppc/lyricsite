<?php
if (!class_exists('WPBakeryShortCode_owl_slider')) { 
class WPBakeryShortCode_owl_slider extends FLV_Container {

   
}
}

vc_map( array(
    "name" => __("Owl Slider", "js_composer"),
    "base" => "owl_slider",
    "category" => __('Content',"wizard"),
    "icon"=>"icon-map2",
    "as_parent" => array('only' => 'owl_slide_style1,owl_slide_style2,owl_slide_style3,owl_slide_style4,owl_slide_title'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element" => true,
    "show_settings_on_create" => true,
  "is_container" => true,

    "params" => array(
        // add params same as with any other content element

      
     array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Dots","wizard"),
         "param_name" => "dots",
         "value" => array("yes","no"),
         "description" => __(" ","wizard")
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Style","wizard"),
         "param_name" => "type",
         "value" => array("style1","style2","style3","style4"),
         "description" => __(" ","wizard")
      ),
    )
	,"js_view" => 'VcColumnView'
) );

?>