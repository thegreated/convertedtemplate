<?php get_header(); ?>

<section class="blog-section spad">
		<div class="container">
			<!-- Blog post -->
			   
            <?php get_template_part('archive/section','news'); ?>
            <?php previous_posts_link();?>
        <?php next_posts_link();?>
			<!-- <div class="site-pagination">
				<a href="#" class="active">01.</a>
				<a href="#">02.</a>
				<a href="#">03.</a>
				<a href="#">04.</a>
			</div> -->
		</div>
	</section>



<?php get_footer(); ?>