
<!-- saved from url=(0027)http://atomcraft.tk/canvas/ -->
<html lang="en" class="no-js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="shortcut icon" href="File/1.ico"> 
 <script type="text/javascript" src="script/jquery-3.2.1.min.js">
    </script>
    <script type="text/javascript">
      jQuery(document).ready(function($){
        $('.icon-menu').click(function(event){
          $('.sidebar').toggleClass('active');
        });
      });
      </script>
<script type="text/javascript">
 // Clone applications to get a second collection
    var $data = $(".portfolio-area").clone();
    
    //NOTE: Only filter on the main portfolio page, not on the subcategory pages
    $('.portfolio-categ li').click(function(e) {
        $(".filter li").removeClass("active");    
        // Use the last category class as the category to filter by. This means that multiple categories are not supported (yet)
        var filterClass=$(this).attr('class').split(' ').slice(-1)[0];
        
        if (filterClass == 'all') {
            var $filteredData = $data.find('.portfolio-item2');
        } else {
            var $filteredData = $data.find('.portfolio-item2[data-type=' + filterClass + ']');
        }
        $(".portfolio-area").quicksand($filteredData, {
            duration: 600,
            adjustHeight: 'auto'
        }, function () {

                lightboxPhoto();
                        });        
        $(this).addClass("active");             
        return false;
    });
</script>
<script type="text/javascript">
      jQuery("a[rel^='prettyPhoto']").prettyPhoto({
            animationSpeed:'fast',
            slideshow:5000,
            theme:'light_rounded',
            show_title:false,
            overlay_gallery: false
        });
     
    }
</script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3Droom</title>
  <!-- Meta Zone -->
  
  <meta name="description" content="Redclif.">
  <meta name="keywords" content="Redclif.">
  <meta name="robots" content="">
  <meta name="author" content="Redclif">
  <meta name="publisher" content="Redclif">
  <meta name="geo.placename" content="New-York">
  <meta name="geo.region" content="NL">
  <meta name="google" content="notranslate">

  <!-- Viewport -->
  <meta name="viewport" content="initial-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Redclif">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="http://atomcraft.tk/img/favicon.png">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="./3Droom - главная_files/style.css">
  <link rel="stylesheet" type="text/css" href="./css/normalize.css">
  <link rel="stylesheet" type="text/css" href="./css/demo.css">
  <link rel="stylesheet" type="text/css" href="./css/component.css">


  <!-- Font -->
  <link href="./3Droom - главная_files/css" rel="stylesheet" type="text/css">

  <!-- Javascript -->
  <script type="text/javascript" async="" src="./3Droom - главная_files/watch.js.Без названия"></script><script type="text/javascript" src="./3Droom - главная_files/main.js.Без названия"></script>

</head>
  <body>

 <?php 
  require "php/canvas/canvas-About.php";
?>


<!-- pcvector.net -->
<script type="text/javascript" src="http://pcvector.net/templates/pcv/js/pcvector.js"></script>
<!-- /pcvector.net -->

<!-- CANVAS scripts -->
    <script src="./css/TweenLite.min.js.Без названия"></script>
    <script src="./css/EasePack.min.js.Без названия"></script>
    <script src="./css/rAF.js.Без названия"></script>
    <script src="./css/demo-1.js.Без названия"></script>

</body></html>  