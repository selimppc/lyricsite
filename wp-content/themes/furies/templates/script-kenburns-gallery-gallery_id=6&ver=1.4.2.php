						  
$j(document).ready(function(){ 
	$j('#kenburns_overlay').css('width', $j(window).width() + 'px');
	$j('#kenburns_overlay').css('height', $j(window).height() + 'px');
	$j('#kenburns').attr('width', $j(window).width());
	$j('#kenburns').attr('height', $j(window).height());
	$j(window).resize(function() {
		$j('#kenburns').remove();
		$j('#kenburns_overlay').remove();
		
		$j('body').append('<canvas id="kenburns"></canvas>');
		$j('body').append('<div id="kenburns_overlay"></div>');
	
	  	$j('#kenburns_overlay').css('width', $j(window).width() + 'px');
		$j('#kenburns_overlay').css('height', $j(window).height() + 'px');
		$j('#kenburns').attr('width', $j(window).width());
		$j('#kenburns').attr('height', $j(window).height());
		
			$j('#kenburns').kenburns({
			images:[
								'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/5740192268_a99387864d_o.jpg'
			,					'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_74370907.jpg'
			,					'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/2887703473_5266d3dc02_o.jpg'
			,					'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/4111298019_435f091097_o.jpg'
			,					'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/3592209668_31de73a5f1_o.jpg'
			,					'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_123220783.jpg'
			,					'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_37224571.jpg'
			,					'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_115097959.jpg'
			,					'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/5555210977_70e04bebf4_b.jpg'
			,					'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_112762954.jpg'
			,					'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/5191186129_ebc1ae69a3_b.jpg'
			,					'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/8517135269_036912181e_o.jpg'
								],
			frames_per_second: 30,
			display_time: 5000,
			fade_time: 1000,
			zoom: 1.2,
			background_color:'#000000'
		});
	});
	$j('#kenburns').kenburns({
		images:[
						'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/5740192268_a99387864d_o.jpg'
		,				'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_74370907.jpg'
		,				'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/2887703473_5266d3dc02_o.jpg'
		,				'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/4111298019_435f091097_o.jpg'
		,				'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/3592209668_31de73a5f1_o.jpg'
		,				'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_123220783.jpg'
		,				'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_37224571.jpg'
		,				'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_115097959.jpg'
		,				'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/5555210977_70e04bebf4_b.jpg'
		,				'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_112762954.jpg'
		,				'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/5191186129_ebc1ae69a3_b.jpg'
		,				'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/8517135269_036912181e_o.jpg'
						],
		frames_per_second: 30,
		display_time: 5000,
		fade_time: 1000,
		zoom: 1.2,
		background_color:'#000000'
	});				
});