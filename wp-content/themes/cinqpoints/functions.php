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
?>