<?php
add_filter( 'get_terms', 'get_subcategory_terms', 10, 3 );
function get_subcategory_terms( $terms, $taxonomies, $args ) {
 $new_terms = array();
 // if a product category and on the shop page
 if ( in_array( 'product_cat', $taxonomies ) && ! is_admin() ) {
 foreach ( $terms as $key => $term ) {
   if( is_object ( $term ) ) {
 if ( ! in_array( $term->slug, array( 'cat_name', 'cat_name', 'cat_name', 'cat_name', 'cat_name' ... ) ) ) {
 $new_terms[] = $term;
 }
 }
 }
 $terms = $new_terms;
 }
 return $terms;
}

 ?>
