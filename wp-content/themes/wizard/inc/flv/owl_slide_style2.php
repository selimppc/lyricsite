<?php
if (!class_exists('WPBakeryShortCode_owl_slide_style2')) { 
class WPBakeryShortCode_owl_slide_style2 extends FLV_ShortCode {

}
}



vc_map( array(
    "name" => __("Owl slide style 2","wizard"),
    "base" => "owl_slide_style2",
    "icon" => "icon-map",
    "class" => "flv_custom_item",
    "as_child" => array('only' => 'owl_slider'), // Use only|except attributes to limit parent (separate multiple values with comma)

  "is_container" => true,
 "content_element" => true,
    "params" => array(
          array(
            "type" => "attach_image",
            "heading" => __("Image", "js_composer"),
            "param_name" => "image",
            "description" => __(" ","wizard")
        ),
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Bg Color" ,"wizard"),
         "param_name" => "bg_color",
         "value" => __("#313131" ,"wizard"),
         "description" => __(" " ,"wizard")
      ),
       array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Color" ,"wizard"),
         "param_name" => "tx_color",
         "value" => __("#ffffff" ,"wizard"),
         "description" => __(" " ,"wizard")
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
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","wizard"),
         "param_name" => "title",
         "value" => __("the title","wizard"),
         "description" => __("","wizard")
      ),
       array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("URL","wizard"),
         "param_name" => "url",
         "value" => __("#","wizard"),
         "description" => __("","wizard")
      ),
             array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button text","wizard"),
         "param_name" => "btn_text",
         "value" => __("More Details","wizard"),
         "description" => __(" ","wizard")
      ),
       array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Extra class name","wizard"),
         "param_name" => "class",
         "value" => __("","wizard"),
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

?>