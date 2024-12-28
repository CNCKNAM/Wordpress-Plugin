<?php
/*
    Plugin Name: Product Category Main Description Dynamic Tag
*/

class Elementor_Product_Category_Main_Description extends \Elementor\Core\DynamicTags\Tag {


public function get_name() {

return 'product-category-main-description';

}

public function get_title() {

return __( 'Product Category Main Description', 'plugin-name' );

}

public function get_group() {

return 'post';

}

public function get_categories() {

return [ \Elementor\Modules\DynamicTags\Module::TEXT_CATEGORY ];

}

public function render() {

$categories = get_the_terms( get_the_ID(), 'product_cat' );

if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {

$category = reset( $categories );

if ( ! empty( $category->description ) ) {

// Use wpautop to format the description with paragraphs

echo wp_kses_post( wpautop( $category->description ) );

} else {

echo __( 'The selected category has no description.', 'plugin-name' );

}

} else {

echo __( 'No product category found.', 'plugin-name' );

}

}

}

add_action( 'elementor/dynamic_tags/register', function( $dynamic_tags ) {

$dynamic_tags->register( new Elementor_Product_Category_Main_Description() );

} );

