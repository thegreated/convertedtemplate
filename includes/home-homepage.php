<div class="container">
  <div class="row">

  <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
  <div class="col-4 text-center">
    <span style="size:25rem">
      <i class="<?php echo the_field('hicons'); ?> fa-3x"></i>
    </span>
    <h5 class="display-4"><?php  the_field('htitle'); ?>c</h5>
    <p class="lead"><?php echo the_field('hbody'); ?>cs</p>
  </div>

  <?php endwhile; else: endif; ?>
  </div>
</div>
