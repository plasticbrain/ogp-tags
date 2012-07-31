Add OGP Tags to your website
============================

Description
-----------
This script lets you quickly add OGP (Open Graph Protocol) tags to your website. 

What is "OGP" you ask? Well, the official OGP website says:

> The [Open Graph protocol](http://ogp.me) (OGP) enables any web page to become a rich object in a social graph. For instance, this is used on Facebook to allow any web page to have the same functionality as any other object on Facebook.

Ok, that's nice... But for our purposes here, all you need to know is that OGP tags are what Facebook use to display information about your website whenever a link to your site is shared.


Installation & Basic Usage
--------------------------
1. Download the latest version of this script to your server (or check it out from Github)
2. Open `ogp-tags/ogp.config.php` and set the default values for your site

3. Include `ogp-tags/ogp.php` in your `<head>` tag wherever you want the tags to be shown:
````php
<?php include('ogp-tags/ogp.php'); ?>
````


Setting Unique Tags for Each Page
---------------------------------
If you use this script in a global or shared/included file, such as a "header", then you can set unique values for the OGP tags for each page. All you have to do is set the variable(s) before you include `ogp.php`. For example, the following will change the "title" and "description":
````php
<?php
$ogp_title = "The title for this page";
$ogp_desc = "The description for this page...";
include('ogp-tags/ogp.php');
?>
````

**Available Variables:**
* `$ogp_title` The title of the page
* `$ogp_desc` The description of the page
* `$ogp_img` The [full URL to the] image you want to use
* `$ogp_type` The type of content (usually "website")
* `$ogp_url` The URL of the current page
* `$ogp_fb_appid` The Facebook App ID for your site (if required)
* `$ogp_fb_admins` The Facebook Admin(s) for your site/app (if required)

_Protip: **don't** set `$ogp_url` and the URL of the current page will automagically be used._


Tips and Other Information
--------------------------
**Images** - [Facebook say](https://developers.facebook.com/docs/opengraphprotocol/) that images should be no smaller than 50px by 50px, and have a maximum aspect ratio of 3:1. However, recently the Facebook URL Linter returns a warning if the image is smaller than 300px wide. I tend to have the best results when using square images that are 300x300. Your results may vary.


**Debugging** - After you've added the OGP tags to your site you can enter your URL into [Facebook's URL Linter](https://developers.facebook.com/tools/debug) to make sure the tags are being read, and that you're happy with the results. The URL Linter will also show you any errors or warnings that may have been encountered while processing your OGP tags. 

**Clearing Facebook's Cache** - When you enter a URL into Facebook's [URL Linter](https://developers.facebook.com/tools/debug) it appears to clear/update any cached information that Facebook might have for that URL. This is handy if you've made changes to a page, but you aren't seeing those changes when you share the page on Facebook.

**Learn More** - To learn more about the Open Graph Protocol check out the following links:
* [OGP Official Site](http://ogp.me)
* [Facebook's OGP Documentation](https://developers.facebook.com/docs/opengraphprotocol/)