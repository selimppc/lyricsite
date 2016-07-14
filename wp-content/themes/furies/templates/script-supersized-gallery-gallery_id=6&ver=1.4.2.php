jQuery(function($){
    	$.supersized({
    	
    		    		//Functionality
    		slideshow               :   1,		//Slideshow on/off
    		autoplay				:	true,		//Slideshow starts playing automatically
    		start_slide             :   1,		//Start slide (0 is random)
    		random					: 	0,		//Randomize slide order (Ignores start slide)
    		slide_interval          :   4000,	//Length between transitions
    		    		transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
    		transition_speed		:	800,	//Speed of transition
    		new_window				:	1,		//Image links open in new window/tab
    		pause_hover             :   0,		//Pause slideshow on hover
    		keyboard_nav            :   1,		//Keyboard navigation on/off
    		performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
    		image_protect			:	0,		//Disables image dragging and right click with Javascript

    		//Size & Position
    		min_width		        :   0,		//Min width allowed (in pixels)
    		min_height		        :   0,		//Min height allowed (in pixels)
    		vertical_center         :   1,		//Vertically center background
    		horizontal_center       :   1,		//Horizontally center background
    		    		fit_portrait         	:   0,		//Portrait images will not exceed browser height
    		fit_landscape			:   0,		//Landscape images will not exceed browser width
    		fit_always				: 	0,
    		
    		//Components
    		navigation              :   1,		//Slideshow controls on/off
    		thumbnail_navigation    :  	0,		//Thumbnail navigation
    		slide_counter           :   0,		//Display slide numbers
    		slide_captions          :   0,		//Slide caption (Pull from "title" in slides array)
    		progress_bar			:	0,
    		slides 					:  	[		//Slideshow Images

    	{image : 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/5740192268_a99387864d_o.jpg', thumb: 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/5740192268_a99387864d_o-150x150.jpg', title: '<div id="gallery_caption"><h2>Blue Hour Bridge</h2>The sun was still below the horizon, but the sky was already beginning to turn blue. Mauris elementum accumsan leo vel tempor</div>'},{image : 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_74370907.jpg', thumb: 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_74370907-150x150.jpg', title: '<div id="gallery_caption"><h2>Gallery Comments</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labolore magna aliqua.</div>'},{image : 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/2887703473_5266d3dc02_o.jpg', thumb: 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/2887703473_5266d3dc02_o-150x150.jpg', title: '<div id="gallery_caption"><h2>Gallery With Music</h2>Aliquam et elit eu nunc rhoncus viverra quis at felis. Pellentesque habitant morbi tristique senectus et netus et.</div>'},{image : 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/4111298019_435f091097_o.jpg', thumb: 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/4111298019_435f091097_o-150x150.jpg', title: '<div id="gallery_caption"><h2>Social Media Sharing</h2>Morbi fringilla feugiat tortor suscipit accumsan. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>'},{image : 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/3592209668_31de73a5f1_o.jpg', thumb: 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/3592209668_31de73a5f1_o-150x150.jpg', title: '<div id="gallery_caption"><h2>Responsive Gallery Layout Support</h2>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend </div>'},{image : 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_123220783.jpg', thumb: 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_123220783-150x150.jpg', title: '<div id="gallery_caption"><h2>Multiple Gallery Templates</h2>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus.</div>'},{image : 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_37224571.jpg', thumb: 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_37224571-150x150.jpg', title: '<div id="gallery_caption"><h2>Filterable Portfolios</h2>Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim.</div>'},{image : 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_115097959.jpg', thumb: 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_115097959-150x150.jpg', title: '<div id="gallery_caption"><h2>Kenburns Gallery</h2>Aliquam et elit eu nunc rhoncus viverra quis at felis. Pellentesque senectus et netus et malesuada fames ac turpis egestas.</div>'},{image : 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/5555210977_70e04bebf4_b.jpg', thumb: 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/5555210977_70e04bebf4_b-150x150.jpg', title: '<div id="gallery_caption"><h2>Gallery Post Format</h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nunc a eros ullamcorper semper vel ut dolor.</div>'},{image : 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_112762954.jpg', thumb: 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/shutterstock_112762954-150x150.jpg', title: '<div id="gallery_caption"><h2>Music Support</h2>Morbi fringilla feugiat tortor suscipit accumsan. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>'},{image : 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/5191186129_ebc1ae69a3_b.jpg', thumb: 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/5191186129_ebc1ae69a3_b-150x150.jpg', title: '<div id="gallery_caption"><h2>Video Post Format</h2>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend </div>'},{image : 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/8517135269_036912181e_o.jpg', thumb: 'http://themes.themegoods2.com/furies/wp-content/uploads/2013/02/8517135269_036912181e_o-150x150.jpg', title: '<div id="gallery_caption"><h2>Image Flow Gallery</h2>Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus</div>'}						]
    									
    	}); 
    });
