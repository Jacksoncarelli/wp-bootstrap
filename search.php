<?php get_header(); ?>



      <!--search-->
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/category.css">
			<div class="container">
					<div class="category-blog">
							<div  class="col-md-2"></div>
											<div  class="col-md-7 col-centered">
									
      						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

								<a class="text-center" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?></a>
								<ul>
								   	<li><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> </li>
								    <br>
										<li><span> <?php the_date(); ?> </span></li>
										<li><?php the_excerpt(); ?></li>
										<li style="list-style-type: none;"><hr style="height:1px; border:none; color:#000000; background-color:#000; margin-top: 10px; margin-bottom: 12px;"/></li>
								</ul>
								<!-- <div class="link"><a class="acessar-post-blog" href="<?php the_permalink(); ?>">ACESSAR</a></div> -->
							<?php endwhile; else: ?>
							<p>Desculpe, nenhum post corresponde aos seus critérios.</p>
							<?php endif; ?>
								</div>

  </div>

</div>
<!--/fim search-->

<?php get_footer(); ?>
