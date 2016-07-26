<?php
if (!class_exists('WPBakeryShortCode_owl_slide_style2')) { 
class WPBakeryShortCode_owl_slide_style2 extends FLV_ShortCode {

}
}



vc_map( array(
    "name" => __("Owl slide style 4","wizard"),
    "base" => "owl_slide_style4",
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
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","wizard"),
         "param_name" => "title",
         "value" => __("the title","wizard"),
         "description" => __("","wizard")
      ),
       array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Category","wizard"),
         "param_name" => "categ",
         "value" => __("","wizard"),
         "description" => __("","wizard")
      ),
       array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("URL","wizard"),
         "param_name" => "url",
         "value" => __("#","wizard"),
         "description" => __("","wizard")
      ),
       array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "class",
         "value" => __("","wizard"),
         "description" => __("","wizard")
      ),
    )
) );

?>