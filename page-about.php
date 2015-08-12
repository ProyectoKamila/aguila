<?php get_header(); ?>
<?php query_posts(array("post_type" => "page", "pagename" =>"about")); ?>
<?php have_posts(); ?>
            <?php the_post(); ?>
            <div class="stoy" data-url="about"></div>
<section id="content"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h2>Historia</h2>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <div class="sep-1 offset__1"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h3>Reconocimientos</h3>
      </div>
      <div class="grid_3">
        <div class="block-1">
          <div class="fa fa-image"></div>
          <div class="block-1_title">Imagen</div><?= get_field('contenido');  ?>
          <br>
       
        </div>
      </div>
      <div class="grid_3">
        <div class="block-1">
          <div class="fa fa-trophy"></div>
          <div class="block-1_title">Premio</div><?= get_field('contenido_p');  ?>
          <br>
         
        </div>
      </div>
      <div class="grid_3">
        <div class="block-1">
          <div class="fa fa-star"></div>
          <div class="block-1_title">Nominación</div><?= get_field('contenido_n');  ?>
          <br>
 
        </div>
      </div>
      <div class="grid_3">
        <div class="block-1">
          <div class="fa fa-camera"></div>
          <div class="block-1_title">Fotografía</div><?= get_field('contenido_f');  ?>
          <br>
         
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();