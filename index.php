<?php get_header(); ?>
<!--=====================
          Content
======================-->
<div class="stoy" data-url="index"></div>
<section id="content"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h2 class="ta__center">Próximos Eventos</h2>
        <div class="shuffle-group">
          <div class="row">
            <?= grid_8(6); ?>
            <?php wp_reset_query(); ?>
            <div class="grid_4">
              <?= grid_4(5,''); ?>
              <?php wp_reset_query(); ?>
              <?= grid_4(4,'offset__1'); ?>
              <?php wp_reset_query(); ?>
            </div>
            <div class="clear"></div>
              
              
            <?php wp_reset_query(); ?>
            <div class="grid_4">
              <?= grid_4(3,''); ?>
              <?php wp_reset_query(); ?>
              <?= grid_4(2,'offset__1'); ?>
              <?php wp_reset_query(); ?>
            </div>
              <?= grid_8(1); ?>
              
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="sep-1"></div>
  <div class="container">
    <div class="row">
      <div class="grid_8">
        <h3>¿Por qué Patrocinar Aguila de Oro?</h3>
        <?php query_posts(array("post_type" => "page", "pagename" =>"informacion-extra-del-home")); ?>
            <?php have_posts(); ?>
            <?php the_post(); ?>
        <?php the_content(); ?>
            <?php wp_reset_query(); ?>
      </div>
      <div class="grid_4">
        <h3>Síguenos</h3>
        <ul class="socials">
          <?php query_posts(array("post_type" => "page", "pagename" =>"contacts")); ?>
            <?php have_posts(); ?>
            <?php the_post(); ?>
          <li>
            <div class="fa fa-facebook"></div>
            <a href="<?php if(get_field('facebook')){ echo get_field('facebook'); } ?>" target="_blank">Facebook</a>
          </li>
          <li>
            <div class="fa fa-twitter"></div>
            <a href="<?php if(get_field('twitter')){ echo get_field('twitter'); } ?>" target="_blank">Twitter</a>
          </li>
          <li>
            <div class="fa fa-google-plus"></div>
            <a href="<?php if(get_field('google')){ echo get_field('google'); } ?>" target="_blank">Google+</a>
          </li>
          <li>
            <div class="fa fa-youtube"></div>
            <a href="<?php if(get_field('youtube')){ echo get_field('youtube'); } ?>" target="_blank">YouTube</a>
          </li>
            <?php wp_reset_query(); ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="sep-1"></div>
  <div class="container">
    <div class="row">
      <div class="grid_7">
        <h3 class="head__1">Patrocinantes</h3>
        <?php query_posts(array("post_type" => "page", "pagename" =>"informacion-extra-del-home")); ?>
            <?php have_posts(); ?>
            <?php the_post(); ?>
            <?php the_field('patrocinantes'); ?>
            <?php wp_reset_query(); ?>
      </div>
      <div class="grid_4 preffix_1">
        <h3 class="head__1">Nominaciones</h3>
        <blockquote class="bq_1">
          <?php query_posts(array("post_type" => "nominations","posts_per_page" => 1)); ?>
            <?php while (have_posts()): ?>
            <?php the_post(); ?>
            <a href="<?php the_permalink(); ?>">
          <img src="<?= pk_thumbnail(get_the_ID()); ?>" alt="" class="img_inner fleft noresize">
          </a>
          <div class="extra_wrapper">
            <div class="bq_title"><?php the_title(); ?></div>
          </div>
          <div class="clear"></div>
          <?php the_content(); ?>
     <?php endwhile; ?>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<?php get_footer();

