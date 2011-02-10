=== Do Not Load jQuery ===
Contributors: websitedesignernc
Donate link: http://websitedesignernc.com/do-not-load-jquery/
Tags: jquery, load, google, javascript, library
Requires at least: 3.0
Tested up to: 3.1
Stable tag: 1.0

Stops WordPress plugins from loading jQuery.

== Description ==

Some WordPress plugins will load jQuery into your header through the wp_head function, but at times it is not wanted. For example, you may load jQuery through Google, in which case, you will not want any of your plugins to load it. You can use this plugin rather than commenting out the code for every plugin or putting a function into each theme.

== Installation ==

1. Unzip archive
2. Upload the 'do-not-load-jquery' folder to the '/wp-content/plugins/' directory
3. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

How do I use Google to load jQuery?
Place the following code into 'header.php' of your current theme: <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
