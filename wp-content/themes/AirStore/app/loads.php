<?php
//require get_parent_theme_file_path( '/app/cpt-ui-function.php' );

// load custome post type
require get_template_directory() . '/app/includes/function/scripts.php';

//load hook
require get_template_directory() . '/app/includes/hook/action.php' ;
require get_template_directory() . '/app/includes/hook/filter.php' ;

// load custome post type
require get_template_directory() . '/app/cpt/cpt.php' ;

// load carbonfield [ meta, option, block ]
require get_template_directory() . '/app/carbonfield/crb.php' ;
