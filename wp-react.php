<?php
/** 
 * Plugin Name: Custom Admin Page with React
 * Description: Custom Admin Page with React
 * Version: 1.0.0
 * Author: pluckCode
 * Author URI: https://pluckcode.com
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: custom-admin
 * Domain Path: /languages
 * Requires at least: 5.8 WP
 * Requires PHP: 7.4
 */

 function wp_custom_admin_enqueue_scripts() {
   wp_enqueue_script
   ('wp-custom-admin-page', plugins_url('admin/build/admin-bundle.js', __FILE__),
   ['wp-element', 'wp-components'],
   filemtime(plugin_dir_path(__FILE__) . 'admin/build/admin-bundle.js'),
   true
   );
 }

 add_action('admin_enqueue_scripts', 'wp_custom_admin_enqueue_scripts');

 function wp_custom_admin_page() {
   add_menu_page
   ('WP React Admin Page',
    'WP React',
    'manage_options',
    'wp-react',
    'wp_react_render_admin_page',
    '',6
   );
 }
 add_action('admin_menu', 'wp_custom_admin_page');

 function wp_react_render_admin_page() {
   echo '<div id="admin-page"></div>';
 }

?>