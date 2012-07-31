<?php

// Title
define('OGP_TITLE', "");

// Image (Full URL to image)
define('OGP_IMG', "http://");

// Content Type 
define('OGP_TYPE', 'website');

// Description
define('OGP_DESC', "");

// FB APP ID 
//------------------
// This is only needed if you are integrating certain features 
// on your site (ie: Facebook comments, Like buttons, etc)
// If you don't need to include the app id then set this to FALSE
define('OGP_FB_APPID', false);

// FB Admins
//------------------
// This is only needed if you are integrating certain features 
// on your site (ie: Facebook comments, Like buttons, etc)
// If you don't need to include the app id then set this to FALSE
define('OGP_FB_ADMINS', false);

// # of tabs (or spaces) to indent so that the added code is nested correctly when viewing the page's source.
// Yes, I am that pedantic.
define('OGP_SPACES',  0);
define('OGP_SPACES_CHAR', "\t"); // use "\t" for tabs or "\s" for spaces


// Stop editing here!




//------------------------------------------------------------------------------
// A simple function to get the current url
//------------------------------------------------------------------------------
function ogp_get_current_page($params=NULL, $no_trailing_slash=TRUE) {
 	$url = @$_SERVER['HTTPS'] == 'on' ? 'https://'. $_SERVER['SERVER_NAME'] : 'http://'.$_SERVER['SERVER_NAME'];
	if( @$_SERVER['SERVER_PORT'] != "80" ) $url .=  ':'. @$_SERVER['SERVER_PORT'];
	$url .= $_SERVER['REQUEST_URI'];
	if( $no_trailing_slash ) $url = rtrim($url, '/');
	if( $params ) $url .= $params;
	return $url;
}	

?>