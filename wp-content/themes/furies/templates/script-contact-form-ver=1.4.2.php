 


$j(document).ready(function() {
	$j('form#contact_form').submit(function() {
		$j('form#contact_form .error').remove();
		var hasError = false;
		$j('.required_field').each(function() {
			if(jQuery.trim($j(this).val()) == '') {
				var labelText = $j(this).prev('label').text();
				$j('#reponse_msg ul').append('<li class="error">Please enter '+labelText+'.</li>');
				hasError = true;
			} else if($j(this).hasClass('email')) {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				if(!emailReg.test(jQuery.trim($j(this).val()))) {
					var labelText = $j(this).prev('label').text();
					$j('#reponse_msg ul').append('<li class="error">Please enter valid '+labelText+'.</li>');
					hasError = true;
				}
			}
		});
		if(!hasError) {
			$j('#contact_submit_btn').fadeOut('normal', function() {
				$j(this).parent().append('<img src="http://themes.themegoods2.com/furies/wp-content/themes/furies/images/loading.gif" alt="Loading" />');
			});
			var contactData = jQuery('#contact_form').serialize();
					    
			$j.ajax({
			    type: 'POST',
			    url: tgAjax.ajaxurl,
			    data: contactData+'&tg_security='+tgAjax.ajax_nonce,
			    success: function(msg){
			    	$j('#contact_form').hide();
			    	$j('#reponse_msg').html('<br/>'+msg);
			    }
			});
		}
		
		return false;
		
	});
});