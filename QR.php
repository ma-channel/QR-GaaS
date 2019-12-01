<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>[HTML5] QRcode Reader</title>
    <style>
      #contents{display:flex; width:650px;}
      #camera, #picture, #result{justify-content:center; margin:5px}
      </picture>
    </style>
  </head>
  <body>
    <?php
      $keyword = $_GET["name"];
      $keywordurl = urlencode($keyword);
      $url = "http://chart.apis.google.com/chart?chs=200x200&cht=qr&chl=$keywordurl";
    ?>
    <img width="300" height="300" alt="QR" src="<?php echo $url; ?>">
  </body>
</html>