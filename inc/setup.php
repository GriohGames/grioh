<?php
add_action('after_setup_theme', function () {
  load_theme_textdomain('grioh', get_template_directory() . '/languages');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('responsive-embeds');
  add_theme_support('automatic-feed-links');
  add_theme_support('html5', ['search-form', 'navigation-widgets']);
  add_theme_support('appearance-tools');
  add_theme_support('woocommerce');

  global $content_width;
  if (!isset($content_width)) $content_width = 1920;

  register_nav_menus([
    'main-menu'   => esc_html__('Menu principal', 'grioh'),
    'footer-menu' => esc_html__('Menu do rodapé', 'grioh'),
    'footer-credits' => esc_html__('Menu dos créditos', 'grioh'),
  ]);

  add_theme_support('custom-logo', [
    'height'      => 48,
    'width'       => 160,
    'flex-height' => true,
    'flex-width'  => true,
  ]);
});
