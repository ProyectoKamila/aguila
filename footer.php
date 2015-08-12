<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12"> 
        <h2>Contactos</h2>
        <?php query_posts(array("post_type" => "page", "pagename" =>"contacts")); ?>
<?php have_posts(); ?>
            <?php the_post(); ?>
        <div class="footer_phone"> <?php if(get_field('telefono')){ echo get_field('telefono'); } ?></div>
        <a href="mailto:<?php if(get_field('email')){ echo get_field('email'); } ?>" class="footer_mail"><?php if(get_field('email')){ echo get_field('email'); } ?></a>
        <div class="sub-copy">Diseñado por  <a href="http://www.proyectokamila.com/" rel="nofollow">Proyecto Kamila</a></div>
		<div class="sub-copy"> © 2015 Aguila de Oro <a href="http://www.aguiladeoro.com/" target="_blank"></a></div>
      </div>
    </div>

  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>

</html>
