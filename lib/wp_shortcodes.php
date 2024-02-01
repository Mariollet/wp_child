<?php

add_shortcode("wp_shortcode_1", "wpShortcode1"); // [wp_shortcode_1]
function wpShortcode1($params)
{
  ob_start();
  include __DIR__ . '/../templates/front/shortcodes/shortcode_1.php';
  $content = ob_get_contents();
  ob_end_clean();

  return $content;
}
