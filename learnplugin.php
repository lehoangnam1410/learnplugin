<?php 
/*
 * Plugin Name:       My Basics Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Le Nam
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

 register_activation_hook(__FILE__,'activation_function_to_run');
 function activation_function_to_run(){
    
}

register_deactivation_hook(__FILE__,'deactivation_function_to_run');
function deactivation_function_to_run(){
}

class MyPlugin{
    public function __construct() {
        add_action('admin_menu', array($this,'custom_admin_menu'));
    }
    function custom_admin_menu(){
        add_menu_page('All Employees','All Employess','manage_options','all',array($this,'render_employee'),'',1);

    }
    function render_employee(){
        ?>
        <h1>List</h1>
        <?php
    }
}
new MyPlugin;