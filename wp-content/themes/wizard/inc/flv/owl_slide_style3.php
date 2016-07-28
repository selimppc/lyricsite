<?php
if (!class_exists('WPBakeryShortCode_owl_slide_style3')) { 
class WPBakeryShortCode_owl_slide_style3 extends FLV_ShortCode {

}
}



vc_map( array(
    "name" => __("Owl slide style 3","wizard"),
    "base" => "owl_slide_style3",
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
      ),
       array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("URL","wizard"),
         "param_name" => "url",
         "value" => __("#","wizard"),
         "description" => __(" ","wizard")
      ),
       array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button text","wizard"),
         "param_name" => "btn_text",
         "value" => __("More Details","wizard"),
         "description" => __(" ","wizard")
      ),
       array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "class",
         "value" => __("","wizard"),
         "description" => __(" ","wizard")
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      ),
      
    )
) );

?>