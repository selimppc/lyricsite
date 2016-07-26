<?php 
/*
Plugin Name: FLV Team Members
Plugin URI: 
Version: 1.1
Author: Fialovy
Author URI: http://fialovy.com/
Description: team memebrs - Wizard theme
*/
         
$flv_path = plugins_url('', __FILE__) . '/';
$flv_shortcode2 = 'team_members';

add_action('init', array('flvMembers', 'handle_init'));
add_action('admin_menu' , array('flvMembers', 'team_enable_pages'));
add_action('admin_init', array('flvMembers', 'handle_admin_init'));

add_shortcode( $flv_shortcode2, array('flvMembers', 'show_shortcode'));
$arg = array('description' => "my description", 'parent' => "cat_ID");
$fialovy_member_nr = 0;

class flvMembers{

   public static function handle_init(){
        global $flv_path;

          $labels = array(
            'name' => 'Team Members',   'singular_name' => 'Team Member'  );
          $args = array(
          'query_var' => true,
            'labels' => $labels,
            'public' => true,
            'has_archive' => true, 
            'hierarchical' => false,
            'supports' => array('title','thumbnail')
          ); 
          register_post_type('flv_members',$args);    }
      public static  function show_shortcode($atts){
        	extract( shortcode_atts( array(
		'columns' => 'something',
		'team_name' => 'something',
		'target' => 'something',
		'order'=>'asc',
        'orderby'=>'asc',
        'show_email_button' => 'something',
	), $atts ) );
	
 $foutput='';

 $countpost=0;
 $team=$post_flv_member_team='';
  $target="_self";
   $show_email_button="yes";
// $fialovy_member_nr++;
 $order="asc";
 $orderby="";
 


if(isset($atts['team_name']))$team=$atts['team_name'];
if(isset($atts['target']))$target=$atts['target'];	

if(isset($atts['show_email_button']))$show_email_button=$atts['show_email_button'];	

	if(isset($atts['order']))$order=$atts['order'];
	if(isset($atts['orderby']))$orderby=$atts['orderby'];
	
 $args=array('post_type'=>'flv_members',
            'posts_per_page' => '1500',
            'order'=>$order,
            'orderby'=>$orderby
            );
        $wquery = new WP_Query( $args );
		$i=0;
		$foutput.='<div class="animate-fadeInUp page-team">
                        <div class="owl-carousel box-carousel-wrapper">';
		if(!$wquery->posts)
		  $foutput.="Items not found";
		 else
        foreach($wquery->posts as $port){
        	
        	$postid = $port->ID;

  $post_flv_member_image=THEME_URL."content/home/portfolio-showcase-01.jpg";
  $post_flv_member_teams = get_post_meta($postid, 'flv_member_team', true);
  $post_flv_member_desc = get_post_meta($postid, 'flv_member_desc', true);
  $post_flv_member_s1 = get_post_meta($postid, 'flv_member_s1', true);
  $post_flv_member_s2 = get_post_meta($postid, 'flv_member_s2', true);
  $post_flv_member_s3 = get_post_meta($postid, 'flv_member_s3', true);
  $post_flv_member_s4 = get_post_meta($postid, 'flv_member_s4', true);
  $post_flv_member_s5 = get_post_meta($postid, 'flv_member_s5', true);
  $post_flv_member_s6 = get_post_meta($postid, 'flv_member_s6', true);
  
   $post_flv_member_s7 = get_post_meta($postid, 'flv_member_s7', true);

  $post_flv_member_url = get_post_meta($postid, 'flv_member_url', true);
  $post_flv_member_img = get_post_meta($postid, 'flv_member_img', true);
  if($post_flv_member_img=='')$post_flv_member_img=$post_flv_member_image;

  $post_flv_member_team=explode(', ',$post_flv_member_teams);
  if(in_array($team, $post_flv_member_team) || $team==''){
  	
  	$i++;


        
   $foutput.='<div class="carousel-item">
                                <div class="carousel-inner">
                                    <figure>';
if ( has_post_thumbnail($postid)) {
$foutput.=get_the_post_thumbnail( $postid,"team",  array('alt' =>$port->post_title,'class'=>'team'));
}

$urll="#";
if($post_flv_member_s7!=''){	$urll=$post_flv_member_s7;}
	
	
      $foutput.='</figure>
                                    <div class="content-block-detail">
                                        <div class="fab ripple">
                                            <a href="'.$urll.'"><i class="fa fa-plus"></i></a>
                                        </div>
                                        <h3>'. $port->post_title.'</h3>
                                        <div class="item-list-description">'.$post_flv_member_desc.'</div>
                                        <nav class="team-social-media">
                                            <ul>';
if($post_flv_member_s1!=''){$countpost++;if($countpost==3)$foutput.='<p></p>';
$foutput.='<li><a target="'.$target.'" href="'.$post_flv_member_s1.'" ><i class="fa-dribbble fa"></i></a></li>';}
if($post_flv_member_s2!=''){
	$countpost++;
	$foutput.='<li><a target="'.$target.'" href="'.$post_flv_member_s2.'"><i class="fa-linkedin fa"></i></a></li>';}
if($post_flv_member_s3!=''){
	$countpost++;
	$foutput.='<li><a target="'.$target.'" href="'.$post_flv_member_s3.'" ><i class="fa-facebook fa"></i></a></li>';}
if($post_flv_member_s4!=''){
	$countpost++;
	$foutput.='<li><a target="'.$target.'" href="'.$post_flv_member_s4.'" ><i class="fa-instagram fa"></i></a></li>';}
if($post_flv_member_s5!=''){
	$countpost++;
	$foutput.='<li><a target="'.$target.'" href="'.$post_flv_member_s5.'" ><i class="fa-google-plus fa"></i></a></li>';}
if($post_flv_member_s6!=''){
	$countpost++;
	$foutput.='<li><a target="'.$target.'" href="'.$post_flv_member_s6.'" ><i class="fa-twitter fa"></i></a></li>';}							

          $foutput.='</ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>';
                                            


           }
        }

$foutput.='</div></div>';

      return $foutput;
    }
 public static  function team_enable_settings(){
   	 ?>
			<div class="wrap">
				<div id="icon-options-general" class="icon32"><br></div>
				<h2><?php _e('Team Members Settings', 'fialovy'); ?></h2>

		<form method="post" action="options.php" class="flv-custom-port-table">
	<table class="form-table wp-list-table widefat fixed posts">
		<thead>
		 <th style="width:15%" class="manage-column " id="options" scope="col">Option name</th>
        <th style="width:85%" class="manage-column " id="value" scope="col">Value</th>
        </thead>
        <?php settings_fields('flv_team_admin_settings'); ?>
		<?php do_settings_sections('flv_team_admin_settings'); ?>
       
    </table>
					<p class="submit">
						<input name="Submit" type="submit" class="button-primary" value="<?php _e('Save Changes', 'fialovy'); ?>" />
					</p>
				</form>
			<div class="desc"><strong>NOTE:</strong> You may need to <a href="http://wordpress.org/plugins/force-regenerate-thumbnails/">regenerate your thumbnails</a> after changing sizes.</div>
			</div>

		<?php
   } 
public static function settings_validate($input) {

			return $input;
		}  
	public static  function team_enable_pages(){
   	    $page_title = __('Team Members Settings', 'fialovy');
		$menu_title = __('Settings', 'fialovy');
		$capability = 'manage_options';
		$function =  array( 'flvMembers', 'team_enable_settings');
		$parent_slug='edit.php?post_type=flv_members';
add_submenu_page($parent_slug, $page_title, $menu_title, $capability, basename(__FILE__), $function);

   }
        public static  function handle_admin_init(){
        add_meta_box('screen_options', 'Member Information & Settings', 'flv_screen_opt2', 'flv_members', 'normal', 'high');
		register_setting( 'flv_team_admin_settings', 'flv_team_admin_settings', array('flvMembers', 'settings_validate'));
	add_settings_section( 'team_settings', __( '', 'fialovy' ), array('flvMembers', 'section_team_settings' ),'flv_team_admin_settings');
	
	add_settings_field( 'team_height', __( '', 'fialovy' ), array('flvMembers', 'section_team_height' ),'flv_team_admin_settings', 'team_settings');
	add_settings_field( 'team_width', __( '', 'fialovy' ), array('flvMembers', 'section_team_width' ),'flv_team_admin_settings', 'team_settings');
	
    }
		/* height */
public static  function section_team_settings() 	{}
public static function section_team_height() 	{ $options = get_option( 'flv_team_admin_settings' );  $value='';if(isset($options['team_height'])) {$value=$options['team_height'];}  ?>
	 <tr> <th scope="row">Team Member Image Height:</th>   <td><input type="text" name="flv_team_admin_settings[team_height]" value="<?php echo esc_attr($value); ?>" /> <span class="desc">(default: 200)</span></td> </tr>    	    <?php		}
public static function section_team_width() 	{ $options = get_option( 'flv_team_admin_settings' );  $value='';if(isset($options['team_width'])) {$value=$options['team_width'];}  ?>
	 <tr> <th scope="row">Team Member Image Width:</th>   <td><input type="text" name="flv_team_admin_settings[team_width]" value="<?php echo esc_attr($value); ?>" /> <span class="desc">(default: 360)</span></td> </tr>    	    <?php		}		
}


function flv_screen_opt2() {
  global $post,$flv_path;
  /* General options */
   $flv_bigimage = '';
   $flv_member_team = get_post_meta($post->ID, 'flv_member_team', true);
  $flv_member_desc = get_post_meta($post->ID, 'flv_member_desc', true);
  $flv_member_s1 = get_post_meta($post->ID, 'flv_member_s1', true);
  $flv_member_s2 = get_post_meta($post->ID, 'flv_member_s2', true);
  $flv_member_s3 = get_post_meta($post->ID, 'flv_member_s3', true);
  $flv_member_s4 = get_post_meta($post->ID, 'flv_member_s4', true);
  $flv_member_s5 = get_post_meta($post->ID, 'flv_member_s5', true);
  $flv_member_s6 = get_post_meta($post->ID, 'flv_member_s6', true);
  $flv_member_s7 = get_post_meta($post->ID, 'flv_member_s7', true);

echo'<input type="hidden" name="flv_nonce" value="'.wp_create_nonce('flv_nonce').'" />
<div id="options">
<div id="lightboxx">
<h3>'.__("General Info").'</h3><br/>
<table cellpadding="0" cellspacing="5" style="width:100%">
<tr>
<td style="width:10%">'.__("Team name").':</td>
<td><input class="textinput upload"type="text" id="screen-thumbnail" name="flv_member_team" value="'.$flv_member_team.'" style="width:75%;" /><br/><span style="font-style:italic;">you can add multiple team names separated by ", "</span></td>
</tr>
<tr>
<td style="width:10%">'.__("Short Description").':</td>
<td><textarea style="width:75%" name="flv_member_desc" id="flv_member_desc">'.__($flv_member_desc).'</textarea></td>
</tr>
</table>
<h3>'.__("Social Icons").'</h3><br/>
<table cellpadding="0" cellspacing="5" style="width:100%">
<tr>
<td style="width:10%">'.__("Dribbble").':</td>
<td><input class="textinput"type="text" id="flv_member_s1" name="flv_member_s1" value="'.$flv_member_s1.'" style="width:75%;" /></td>
</tr>
<tr>
<td style="width:10%">'.__("Linked In").':</td>
<td><input class="textinput"type="text" id="sflv_member_s2" name="flv_member_s2" value="'.$flv_member_s2.'" style="width:75%;" /></td>
</tr>
<tr>
<td style="width:10%">'.__("Facebook").':</td>
<td><input class="textinput"type="text" id="flv_member_s3" name="flv_member_s3" value="'.$flv_member_s3.'" style="width:75%;" /></td>
</tr>
<tr>
<td style="width:10%">'.__("Instagram").':</td>
<td><input class="textinput"type="text" id="flv_member_s4" name="flv_member_s4" value="'.$flv_member_s4.'" style="width:75%;" /></td>
</tr>
<tr>
<td style="width:10%">'.__("Google +").':</td>
<td><input class="textinput"type="text" id="flv_member_s5" name="flv_member_s5" value="'.$flv_member_s5.'" style="width:75%;" /></td>
</tr>
<tr>
<td style="width:10%">'.__("Twitter").':</td>
<td><input class="textinput"type="text" id="flv_member_s6" name="flv_member_s6" value="'.$flv_member_s6.'" style="width:75%;" /></td>
</tr>
<br/>
<tr>
<td style="width:10%">'.__("Single page URL").':</td>
<td><input class="textinput"type="text" id="flv_member_s7" name="flv_member_s7" value="'.$flv_member_s7.'" style="width:75%;" /></td>
</tr>
</table>
</div>
</div>';
}
add_action('save_post', 'flv_update_opt2');
function flv_update_opt2($post_id) {
global $post;

if(isset($post) && $post->post_type!='flv_members')
return $post_id;

/* Check autosave */
if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
return $post_id;
}
if ( isset($_POST['flv_nonce'])  ) {
$nonce=$_REQUEST['flv_nonce'];
if (! wp_verify_nonce($nonce, 'flv_nonce') ) wp_die('Security check');
}

if( isset( $_POST['flv_member_team'] ) )update_post_meta($post->ID,'flv_member_team',$_POST['flv_member_team']);
if( isset( $_POST['flv_member_desc'] ) )update_post_meta($post->ID,'flv_member_desc',$_POST['flv_member_desc']);
if( isset( $_POST['flv_member_s1'] ) )update_post_meta($post->ID,'flv_member_s1',$_POST['flv_member_s1']);
if( isset( $_POST['flv_member_s2'] ) )update_post_meta($post->ID,'flv_member_s2',$_POST['flv_member_s2']);
if( isset( $_POST['flv_member_s3'] ) )update_post_meta($post->ID,'flv_member_s3',$_POST['flv_member_s3']);
if( isset( $_POST['flv_member_s4'] ) )update_post_meta($post->ID,'flv_member_s4',$_POST['flv_member_s4']);
if( isset( $_POST['flv_member_s5'] ) )update_post_meta($post->ID,'flv_member_s5',$_POST['flv_member_s5']);
if( isset( $_POST['flv_member_s6'] ) )update_post_meta($post->ID,'flv_member_s6',$_POST['flv_member_s6']);
if( isset( $_POST['flv_member_s7'] ) )update_post_meta($post->ID,'flv_member_s7',$_POST['flv_member_s7']);
}
 
 
add_action('admin_head', 'flv_the_member_head');
function flv_the_member_head(){
        global $post;
    if(isset($post) && $post->post_type=='flv_members'){
          
?>
        <script>
        jQuery(document).ready(function($){
        	
           orig_send_to_editor=window.send_to_editor;
 jQuery('.textinput.upload').change(function(){
                $this = $(this);
                $this.next().next().attr('src', $this.val());
            })    	
  jQuery('.flv_member_upload').click(function(e) {
  	window.upl_target = jQuery(this).prev();
    var send_attachment_bkp = wp.media.editor.send.attachment;
    var button = jQuery(this);

    wp.media.editor.send.attachment = function(props, attachment){ 
     	var url=attachment.url;
        window.upl_target.val(url);
    }
    wp.media.editor.open(button);
    return false;
  });
        });

        </script>
        <?php
    }
} ?>