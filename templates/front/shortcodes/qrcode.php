<?php
include_once __DIR__ . '/../../../service/phpqrcode.php';

wp_enqueue_style('wp_qrcode_css', get_stylesheet_directory_uri() . '/assets/css/shortcodes/qrcode.css');

?>

<section>

  <h1>Shortcode QrCode</h1>

  <?php
  // get url of the current page
  $url = get_permalink();

  // we need to generate filename somehow, 
  // with md5 or with database ID used to obtains $codeContents...
  $fileName = 'qr_' . md5($url) . '.png';

  $pngAbsoluteFilePath = __DIR__ . "/../../../public/qrcode/" . $fileName;
  $urlRelativeFilePath = "/../../../wp_/wp_child/wp-content/themes/child/public/qrcode/" . $fileName;

  // generating
  if (!file_exists($pngAbsoluteFilePath)) {
    QRcode::png($url, $pngAbsoluteFilePath);
    echo '<p>File generated!</p>';
    echo '<hr />';
  } else {
    echo '<p>File already generated! We can use this cached file to speed up site on common codes!</p>';
    echo '<hr />';
  }

  echo '<p>Server PNG File: ' . $pngAbsoluteFilePath . '</p>';
  echo '<hr />';

  // displaying
  echo '<img src="' . $urlRelativeFilePath . '" />';
  ?>

</section>