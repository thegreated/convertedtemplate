<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
    <p><?=get_the_date("l jS F, Y")?></p>
    <?php the_content(); ?>
    
    <?php $fname = get_the_author_meta('first_name');
          $lname = get_the_author_meta('last_name');?>
        <p> Author :  <?php echo $fname . ' '. $lname;?></p>
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


    <?php // comments_template(); ?>


<?php endwhile; else: endif; ?>
