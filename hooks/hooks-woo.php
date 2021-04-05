// Before content
add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
add_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
add_action( 'woocommerce_before_single_product', 'woocommerce_output_all_notices', 10 );
  
// Left column
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
add_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
 
// Right column
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
 
// Right column - add to cart
do_action( 'woocommerce_before_add_to_cart_form' );
do_action( 'woocommerce_before_add_to_cart_button' );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
 
add_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30 );
add_action( 'woocommerce_grouped_add_to_cart', 'woocommerce_grouped_add_to_cart', 30 );
add_action( 'woocommerce_variable_add_to_cart', 'woocommerce_variable_add_to_cart', 30 );
add_action( 'woocommerce_external_add_to_cart', 'woocommerce_external_add_to_cart', 30 );
add_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
add_action( 'woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20 );
do_action( 'woocommerce_before_quantity_input_field' );
do_action( 'woocommerce_after_quantity_input_field' );
do_action( 'woocommerce_after_add_to_cart_button' );
do_action( 'woocommerce_after_add_to_cart_form' );
 
// Right column - meta
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
do_action( 'woocommerce_product_meta_start' );
do_action( 'woocommerce_product_meta_end' );
 
// Right column - sharing
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
do_action( 'woocommerce_share' );
 
// Tabs, upsells and related products
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_product_additional_information', 'wc_display_product_attributes', 10 );
do_action( 'woocommerce_product_after_tabs' );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
 
// Reviews
add_action( 'woocommerce_review_before', 'woocommerce_review_display_gravatar', 10 );
add_action( 'woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating', 10 );
add_action( 'woocommerce_review_meta', 'woocommerce_review_display_meta', 10 );
do_action( 'woocommerce_review_before_comment_text', $comment );
add_action( 'woocommerce_review_comment_text', 'woocommerce_review_display_comment_text', 10 );
do_action( 'woocommerce_review_after_comment_text', $comment );
 
// After content
do_action( 'woocommerce_after_single_product' );
do_action( 'woocommerce_after_main_content' );


// define the woocommerce_before_template_part callback 
function action_woocommerce_before_template_part() {
  if(is_front_page()){
    echo do_shortcode('[smartslider3 slider="2"]');

  }
}; 
       
// add the action 
add_action( 'storefront_before_content', 'action_woocommerce_before_template_part', 10, 4 );
