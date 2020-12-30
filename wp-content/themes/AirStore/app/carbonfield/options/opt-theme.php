<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	// Default options page
    $basic_options_container = Container::make( 'theme_options', __( 'Events Config' ) )
    ->set_page_parent( 'edit.php?post_type=event' )
	->add_tab( __( 'Profile' ), array(
        Field::make( 'text', 'crb_first_name', __( 'First Name' ) ),
        Field::make( 'text', 'crb_last_name', __( 'Last Name' ) ),
        Field::make( 'text', 'crb_position', __( 'Position' ) ),
    ) )
    ->add_tab( __( 'Notification' ), array(
        Field::make( 'text', 'crb_email', __( 'Notification Email' ) ),
        Field::make( 'text', 'crb_phone', __( 'Phone Number' ) ),
    ) )
    ->add_tab( __( 'Script' ), array(
        Field::make( 'header_scripts', 'crb_header_script', __( 'Header Script' ) ),
		Field::make( 'footer_scripts', 'crb_footer_script', __( 'Footer Script' ) ),
    ) );


}


add_action( 'carbon_fields_register_fields', 'library_options' );
function library_options() {
	// Default options page
    $basic_options_container = Container::make( 'theme_options', __( 'Library Config' ) )
    ->set_page_parent( 'edit.php?post_type=lib' )
	->add_tab( __( 'Featured Library EN' ), array(
        Field::make( 'association', 'library_option', __( 'Library option' ) )
                    ->set_max( 2 )
                    ->set_types( array(
                        array(
                            'type'      => 'post',
                            'post_type' => 'lib',
                        )
                    ) )
    ) )
    ->add_tab( __( 'Featured Library ES' ), array(
        Field::make( 'association', 'library_option_es', __( 'Library option es' ) )
                    ->set_max( 2 )
                    ->set_types( array(
                        array(
                            'type'      => 'post',
                            'post_type' => 'lib',
                        )
                    ) )
    ) )
    ->add_tab( __( 'Featured Library FR' ), array(
        Field::make( 'association', 'library_option_fr', __( 'Library option fr' ) )
                    ->set_max( 2 )
                    ->set_types( array(
                        array(
                            'type'      => 'post',
                            'post_type' => 'lib',
                        )
                    ) )
    ) )
    ->add_tab( __( 'Featured Library ID' ), array(
        Field::make( 'association', 'library_option_id', __( 'Library option id' ) )
                    ->set_max( 2 )
                    ->set_types( array(
                        array(
                            'type'      => 'post',
                            'post_type' => 'lib',
                        )
                    ) )
    ) )
    ;

}


add_action( 'carbon_fields_register_fields', 'cifor_options' );
function cifor_options() {
	// Default options page
    $basic_options_container = Container::make( 'theme_options', __( 'Web Option' ) )
    //->set_page_parent( 'edit.php?post_type=library' )

	->add_tab( __( 'General' ), array(
        Field::make( 'text', 'crb_logo_top', __( 'Logo top' ) ),
        Field::make( 'text', 'crb_logo_small', __( 'Logo small' ) ),
        Field::make( 'text', 'crb_logo_footer', __( 'Logo footer' ) ),
    ) )
    ->add_tab( __( 'Module CPT' ), array(
        Field::make( 'checkbox', 'crb_module_events', __( 'Module Events' ) )->set_option_value( 'yes' ),
        Field::make( 'checkbox', 'crb_module_features', __( 'Module Features' ) )->set_option_value( 'yes' ),
        Field::make( 'checkbox', 'crb_module_lib_feature', __( 'Module Library Feature' ) )->set_option_value( 'yes' ),
        /*
        Field::make( 'checkbox', 'crb_module_staffs', __( 'Module Staffs' ) )->set_option_value( 'yes' ),
        Field::make( 'checkbox', 'crb_module_donors', __( 'Module Donors' ) )->set_option_value( 'yes' ),
        Field::make( 'checkbox', 'crb_module_bot', __( 'Module BOT' ) )->set_option_value( 'yes' ),
        Field::make( 'checkbox', 'crb_module_careers', __( 'Module Careers' ) )->set_option_value( 'yes' ),
        */
        Field::make( 'checkbox', 'crb_module_project_site', __( 'Module Project Site' ) )->set_option_value( 'yes' ),
        Field::make( 'checkbox', 'crb_module_cta', __( 'Module CTA' ) )->set_option_value( 'yes' ),
        Field::make( 'checkbox', 'crb_module_team', __( 'Module Team' ) )->set_option_value( 'yes' ),
        Field::make( 'checkbox', 'crb_module_topic', __( 'Module Topic' ) )->set_option_value( 'yes' ),
        Field::make( 'checkbox', 'crb_module_corporate_news', __( 'Module Corporate news' ) )->set_option_value( 'yes' ),
        Field::make( 'checkbox', 'crb_module_press_release', __( 'Module Press release' ) )->set_option_value( 'yes' ),
    ) )
    ->add_tab( __( 'Info' ), array(


        Field::make( 'separator', 'cf_separator_further_info', __( 'Further info' ) ),
        Field::make( 'text', 'cf_info_list_general_title', __( 'General Title' ) ),
        Field::make( 'complex', 'cf_info_list_general', __( 'General' ) )
            ->add_fields( array(
                Field::make( 'text', 'name', __( 'Name' ) ),
                Field::make( 'text', 'title', __( 'Title' ) ),
                Field::make( 'text', 'email', __( 'Email' ) ),
                Field::make( 'image', 'image', __( 'Side Desc' ) ),
            ) )
            ->set_collapsed(true)->set_header_template('<%- name %> - <%- email %>'),
        Field::make( 'text', 'cf_info_list_networking_title', __( 'Networking Title' ) ),
        Field::make( 'complex', 'cf_info_list_networking', __( 'Networking' ) )
            ->add_fields( array(
                Field::make( 'text', 'name', __( 'Name' ) ),
                Field::make( 'text', 'title', __( 'Title' ) ),
                Field::make( 'text', 'email', __( 'Email' ) ),
                Field::make( 'image', 'image', __( 'Side Desc' ) ),
            ) )
            ->set_collapsed(true)->set_header_template('<%- name %> - <%- email %>'),


    ) )

    ->add_tab( __( 'Scripts Header & Footer' ), array(
        Field::make( 'text', 'crb_gtm_subsite', __( 'GTM Code Number' ) )->set_help_text( 'UA-21232205-17' ),
        Field::make( 'header_scripts', 'crb_header_scripts', __( 'Header Scripts' ) ),
        Field::make( 'footer_scripts', 'crb_footer_scripts', __( 'Footer Scripts' ) ),
    ) )

    ->add_tab( __( 'Footer' ), array(
        Field::make( 'text', 'crb_foot_title', __( 'Footer Title' ) ),
        Field::make( 'textarea', 'crb_foot_desc', __( 'Footer Description' ) ),
        Field::make( 'text', 'crb_foot_title_es', __( 'Footer Title ES' ) ),
		Field::make( 'textarea', 'crb_foot_desc_es', __( 'Footer Description ES' ) ),
        Field::make( 'checkbox', 'crb_partner_subsite', __( 'Subsite Partner' ) )->set_option_value( 'yes' )->set_width( 50 ),
        Field::make( 'checkbox', 'crb_partner_mainsite', __( 'Mainsite Partner' ) )->set_option_value( 'yes' )->set_width( 50 ),
        // main partner
        Field::make( 'text', 'crb_foot_partner_title', __( 'Partner Title' ) ),
        Field::make( 'complex', 'crb_partner',' Partners' )
            ->set_layout('tabbed-vertical')
            ->add_fields( array(
                Field::make( 'image', 'image' )->set_value_type( 'url' ),
                Field::make( 'text', 'title' )->set_width( 50 ),
                Field::make( 'text', 'link' )->set_width( 50 ),
            ))->set_header_template( '
            <% if (title) { %>
                <%- title %>
            <% } %>
        ' )->set_conditional_logic( array( 'relation' => 'AND', array('field' => 'crb_partner_subsite','value' => true,)) ),
        // funding partner
        Field::make( 'text', 'crb_foot_partner_title_two', __( 'Funding Partner Title' ) ),
        Field::make( 'complex', 'crb_partner_two',' Funding Partners' )
            ->set_layout('tabbed-vertical')
            ->add_fields( array(
                Field::make( 'image', 'image' )->set_value_type( 'url' ),
                Field::make( 'text', 'title' )->set_width( 50 ),
                Field::make( 'text', 'link' )->set_width( 50 ),
            ))->set_header_template( '
            <% if (title) { %>
                <%- title %>
            <% } %>
        ' )->set_conditional_logic( array( 'relation' => 'AND', array('field' => 'crb_partner_subsite','value' => true,)) )
    ) );


	// Add second options page under 'Basic Options'
	Container::make( 'theme_options', __( 'Social Links' ) )
	->set_page_parent( $basic_options_container ) // reference to a top level container
	->add_fields( array(
		Field::make( 'text', 'crb_fb_link', __( 'Facebook Link' ) ),
		Field::make( 'text', 'crb_tw_link', __( 'Twitter Link' ) ),
		Field::make( 'text', 'crb_ig_link', __( 'Instagram Link' ) ),
		Field::make( 'text', 'crb_in_link', __( 'Linkedin Link' ) ),
    ) );
}



function get_all_cpt_cifor(){
    $args=array(
        'public'                => true,
        'exclude_from_search'   => false,
        '_builtin'              => false
    );

    $output = 'names'; // names or objects, note names is the default
    $operator = 'and'; // 'and' or 'or'
    $post_types = get_post_types($args,$output,$operator);

    $posttypes_array = array();

    foreach ($post_types  as $post_type ) {
        $hide = array('lib','theme','topic','page','moderator','organization','speaker','donor','staff','cta-promotion','bot','slide','video','blog','photo','event','career');
        if (in_array($post_type, $hide)){

        }else{
            $posttypes_array[$post_type] = $post_type;
        }
        $posttypes_array['post'] = 'post';

    }
    return $posttypes_array;
}

function get_all_partner_mainsite(){
    return $data;
}

