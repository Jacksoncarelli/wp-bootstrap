<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/single-portifolio.css">

  <div class="container">
      <div align="center" class="col-md-12 col-lg-12">
          <div class="conteudo-blog">
              <?php
          if ( have_posts() ) {
            while (have_posts() ) {
              the_post();
          ?>

                  <h2>
                      <?php the_title(); ?>
                  </h2>
                  <?php the_date(); ?>
                  <br><br>

                  <?php the_content(); ?>
          </div>

          <?php
            }
          }
          ?>

      </div>
  </div>
</div>


<?php get_footer(); ?>
