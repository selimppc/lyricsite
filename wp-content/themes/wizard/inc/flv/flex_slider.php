<?php
$fialovy_flex_nr=0;



vc_map( array(
    "name" => __("Flex Slider", "js_composer"),
    "base" => "flex_slider",
    "category" => __('Content',"wizard"),
    "icon"=>"icon-popout",
    "as_parent" => array('only' => 'flex_slide'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element" => true,
    "show_settings_on_create" => true,
    "params" => array(
        // add params same as with any other content element
 array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Control Navigation","wizard"),
         "param_name" => "controlNav",
         "value" => array("no","yes"),
         "description" => __(" ","wizard")
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Direction Navigation","wizard"),
         "param_name" => "directionNav",
         "value" => array("no","yes"),
         "description" => __(" ","wizard")
      ), 
       array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Slideshow","wizard"),
         "param_name" => "slideshow",
         "value" => array("yes","no"),
         "description" => __(" ","wizard")
      ),
       array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Pause On Hover","wizard"),
         "param_name" => "pauseOnHover",
         "value" => array("yes","no"),
         "description" => __(" ","wizard")
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Multiple Keyboard","wizard"),
         "param_name" => "multipleKeyboard",
         "value" => array("yes","no"),
         "description" => __(" ","wizard")
      ),

     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Animation Speed","wizard"),
         "param_name" => "animationSpeed",
         "value" => __("800","wizard"),
         "description" => __("not required","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "class",
         "value" => __("","wizard"),
         "description" => __("not required","wizard")
      ),
    ),
  'default_content' => '[flex_slide]slider content[/flex_slider]',
    "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_flex_slider extends FLV_Container  {

}
  
?>