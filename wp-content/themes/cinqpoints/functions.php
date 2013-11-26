<?
  add_action('wp_ajax_nopriv_woocommerce_update_order_review', 'localize_ajax_response', 8);
  add_action('wp_ajax_woocommerce_update_order_review', 'localize_ajax_response', 8);

  add_action('wp_ajax_nopriv_woocommerce_get_refreshed_fragments', 'localize_ajax_response', 8);
  add_action('wp_ajax_woocommerce_get_refreshed_fragments', 'localize_ajax_response', 8);

  add_action('wp_ajax_nopriv_woocommerce_add_to_cart', 'localize_ajax_response', 8);
  add_action('wp_ajax_woocommerce_add_to_cart', 'localize_ajax_response', 8);


  add_action('wp_ajax_nopriv_woocommerce-checkout', 'localize_ajax_response', 8);
  add_action('wp_ajax_woocommerce-checkout', 'localize_ajax_response', 8);

  function localize_ajax_response() {
    global $sitepress, $woocommerce;
    $sitepress->switch_lang($_REQUEST['lang'], true);
    load_theme_textdomain('swiftframework', SF_TEMPLATE_PATH.'/language');
    unload_textdomain('woocommerce');
    $woocommerce->load_plugin_textdomain();
  }

  wp_register_script('fix-search-form', get_stylesheet_directory_uri() . '/fix-search-form.js' , array('jquery'), '1.0');
  wp_enqueue_script('fix-search-form');
  $local_variables = array('home_url' => icl_get_home_url());
  wp_localize_script('fix-search-form', 'vars', $local_variables);
?>