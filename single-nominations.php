<?php get_header(); ?>
<?php wp_reset_query(); ?>
    <section id="content" class="gallery"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h2>Nominados</h2>
        <img src="<?= pk_thumbnail(get_the_ID()); ?>"></img>
        <br>
        <?php the_title(); ?>
        <?php the_content(); ?>
        
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
