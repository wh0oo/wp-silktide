<?php
/*
Plugin Name: wp-silktide
Plugin URI: http://www.village-idiot.org
Description: This plugin simplifies displaying your silktide sitescore on your blog.
Version: 2.0
Author: whoo
Author URI: http://www.village-idiot.org
*/


	function wp_silktide() {
		$myblog = get_settings('siteurl');
		$silktideblog = get_settings('siteurl');
		$silktideblog = eregi_replace("http://", "", $silktideblog);
		//$silktideblog = eregi_replace("/", "%2F", $silktideblog);
echo "<a href=\"http://www.sitescore.org/report?url=$silktideblog\" title=\"Sillktide score for $myblog\"><img src=\"http://icons.sitescore.org/$silktideblog-s.gif\" alt=\"Silktide SiteScore for $myblog\" /></a>";
	}
?>