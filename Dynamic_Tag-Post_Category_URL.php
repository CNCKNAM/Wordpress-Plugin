<?php
/**
 * Plugin Name: Post_Category_Dynamic_Tag
*/

class Elementor_Post_Category_Tag extends \Elementor\Core\DynamicTags\Tag {
    public function get_name() {
        return 'related-post-category-url';
    }

    public function get_title() {
        return __( 'Related Post Category URL', 'plugin-name' );
    }

    public function get_group() {
        return 'post';
    }

    public function get_categories() {
        return [ \Elementor\Modules\DynamicTags\Module::URL_CATEGORY ];
    }

    protected function register_controls() {}

    public function render() {
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            $category = $categories[0];
            // Get the URL of the first category
            $category_link = get_category_link( $category->term_id );
            // Output the category link
            echo esc_url( $category_link );
        }
    }
}

add_action( 'elementor/dynamic_tags/register', function( $dynamic_tags ) {
    $dynamic_tags->register( new \Elementor_Post_Category_Tag() );
} );
