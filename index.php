<?php

/*
Plugin Name: Simple-Maintenance-4-wp
Plugin URI: https://github.com/sadegh73/Simple-Maintenance-4-wordpress
Description: Simple Maintenance Template 
Version: 1.0.2

*/

defined('ABSPATH') || exit('');

function sm4wp_is_valid_page() {
            return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}
if( !is_admin() && !sm4wp_is_valid_page() ){  
                 $sm4wp_title = get_bloginfo('name');
                 echo '<title>'.$sm4wp_title.'</title>';
                 $sm4wp_URL=  plugin_dir_url(__FILE__);
                 $image = $sm4wp_URL.'1.png';
                 echo '<center><img src="' . $image . '" style="max-width: 100%;height: auto;"></center>';
                 die();
                } 



?>