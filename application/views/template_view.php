<!DOCTYPE html>
<html>
<head>
  <title><?=$param['title'];?></title>
  <script type="text/javascript" src="/js/common.js?1"></script>
  <link rel="stylesheet" type="text/css" href="/css/common.css?1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <?php
    if(!empty($param['css']) || is_array($param['css'])) {
      foreach ($param['css'] as $v) {
        echo '<link rel="stylesheet" type="text/css" href="/css/'.$v.'.css">';
      }
    }
    if(!empty($param['js']) || is_array($param['js'])) {
      foreach ($param['js'] as $v) {
        echo '<script type="text/javascript" src="/js/'.$v.'.js"></script>';
      }
    } 
  ?>
</head>
<body>

<div id="top_msg"></div>

<div id="wrap1">

  <div class="head">
    <a class="head_link" href="/">Юрий Гагарин</a>
    <div class="float_r">
      <a class="head_link" href="/quotes">Цитаты</a>
      <a class="head_link" href="/albums">Фото</a>
      <a class="head_link" href="/questbook">Гостевая книга</a>
    </div>
  </div>

  <div class="content">
    <?php
      include SITE_ROOT.'application/views/'.$content_view;
    ?>
  </div>
  
  <div class="clear"></div>

</div>

<div class="footer">
  <a class="footer_link" href="/about">О сайте</a>
  <a class="footer_link" href="/quotes">Цитаты</a>
  <a class="footer_link" href="/albums">Фото</a>
  <div class="footer_link">Космонавт &copy; 2016</div>
</div>

</body>
</html>