/*-----------------------------------------------------------------------------------

 	Custom JS - All back-end jQuery
 
-----------------------------------------------------------------------------------*/
jQuery(document).ready(function($) {
	
jQuery("#wpbakery-visual-composer.active.update").next(".plugin-update-tr").remove();	
jQuery("#wpbakery-visual-composer.active.update").removeClass("update");

jQuery(".updated.vc-license-activation-notice").hide();
	
//portfolio single
if(jQuery("#meta_post_lightbox_type").val()=="type2"){
	jQuery("#meta_post_lightbox_type").parents("tr").next().hide();
}
jQuery("#meta_post_lightbox_type").change(function(){
	if(jQuery("#meta_post_lightbox_type").val()=="type2"){	jQuery("#meta_post_lightbox_type ").parents("tr").next().hide();	}
	else{jQuery("#meta_post_lightbox_type ").parents("tr").next().show();	}
})


/* gallery button upload*/
	  jQuery('.flv_upload_slide9').click(function(e) {
	  	window.upl_target3 = jQuery(this).prev().prev();
	    var send_attachment_bkp = wp.media.editor.send.attachment;  var button = jQuery(this);
		wp.media.editor.send.attachment = function(props, attachment){ 
	    ceva=window.upl_target3.val();ceva+= '"'+attachment.url+'", '; window.upl_target3.val(ceva);
		var sp_div=button.prev();var url=attachment.url;sp_div.append("<span><img class='special_img' src='"+url.trim()+"'/><span class='xicon'></span></span>");sp_div.find(".xicon").click(function(){
		var txt2='"'+jQuery(this).prev().attr('src')+'", ';var textarea = jQuery(this).parent().parent().parent().find("#dbt_post_gallery");var txt = textarea.val();
		textarea.val(txt.replace(txt2, ''));jQuery(this).parent().hide("slow").remove();
		})  }
      wp.media.editor.open(button);
      return false;
 	 });
 	 
    jQuery('.add_media').on('click', function(){   _custom_media = false;  });

	jQuery("#my_special_div9 span,#my_special_div2 span").each(function(){var valr=jQuery(this).text();jQuery(this).text("");	jQuery(this).prepend("<img class='special_img' src='"+valr.trim()+"'/><span class='xicon'></span>");})
	if(!jQuery("#my_special_div9")){jQuery("#my_special_div9").empty();}
	if(!jQuery("#my_special_div2")){jQuery("#my_special_div2").empty();}
	
	
	
/* x button from gallery*/
	jQuery(".xicon").click(function(){
	var txt2='"'+jQuery(this).prev().attr('src')+'", ';var textarea = jQuery(this).parents("td").find("textarea");
	var txt = textarea.val();textarea.val(txt.replace(txt2, ''));	jQuery(this).parent().hide("slow").remove();
	})
	

/*  post type changes */
	var videoOptions = jQuery('#gentleman-meta-box-video');	var videoTrigger = jQuery('#post-format-video');	videoOptions.css('display', 'none');
	var galleryOptions = jQuery('#gentleman-meta-box-gallery');var galleryTrigger = jQuery('#post-format-gallery');	galleryOptions.css('display', 'none');
	var linkOptions = jQuery('#gentleman-meta-box-link');var linkTrigger = jQuery('#post-format-link');	linkOptions.css('display', 'none');

	var quoteOptions = jQuery('#gentleman-meta-box-quote');var quoteTrigger = jQuery('#post-format-quote');	quoteOptions.css('display', 'none');
	var audioOptions = jQuery('#gentleman-meta-box-audio');var audioyTrigger = jQuery('#post-format-audio');	audioOptions.css('display', 'none');
	
	if(videoTrigger.is(':checked'))videoOptions.css('display', 'block');
	if(galleryTrigger.is(':checked'))galleryOptions.css('display', 'block');
	if(quoteTrigger.is(':checked'))quoteOptions.css('display', 'block');
	if(audioyTrigger.is(':checked'))audioOptions.css('display', 'block');
	if(linkTrigger.is(':checked'))linkOptions.css('display', 'block');
		
	function olida_hide_all(notThisOne) {videoOptions.css('display', 'none');	galleryOptions.css('display', 'none'); linkOptions.css('display', 'none');	quoteOptions.css('display', 'none'); audioOptions.css('display', 'none'); notThisOne.css('display', 'block');	}
	
	var group = jQuery('#post-formats-select input');
	group.change( function() {

		if(jQuery(this).val() == 'video') {	videoOptions.css('display', 'block');	olida_hide_all(videoOptions);
		}else if(jQuery(this).val() == 'gallery') 	{galleryOptions.css('display', 'block');	olida_hide_all(galleryOptions);
		}else if(jQuery(this).val() == 'audio') 	{audioOptions.css('display', 'block');	olida_hide_all(audioOptions);
		}else if(jQuery(this).val() == 'quote') 	{quoteOptions.css('display', 'block');	olida_hide_all(quoteOptions);
		}else if(jQuery(this).val() == 'link') 	{linkOptions.css('display', 'block');	olida_hide_all(linkOptions);
		}else {	videoOptions.css('display', 'none');	galleryOptions.css('display', 'none');
		}	
	});

//portfolio settings
	jQuery('#meta_post_lightbox_type').change(function () {
	jQuery('#options div.opt3').css('display','none');  
	jQuery('#options div.opt4').css('display','none');  
	jQuery('#options div.opt22').css('display','none'); 
	jQuery('#options table.opt30').css('display','none'); 
	jQuery('#options div.opt40').css('display','none'); 
	 
          var str = "";
          jQuery("#meta_post_lightbox_type option:selected").each(function () {
                str = jQuery(this).val();
                if(str=="none"){
                	jQuery('#options div.opt3').css('display','inline');  
                }
                else if(str=="image"){
                	 jQuery('#options div.opt4').css('display','inline');  
                }
                else if(str=="gallery"){
                	 jQuery('#options div.opt40').css('display','inline');  
                }
                else if(str=="external"){
                	 jQuery('#options div.opt22').css('display','inline');  
                }
                else if(str=="video"){
                	 jQuery('#options table.opt30').css('display','inline');  
                }
              });

        })
        .change();
 //portfolio settings       
jQuery('#meta_post_lightbox_video_type').change(function () { 
	jQuery('#options table tr.opt6').css('display','none');  
	jQuery('#options table tr.opt7').css('display','none');  
	jQuery('#options table tr.opt8').css('display','none');
	jQuery('#options table tr.opt9').css('display','none'); 
	jQuery('#options table tr.opt10').css('display','none'); 
	jQuery('#options table tr.opt11').css('display','none'); 
	jQuery('#options table tr.opt111').css('display','none');
	jQuery('#options table tr.opt121').css('display','none');
	jQuery('#options table tr.opt101').css('display','none');
	jQuery('#options table tr.opt102').css('display','none');
	jQuery('#options table tr.opt12').css('display','none');   
          var str = "";
          jQuery("#meta_post_lightbox_video_type option:selected").each(function () {
               
                str = jQuery(this).val();
                if(str=="vimeo"){ 
                	jQuery('#options table tr.opt6').css('display','table-row'); 
                }
                else if(str=="youtube"){
                	 jQuery('#options table tr.opt7').css('display','table-row');  
                }
                else if(str=="flash"){
                	 jQuery('#options table tr.opt8').css('display','table-row');  
                }
                else if(str=="QuickTime"){
                	 jQuery('#options table tr.opt9').css('display','table-row');  
                }
                else if(str=="external_site"){
                	 jQuery('#options table tr.opt10').css('display','table-row'); 
                	  jQuery('#options table tr.opt101').css('display','table-row');  
                	   jQuery('#options table tr.opt102').css('display','table-row');   
                }
                else if(str=="inline_content"){
                	 jQuery('#options table tr.opt11').css('display','table-row');
                	  jQuery('#options table tr.opt111').css('display','table-row');  
                	   jQuery('#options table tr.opt121').css('display','table-row');    
                }
                else if(str=="gmaps"){
                	 jQuery('#options table tr.opt12').css('display','table-row');  
                }
              });

        })
        .change();



});

window.onload = function(e){	
	

	jQuery("#ico_moon,.wpb_ico_moon .vc_control-btn-edit").click(function(){ 
setTimeout(function() {
	jQuery(".vc_row.wpb_edit_form_elements").each(function(){
		 
		if(jQuery(this).attr("data-title")=="Edit Moon Icon"){
			$flv_div2=jQuery(this).parent().find('.flv_ico_moon_change');$flv_div2.unwrap();
			$flv_select2=$flv_div2.prev();
				$flv_icn2=$flv_select2.val();$flv_div2.empty().append('<i class="icon-'+$flv_icn2+'"/>');
				$flv_select2.change(function(){$flv_icn2=$flv_select2.val();$flv_div2.empty().append('<i class="icon-'+$flv_icn2+'"/>');	})
			jQuery(this).find("select.wpb_vc_param_value").change(function(){
				$flv_select2=$flv_div2.prev();
				$flv_icn2=$flv_select2.val();$flv_div2.empty().append('<i class="icon-'+$flv_icn2+'"/>');
				$flv_select2.change(function(){$flv_icn2=$flv_select2.val();$flv_div2.empty().append('<i class="icon-'+$flv_icn2+'"/>');	})
			});
		}
		})	
}, 2000);		
		})
		
jQuery("#icon,.wpb_icon .vc_control-btn-edit").click(function(){ 
setTimeout(function() {
	jQuery(".vc_row.wpb_edit_form_elements").each(function(){
		
		if(jQuery(this).attr("data-title")=="Edit Icon"){
			    $flv_div=jQuery(this).parent().find('.flv_icon_change');$flv_div.unwrap();
			    $flv_select=$flv_div.prev();
				$flv_icn=$flv_select.val();$flv_div.empty().append('<i class="fa fa-'+$flv_icn+'"/>');
				$flv_select.change(function(){$flv_icn=$flv_select.val();$flv_div.empty().append('<i class="fa fa-'+$flv_icn+'" />');	})
			jQuery(this).find("select.wpb_vc_param_value").change(function(){
				$flv_select=$flv_div.prev();
				$flv_icn=$flv_select.val();$flv_div.empty().append('<i class="fa fa-'+$flv_icn+'"/>');
				$flv_select.change(function(){$flv_icn=$flv_select.val();$flv_div.empty().append('<i class="fa fa-'+$flv_icn+'" />');	})

			});
		}
		})	
}, 2000);		
		})
		
jQuery("#service_icon,.wpb_service_icon .vc_control-btn-edit").click(function(){ 
setTimeout(function() {
	jQuery(".vc_row.wpb_edit_form_elements").each(function(){
			if(jQuery(this).attr("data-title")=="Edit Service Icon" ){
				$flv_div3=jQuery(this).parent().find('.flv_ico_service_change');$flv_div3.unwrap();
				$flv_select3=$flv_div3.prev();
				$flv_icn3=$flv_select3.val();$flv_div3.empty().append('<i class="fa fa-'+$flv_icn3+'"/>');
				$flv_select3.change(function(){$flv_icn3=$flv_select3.val();$flv_div3.empty().append('<i class="fa fa-'+$flv_icn3+'"/>');	})
			jQuery(this).find("select.wpb_vc_param_value").change(function(){
				$flv_select3=$flv_div3.prev();
				$flv_icn3=$flv_select3.val();$flv_div3.empty().append('<i class="fa fa-'+$flv_icn3+'"/>');
				$flv_select3.change(function(){$flv_icn3=$flv_select3.val();$flv_div3.empty().append('<i class="fa fa-'+$flv_icn3+'"/>');	})

			});
		}
		
		})	
}, 2000);		
		})

jQuery(".wpb_owl_slide_style2 .vc_control-btn-edit").click(function(){  console.log("icon");
setTimeout(function() {
	jQuery(".vc_row.wpb_edit_form_elements").each(function(){
			if(jQuery(this).attr("data-title")=="Edit Owl slide style 2"){
				$flv_div3=jQuery(this).parent().find('.flv_icon_change');$flv_div3.unwrap();
				$flv_select3=$flv_div3.prev();
				$flv_icn3=$flv_select3.val();$flv_div3.empty().append('<i class="fa fa-'+$flv_icn3+'"/>');
				$flv_select3.change(function(){$flv_icn3=$flv_select3.val();$flv_div3.empty().append('<i class="fa fa-'+$flv_icn3+'"/>');	})
			jQuery(this).find("select.wpb_vc_param_value").change(function(){
				$flv_select3=$flv_div3.prev();
				$flv_icn3=$flv_select3.val();$flv_div3.empty().append('<i class="fa fa-'+$flv_icn3+'"/>');
				$flv_select3.change(function(){$flv_icn3=$flv_select3.val();$flv_div3.empty().append('<i class="fa fa-'+$flv_icn3+'"/>');	})

			});
		}
		
		})	
}, 2000);		
		})
		
jQuery("#rs-validation-wrapper").parent().hide();
jQuery("#rs-validation-wrapper").parent().prev().hide();
jQuery("#rs-validation-wrapper").parent().prev().prev().hide();
jQuery(".rs-update-notice-wrap").hide();



jQuery('.get_thumb_url').parent().removeClass("text_block");
jQuery('.get_thumb_url').parent().parent().prepend("<h3>Blog Thumbnail Image Sizes</h3>");
jQuery('.get_thumb_url').attr('href',window.site_url+'/wp-admin/options-general.php?page=flv_thimb_size');	


jQuery(".flv-custom-table .form-table").addClass("widefat flvtable").append('<thead><tr><th style="width:15%;">Name</th><th>Value</th></tr></thead>');
   jQuery(".flv-custom-port-table .form-table").addClass("wp-list-table widefat fixed posts");
   jQuery(".flv-custom-port-table .form-table tr[valign=top]").remove();

	if(jQuery("#menu-posts-flv_members").hasClass("wp-menu-open")) 
	{
	
	jQuery(document).find("#postdivrich").css('visibility','hidden');jQuery(document).find("#postdivrich").css('height','0');
	jQuery(document).find("#postdivrich").css('display','none','important');
	
	}
	jQuery("#option_font div.option-select .description:even").each(function(){
	jQuery(this).append("<div style='width:200px;height:30px;border:1px solid #ddd;text-align:center;font-size:20px;padding-top:20px;' class='test_p'>Test Paragraph</div>");
	var value=jQuery(this).prev().find("select option:selected").text();var textarea = window.theme_url;var txt = textarea;textarea=txt.replace('wp-content/themes/swag/', '');var new_url=textarea;
	if(value!="-- Choose One --"){
	jQuery.ajax({
  url: new_url,
  context: document.body 
}).done(function() { 
  jQuery(this).append('<link href="http://fonts.googleapis.com/css?family='+value+'" rel="stylesheet" type="text/css" />');
});
	jQuery(this).parent().parent().find(".test_p").css({'font-family':'"'+value+'", Arial, Helvetica, sans-serif'});
	}
	
	jQuery(this).prev().find("select").change(function(){
var value=jQuery(this).find("option:selected").text();var textarea = window.theme_url;var txt = textarea;textarea=txt.replace('wp-content/themes/swag/', '');var new_url=textarea;

if(value!="-- Choose One --"){
jQuery.ajax({
  url: new_url,
  context: document.body 
}).done(function() { 
  jQuery(this).append('<link href="http://fonts.googleapis.com/css?family='+value+'" rel="stylesheet" type="text/css" />');
});
}
jQuery(this).parent().parent().parent().find(".test_p").css({'font-family':'"'+value+'", Arial, Helvetica, sans-serif'})
})	
});	
	
 var template=jQuery("#page_template").val();

		if(template=="portfolio-template.php" )
		{
			jQuery(document).find("#gentleman-box-port").css('display','table-row');	
jQuery(document).find("#postdivrich").css('display','none');
jQuery(document).find("#dbt_sidebar").parent().parent().parent().css("display","none");
jQuery(document).find("#dbt_menu_name").parent().parent().parent().css("display","none");
		}
		else if(template=="homepage-template.php" )
		{
			jQuery(document).find("#gentleman-box-port").css('display','none');	
jQuery(document).find("#postdivrich").css('display','none');
jQuery(document).find("#dbt_sidebar").parent().parent().parent().css("display","none");
jQuery(document).find("#dbt_menu_name").parent().parent().parent().css("display","table-row");
		}
		else if(template=="blog-page-sidebar-right.php" || template=="blog-page-sidebar-left.php"  || template=="page-sidebar-left.php" || template=="page-sidebar-right.php")
		{
			jQuery(document).find("#gentleman-box-port").css('display','none');	
jQuery(document).find("#dbt_sidebar").parent().parent().parent().css("display","table-row");
jQuery(document).find("#dbt_menu_name").parent().parent().parent().css("display","none");
			
if(!jQuery(document).find("#postdivrich").prev().hasClass("composer-switch")){jQuery(document).find("#postdivrich").show("slow");}else{jQuery(document).find("#postdivrich").css('display','none');}
	}
		else{
			jQuery(document).find("#gentleman-box-port").css('display','none');	
if(!jQuery(document).find("#postdivrich").prev().hasClass("composer-switch")){jQuery(document).find("#postdivrich").show("slow");}else{jQuery(document).find("#postdivrich").css('display','none');}
jQuery(document).find("#dbt_sidebar").parent().parent().parent().css("display","none");
jQuery(document).find("#dbt_menu_name").parent().parent().parent().css("display","none");			
		}

	jQuery("#page_template").change(function(){
	if(jQuery(this).val()=="portfolio-template.php" )
		{
			
			jQuery(document).find("#gentleman-box-port").css('display','table-row');	
jQuery(document).find("#postdivrich").css('display','none');
jQuery(document).find("#dbt_sidebar").parent().parent().parent().css("display","none");
jQuery(document).find("#dbt_menu_name").parent().parent().parent().css("display","none");
		}
		else if(jQuery(this).val()=="homepage-template.php" )
		{
			jQuery(document).find("#gentleman-box-port").css('display','none');	
jQuery(document).find("#postdivrich").css('display','none');
jQuery(document).find("#dbt_sidebar").parent().parent().parent().css("display","none");
jQuery(document).find("#dbt_menu_name").parent().parent().parent().css("display","table-row");
		}
		else if(jQuery(this).val()=="blog-page-sidebar-right.php" || jQuery(this).val()=="blog-page-sidebar-left.php"  || jQuery(this).val()=="page-sidebar-left.php" || jQuery(this).val()=="page-sidebar-right.php")
		{
			jQuery(document).find("#gentleman-box-port").css('display','none');	
jQuery(document).find("#dbt_sidebar").parent().parent().parent().css("display","table-row");
jQuery(document).find("#dbt_menu_name").parent().parent().parent().css("display","none");		
if(!jQuery(document).find("#postdivrich").prev().hasClass("composer-switch")){jQuery(document).find("#postdivrich").show("slow");}else{jQuery(document).find("#postdivrich").css('display','none');}
		}
		else{	
			jQuery(document).find("#gentleman-box-port").css('display','none');	
if(!jQuery(document).find("#postdivrich").prev().hasClass("composer-switch")){jQuery(document).find("#postdivrich").show("slow");}else{jQuery(document).find("#postdivrich").css('display','none');}
jQuery(document).find("#dbt_sidebar").parent().parent().parent().css("display","none");
jQuery(document).find("#dbt_menu_name").parent().parent().parent().css("display","none");			
		}
	});
}	
