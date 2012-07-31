<?php
require_once('ogp.config.php');

//------------------------------------------------------------------------------
// Get the parameters (or grab the defaults if they aren't set)
//------------------------------------------------------------------------------
if(!isset($ogp_title)) $ogp_title = OGP_TITLE;
if(!isset($ogp_img)) $ogp_img = OGP_IMG;
if(!isset($ogp_type)) $ogp_type= OGP_TYPE;
if(!isset($ogp_desc)) $ogp_desc = OGP_DESC;
if(!isset($ogp_url)) $ogp_url = ogp_get_current_page();
if(!isset($ogp_fb_appid)) $ogp_fb_appid = OGP_FB_APPID;
if(!isset($ogp_fb_admins)) $ogp_fb_admins = OGP_FB_ADMINS;
if(!isset($ogp_spaces)) $ogp_spaces = OGP_SPACES;
if(!isset($ogp_space_char)) $ogp_space_char = OGP_SPACES_CHAR

//------------------------------------------------------------------------------
// Print out the OGP tags
//------------------------------------------------------------------------------
?>

<?= str_repeat($ogp_space_char, $ogp_spaces); ?><!-- Start OPG Tags -->
<?= str_repeat($ogp_space_char, $ogp_spaces); ?><meta property="og:title" content="<?php echo $ogp_title; ?>" />
<?= str_repeat($ogp_space_char, $ogp_spaces); ?><meta property="og:type" content="<?php echo $ogp_type; ?>" />
<?= str_repeat($ogp_space_char, $ogp_spaces); ?><meta property="og:url" content="<?php echo $ogp_url; ?>" />
<?= str_repeat($ogp_space_char, $ogp_spaces); ?><meta property="og:image" content="<?php echo $ogp_img; ?>" />
<?= str_repeat($ogp_space_char, $ogp_spaces); ?><meta property="og:description" content="<?php echo $ogp_desc; ?>" />
<?php 
// Do we need to include a FB APPID?
if( isset($ogp_appid) && $ogp_appid != false ): ?>
<?= str_repeat($ogp_space_char, $ogp_spaces); ?><meta property="fb:app_id" content="<?php echo $ogp_appid; ?>" />
<?php 
endif; 

// Do we need to include any FB Admins?
if( isset($ogp_fb_admins) && $ogp_fb_admins!= false ): ?>
<?= str_repeat($ogp_space_char, $ogp_spaces); ?><meta property="fb:admins" content="<?php echo $ogp_fb_admins; ?>" />
<?php endif; ?>
<?= str_repeat($ogp_space_char, $ogp_spaces); ?><!-- End OGP Tags -->
