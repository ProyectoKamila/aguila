<?php get_header(); ?>
<div class="stoy" data-url="contacts"></div>
<?php query_posts(array("post_type" => "page", "pagename" =>"contacts")); ?>
<?php have_posts(); ?>
            <?php the_post(); ?>
            
            <?php //the_field('mapa'); ?>
            <?php //debug(get_field('mapa')); ?>
            
<!--=====================
          Content
======================-->
<section id="content"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h2>Contactos</h2>
        <div class="map">
          <figure class="">
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>-->
            <?php googlemap('location'); ?>
          </figure>
        </div>
      </div>
      <div class="grid_5">
        <h2> Información de contacto </h2>
        <!--<div class="text1 tx__1">Lorem ipsum dolor sit amet, consecteturpiscinger elit um dolor sit amet, consecteturpiscing. 
</div>
        <p>No dude en contactarnos<a href="http://www.aguiladeoro.com/" rel="nofollow" class="color1"><strong>  soporte 24/7.</strong></a></p>
        <p>Si usted tiene alguna pregunta acerca de los <a href="http://blog.aguiladeoro.com/" rel="nofollow" class="color1"> eventos <strong></strong></a>, Complete el formulario <a href="http://www.aguiladeoro.com/" rel="nofollow" class="color1"></a></p>
        Aguila de Oro <br>-->
        <?php the_content(); ?>
        9870 St Vincent Place,<br>
        Glasgow, DC 45 Fr 45.<br>
        Teléfono:  <?php if(get_field('telefono')){ echo get_field('telefono'); } ?><br>
        FAX:  <?php if(get_field('fax')){ echo get_field('fax'); } ?><br>
        E-mail: <a href="mailto:<?php if(get_field('email')){ echo get_field('email'); } ?>"><?php if(get_field('email')){ echo get_field('email'); } ?></a>
      </div>
      <div class="grid_6 preffix_1">
        <h2>Forma de contacto </h2>
              <form id="contact-form">
                  <div class="contact-form-loader"></div>
                  <fieldset>
                    <label class="nombre">
                      <input type="text" name="nombre" placeholder="Nombre:" value="" data-constraints="@Required @JustLetters"  />
                      <span class="empty-message">*Este campo es obligatorio.</span>
                      <span class="error-message">*Esto no es un nombre válido.</span>
                    </label>
                   
                    <label class="email">
                      <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
                      <span class="empty-message">*Este campo es obligatorio.</span>
                      <span class="error-message">*Esto no es una dirección de correo electrónico válida.</span>
                    </label>
                    <label class="phone">
                      <input type="text" name="phone" placeholder="Teléfono:" value="" data-constraints="@Required @JustNumbers" />
                      <span class="empty-message">*Este campo es obligatorio.</span>
                      <span class="error-message">*Este no es un número válido.</span>
                    </label>
                   
                    <label class="message">
                      <textarea name="message" placeholder="Mensaje:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                      <span class="empty-message">*Este campo es obligatorio.</span>
                      <span class="error-message">*Este mensaje es muy corto</span>
                    </label>
                    <div class="ta__right">
                      <a href="#" class="btn" data-type="reset">Limpiar</a>
                      <a href="#" class="btn" data-type="submit">Enviar</a>
                    </div>
                  </fieldset> 
                  <div class="modal fade response-message">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                          You message has been sent! We will be in touch soon.
                        </div>      
                      </div>
                    </div>
                  </div>
                </form>   
      </div>
    </div>
  </div>
</section>
            

            <?php get_footer(); ?>
            
           