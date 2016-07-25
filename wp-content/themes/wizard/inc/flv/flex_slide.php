<?php


vc_map( array(
    "name" => __("Flex slide","wizard"),
    "base" => "flex_slide",
    "icon" => "app-icons-check-empty",
    "class" => "flv_custom_item",
    "as_child" => array('only' => 'flex_slider'), // Use only|except attributes to limit parent (separate multiple values with comma)
 "content_element" => true,
    "params" => array(
        array(
            "type" => "attach_image",
            "heading" => __("Image", "js_composer"),
            "param_name" => "image",
            "description" => __(" ","wizard")
        ),

 array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Overlay Color","wizard"),
         "param_name" => "overlay_color",
         "value" => __("#212121","wizard"),
         "description" => __(" ","wizard")
      ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Overlay Opacity","wizard"),
         "param_name" => "overlay_opacity",
         "value" => __("0.5","wizard"),
         "description" => __(" ","wizard")
      ),
      
 array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content","wizard",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
	  
    )
) );
class WPBakeryShortCode_flex_slide extends FLV_ShortCode  {
}


?>