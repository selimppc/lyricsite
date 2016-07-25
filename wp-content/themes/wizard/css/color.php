<?php 

$theme_color=ot_get_option("theme_color");if($theme_color==''){$theme_color="#00acc1";}
$theme_color_2=ot_get_option("theme_color_2");if($theme_color_2==''){$theme_color_2="#4dd0e1";}



$theme_color_schema=ot_get_option("theme_color_schema");if($theme_color_schema==''){$theme_color_schema="blue";}


elseif($theme_color_schema=="green"){$theme_color="#00e676";$theme_color_2='#69f0ae';}
elseif($theme_color_schema=="blue"){$theme_color="#00acc1";$theme_color_2='#4dd0e1';}

$theme_color_hover="#00838f";

$theme_color_rgb=wizard_hex2rgb($theme_color);


 
/**
	Wizard - Portfolio HTML Template
 	Copyright (c) 2015, Pophonic 

	Author: Pophonic
	Profile: themeforest.net/user/pophonic
	
**/


echo '<style  type="text/css">
.fab {
    background-color: '.$theme_color.';
}

/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
1.0 Page loader
2.0 Blockquote
3.0 Progress bar
4.0 Main menu light version hover
5.0 Services panel 1
6.0 Services panel 2
7.0 Content block 2 read more hover
8.0 Portfolio items
9.0 Submit form active hover
10.0 More items link hover
11.0 Single page and post
12.0 Sidebar
--------------------------------------------------------------*/


/********************************************
1.0 Page loader
*********************************************/
.loader {
	border-left: 0.5em solid '.$theme_color.';
}

/********************************************
2.0 Blockquote
*********************************************/
blockquote {
	border-left: '.$theme_color.' solid 5px;
}

/********************************************
3.0 Progress bar
*********************************************/
.progress-bar {
	background-color: '.$theme_color.';
}

/********************************************
4.0 Main menu light version hover
*********************************************/
#main-menu.light .nav-menu li:hover a {
	color: '.$theme_color.';
}

#main-menu.light .nav-menu li:hover span:before,
#main-menu.light .nav-menu li:hover span:after {
	background-color: '.$theme_color.';
}

#main-menu.light .dropdown-menu > ul > li:hover > a {
	color: '.$theme_color.' !important;
}

#main-menu.light .dropdown-menu > ul > li:hover > span:before,
#main-menu.light .dropdown-menu > ul > li:hover > span:after {
	background-color: '.$theme_color.' !important;
}

#main-menu.light .nav-menu li.active a {
	color: '.$theme_color.';
}

#main-menu.light .nav-menu li.active > span:before,
#main-menu.light .nav-menu li.active > span:after {
	background-color: '.$theme_color.' !important;
}

/********************************************
5.0 Services panel 1
*********************************************/
/* Service icon background color hover */
.services-panel1 .service-box:hover {
	background-color: '.$theme_color_hover.';
}

/********************************************
6.0 Services panel 2
*********************************************/
/* Service icon background color hover */
.services-panel2 .service-box .icon-hover {
	background-color: '.$theme_color.';
}

/* Service title hover */
.services-panel2 .service-detail h3 a:hover {
	color: '.$theme_color.';
}

/* Service title hover dark version */
.services-panel2.dark .service-detail h3 a:hover {
	color: '.$theme_color.';
}

/********************************************
7.0 Content block 2 read more hover
*********************************************/
.content-block2 .content-block-detail .read-more:hover {
	color: '.$theme_color_2.';
}

.content-block2 .content-block-detail .read-more:hover:after {
	color: '.$theme_color_2.';
}

.content-block2 .carousel-item.dark .content-block-detail .read-more:hover {
	color: '.$theme_color_2.';
}

.content-block2 .carousel-item.dark .content-block-detail .read-more:hover:after {
	color: '.$theme_color_2.';
}

/********************************************
8.0 Portfolio items
*********************************************/
/* Portfolio filter hover */
.portfolio-filter li.filter:hover,
.portfolio-filter li.filter.selected {
	color: '.$theme_color.';
}

/* Portfolio link icon hover */
.portfolio-item .mega-hoverlink:hover i,
.portfolio-item .mega-hoverview:hover i {
	color: '.$theme_color.';
}

/* Dark version portfolio filter hover */
.dark .portfolio-filter li.filter:hover,
.dark .portfolio-filter li.filter.selected {
	color: '.$theme_color.';
}

/* Portfolio thumbnail hover */
.portfolio-item .mega-hover {
	background-color: rgba('.$theme_color_rgb.',0.85);
}

/* Related work thumbnail hover */
.related-work-thumb .mega-hover {
	background-color: rgba('.$theme_color_rgb.',0.85);
}

/********************************************
9.0 Submit form active hover
*********************************************/
.submit-form input:focus ~ label,
.submit-form textarea:focus ~ label,
.submit-form input:valid ~ label,
.submit-form textarea:valid ~ label {
	color: '.$theme_color.';
}

.submit-form input ~ span,
.submit-form textarea ~ span {
	background: '.$theme_color.';
}

/********************************************
10.0 More items link hover
*********************************************/
.more-item-link a:hover {
	color: '.$theme_color_2.';
}

/********************************************
11.0 Single page and post
*********************************************/
/* Single post meta hover */
.single-post-meta ul li a:hover {
	color: '.$theme_color.';
}

/* Related work link icon hover */
.related-work-thumb .mega-hoverlink:hover i,
.related-work-thumb .mega-hoverview:hover i {
	color: '.$theme_color.';
}

/* Post date background color */
.date-wrap {
	background-color: '.$theme_color.';
	border-bottom: '.$theme_color_hover.' solid 3px;
}

/* Blog list meta hover */
.blog-entry .blog-meta ul li a:hover {
	color: '.$theme_color.';
}

/* Single post social share color hover */
.post-share-bottom ul li a:hover {
	background-color: '.$theme_color.';
}

/* Single post pagination icon */
.post-pagination span:before {
	color: '.$theme_color.';
}

/* Single post pagination hover */
.post-pagination h4 a:hover {
	color: '.$theme_color.';
}

/* Related post title hover */
.related-post-title a:hover {
	color: '.$theme_color.';
}

/* Comment reply color */
.comment-reply {
	color: '.$theme_color.';
}

/********************************************
12.0 Sidebar
*********************************************/
/* Recent post title hover */
.recent-post-detail h4 a:hover {
	color: '.$theme_color.';
}

/* Category list icon */
.widget_categories ul li:before {
	color: '.$theme_color.';
}

/* Category list hover */
.widget_categories ul li a:hover {
	color: '.$theme_color.';
}

/* Tag cloud bg color */
.widget_tag_cloud .tagcloud a {
	background-color: '.$theme_color.';
}

/* Tag cloud bg color hover */
.widget_tag_cloud .tagcloud a:hover {
	background-color: '.$theme_color_2.';
}

.services-panel1 .service-box:hover {
    background-color: '.$theme_color.' !important;
}
</style>';
?>
