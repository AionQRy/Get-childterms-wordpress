<?php 
$cat_id = $settings['category'];
$taxonomy_name = 'product_cat';
$termchildren = get_term_children( $cat_id, $taxonomy_name );
 
echo '<ul>';
foreach ( $termchildren as $child ) {
    $term = get_term_by( 'id', $child, $taxonomy_name );
    echo '<li><a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></li>';
}
echo '</ul>';
?>