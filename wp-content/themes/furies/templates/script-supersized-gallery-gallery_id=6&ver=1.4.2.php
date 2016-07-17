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
    		pause_hover             :   0,		//Pause slideshow on hover 0/1
    		keyboard_nav            :   1,		//Keyboard navigation on/off
    		performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
    		image_protect			:	1,		//Disables image dragging and right click with Javascript

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
    		thumbnail_navigation    :  	1,		//Thumbnail navigation
    		slide_counter           :   1,		//Display slide numbers
    		slide_captions          :   1,		//Slide caption (Pull from "title" in slides array)
    		progress_bar			:	1,
    		slides 					:  	[		//Slideshow Images

    	<!--{image : 'http://localhost/lyricsite/wp-content/uploads/2013/02/5740192268_a99387864d_o.jpg', thumb: 'http://localhost/lyricsite/wp-content/uploads/2013/02/5740192268_a99387864d_o-150x150.jpg', title: '<div id="gallery_caption"><h2>Orient Trading & Builders Ltd.</h2>We sell high-end surplus building materials, and select quality Architectural Salvage that is very unique.</div>'},-->
		{image : '\wp-content/uploads/images/image-1.jpg', thumb: 'http://localhost/lyricsite/wp-content/uploads/2013/02/5740192268_a99387864d_o-150x150.jpg', title: '<div id="gallery_caption"><h2>Orient Trading & Builders Ltd.</h2>We sell high-end surplus building materials, and select quality Architectural Salvage that is very unique.</div>'},

		{image : '\wp-content/uploads/images/image-2.jpg', thumb: 'http://localhost/lyricsite/wp-content/uploads/2013/02/shutterstock_74370907-150x150.jpg', title: '<div id="gallery_caption"><h2>Reliable Machinaries Ltd.</h2>Reliable Machinery can provide turn-key services for customers, from equipment manufacture and production to operator training.</div>'},

		{image : '\wp-content/uploads/images/image-3.jpg', thumb: 'http://localhost/lyricsite/wp-content/uploads/2013/02/2887703473_5266d3dc02_o-150x150.jpg', title: '<div id="gallery_caption"><h2>Lyric Industries (Pvt.) Ltd.</h2>Lyric Group is one of the largest Bangladeshi industrial conglomerates. </div>'},

		{image : '\wp-content/uploads/images/image-4.jpg', thumb: 'http://localhost/lyricsite/wp-content/uploads/2013/02/4111298019_435f091097_o-150x150.jpg', title: '<div id="gallery_caption"><h2>Lyric Apparels Ltd.</h2>Lyric Group we strive to go far beyond our customers’ expectations, and pride ourselves on making high quality garments.</div>'},

		{image : '\wp-content/uploads/images/image-5.jpg', thumb: 'http://localhost/lyricsite/wp-content/uploads/2013/02/3592209668_31de73a5f1_o-150x150.jpg', title: '<div id="gallery_caption"><h2>Lyric Embroidery Ltd.</h2>We introduce Lyric Embroidery Ltd. is a Manufacturing concern services for apparel buyers from abroad.</div>'},



]

    	}); 
    });
