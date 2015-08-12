<?php include('library/main.php');

function theme_custom_types() {
    /*
    add_custom_post_type(array(
        'type' => 'nosotros',
        'plural' => 'Nosotro'
    ));
    add_custom_taxonomy(array(
        'name' => 'categoria-nosotros',
        'singular' => 'nosotro',
        'genero' => 'f',
        'post_type' => 'nosotros',
        'hierarchical' => true
    ));
    */
    add_custom_post_type(array(
        'type' => 'banner',
        'plural' => 'banner',
        'genero' => 'm',
        'supports' => array('title','thumbnail')
    ));
    add_custom_post_type(array(
        'type' => 'evento',
        'plural' => 'eventos',
        'genero' => 'm'
    ));
    add_custom_post_type(array(
        'type' => 'gallery',
        'plural' => 'galeria',
        'genero' => 'f'
    ));
    add_custom_post_type(array(
        'type' => 'nominations',
        'plural' => 'Nominados',
        'genero' => 'f'
    ));
    
}

function grid_8($pag){ ?>
<?php query_posts(array("post_type" => "evento","posts_per_page" => 1,'paged' => $pag)); ?>
            <?php while (have_posts()): ?>
            <?php the_post(); ?>
            <?php //echo do_shortcode(get_the_content()); ?>
            <?php //debug(get_post_gallery_images()); ?>
            <?php //debug(get_post_galleries_images()); ?>
    <div class="grid_8 <?= $pag?>">
      <div data-si-mousemove-trigger="100"  class="shuffle-me offset__1">
        <a href="<?php the_permalink(); ?>" class="info" target="_blank"></a>
        <div class="images">
          <?php $gallerys = get_post_gallery_images(); 
          foreach($gallerys as $urlg){ ?>
            <img src="<?= $urlg; ?>">
          <?php } ?>  
        </div>
      </div>
    </div>
     <?php endwhile; ?>
<?php }

function grid_4($pag, $class){ ?>
<?php query_posts(array("post_type" => "evento","posts_per_page" => 1,'paged' => $pag)); ?>
            <?php while (have_posts()): ?>
            <?php the_post(); ?>
            <?php //echo do_shortcode(get_the_content()); ?>
            <?php //debug(get_post_gallery_images()); ?>
            <?php //debug(get_post_galleries_images()); ?>
    <div data-si-mousemove-trigger="100" class="shuffle-me <?=$class; ?> <?= $pag?>">
        <a href="<?php the_permalink(); ?>" class="info" target="_blank"></a>
        <div class="images">
          <?php $gallerys = get_post_gallery_images(); 
          foreach($gallerys as $urlg){ ?>
            <img src="<?= $urlg; ?>">
          <?php } ?>  
        </div>
      </div>
     <?php endwhile; ?>
<?php }

