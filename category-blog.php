<?php get_header(); ?>


<div class="col-md-4 navbar navbar-default pull-right">
<?php get_search_form(); ?>
</div>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/category.css">
<div class="container">
		<div class="category-blog">
					<br>
					<?php $args = array(
						'posts_per_page' => 3,
						'paged' => get_query_var('paged'),
						'post_type'=>'blog');
						$loop = new WP_Query($args);
						?>
							<?php $cont =1; if($loop -> have_posts()) : while ($loop -> have_posts()) : $loop -> 	the_post(); ?>
<div  class="col-md-2"></div>
								<div  class="col-md-7 col-centered">
								<a class="text-center" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?></a>
								<ul>
								   	<li><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> </li>
								    <br>
										<li><span> <?php the_date(); ?> </span></li>
										<li><?php the_excerpt(); ?></li>
										<li style="list-style-type: none;"><hr style="height:1px; border:none; color:#000000; background-color:#000; margin-top: 10px; margin-bottom: 12px;"/></li>
								</ul>
								<!-- <div class="link"><a class="acessar-post-blog" href="<?php the_permalink(); ?>">ACESSAR</a></div> -->
								</div>
								<?php endwhile; endif; ?>
<?php wordpress_pagination(); ?>

  </div>
</div>

<?php get_footer(); ?>
