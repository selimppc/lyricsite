<?php


class WPBakeryShortCode_section extends FLV_Container {

}


vc_map( array(
    "name" => __("Section","wizard"),
    "base" => "section",
    "icon" => "icon-stack",
    "as_parent" => array('except' => 'section'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element" => true,
    "show_settings_on_create" => true,

    "params" => array(
    array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Wide","wizard"),
         "param_name" => "wide",
         "value" => array("no","yes"),
         "description" => __("select 'yes' to use 100% width section","wizard")
      ),
       array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height","wizard"),
         "param_name" => "height",
         "value" => __("","wizard"),
         "description" => __("leave empty to use section auto height.","wizard")
      ),
       array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show this section only on Homepage pages","wizard"),
         "param_name" => "show_homepage",
         "value" => array("no","yes"),
         "description" => __("if you select 'yes' then this section will only be visible on pages that have 'homepage' template","wizard")
      ),
     
      array(
            "type" => "colorpicker",
            "holder" => "div",
            "class" => "",
            "heading" => __("Background color","wizard"),
            "param_name" => "bg_color",
            "value" => '', //Default Red color
            "description" => __("Choose background color","wizard")
        ),
        array(
            "type" => "colorpicker",
            "holder" => "div",
            "class" => "",
            "heading" => __("Text color","wizard"),
            "param_name" => "text_color",
            "value" => '', //Default Red color
            "description" => __("Choose text color","wizard")
        ),
         array(
            "type" => "attach_image",
            "heading" => __("Background Image","wizard"),
            "param_name" => "bg_image",
            "description" => __("Background Image","wizard")
        ),
        
       array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Overlay Pattern","wizard"),
         "param_name" => "overlay_pattern",
         "value" => array('none','color'),
         "description" => __("","wizard")
      ),
      array(
            "type" => "colorpicker",
            "holder" => "div",
            "class" => "",
            "heading" => __("Overlay color","wizard"),
            "param_name" => "overlay_color",
            "value" => '#000000', //Default Red color
            "description" => __("Choose overlay color","wizard")
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Overlay Opacity","wizard"),
         "param_name" => "overlay_opacity",
         "value" => __("0.5","wizard"),
         "description" => __("","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "class",
         "value" => __("","wizard"),
         "description" => __("eg: aligncenter","wizard")
      ),
    )
	, "js_view" => 'VcColumnView'
) );


?>