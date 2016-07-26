<?php

if (!class_exists('FLV_ShortCode')) { 
    abstract class FLV_ShortCode extends WPBakeryShortCode {
        protected function outputTitle($title) {
 /*added*/           return  '<i class="vc-element-icon '.$this->settings["icon"].'"></i><h4 class="wpb_element_title">'.__($title, 'js_composer').'</h4>';
        }
		

		 public function singleParamHtmlHolder_img($param, $value) {
        $output = '';
        // Compatibility fixes
        $old_names = array('yellow_message', 'blue_message', 'green_message', 'button_green', 'button_grey', 'button_yellow', 'button_blue', 'button_red', 'button_orange');
        $new_names = array('alert-block', 'alert-info', 'alert-success', 'btn-success', 'btn', 'btn-info', 'btn-primary', 'btn-danger', 'btn-warning');
        $value = str_ireplace($old_names, $new_names, $value);
        //$value = __($value, "js_composer");
        //
        $param_name = isset($param['param_name']) ? $param['param_name'] : '';
        $type = isset($param['type']) ? $param['type'] : '';
        $class = isset($param['class']) ? $param['class'] : '';

        if ( isset($param['holder']) == false || $param['holder'] == 'hidden' ) {
            $output .= '<input type="hidden" class="wpb_vc_param_value ' . $param_name . ' ' . $type . ' ' . $class . '" name="' . $param_name . '" value="'.$value.'" />';
            if(($param['type'])=='attach_image') {

               $output .= ( $img ? $img['thumbnail'] : '<img width="40" height="40" src="' . WPBakeryVisualComposer::getInstance()->assetURL('vc/blank.gif') . '" class="attachment-thumbnail flv_padding"  data-name="' . $param_name . '" alt="" title="" style="display: none;" />') . '<img src="' . WPBakeryVisualComposer::getInstance()->assetURL('vc/elements_icons/single_image.png') . '" class="flv_padding ' . ( $img && !empty($img['p_img_large'][0]) ? ' image-exists' : '' ) . '" />';
          	 // $output .= ( $img ? $img['thumbnail'] : '<img width="100" height="100" src="' . WPBakeryVisualComposer::getInstance()->assetURL('vc/blank.gif') . '" class="attachment-thumbnail"  data-name="' . $param_name . '" alt="" title="" style="display: none;" />') . '<img src="' . WPBakeryVisualComposer::getInstance()->assetURL('vc/elements_icons/single_image.png') . '" class="no_image_image' . ( $img && !empty($img['p_img_large'][0]) ? ' image-exists' : '' ) . '" /><a href="#" class="column_edit_trigger' . ( $img && !empty($img['p_img_large'][0]) ? ' image-exists' : '' ) . '">' . __( 'Add image', 'js_composer' ) . '</a>';
    }
        }
        else {
            $output .= '<'.$param['holder'].' class="wpb_vc_param_value ' . $param_name . ' ' . $type . ' ' . $class . '" name="' . $param_name . '">'.$value.'</'.$param['holder'].'>';
        }
        return $output;
    }
		        public function contentAdmin($atts, $content = null) {
            $element = $this->shortcode;
            $output = $custom_markup = $width = $el_position = '';

            if ( $content != NULL ) { $content = wpautop(stripslashes($content)); }

            if ( isset($this->settings['params']) ) {
                $shortcode_attributes = array('width' => '1/1');
                foreach ( $this->settings['params'] as $param ) {
                    if ( $param['param_name'] != 'content' ) {
                        if ( isset($param['value']) ) {
                            $shortcode_attributes[$param['param_name']] = is_string($param['value']) ? __($param['value'], "js_composer") : $param['value'];
                        } else {
                            $shortcode_attributes[$param['param_name']] = '';
                        }
                    } else if ( $param['param_name'] == 'content' && $content == NULL ) {
                        $content = __($param['value'], "js_composer");
                    }
                }
                extract(shortcode_atts(
                    $shortcode_attributes
                    , $atts));
                $elem = $this->getElementHolder($width);
                if(isset($atts['el_position'])) $el_position = $atts['el_position'];
                $iner = $this->outputTitle($this->settings['name']);
                foreach ($this->settings['params'] as $param) {
                    $param_value = isset($$param['param_name']) ? $$param['param_name'] : '';
                    if ( is_array($param_value)) {
                        // Get first element from the array
                        reset($param_value);
                        $first_key = key($param_value);
                        $param_value = $param_value[$first_key];
                    }

				
/*added*/				//	$iner .=$param['heading'] . ' : ';
                   
             if($param['type']!="attach_image"){
             //  $iner .= $this->singleParamHtmlHolder_img($param, $param_value);   
				}
				else{
			//	$iner .= $this->singleParamHtmlHolder($param, $param_value);		
				}
                }
				
                $elem = str_ireplace('%wpb_element_content%', $iner, $elem);
                $output .= $elem;
            } else {

                $width = '1/1';
                $elem = $this->getElementHolder($width);
                $inner = '';
                if ( isset($this->settings["custom_markup"]) && $this->settings["custom_markup"] != '' ) {
                    if ( $content != '' ) {
                        $custom_markup = str_ireplace("%content%", $content, $this->settings["custom_markup"]);
                    } else if ( $content == '' && isset($this->settings["default_content_in_template"]) && $this->settings["default_content_in_template"] != '' ) {
                        $custom_markup = str_ireplace("%content%", $this->settings["default_content_in_template"], $this->settings["custom_markup"]);
                    }
                    $inner .= do_shortcode($custom_markup);
                }
                $elem = str_ireplace('%wpb_element_content%', $inner, $elem);
                $output .= $elem;
            }
            return $output;
        }
		
    }
}
if(!class_exists('FLV_Container')) {
    abstract class FLV_Container extends WPBakeryShortCodesContainer {



        public function mainHtmlBlockParams($width, $i) {
	if(isset($this->settings["class"]))	 $class=$this->settings["class"];else $class='';
     return 'data-element_type="'.$this->settings["base"].'" class="wpb_'.$this->settings['base'].' '.$class.' wpb_sortable wpb_content_holder flv_shortcodes_container vc_shortcodes_container "'.$this->customAdminBlockParams();
        }
        public function containerHtmlBlockParams($width, $i) {
            return 'class="wpb_column_container vc_container_for_children"';
        }
      
		public function contentAdmin($atts, $content = null) {
            $width = $el_class = '';

            extract(shortcode_atts($this->predefined_atts, $atts));
            $output = '';

            $column_controls = $this->getColumnControls($this->settings('controls'));
            $column_controls_bottom =  $this->getColumnControls('add', 'bottom-controls');
            for ( $i=0; $i < count($width); $i++ ) {
                $output .= '<div '.$this->mainHtmlBlockParams($width, $i).'>';
                $output .= $column_controls;
                $output .= '<div class="wpb_element_wrapper flv_wrapper"><i class="vc-element-icon flv_icon '.$this->settings["icon"].'"></i><h3 class="flv_title">'.$this->settings["name"].'</h3>';
               $output .= '<div '.$this->containerHtmlBlockParams($width, $i).'>';

				
                $output .= do_shortcode( shortcode_unautop($content) );
                $output .= '</div>';
				
                if ( isset($this->settings['params']) ) {
                    $inner = '';
                    foreach ($this->settings['params'] as $param) {
                        $param_value = isset($$param['param_name']) ? $$param['param_name'] : '';
                        if ( is_array($param_value)) {
                            // Get first element from the array
                            reset($param_value);
                            $first_key = key($param_value);
                            $param_value = $param_value[$first_key];
                        }
/*added*/					//	 $inner .=$param['heading'] . ' : ';

  					//   $inner .= $this->singleParamHtmlHolder($param, $param_value);
                if($param['type']!="attach_image"){
             //  $inner .= $this->singleParamHtmlHolder_img($param, $param_value);   
				}
				else{
			//	$inner .= $this->singleParamHtmlHolder($param, $param_value);		
				}
				
                    }
                    $output .= $inner;
                }
                $output .= '</div>';
                $output .= $column_controls_bottom;
                $output .= '</div>';
            }
            return $output;
        }
    }
}

?>