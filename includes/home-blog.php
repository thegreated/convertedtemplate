

<section class="product">
    <div class="container">
    <h1 class="home-heading">Blog</h1>
    <div class="row mb-2">
<?php
	
    $latest_blog_posts = new WP_Query( array( 'category_name' => 'Blog' ) );

    if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>

        <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">  <strong class="d-inline-block mb-2 text-primary"><?php the_title(); ?></strong> </h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">    <?php the_excerpt(); ?></p>
            <a href="<?php the_permalink();?>" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
            <?php the_post_thumbnail("blog-small"); ?>  </div>
        </div>
        </div>

        <?php endwhile; endif; ?>
    </div>
    </div>
</section>
