<?php
/*
Plugin Name: Plugin askhatir
Description: My first plugin for me content the copyrait in footer .
Version: 1.0.0
Author: Askhatir khalid
License: GPLv2 or later
Text Domain: plugin
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action('admin_menu', 'my_admin_menu');

function my_admin_menu () {

    add_menu_page('Description title', 'Your Footer ', 'manage_options','Description_page', 'Description_admin_page','dashicons-welcome-write-blog');
    add_submenu_page( 'Description_page', 'Page title', 'Settings the footer','manage_options', 'Settings', 'mt_settings_page');
   
    
}

function Description_admin_page () {
    
  echo '<div class="wrap">
  <h1>Hello!</h1>
  <h3>copyright in the website is </h3>
  </p><br><br>
  
</div>
';
echo'<h1>'.editfotter().'</h1>
<h3>if you change the copyright click in the Settings </h3>
';
}

function mt_settings_page() {
    echo "<h2>" . __( 'Settings Configurations', 'menu-test' ) . "</h2>";
	include_once('copy.php');
}

?>
<?php
function editfotter() {
   echo "<div style='color: black; text-align:center; font-weight: normal;
    font-size: 30px; font-family: arial;
    margin: 20px;'> &copy;
    ".get_option('footer_text')."</div>";
}
add_action('wp_footer', 'editfotter');
?>