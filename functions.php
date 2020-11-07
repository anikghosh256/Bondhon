<?php

/* adding styles and scripts */
function ag_bondhon_scripts() {
	
	wp_enqueue_style( 'meterialize-css', get_template_directory_uri() . '/assets/css/materialize.min.a.css', array(), wp_get_theme()->get( 'Version' )  );
	wp_enqueue_style( 'bondhon-core-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), wp_get_theme()->get( 'Version' )  );

    wp_enqueue_style( 'bondhon-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' )  );

    wp_enqueue_script( 'materialize-js', get_template_directory_uri() . '/assets/js/materialize.min.js', array(),  wp_get_theme()->get( 'Version' )  , true );
    wp_enqueue_script( 'zenscroll', get_template_directory_uri() . '/assets/js/zenscroll-min.js', array(),  wp_get_theme()->get( 'Version' )  , true );
    wp_enqueue_script( 'bondhon-init', get_template_directory_uri() . '/assets/js/init.js', array(),  wp_get_theme()->get( 'Version' )  , true );
}
add_action( 'wp_enqueue_scripts', 'ag_bondhon_scripts' );


if ( ! function_exists( 'ag_bondhon_setup' ) ) :

	function ag_bondhon_setup() {

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		/*
		//navigation
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'bondhon' ),
				'footer' => __( 'Footer Menu', 'bondhon' )
			)
		);
		*/

	}

endif;
add_action( 'after_setup_theme', 'ag_bondhon_setup' );

/**
* submitinhg form.
*/
require get_template_directory() . '/inc/form-submit.php';



/**
*creating table in db
*/
add_action("after_switch_theme", "bondhon_create_extra_table");

function bondhon_create_extra_table(){
    global $wpdb;

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

    $table_name = $wpdb->prefix . "form_data";

    $sql = "CREATE TABLE $table_name (
      id int(10) unsigned NOT NULL AUTO_INCREMENT,
      full_name varchar(255) NOT NULL,
      s_email varchar(255) NOT NULL,
      s_message text NOT NULL,
      PRIMARY KEY  (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

    dbDelta( $sql );
}


/**
* Customizer additions.
*/
require get_template_directory() . '/inc/plugins/kirki/kirki.php';

require get_template_directory() . '/inc/customizer.php';


require get_template_directory() . '/inc/admin-menu.php';
