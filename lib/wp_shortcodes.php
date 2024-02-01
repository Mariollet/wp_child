<?php

add_shortcode("wp_qrcode", "wpQrcode"); // [wp_qrcode]
function wpQrcode($params)
{
  ob_start();
  include __DIR__ . '/../templates/front/shortcodes/qrcode.php';
  $content = ob_get_contents();
  ob_end_clean();

  return $content;
}
