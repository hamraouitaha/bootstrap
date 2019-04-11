<?php
function create_post_your_post(){
 register_post_type('your_post',
 array(
 'labels'=>array(
 'name'=>__('Your Post'),
 ),
 'public'=>true,
 'hierarchical'=>true,
 'has_archive'=>true,
 'supports'=>array(
 'title',
'editor',
'excerpt',
'thumbnail',
 ),
 'taxonomies'=>array(
 'post_tag',
'category',
 )
 )
);
 register_taxonomy_for_object_type('category','your_post');
 register_taxonomy_for_object_type('post_tag','your_post');
}
add_action('init','create_post_your_post');
function create_my_custom_post() {
register_post_type( 'my-custom-post',
array(
'labels' => array(
'name' => __( 'My Custom Post' ),
'singular_name' => __( 'My Custom Post' ),
),
'public' => true,
'has_archive' => true,
'supports' => array(
'title','editor',
'thumbnail',
 'custom-fields'
)
));
}
add_action( 'init', 'create_my_custom_post' );