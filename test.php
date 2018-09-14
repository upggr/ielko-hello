<?php

/**
* Plugin Name: Ielko test plugin
* Plugin URI: https://www.ielko.com
* Description: This is a test plugin by ielko
* Version: 1.1.0
* Author: Ioannis Kokkinis
* Author URI: https://ielko.com
* License: GPL2
*/




require_once('ielko-updater.php');
if (is_admin()) {
    new IelkoUpdater(__FILE__, 'myGitHubUsername', "Repo-Name");
}

add_action('wp_footer', 'my_function');

function my_function()
{
    echo 'IELKO HELLO PLUGIN';
}
