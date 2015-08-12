<?php get_header("gallery"); ?>
<?php wp_reset_query(); ?>

    <section id="content" class="gallery"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h2>Galería</h2>
      </div>
            <?php the_post(); ?>
             <?php $gallerys = get_post_gallery_images(); ?>
      <?php foreach($gallerys as $urlg){ ?>
          <div class="grid_4">
            <div class="box">
              <a href="<?= $urlg; ?>" class="gall_item"><img src="<?= $urlg; ?>" alt=""><span></span></a>
            </div>
          </div>
          <?php } ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
