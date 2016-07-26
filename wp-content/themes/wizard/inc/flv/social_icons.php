<?php



 
vc_map( array(
    "name" => __("Social Icons", "js_composer"),
    "base" => "social_icons",
    "category" => __('Social'),
    "icon"=>"icon-people",
    "as_parent" => array('only' => 'social_icon'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element" => true,
    "show_settings_on_create" => true,
  "is_container" => true,

    "params" => array(

        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name"),
         "param_name" => "class",
         "value" => __(""),
         "description" => __("example of extra classes: pull-right, socials-block")
      ),
    ),
  'default_content' => '
  [social_icon type="twitter-sign" target="_blank" link="#"]
  ',
    "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_social_icons extends FLV_Container {

}

?>