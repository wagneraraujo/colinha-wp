<?php
//thumbnail  
add_theme_support( 'post-thumbnails' );
add_image_size( 'sidebar-thumb', 120, 120, true );

// Ocultando a Admin Bar
add_filter('show_admin_bar', '__return_false');


//menus
function register_my_menus() {
  register_nav_menus(
    array(
      'menuprincipal' => __( 'menuprincipal' ),
      'menuprincipal' => __( 'menuprincipal' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//chamar menu corretamente dentro do layout
<?php wp_nav_menu( array(
	'theme_location' => 'menuprincipal',
	'menu_class' => 'navigation',
	'title_li' => '<div class="l"></div>',
	'link_before' => '<span class="l">',
	'link_after' => '</span>'
) ); ?>