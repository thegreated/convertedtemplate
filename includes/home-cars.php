
  <div class="container">
    <h1 class="home-heading">Products</h1>
        <div class="row">
        <?php 
        $latest_blog_posts = new WP_Query( array( 'post_type' => 'Cars' ) );
         if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
        
            <div class="col-4 album py-5">
                <div class="card mb-4 shadow-sm">
                <?php the_post_thumbnail("blog-small"); ?> 
                      <div class="card-body">
                            <a href="<?php the_permalink();?>">
                            <h5><?php the_title() ?> </h5>
                            </a>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                </div>
            </div>

            <?php endwhile; endif; ?>
            </div>
    </div>
</section>
