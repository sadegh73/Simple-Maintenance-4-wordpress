<?php

/*
Plugin Name: Simple-Maintenance-4-wordpress
Plugin URI: http://wordpress.org/
Description: Simple Maintenance Template 
Version: 1.0.0

*/


defined('ABSPATH') || exit('');

function is_valid_page() {
            return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}
if( !is_admin() && !is_valid_page() ){  
                 $name = get_bloginfo('name');
                 echo '<title>'.$name.'</title>';
                 define('SM_URL',plugin_dir_url(__FILE__));
                 $image = SM_URL.'1.png';
                 echo '<center><img src="' . $image . '"></center>';
                 die();
                } 



?>