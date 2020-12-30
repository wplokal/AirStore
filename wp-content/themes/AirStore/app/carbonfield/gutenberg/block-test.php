<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;




add_action( 'carbon_fields_register_fields', 'cf_block_test' );

    /**
     * https://github.com/htmlburger/carbon-fields/issues/743
     * hack core
     */
    wp_register_style(
        'block-test',
        get_stylesheet_directory_uri() . '/assets/css/block/block-test.css'
    );

    function cf_block_test(){
        Block::make( __( 'My Shiny Gutenberg Block' ) )
        ->add_fields( array(
            Field::make( 'text', 'heading', __( 'Block Heading' ) ),
            Field::make( 'image', 'image', __( 'Block Image' ) ),
            Field::make( 'rich_text', 'content', __( 'Block Content' ) ),
        ) )
        ->set_inner_blocks( true )
        ->set_inner_blocks_position( 'below' )
        ->set_inner_blocks_template( array(
            array( 'core/paragraph', array(
                'placeholder' => 'Add a root-level paragraph',
            ) ),
            array( 'core/columns', array(), array(
                array( 'core/column', array(), array(
                    array( 'core/image', array() ),
                ) ),
                array( 'core/column', array(), array(
                    array( 'core/paragraph', array(
                        'placeholder' => 'Add a inner paragraph'
                    ) ),
                ) ),
            ) )
        ))
        ->set_category( 'custom-category', __( 'Custom Category' ), 'smiley' )
        ->set_icon( 'heart' )
        ->set_keywords( [ __( 'block' ), __( 'image' ), __( 'content' ) ] )
        ->set_editor_style( 'block-test' )
        ->set_style( 'block-test' )
        ->set_description( __( 'A simple block consisting of a heading, an image and a text content.' ) )
        ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
            ?>

            <div class="block">
                <div class="block__heading">
                    <h1><?php echo esc_html( $fields['heading'] ); ?></h1>
                </div><!-- /.block__heading -->

                <div class="block__image">
                    <?php echo wp_get_attachment_image( $fields['image'], 'full' ); ?>
                </div><!-- /.block__image -->

                <div class="block__content">
                    <?php echo apply_filters( 'the_content', $fields['content'] ); ?>
                </div><!-- /.block__content -->
            </div><!-- /.block -->

            <?php
        } );

}
