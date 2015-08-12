<?php get_header("gallery"); ?>

    <section id="content" class="gallery"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h2>Nominados</h2>
      </div>
          <?php query_posts(array("post_type" => "nominations","posts_per_page" => -1)); ?>
            <?php while (have_posts()): ?>
            <?php the_post(); ?>
      <div class="grid_4">
        <div class="box">
          <a href="<?= pk_thumbnail(get_the_ID()); ?>" class="gall_item"><img src="<?= pk_thumbnail(get_the_ID()); ?>" alt=""><span></span></a>
          <div class="box_bot">
            <div class="box_bot_title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </div>
            <p><?php the_content(''); ?></p>
       
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>