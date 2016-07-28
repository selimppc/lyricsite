<?php  
/* add shortcodes in shortcode generator */

if (function_exists('vc_map') && is_admin()) {
	
require_once( get_template_directory() .'/inc/flv/basic.php' );
 require_once( get_template_directory() .'/inc/flv/flex_slider.php' );
require_once( get_template_directory() .'/inc/flv/flex_slide.php' );


require_once( get_template_directory() .'/inc/flv/sections.php' );

require_once( get_template_directory() .'/inc/flv/owl_slider.php' );
require_once( get_template_directory() .'/inc/flv/owl_slide_style1.php' );
require_once( get_template_directory() .'/inc/flv/owl_slide_style2.php' );
require_once( get_template_directory() .'/inc/flv/owl_slide_style3.php' );
require_once( get_template_directory() .'/inc/flv/owl_slide_style4.php' );
require_once( get_template_directory() .'/inc/flv/owl_slide_title.php' );
require_once( get_template_directory() .'/inc/flv/owl_slider_posts.php' );

require_once( get_template_directory() .'/inc/flv/social_icons.php' );
require_once( get_template_directory() .'/inc/flv/social_icon.php' );


/* start */

/*--------------------------------------- Span -----------------------------------------*/
vc_map( array(
   "name" => __("Span","wizard"),
   "base" => "span",
   "class" => "flv_custom_item",
   "icon"=>"icon-code",
   "category" => __('Content',"wizard"),
   "params" => array(
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "class",
         "value" => __("","wizard"),
         "description" => __("eg: dropcap","wizard")
      ),
       array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );

/*--------------------------------------- Right -----------------------------------------*/
vc_map( array(
   "name" => __("Right alignement","wizard"),
   "base" => "right",
   "class" => "flv_custom_item",
   "icon"=>"icon-paragraph-right",
   "category" => __('Structure',"wizard"),
   "params" => array(
       array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );  
/*--------------------------------------- Center -----------------------------------------*/
vc_map( array(
   "name" => __("Center alignement","wizard"),
   "base" => "center",
   "class" => "flv_custom_item",
   "icon"=>"icon-paragraph-center",
   "category" => __('Structure',"wizard"),
   "params" => array(
       array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );  
/*--------##########-------------------------------- Space -----------------------------------------*/
vc_map( array(
   "name" => __("Add space between lines" ,"wizard"),
   "base" => "space",
   "class" => "flv_custom_item",
   "icon"=>"icon-page-break2",
   "category" => __('Structure' ,"wizard"),
   "show_settings_on_create" => true,
    "params" => array(
   array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Space size" ,"wizard"),
         "param_name" => "size",
         "value" => array("0","5","10","15","20","25","30","35","40","45","50","55","60"),
         "description" => __("" ,"wizard")
      )
   )
   )
 );
/*--------------------------------------- Clear -----------------------------------------*/
vc_map( array(
   "name" => __("Clear","wizard"),
   "base" => "clear",
   "class" => "flv_custom_item",
   "icon"=>"icon-page-break",
   "category" => __('Structure',"wizard"),
   "show_settings_on_create" => false
   )
 );
/*--------------------------------------- Blockquote -----------------------------------------*/
vc_map( array(
   "name" => __("Blockquote","wizard"),
   "base" => "blockquote",
   "class" => "flv_custom_item",
   "icon"=>"icon-quotes-left",
   "category" => __('Content',"wizard"),
   "params" => array(
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("I am test text block. Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );
/*--------------------------------------- Blockquote -----------------------------------------*/
vc_map( array(
   "name" => __("Blockquote style 2","wizard"),
   "base" => "blockquote1",
   "class" => "flv_custom_item",
   "icon"=>"icon-quotes-left",
   "category" => __('Content',"wizard"),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("First letter","wizard"),
         "param_name" => "first_letter",
         "value" => __("","wizard"),
         "description" => __("","wizard")
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("I am test text block. Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );
/*--------------------------------------- Button -----------------------------------------*/
vc_map( array(
   "name" => __("Button","wizard"),
   "base" => "button",
   "class" => "flv_custom_item",
   "icon"=>"app-icons-sign-blank",
   "category" => __('Content',"wizard"),
   "params" => array(
 array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Shape","wizard"),
         "param_name" => "shape",
         "value" => array("rectangle","round"),
         "description" => __("","wizard")
      ),
       array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Color","wizard"),
         "param_name" => "color",
         "value" => array("white","grey","blue","green","yellow","orange","red","dark-grey"),
         "description" => __("","wizard")
      ),
         array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon","wizard"),
         "param_name" => "icon",
         "value" => array("none","glass","martini","drink","bar","alcohol","liquor","music","note","sound","search","magnify","zoom","enlarge","bigger","envelope-o","email","support","e-mail","letter","mail","notification","heart","love","like","favorite","star","award","achievement","night","rating","score","star-o","user","person","man","head","profile","film","movie","th-large","blocks","squares","boxes","th","th-list","ul","ol","checklist","finished","completed","done","todo","check","checkmark","agree","accept","confirm","times","remove","close","exit","x","search-plus","search-minus","minify","smaller","power-off","on","signal","cog","gear","settings","trash-o","garbage","delete","trash","hide","home","main","house","file-o","new","page","pdf","document","clock-o","watch","timer","late","timestamp","road","street","download","import","arrow-circle-o-down","arrow-circle-o-up","inbox","play-circle-o","repeat","rotate-right","redo","forward","refresh","reload","list-alt","lock","protect","admin","flag","report","notify","headphones","listen","volume-off","mute","volume-down","lower","quieter","volume-up","higher","louder","qrcode","scan","barcode","tag","label","tags","labels","book","read","documentation","bookmark","save","print","camera","photo","picture","record","font","text","bold","italic","italics","text-height","text-width","align-left","align-center","middle","align-right","align-justify","list","outdent","dedent","indent","video-camera","picture-o","image","pencil","write","edit","update","map-marker","map","pin","location","coordinates","localize","address","travel","where","place","adjust","contrast","tint","raindrop","pencil-square-o","share-square-o","social","send","check-square-o","arrows","move","reorder","resize","step-backward","rewind","previous","beginning","start","first","fast-backward","backward","play","playing","pause","wait","stop","block","box","square","next","fast-forward","end","last","step-forward","eject","chevron-left","bracket","back","chevron-right","plus-circle","add","create","expand","minus-circle","times-circle","check-circle","question-circle","help","information","unknown","info-circle","more","details","crosshairs","picker","times-circle-o","check-circle-o","ban","abort","arrow-left","arrow-right","arrow-up","arrow-down","share","mail-forward","compress","combine","merge","plus","minus","collapse","asterisk","exclamation-circle","warning","error","problem","alert","gift","present","leaf","eco","nature","fire","flame","hot","popular","eye","show","visible","views","eye-slash","toggle","visiblity","exclamation-triangle","plane","trip","destination","airplane","fly","mode","calendar","date","time","when","random","sort","comment","speech","magnet","chevron-up","chevron-down","retweet","shopping-cart","checkout","buy","purchase","payment","folder","folder-open","arrows-v","arrows-h","bar-chart","bar-chart-o","graph","twitter-square","tweet","social network","facebook-square","camera-retro","key","unlock","password","cogs","gears","comments","conversation","notes","thumbs-o-up","approve","thumbs-o-down","dislike","disapprove","disagree","star-half","heart-o","sign-out","log out","logout","leave","arrow","linkedin-square","thumb-tack","marker","external-link","open","sign-in","enter","join","sign up","sign in","signin","signup","trophy","winner","game","github-square","octocat","upload","lemon-o","phone","call","voice","number","square-o","bookmark-o","phone-square","twitter","facebook","facebook-f","github","credit-card","money","debit","rss","feed","blog","hdd-o","harddrive","hard drive","storage","bullhorn","announcement","broadcast","bell","reminder","certificate","badge","hand-o-right","point","right","hand-o-left","left","hand-o-up","hand-o-down","arrow-circle-left","arrow-circle-right","arrow-circle-up","arrow-circle-down","globe","world","planet","earth","global","translate","all","language","country","wrench","fix","tasks","progress","loading","downloading","downloads","filter","funnel","options","briefcase","work","business","office","luggage","bag","arrows-alt","users","group","people","profiles","persons","link","chain","cloud","flask","science","beaker","experimental","labs","scissors","cut","files-o","copy","duplicate","paperclip","attachment","floppy-o","bars","navicon","menu","drag","list-ul","list-ol","numbers","strikethrough","underline","table","data","excel","spreadsheet","magic","wizard","automatic","autocomplete","truck","shipping","pinterest","pinterest-square","google-plus-square","google-plus","cash","caret-down","dropdown","caret-up","caret-left","caret-right","columns","split","panes","unsorted","order","sort-desc","sort-down","sort-asc","sort-up","envelope","linkedin","undo","rotate-left","gavel","legal","tachometer","dashboard","comment-o","comments-o","bolt","flash","lightning","weather","sitemap","directory","hierarchy","organization","umbrella","clipboard","paste","lightbulb-o","idea","inspiration","exchange","cloud-download","cloud-upload","user-md","doctor","medical","nurse","stethoscope","suitcase","baggage","bell-o","coffee","morning","mug","breakfast","tea","cafe","cutlery","food","restaurant","spoon","knife","dinner","eat","file-text-o","building-o","apartment","hospital-o","building","ambulance","medkit","first aid","firstaid","fighter-jet","quick","fast","beer","stein","h-square","hospital","hotel","plus-square","angle-double-left","laquo","quote","angle-double-right","raquo","angle-double-up","angle-double-down","angle-left","angle-right","angle-up","angle-down","desktop","monitor","screen","computer","demo","device","laptop","tablet","ipad","mobile","mobile-phone","cell phone","cellphone","iphone","circle-o","quote-left","quote-right","spinner","circle","dot","reply","mail-reply","github-alt","folder-o","folder-open-o","smile-o","emoticon","happy","satisfied","frown-o","sad","meh-o","neutral","gamepad","controller","keyboard-o","type","input","flag-o","flag-checkered","terminal","command","prompt","code","html","brackets","reply-all","mail-reply-all","star-half-o","star-half-empty","star-half-full","location-arrow","crop","code-fork","git","fork","vcs","svn","rebase","version","chain-broken","unlink","question","info","exclamation","superscript","exponential","subscript","eraser","puzzle-piece","addon","add-on","section","microphone","microphone-slash","shield","calendar-o","fire-extinguisher","rocket","app","maxcdn","chevron-circle-left","chevron-circle-right","chevron-circle-up","chevron-circle-down","html5","css3","anchor","unlock-alt","bullseye","target","ellipsis-h","dots","ellipsis-v","rss-square","play-circle","ticket","pass","minus-square","minus-square-o","level-up","level-down","check-square","pencil-square","external-link-square","share-square","compass","safari","caret-square-o-down","toggle-down","caret-square-o-up","toggle-up","caret-square-o-right","toggle-right","eur","euro","gbp","usd","dollar","inr","rupee","jpy","cny","rmb","yen","rub","ruble","rouble","krw","won","btc","bitcoin","file","file-text","sort-alpha-asc","sort-alpha-desc","sort-amount-asc","sort-amount-desc","sort-numeric-asc","sort-numeric-desc","thumbs-up","thumbs-down","youtube-square","video","youtube","xing","xing-square","youtube-play","dropbox","stack-overflow","instagram","flickr","adn","bitbucket","bitbucket-square","tumblr","tumblr-square","long-arrow-down","long-arrow-up","long-arrow-left","long-arrow-right","apple","osx","windows","android","linux","tux","dribbble","skype","foursquare","trello","female","woman","male","gratipay","gittip","sun-o","lighter","brighten","day","moon-o","darker","archive","bug","vk","weibo","renren","pagelines","leaves","tree","plant","stack-exchange","arrow-circle-o-right","arrow-circle-o-left","caret-square-o-left","toggle-left","dot-circle-o","wheelchair","handicap","accessibility","accessibile","vimeo-square","try","turkish-lira","plus-square-o","space-shuttle","slack","envelope-square","wordpress","openid","university","institution","bank","graduation-cap","mortar-board","yahoo","google","reddit","reddit-square","stumbleupon-circle","stumbleupon","delicious","digg","pied-piper","pied-piper-alt","drupal","joomla","fax","child","paw","cube","cubes","behance","behance-square","steam","steam-square","recycle","car","automobile","vehicle","taxi","cab","spotify","deviantart","soundcloud","database","file-pdf-o","file-word-o","file-excel-o","file-powerpoint-o","file-image-o","file-photo-o","file-picture-o","file-archive-o","file-zip-o","file-audio-o","file-sound-o","file-video-o","file-movie-o","file-code-o","vine","codepen","jsfiddle","life-ring","life-bouy","life-buoy","life-saver","circle-o-notch","rebel","ra","empire","ge","git-square","hacker-news","tencent-weibo","qq","weixin","wechat","paper-plane","paper-plane-o","send-o","history","circle-thin","genderless","header","paragraph","sliders","share-alt","share-alt-square","bomb","futbol-o","soccer-ball-o","tty","binoculars","plug","slideshare","twitch","yelp","newspaper-o","wifi","calculator","paypal","google-wallet","cc-visa","cc-mastercard","cc-discover","cc-amex","cc-paypal","cc-stripe","bell-slash","bell-slash-o","copyright","at","eyedropper","paint-brush","birthday-cake","area-chart","pie-chart","line-chart","lastfm","lastfm-square","toggle-off","toggle-on","bicycle","bike","bus","ioxhost","angellist","cc","ils","shekel","sheqel","meanpath","buysellads","connectdevelop","dashcube","forumbee","leanpub","sellsy","shirtsinbulk","simplybuilt","skyatlas","cart-plus","shopping","cart-arrow-down","diamond","gem","gemstone","ship","boat","sea","user-secret","whisper","spy","incognito","motorcycle","street-view","heartbeat","ekg","venus","mars","mercury","transgender","transgender-alt","venus-double","mars-double","venus-mars","mars-stroke","mars-stroke-v","mars-stroke-h","neuter","facebook-official","pinterest-p","whatsapp","server","user-plus","user-times","bed","viacoin","train","subway","medium"),
         "description" => __("<div class='flv_icon_change'></div>","wizard")
      ),
       array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Size","wizard"),
         "param_name" => "size",
         "value" => array("small","medium"),
         "description" => __("","wizard")
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Target","wizard"),
         "param_name" => "target",
         "value" => array("_blank","_self","_parent","_top"),
         "description" => __("","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Url","wizard"),
         "param_name" => "link",
         "value" => __("#","wizard"),
         "description" => __("not required","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","wizard"),
         "param_name" => "title",
         "value" => __("","wizard"),
         "description" => __("not required","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Data","wizard"),
         "param_name" => "data",
         "value" => __("","wizard"),
         "description" => __("additional data. Not required","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "xclass",
         "value" => __("","wizard"),
         "description" => __("not required","wizard")
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );

/*--------------------------------------- Contact form -----------------------------------------*/
vc_map( array(
   "name" => __("Contact form","wizard"),
   "base" => "flvcontactform",
   "class" => "flv_custom_item",
   "icon"=>"icon-contact-add2",
   "category" => __('Content',"wizard"),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Email","wizard"),
         "param_name" => "to_email",
         "value" => __("","wizard"),
         "description" => __("required","wizard")
      )
   )
) );


 /*--------------------------------------- next prev button -----------------------------------------*/
vc_map( array(
   "name" => __("Go To Next Section","wizard"),
   "base" => "next_btn",
   "class" => "flv_custom_item",
   "icon"=>"app-icons-sort",
   "category" => __('Content',"wizard"),
   "show_settings_on_create" => false,
    "params" => array( 
  
   )
   )
 );

/*-------#############-------------------------------- Icon -----------------------------------------*/
vc_map( array(
   "name" => __("Icon" ,"wizard"),
   "base" => "icon",
   "class" => "flv_custom_item",
   "icon"=>"icon-cool2",
   "category" => __('Content' ,"wizard"),
   "params" => array( 
   array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Type" ,"wizard"),
         "param_name" => "type",
         "value" => array("glass","martini","drink","bar","alcohol","liquor","music","note","sound","search","magnify","zoom","enlarge","bigger","envelope-o","email","support","e-mail","letter","mail","notification","heart","love","like","favorite","star","award","achievement","night","rating","score","star-o","user","person","man","head","profile","film","movie","th-large","blocks","squares","boxes","th","th-list","ul","ol","checklist","finished","completed","done","todo","check","checkmark","agree","accept","confirm","times","remove","close","exit","x","search-plus","search-minus","minify","smaller","power-off","on","signal","cog","gear","settings","trash-o","garbage","delete","trash","hide","home","main","house","file-o","new","page","pdf","document","clock-o","watch","timer","late","timestamp","road","street","download","import","arrow-circle-o-down","arrow-circle-o-up","inbox","play-circle-o","repeat","rotate-right","redo","forward","refresh","reload","list-alt","lock","protect","admin","flag","report","notify","headphones","listen","volume-off","mute","volume-down","lower","quieter","volume-up","higher","louder","qrcode","scan","barcode","tag","label","tags","labels","book","read","documentation","bookmark","save","print","camera","photo","picture","record","font","text","bold","italic","italics","text-height","text-width","align-left","align-center","middle","align-right","align-justify","list","outdent","dedent","indent","video-camera","picture-o","image","pencil","write","edit","update","map-marker","map","pin","location","coordinates","localize","address","travel","where","place","adjust","contrast","tint","raindrop","pencil-square-o","share-square-o","social","send","check-square-o","arrows","move","reorder","resize","step-backward","rewind","previous","beginning","start","first","fast-backward","backward","play","playing","pause","wait","stop","block","box","square","next","fast-forward","end","last","step-forward","eject","chevron-left","bracket","back","chevron-right","plus-circle","add","create","expand","minus-circle","times-circle","check-circle","question-circle","help","information","unknown","info-circle","more","details","crosshairs","picker","times-circle-o","check-circle-o","ban","abort","arrow-left","arrow-right","arrow-up","arrow-down","share","mail-forward","compress","combine","merge","plus","minus","collapse","asterisk","exclamation-circle","warning","error","problem","alert","gift","present","leaf","eco","nature","fire","flame","hot","popular","eye","show","visible","views","eye-slash","toggle","visiblity","exclamation-triangle","plane","trip","destination","airplane","fly","mode","calendar","date","time","when","random","sort","comment","speech","magnet","chevron-up","chevron-down","retweet","shopping-cart","checkout","buy","purchase","payment","folder","folder-open","arrows-v","arrows-h","bar-chart","bar-chart-o","graph","twitter-square","tweet","social network","facebook-square","camera-retro","key","unlock","password","cogs","gears","comments","conversation","notes","thumbs-o-up","approve","thumbs-o-down","dislike","disapprove","disagree","star-half","heart-o","sign-out","log out","logout","leave","arrow","linkedin-square","thumb-tack","marker","external-link","open","sign-in","enter","join","sign up","sign in","signin","signup","trophy","winner","game","github-square","octocat","upload","lemon-o","phone","call","voice","number","square-o","bookmark-o","phone-square","twitter","facebook","facebook-f","github","credit-card","money","debit","rss","feed","blog","hdd-o","harddrive","hard drive","storage","bullhorn","announcement","broadcast","bell","reminder","certificate","badge","hand-o-right","point","right","hand-o-left","left","hand-o-up","hand-o-down","arrow-circle-left","arrow-circle-right","arrow-circle-up","arrow-circle-down","globe","world","planet","earth","global","translate","all","language","country","wrench","fix","tasks","progress","loading","downloading","downloads","filter","funnel","options","briefcase","work","business","office","luggage","bag","arrows-alt","users","group","people","profiles","persons","link","chain","cloud","flask","science","beaker","experimental","labs","scissors","cut","files-o","copy","duplicate","paperclip","attachment","floppy-o","bars","navicon","menu","drag","list-ul","list-ol","numbers","strikethrough","underline","table","data","excel","spreadsheet","magic","wizard","automatic","autocomplete","truck","shipping","pinterest","pinterest-square","google-plus-square","google-plus","cash","caret-down","dropdown","caret-up","caret-left","caret-right","columns","split","panes","unsorted","order","sort-desc","sort-down","sort-asc","sort-up","envelope","linkedin","undo","rotate-left","gavel","legal","tachometer","dashboard","comment-o","comments-o","bolt","flash","lightning","weather","sitemap","directory","hierarchy","organization","umbrella","clipboard","paste","lightbulb-o","idea","inspiration","exchange","cloud-download","cloud-upload","user-md","doctor","medical","nurse","stethoscope","suitcase","baggage","bell-o","coffee","morning","mug","breakfast","tea","cafe","cutlery","food","restaurant","spoon","knife","dinner","eat","file-text-o","building-o","apartment","hospital-o","building","ambulance","medkit","first aid","firstaid","fighter-jet","quick","fast","beer","stein","h-square","hospital","hotel","plus-square","angle-double-left","laquo","quote","angle-double-right","raquo","angle-double-up","angle-double-down","angle-left","angle-right","angle-up","angle-down","desktop","monitor","screen","computer","demo","device","laptop","tablet","ipad","mobile","mobile-phone","cell phone","cellphone","iphone","circle-o","quote-left","quote-right","spinner","circle","dot","reply","mail-reply","github-alt","folder-o","folder-open-o","smile-o","emoticon","happy","satisfied","frown-o","sad","meh-o","neutral","gamepad","controller","keyboard-o","type","input","flag-o","flag-checkered","terminal","command","prompt","code","html","brackets","reply-all","mail-reply-all","star-half-o","star-half-empty","star-half-full","location-arrow","crop","code-fork","git","fork","vcs","svn","rebase","version","chain-broken","unlink","question","info","exclamation","superscript","exponential","subscript","eraser","puzzle-piece","addon","add-on","section","microphone","microphone-slash","shield","calendar-o","fire-extinguisher","rocket","app","maxcdn","chevron-circle-left","chevron-circle-right","chevron-circle-up","chevron-circle-down","html5","css3","anchor","unlock-alt","bullseye","target","ellipsis-h","dots","ellipsis-v","rss-square","play-circle","ticket","pass","minus-square","minus-square-o","level-up","level-down","check-square","pencil-square","external-link-square","share-square","compass","safari","caret-square-o-down","toggle-down","caret-square-o-up","toggle-up","caret-square-o-right","toggle-right","eur","euro","gbp","usd","dollar","inr","rupee","jpy","cny","rmb","yen","rub","ruble","rouble","krw","won","btc","bitcoin","file","file-text","sort-alpha-asc","sort-alpha-desc","sort-amount-asc","sort-amount-desc","sort-numeric-asc","sort-numeric-desc","thumbs-up","thumbs-down","youtube-square","video","youtube","xing","xing-square","youtube-play","dropbox","stack-overflow","instagram","flickr","adn","bitbucket","bitbucket-square","tumblr","tumblr-square","long-arrow-down","long-arrow-up","long-arrow-left","long-arrow-right","apple","osx","windows","android","linux","tux","dribbble","skype","foursquare","trello","female","woman","male","gratipay","gittip","sun-o","lighter","brighten","day","moon-o","darker","archive","bug","vk","weibo","renren","pagelines","leaves","tree","plant","stack-exchange","arrow-circle-o-right","arrow-circle-o-left","caret-square-o-left","toggle-left","dot-circle-o","wheelchair","handicap","accessibility","accessibile","vimeo-square","try","turkish-lira","plus-square-o","space-shuttle","slack","envelope-square","wordpress","openid","university","institution","bank","graduation-cap","mortar-board","yahoo","google","reddit","reddit-square","stumbleupon-circle","stumbleupon","delicious","digg","pied-piper","pied-piper-alt","drupal","joomla","fax","child","paw","cube","cubes","behance","behance-square","steam","steam-square","recycle","car","automobile","vehicle","taxi","cab","spotify","deviantart","soundcloud","database","file-pdf-o","file-word-o","file-excel-o","file-powerpoint-o","file-image-o","file-photo-o","file-picture-o","file-archive-o","file-zip-o","file-audio-o","file-sound-o","file-video-o","file-movie-o","file-code-o","vine","codepen","jsfiddle","life-ring","life-bouy","life-buoy","life-saver","circle-o-notch","rebel","ra","empire","ge","git-square","hacker-news","tencent-weibo","qq","weixin","wechat","paper-plane","paper-plane-o","send-o","history","circle-thin","genderless","header","paragraph","sliders","share-alt","share-alt-square","bomb","futbol-o","soccer-ball-o","tty","binoculars","plug","slideshare","twitch","yelp","newspaper-o","wifi","calculator","paypal","google-wallet","cc-visa","cc-mastercard","cc-discover","cc-amex","cc-paypal","cc-stripe","bell-slash","bell-slash-o","copyright","at","eyedropper","paint-brush","birthday-cake","area-chart","pie-chart","line-chart","lastfm","lastfm-square","toggle-off","toggle-on","bicycle","bike","bus","ioxhost","angellist","cc","ils","shekel","sheqel","meanpath","buysellads","connectdevelop","dashcube","forumbee","leanpub","sellsy","shirtsinbulk","simplybuilt","skyatlas","cart-plus","shopping","cart-arrow-down","diamond","gem","gemstone","ship","boat","sea","user-secret","whisper","spy","incognito","motorcycle","street-view","heartbeat","ekg","venus","mars","mercury","transgender","transgender-alt","venus-double","mars-double","venus-mars","mars-stroke","mars-stroke-v","mars-stroke-h","neuter","facebook-official","pinterest-p","whatsapp","server","user-plus","user-times","bed","viacoin","train","subway","medium"),
         "description" => __("<div class='flv_icon_change'></div>" ,"wizard")
             ),
       array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Shadow" ,"wizard"),
         "param_name" => "shadow",
         "value" => array("no","yes"),
         "description" => __("" ,"wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Url" ,"wizard"),
         "param_name" => "link",
         "value" => __("#" ,"wizard"),
         "description" => __("" ,"wizard")
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Target" ,"wizard"),
         "param_name" => "target",
         "value" => array("_blank","_self","_parent","_top"),
         "description" => __("" ,"wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Size" ,"wizard"),
         "param_name" => "size",
         "value" => __("23" ,"wizard"),
         "description" => __("in px" ,"wizard")
      ),
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Color" ,"wizard"),
         "param_name" => "color",
         "value" => __("#333333" ,"wizard"),
         "description" => __("" ,"wizard")
      ),
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Hover Color" ,"wizard"),
         "param_name" => "hover_color",
         "value" => __("#E96546" ,"wizard"),
         "description" => __("" ,"wizard")
      ),

   )
) );



/*--------------------------------------- Location google image -----------------------------------------*/
vc_map( array(
   "name" => __("Location google image","wizard"),
   "base" => "location_img",
   "class" => "flv_custom_item",
   "icon"=>"icon-earth",
   "category" => __('Content',"wizard"),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Latitude","wizard"),
         "param_name" => "lat",
         "value" => __("","wizard"),
         "description" => __("required","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Longitude","wizard"),
         "param_name" => "long",
         "value" => __("","wizard"),
         "description" => __("required","wizard")
      ),
           array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Language","wizard"),
         "param_name" => "language",
         "value" => __("","wizard"),
         "description" => __("","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Zoom","wizard"),
         "param_name" => "zoom",
         "value" => __("14","wizard"),
         "description" => __("not required","wizard")
      ),
       array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Width","wizard"),
         "param_name" => "width",
         "value" => __("","wizard"),
         "description" => __("in px","wizard")
      ),
       array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height","wizard"),
         "param_name" => "height",
         "value" => __("450","wizard"),
         "description" => __("in px","wizard")
      ),
   )
) );
/*--------------------------------------- heading 1 -----------------------------------------*/
vc_map( array(
   "name" => __("Heading 1","wizard"),
   "base" => "heading1",
   "class" => "flv_custom_item",
   "icon"=>"icon-font-size",
   "category" => __('Headings',"wizard"),
   "params" => array(
  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "xclass",
         "value" => __("","wizard"),
         "description" => __("eg: uppercase, white, text-center","wizard")
      ),
       array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );
/*--------------------------------------- heading 2 -----------------------------------------*/
vc_map( array(
   "name" => __("Heading 2","wizard"),
   "base" => "heading2",
   "class" => "flv_custom_item",
   "icon"=>"icon-font-size",
   "category" => __('Headings',"wizard"),
   "params" => array(
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "xclass",
         "value" => __("","wizard"),
         "description" => __("eg: uppercase, white, text-center","wizard")
      ),
       array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );
/*--------------------------------------- heading 3 -----------------------------------------*/
vc_map( array(
   "name" => __("Heading 3","wizard"),
   "base" => "heading3",
   "class" => "flv_custom_item",
   "icon"=>"icon-font-size",
   "category" => __('Headings',"wizard"),
   "params" => array(
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "xclass",
         "value" => __("","wizard"),
         "description" => __("eg: uppercase, white, text-center","wizard")
      ),
       array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );
/*--------------------------------------- heading 4 -----------------------------------------*/
vc_map( array(
   "name" => __("Heading 4","wizard"),
   "base" => "heading4",
   "class" => "flv_custom_item",
   "icon"=>"icon-font-size",
   "category" => __('Headings',"wizard"),
   "params" => array(
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "xclass",
         "value" => __("","wizard"),
         "description" => __("eg: uppercase, white, text-center","wizard")
      ),
       array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );
/*--------------------------------------- heading 5 -----------------------------------------*/
vc_map( array(
   "name" => __("Heading 5","wizard"),
   "base" => "heading5",
   "class" => "flv_custom_item",
   "icon"=>"icon-font-size",
   "category" => __('Headings',"wizard"),
   "params" => array(
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "xclass",
         "value" => __("","wizard"),
         "description" => __("eg: uppercase, white, text-center","wizard")
      ),
       array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );
/*--------------------------------------- heading 6 -----------------------------------------*/
vc_map( array(
   "name" => __("Heading 6","wizard"),
   "base" => "heading6",
   "class" => "flv_custom_item",
   "icon"=>"icon-font-size",
   "category" => __('Headings',"wizard"),
   "params" => array(
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "xclass",
         "value" => __("","wizard"),
         "description" => __("eg: uppercase, white, text-center","wizard")
      ),
       array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );

/*--------------------------------------- Progress bar -----------------------------------------*/
vc_map( array(
   "name" => __("Progress bar","wizard"),
   "base" => "progress_bar",
   "class" => "flv_custom_item",
   "icon"=>"icon-bars3",
   "category" => __('Content',"wizard"),
   "params" => array(
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Percent","wizard"),
         "param_name" => "percent",
         "value" => __("","wizard"),
         "description" => __("must be a number","wizard")
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );

/*--------------------------------------- Service Icon -----------------------------------------*/
vc_map( array(
   "name" => __("Service Icon","wizard"),
   "base" => "service_icon",
   "class" => "flv_custom_item",
   "icon"=>"icon-flower",
   "category" => __('Content',"wizard"),
   "params" => array( 
    array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon type","wizard"),
         "param_name" => "type",
          "value" => array("glass","martini","drink","bar","alcohol","liquor","music","note","sound","search","magnify","zoom","enlarge","bigger","envelope-o","email","support","e-mail","letter","mail","notification","heart","love","like","favorite","star","award","achievement","night","rating","score","star-o","user","person","man","head","profile","film","movie","th-large","blocks","squares","boxes","th","th-list","ul","ol","checklist","finished","completed","done","todo","check","checkmark","agree","accept","confirm","times","remove","close","exit","x","search-plus","search-minus","minify","smaller","power-off","on","signal","cog","gear","settings","trash-o","garbage","delete","trash","hide","home","main","house","file-o","new","page","pdf","document","clock-o","watch","timer","late","timestamp","road","street","download","import","arrow-circle-o-down","arrow-circle-o-up","inbox","play-circle-o","repeat","rotate-right","redo","forward","refresh","reload","list-alt","lock","protect","admin","flag","report","notify","headphones","listen","volume-off","mute","volume-down","lower","quieter","volume-up","higher","louder","qrcode","scan","barcode","tag","label","tags","labels","book","read","documentation","bookmark","save","print","camera","photo","picture","record","font","text","bold","italic","italics","text-height","text-width","align-left","align-center","middle","align-right","align-justify","list","outdent","dedent","indent","video-camera","picture-o","image","pencil","write","edit","update","map-marker","map","pin","location","coordinates","localize","address","travel","where","place","adjust","contrast","tint","raindrop","pencil-square-o","share-square-o","social","send","check-square-o","arrows","move","reorder","resize","step-backward","rewind","previous","beginning","start","first","fast-backward","backward","play","playing","pause","wait","stop","block","box","square","next","fast-forward","end","last","step-forward","eject","chevron-left","bracket","back","chevron-right","plus-circle","add","create","expand","minus-circle","times-circle","check-circle","question-circle","help","information","unknown","info-circle","more","details","crosshairs","picker","times-circle-o","check-circle-o","ban","abort","arrow-left","arrow-right","arrow-up","arrow-down","share","mail-forward","compress","combine","merge","plus","minus","collapse","asterisk","exclamation-circle","warning","error","problem","alert","gift","present","leaf","eco","nature","fire","flame","hot","popular","eye","show","visible","views","eye-slash","toggle","visiblity","exclamation-triangle","plane","trip","destination","airplane","fly","mode","calendar","date","time","when","random","sort","comment","speech","magnet","chevron-up","chevron-down","retweet","shopping-cart","checkout","buy","purchase","payment","folder","folder-open","arrows-v","arrows-h","bar-chart","bar-chart-o","graph","twitter-square","tweet","social network","facebook-square","camera-retro","key","unlock","password","cogs","gears","comments","conversation","notes","thumbs-o-up","approve","thumbs-o-down","dislike","disapprove","disagree","star-half","heart-o","sign-out","log out","logout","leave","arrow","linkedin-square","thumb-tack","marker","external-link","open","sign-in","enter","join","sign up","sign in","signin","signup","trophy","winner","game","github-square","octocat","upload","lemon-o","phone","call","voice","number","square-o","bookmark-o","phone-square","twitter","facebook","facebook-f","github","credit-card","money","debit","rss","feed","blog","hdd-o","harddrive","hard drive","storage","bullhorn","announcement","broadcast","bell","reminder","certificate","badge","hand-o-right","point","right","hand-o-left","left","hand-o-up","hand-o-down","arrow-circle-left","arrow-circle-right","arrow-circle-up","arrow-circle-down","globe","world","planet","earth","global","translate","all","language","country","wrench","fix","tasks","progress","loading","downloading","downloads","filter","funnel","options","briefcase","work","business","office","luggage","bag","arrows-alt","users","group","people","profiles","persons","link","chain","cloud","flask","science","beaker","experimental","labs","scissors","cut","files-o","copy","duplicate","paperclip","attachment","floppy-o","bars","navicon","menu","drag","list-ul","list-ol","numbers","strikethrough","underline","table","data","excel","spreadsheet","magic","wizard","automatic","autocomplete","truck","shipping","pinterest","pinterest-square","google-plus-square","google-plus","cash","caret-down","dropdown","caret-up","caret-left","caret-right","columns","split","panes","unsorted","order","sort-desc","sort-down","sort-asc","sort-up","envelope","linkedin","undo","rotate-left","gavel","legal","tachometer","dashboard","comment-o","comments-o","bolt","flash","lightning","weather","sitemap","directory","hierarchy","organization","umbrella","clipboard","paste","lightbulb-o","idea","inspiration","exchange","cloud-download","cloud-upload","user-md","doctor","medical","nurse","stethoscope","suitcase","baggage","bell-o","coffee","morning","mug","breakfast","tea","cafe","cutlery","food","restaurant","spoon","knife","dinner","eat","file-text-o","building-o","apartment","hospital-o","building","ambulance","medkit","first aid","firstaid","fighter-jet","quick","fast","beer","stein","h-square","hospital","hotel","plus-square","angle-double-left","laquo","quote","angle-double-right","raquo","angle-double-up","angle-double-down","angle-left","angle-right","angle-up","angle-down","desktop","monitor","screen","computer","demo","device","laptop","tablet","ipad","mobile","mobile-phone","cell phone","cellphone","iphone","circle-o","quote-left","quote-right","spinner","circle","dot","reply","mail-reply","github-alt","folder-o","folder-open-o","smile-o","emoticon","happy","satisfied","frown-o","sad","meh-o","neutral","gamepad","controller","keyboard-o","type","input","flag-o","flag-checkered","terminal","command","prompt","code","html","brackets","reply-all","mail-reply-all","star-half-o","star-half-empty","star-half-full","location-arrow","crop","code-fork","git","fork","vcs","svn","rebase","version","chain-broken","unlink","question","info","exclamation","superscript","exponential","subscript","eraser","puzzle-piece","addon","add-on","section","microphone","microphone-slash","shield","calendar-o","fire-extinguisher","rocket","app","maxcdn","chevron-circle-left","chevron-circle-right","chevron-circle-up","chevron-circle-down","html5","css3","anchor","unlock-alt","bullseye","target","ellipsis-h","dots","ellipsis-v","rss-square","play-circle","ticket","pass","minus-square","minus-square-o","level-up","level-down","check-square","pencil-square","external-link-square","share-square","compass","safari","caret-square-o-down","toggle-down","caret-square-o-up","toggle-up","caret-square-o-right","toggle-right","eur","euro","gbp","usd","dollar","inr","rupee","jpy","cny","rmb","yen","rub","ruble","rouble","krw","won","btc","bitcoin","file","file-text","sort-alpha-asc","sort-alpha-desc","sort-amount-asc","sort-amount-desc","sort-numeric-asc","sort-numeric-desc","thumbs-up","thumbs-down","youtube-square","video","youtube","xing","xing-square","youtube-play","dropbox","stack-overflow","instagram","flickr","adn","bitbucket","bitbucket-square","tumblr","tumblr-square","long-arrow-down","long-arrow-up","long-arrow-left","long-arrow-right","apple","osx","windows","android","linux","tux","dribbble","skype","foursquare","trello","female","woman","male","gratipay","gittip","sun-o","lighter","brighten","day","moon-o","darker","archive","bug","vk","weibo","renren","pagelines","leaves","tree","plant","stack-exchange","arrow-circle-o-right","arrow-circle-o-left","caret-square-o-left","toggle-left","dot-circle-o","wheelchair","handicap","accessibility","accessibile","vimeo-square","try","turkish-lira","plus-square-o","space-shuttle","slack","envelope-square","wordpress","openid","university","institution","bank","graduation-cap","mortar-board","yahoo","google","reddit","reddit-square","stumbleupon-circle","stumbleupon","delicious","digg","pied-piper","pied-piper-alt","drupal","joomla","fax","child","paw","cube","cubes","behance","behance-square","steam","steam-square","recycle","car","automobile","vehicle","taxi","cab","spotify","deviantart","soundcloud","database","file-pdf-o","file-word-o","file-excel-o","file-powerpoint-o","file-image-o","file-photo-o","file-picture-o","file-archive-o","file-zip-o","file-audio-o","file-sound-o","file-video-o","file-movie-o","file-code-o","vine","codepen","jsfiddle","life-ring","life-bouy","life-buoy","life-saver","circle-o-notch","rebel","ra","empire","ge","git-square","hacker-news","tencent-weibo","qq","weixin","wechat","paper-plane","paper-plane-o","send-o","history","circle-thin","genderless","header","paragraph","sliders","share-alt","share-alt-square","bomb","futbol-o","soccer-ball-o","tty","binoculars","plug","slideshare","twitch","yelp","newspaper-o","wifi","calculator","paypal","google-wallet","cc-visa","cc-mastercard","cc-discover","cc-amex","cc-paypal","cc-stripe","bell-slash","bell-slash-o","copyright","at","eyedropper","paint-brush","birthday-cake","area-chart","pie-chart","line-chart","lastfm","lastfm-square","toggle-off","toggle-on","bicycle","bike","bus","ioxhost","angellist","cc","ils","shekel","sheqel","meanpath","buysellads","connectdevelop","dashcube","forumbee","leanpub","sellsy","shirtsinbulk","simplybuilt","skyatlas","cart-plus","shopping","cart-arrow-down","diamond","gem","gemstone","ship","boat","sea","user-secret","whisper","spy","incognito","motorcycle","street-view","heartbeat","ekg","venus","mars","mercury","transgender","transgender-alt","venus-double","mars-double","venus-mars","mars-stroke","mars-stroke-v","mars-stroke-h","neuter","facebook-official","pinterest-p","whatsapp","server","user-plus","user-times","bed","viacoin","train","subway","medium"),
         "description" => __("<div class='flv_ico_service_change'></div>")
      ),
    array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Target","wizard"),
         "param_name" => "target",
         "value" => array("_blank","_self","_parent","_top"),
         "description" => __("","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("URL","wizard"),
         "param_name" => "url",
         "value" => __("","wizard"),
         "description" => __("not required","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","wizard"),
         "param_name" => "title",
         "value" => __("the title","wizard"),
         "description" => __("","wizard")
      ),
	   array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Tooltip","mithiliya"),
         "param_name" => "tooltip",
         "value" => array("yes","no"),
         "description" => __("","mithiliya")
      ),
      
       array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Size","wizard"),
         "param_name" => "size",
         "value" => array("default","fullwidth"),
         "description" => __("","wizard")
      ),
       array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );


/*--------------------------------------- Title  -----------------------------------------*/
vc_map( array(
   "name" => __("Title","wizard"),
   "base" => "title",
   "class" => "flv_custom_item",
   "icon"=>"app-icons-edit",
   "category" => __('Content',"wizard"),
   "params" => array(
       array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Title","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );
/*--------------------------------------- sub Title  -----------------------------------------*/
vc_map( array(
   "name" => __("Sub Title Left","wizard"),
   "base" => "sub_title_left",
   "class" => "flv_custom_item",
   "icon"=>"app-icons-edit",
   "category" => __('Content',"wizard"),
   "params" => array(
       array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Title","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );
/*--------------------------------------- sub Title  -----------------------------------------*/
vc_map( array(
   "name" => __("Sub Title Right","wizard"),
   "base" => "sub_title_right",
   "class" => "flv_custom_item",
   "icon"=>"app-icons-edit",
   "category" => __('Content',"wizard"),
   "params" => array(
       array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Title","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );
/*--------------------------------------- Styled paragraph  -----------------------------------------*/
vc_map( array(
   "name" => __("Styled paragraph","wizard"),
   "base" => "paragraph",
   "class" => "flv_custom_item",
   "icon"=>"app-icons-edit",
   "category" => __('Content',"wizard"),
   "params" => array(
   array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Color","wizard"),
         "param_name" => "color",
         "value" => __("#878787","wizard"),
         "description" => __("","wizard")
      ),
       array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );
/*--------------------------------------- Twitter -----------------------------------------*/
vc_map( array(
   "name" => __("Twitter Feed","wizard"),
   "base" => "twitter",
   "class" => "flv_custom_item",
   "icon"=>"icon-twitter",
   "category" => __('Social',"wizard"),
   "params" => array(


      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("User Name","wizard"),
         "param_name" => "user",
         "value" => __("","wizard"),
         "description" => __("","wizard")
      ),
		      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of posts","wizard"),
         "param_name" => "number",
         "value" => __("3","wizard"),
         "description" => __("","wizard")
      ),
            array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Consumer key","wizard"),
         "param_name" => "consumer_key",
         "value" => __("","wizard"),
         "description" => __("Consult our documentation about this values.","wizard")
      ),
            array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Consumer Secret key","wizard"),
         "param_name" => "consumer_secret",
         "value" => __("","wizard"),
         "description" => __("Consult our documentation about this values.","wizard")
      ),
            array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Access Token","wizard"),
         "param_name" => "access_token",
         "value" => __("","wizard"),
         "description" => __("Consult our documentation about this values.","wizard")
      ),
            array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Access Token Secret","wizard"),
         "param_name" => "access_token_secret",
         "value" => __("","wizard"),
         "description" => __("Consult our documentation about this values.","wizard")
      ),
   )
) ); 
/*--------------------------------------- Vimeo -----------------------------------------*/
vc_map( array(
   "name" => __("Vimeo video","wizard"),
   "base" => "vimeo",
   "class" => "flv_custom_item",
   "icon"=>"icon-vimeo2",
   "category" => __('Media',"wizard"),
   "params" => array(
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("ID of the video","wizard"),
         "param_name" => "id",
         "value" => __("","wizard"),
         "description" => __("","wizard")
      ),
	array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height","wizard"),
         "param_name" => "height",
         "value" => __("","wizard"),
         "description" => __("in px","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Width","wizard"),
         "param_name" => "width",
         "value" => __("","wizard"),
         "description" => __("in px","wizard")
      ),
	array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Autoplay","wizard"),
         "param_name" => "autoplay",
         "value" => array("no","yes"),
         "description" => __("","wizard")
      ),
     array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Display in HD format","wizard"),
         "param_name" => "hd",
         "value" => array("no","yes"),
         "description" => __("","wizard")
      )  
   )
) );  
/*--------------------------------------- Youtube -----------------------------------------*/
vc_map( array(
   "name" => __("Youtube video","wizard"),
   "base" => "youtube",
   "class" => "flv_custom_item",
   "icon" => "app-icons-youtube-sign",
   "category" => __('Media',"wizard"),
   "params" => array(
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("ID of the video","wizard"),
         "param_name" => "id",
         "value" => __("","wizard"),
         "description" => __("","wizard")
      ),
	array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height","wizard"),
         "param_name" => "height",
         "value" => __("","wizard"),
         "description" => __("in px","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Width","wizard"),
         "param_name" => "width",
         "value" => __("","wizard"),
         "description" => __("in px","wizard")
      ),
	array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Autoplay","wizard"),
         "param_name" => "autoplay",
         "value" => array("no","yes"),
         "description" => __("","wizard")
      ),
     array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Display in HD format","wizard"),
         "param_name" => "hd",
         "value" => array("no","yes"),
         "description" => __("","wizard")
      )  
   )
) ); 
/*--------------------------------------- team_members -----------------------------------------*/
vc_map( array(
   "name" => __("Team Members","wizard"),
   "base" => "team_members",
   "class" => "flv_custom_item",
   "icon" => "app-icons-user ",
   "category" => __('Social',"wizard"),
   "params" => array(
	
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Team Name","wizard"),
         "param_name" => "team_name",
         "value" => __("","wizard"),
         "description" => __("leave empty to show all team members","wizard")
      ),
       array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Target","wizard"),
         "param_name" => "target",
         "value" => array("_blank","_self","_parent","_top"),
         "description" => __("target for social icons","wizard")
      ),
     array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Order","wizard"),
         "param_name" => "order",
         "value" => array("asc","desc"),
         "description" => __("","wizard")
      ) ,
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Order by","wizard"),
         "param_name" => "orderby",
         "value" => array('none','ID','author','title','name','date','modified','rand' ),
         "description" => __("","wizard")
      )   
   )
) ); 

/*---------------------------------------portfolio -----------------------------------------*/
vc_map( array(
   "name" => __("Portfolio","wizard"),
   "base" => "portfolio",
   "class" => "flv_custom_item",
   "icon" => "icon-bookmarks",
   "category" => __('Portfolio',"wizard"),
   "params" => array(
    array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Columns","wizard"),
         "param_name" => "columns",
         "value" => array('4','5','6','3','2' ),
         "description" => __("","wizard")
      ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Image Size","wizard"),
         "param_name" => "thumb_height",
         "value" => array("Custom Thumbnail Size","Default Image Size"),
         "description" => __("","wizard")
      ),
       array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Layout","wizard"),
         "param_name" => "layout",
         "value" => array("default","masonry"),
         "description" => __("","wizard")
      ) ,
       array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Order","wizard"),
         "param_name" => "order",
         "value" => array("asc","desc"),
         "description" => __("","wizard")
      ) ,
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Order by","wizard"),
         "param_name" => "orderby",
         "value" => array('none','ID','author','title','name','date','modified','rand' ),
         "description" => __("","wizard")
      ),
      array(
         "type" => "exploded_textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Enter the category names","wizard"),
         "param_name" => "categories",
         "value" => __("","wizard"),
         "description" => __("category names must de separated by comma","wizard")
      ),    
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Target","wizard"),
         "param_name" => "target",
         "value" => array("_blank","_self","_parent","_top"),
         "description" => __("","wizard")
      ), 
   )
) ); 
vc_map( array(
   "name" => __("Latest Projects","wizard"),
   "base" => "latest_projects",
   "class" => "flv_custom_item",
   "icon" => "icon-bookmarks",
   "category" => __('Portfolio',"wizard"),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of total posts","wizard"),
         "param_name" => "number",
         "value" => __("9","wizard"),
         "description" => __("how many posts do you want to display","wizard")
      ),
      array(
         "type" => "exploded_textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Enter the category names","wizard"),
         "param_name" => "categories",
         "value" => __("","wizard"),
         "description" => __("category names must de separated by comma","wizard")
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Target","wizard"),
         "param_name" => "target",
         "value" => array("_blank","_self","_parent","_top"),
         "description" => __("","wizard")
      ), 
   )
) ); 

/*---------------------------------------portfolio -----------------------------------------*/
vc_map( array(
   "name" => __("Video background","wizard"),
   "base" => "video_bg",
   "class" => "flv_custom_item",
   "icon" => "icon-video",
   "category" => __('Content',"wizard"),
   "params" => array(
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Video width","wizard"),
         "param_name" => "video_w",
         "value" => __("800","wizard"),
         "description" => __("in pixels","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Video height","wizard"),
         "param_name" => "video_h",
         "value" => __("955","wizard"),
         "description" => __("in pixels","wizard")
      ),
       array(
            "type" => "attach_image",
            "heading" => __("Image source", "js_composer"),
            "param_name" => "image_src",
            "description" => __(" ","wizard")
        ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Video mp4 source","wizard"),
         "param_name" => "video_mp4",
         "value" => __("","wizard"),
         "description" => __("","wizard")
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Video webm source","wizard"),
         "param_name" => "video_webm",
         "value" => __("","wizard"),
         "description" => __("","wizard")
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Enable Audio" ,"wizard"),
         "param_name" => "audio",
         "value" => array("no","yes"),
         "description" => __("" ,"wizard")
      ),
       array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","wizard"),
         "param_name" => "content",
         "value" => __("Click edit button to change this text.","wizard"),
         "description" => __("Enter your content.","wizard")
      )
   )
) );

 }
 