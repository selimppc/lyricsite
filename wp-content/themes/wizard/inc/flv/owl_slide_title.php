<?php
if (!class_exists('WPBakeryShortCode_owl_slide_title')) { 
class WPBakeryShortCode_owl_slide_title extends FLV_ShortCode {

}
}



vc_map( array(
    "name" => __("Owl slide title","wizard"),
    "base" => "owl_slide_title",
    "icon" => "icon-map",
    "class" => "flv_custom_item",
    "as_child" => array('only' => 'owl_slider'), // Use only|except attributes to limit parent (separate multiple values with comma)

  "is_container" => true,
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
         "heading" => __("Bg Color" ,"wizard"),
         "param_name" => "bg_color",
         "value" => __("#313131" ,"wizard"),
         "description" => __(" " ,"wizard")
      ),
        array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Color" ,"wizard"),
         "param_name" => "tx_color",
         "value" => __("#ffffff" ,"wizard"),
         "description" => __(" " ,"wizard")
      ),
       array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","wizard"),
         "param_name" => "title",
         "value" => __("the title","wizard"),
         "description" => __(" ","wizard")
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "class",
         "value" => __("","wizard"),
         "description" => __(" ","wizard")
      ),
     
    )
) );

?>