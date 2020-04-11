<?php get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

  <section class="player-section set-bg" data-setbg="<?php echo $image[0]; ?> " style="background-image: url(&quot;<?php echo $image[0]; ?> &quot;);" style="">
  <h2 style="color:white;"> <?php the_title(); ?></h2>
   </section>

<?php endif; ?>


<div class="contact-warp">
						<div class="section-title mb-0">
							<h2>Get in touch</h2>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doe iusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
						<ul>
							<li>Main Road , No 25/11</li>
							<li>+34 556788 3221</li>
							<li>contact@solmusic.com</li>
						</ul>
						<form class="contact-from">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Your name">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Your e-mail">
								</div>
								<div class="col-md-12">
									<input type="text" placeholder="Subject">
									<textarea placeholder="Message"></textarea>
									<button class="site-btn">send message</button>
								</div>
							</div>
						</form>
					</div>

<?php get_footer(); ?>