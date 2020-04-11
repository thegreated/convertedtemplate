
<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

<div class="card mb-3">
    <div class="card-body d-flex justify-content-center align-items-center">
             <div class="mr-4">
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail("blog-small"); ?> 
                <?php endif; ?>
            </div>
            <div class="blog-content">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink();?>" class="btn btn-success" > Read More </a>
            </div>
    </div>       
</div>



<?php endwhile; else: endif; ?>
