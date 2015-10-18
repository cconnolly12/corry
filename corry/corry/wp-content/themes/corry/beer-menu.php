<?php
	$url = 'https://www.beermenus.com/places/3072-corry-s-ale-house';

	// Setup the new css you want to inject into the page 
	$css = '<style type="text/css">
	.primary_nav {
	    padding-left: 40px;
	    font-size: 1.075em;
	}
	.pure-list > lh {font-family: "sherwoodregular"; color:#cc9900; font-size:1.3em;}
	.beer-info > h3 > a {font-family: "sherwoodregular"; color:#fff;}
	#header, #footer, .sidebar, .show-change-location, #nav, #footer_nav, .place #map_canvas, .address, .follow-promo, .tabs, .add-business-promo-place, .ui-datepicker {display:none;}
	#container {width:100%;}
	#page, #page .content-wide, #page .content-narrow, .pure-list {background: transparent; width: 100%; border-width:0; padding:0;}
	.beer-meta {color: #fff;}
	</style>';
									 
	$site_content = file_get_contents($url);

	// a simple way to inject style into this page would be to ad it directly above the closing head tag (if there is one) 
	// this can be changed to any element, or even using the dom class you could ammend this with more detail. 
	$site_content = str_replace('</head>', $css.'</head>', $site_content);

	// you may also need to inject a base href tag so all the links inside are still correct
	// comment out the next line if not needed 
	$site_content = str_replace('<head>', '<head><base href="'.$url.'" />', $site_content);

	echo $site_content;
?> 