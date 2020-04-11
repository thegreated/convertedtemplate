<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    


        <?php $tags = get_the_tags();
               foreach($tags as $tag):?>
                <a href="<?=get_tag_link($tag->term_id);?>" class="badge badge-success"> 
                    <?=$tag->name?>
                </a>
                <?php endforeach; ?>
    <?php $categories = get_the_category();
         foreach($categories as $cat):?>
          <a href="<?=get_category_link($cat->term_id)?>" class="badge badge-primary">
                <?=$cat->name?> 
            </a>  
         <?php endforeach;?>
         <p><?=get_the_date("l jS F, Y")?></p>


    <?php // comments_template(); ?>


<?php endwhile; else: endif; ?>
