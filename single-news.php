
<?php get_header(); ?>
<section class="blog-section spad">
<div class="container">
    <div class="blog-item">
        <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail(); ?> 
            <div class="blog-date"><?=get_the_date(" jS F, Y")?></div>
                <h3><?php the_title(); ?></h3>
                <div class="blog-meta">by <a href=""><?=get_the_author_meta('first_name')?> <?=get_the_author_meta('last_name')?></a> in <a href="">Music</a></div>
                <?php get_template_part('content/section','news'); ?>
                 <?php wp_link_pages(); ?>
        </a>
     </div>
</div>
</section>
<?php get_footer(); ?>