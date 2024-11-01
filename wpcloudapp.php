<?php
/*
Plugin Name: WP CloudApp
Plugin URI: http://wordpress.org/extend/plugins/wp-cloudapp/
Description: Uploads a file to GetCloudApp.com!
Version: 1.2
Author: Flokass
Author URI: http://xxpro.de
*/

function add_some_box() {
	add_meta_box(
		'cloudapp',  // id of the <div> we'll add
		'Upload a file to CloudApp', //title
		'cloudapp_upload', // callback function that will echo the box content
		'post', // where to add the box: on "post", "page", or "link" page
		'normal',
		'high'
	);
}

// Content of meta-box!

function cloudapp_upload() {
	echo '<iframe src="http://wpcloudapp.cloudcontrolled.com/form.php" width="500" height="120" name="cloudapp_frame"></iframe>';}

// Create hook
if (is_admin())
	add_action('admin_menu', 'add_some_box');
?>