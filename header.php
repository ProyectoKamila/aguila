<!DOCTYPE html>
<html lang="es">

<!-- Mirrored from templates.websitetemplatesonline.com/Free-HTML5-Photography-Theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2015 03:37:39 GMT -->
<head>
<title>Aguila de Oro</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/contact-form.css">
<link href='<?php bloginfo('stylesheet_url'); ?>' rel='stylesheet' type='text/css'> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script>
     var bloginfo = "<?php bloginfo('template_url'); ?>"+"/";
    //console.log(bloginfo);
</script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-migrate-1.1.1.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script> 

<script src="<?php bloginfo('template_url'); ?>/js/superfish.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.equalheights.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.mobilemenu.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/tmStickUp.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.ui.totop.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.shuffle-images.js"></script>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
    $('.gallery .gall_item').touchTouch();
 }); 

 $(document).ready(function(){
     
       var select = $('.stoy').data('url');
       //console.log($('.stoy').data('url'));
            switch (select) {
                case 'index':
                    console.log('index');
                    $('#index').addClass('current');
                    break;
                    
                case 'about':
                    console.log('about');
                    $('#about').addClass('current');
                    break;
                    
                case 'gallery':
                    console.log('gallery');
                    $('#gallery').addClass('current');
                    break;
                    
                case 'contacts':
                    console.log('contacts');
                    $('#contacts').addClass('current');
                    break;
            }
       $(".shuffle-me").shuffleImages({
         target: ".images > img"
       });
       
    });

</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>

<body class="page1" id="top">
<!--==============================
              header
=================================-->

<header>
    <?php query_posts(array("post_type" => "banner","posts_per_page" => 1)); ?>
            <?php while (have_posts()) { ?>
            <?php the_post(); ?>
  <div class="header_top" style="background: url(<?= pk_thumbnail(get_the_ID()); ?>) center 0 no-repeat;">
    <div class="container">
      <div class="row">
        <div class="grid_12">

  <div class="imags">
                 <img src="<?php bloginfo('template_url'); ?>/images/logito.png" alt="">
                </div> 

          <h1><a href="#"><?php the_title(); ?> <br>  </a></h1>
          <span style="max-width: 300px;display: block;">
           <?= get_field('slogan'); ?>
          </span> 
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
    <div class="container">
      <div class="row">
        <div class="grid_12 ">
          <h1 class="logo">
            <a href="<?= home_url("/"); ?>">

          Aguila de Oro
            </a>
          </h1>
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li id="#index"><a href="<?= home_url("/"); ?>">Inicio</a></li>
               <li id="#about"><a href="<?= home_url("about"); ?>">Nosotros</a></li>
               <li id="#about"><a href="<?= home_url("nominations"); ?>">Nominados</a></li>
               <li id="#gallery"><a href="<?= home_url("gallery"); ?>">Galería</a></li>
               <li id="#contacts"><a href="<?= home_url("contacts"); ?>">Contactos</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>       
         <div class="clear"></div>  
        </div>
     </div> 
    </div> 
  </section>
</header>