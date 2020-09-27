<?php

function bondhon_add_admin_page() {
	
	//Generate Bondhon Admin Page
	add_menu_page( 'Bondhon Theme Options', 'Bondhon', 'manage_options', 'ak_bondhon', 'bondhon_theme_create_page', 'dashicons-admin-generic', 110 );
	
	//Generate Bondhon Admin Sub Pages
	add_submenu_page( 'ak_bondhon', 'Bondhon Theme Options', 'General', 'manage_options', 'ak_bondhon', 'bondhon_theme_create_page' );
	
	
	
}
add_action( 'admin_menu', 'bondhon_add_admin_page' );



function bondhon_sidebar_options() {
	echo 'Customize your Sidebar Information';
}




function bondhon_theme_create_page() {
	require_once( get_template_directory() . '/inc/templates/bondhon-admin.php' );
}
