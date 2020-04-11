
<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>


<div class="blog-item">
	<a href="<?php the_permalink();?>">
            <?php the_post_thumbnail(); ?> 
				<div class="blog-date"><?=get_the_date(" jS F, Y")?></div>
				<h3><?php the_title(); ?></h3>
				<div class="blog-meta">by <a href=""><?=get_the_author_meta('first_name')?> <?=get_the_author_meta('last_name')?></a> in <a href="">Music</a></div>
				<p>  <?php the_excerpt(); ?> </p>
			</div>
	</a>
 <?php endwhile; else: endif; ?>
