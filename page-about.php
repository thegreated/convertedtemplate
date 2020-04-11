<?php get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

  <section class="player-section set-bg" data-setbg="<?php echo $image[0]; ?> " style="background-image: url(&quot;<?php echo $image[0]; ?> &quot;);" style="height:300px">
  <h2 style="color:white;size"> <?php the_title(); ?></h2>
   </section>

<?php endif; ?>

<section class="premium-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>Why go Premium</h2>
					</div>
				</div>
				<div class="col-lg-6">
					<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="row">
      
				<div class="col-lg-3 col-sm-6">
					<div class="premium-item">
						<img src="http://localhost/wordpress/wp-content/uploads/2020/04/1-1.jpg" alt="">
						<h4>No ad interruptions </h4>
						<p>Consectetur adipiscing elit</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="premium-item">
						<img src="http://localhost/wordpress/wp-content/uploads/2020/04/2-2.jpg" alt="">
						<h4>High Quality</h4>
						<p>Ectetur adipiscing elit</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="premium-item">
						<img src="http://localhost/wordpress/wp-content/uploads/2020/04/3-3.jpg" alt="">
						<h4>Listen Offline</h4>
						<p>Sed do eiusmod tempor </p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="premium-item">
						<img src="http://localhost/wordpress/wp-content/uploads/2020/04/4-1.jpg" alt="">
						<h4>Download Music</h4>
						<p>Adipiscing elit</p>
					</div>
				</div>

        <div class="blog-item mt-5" >          
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis diam eget nibh eleifend tincidunt. Phasellus bibendum metus nec ipsum venenatis ultricies. Donec lobortis nisi nunc, et suscipit tortor tincidunt eu. Etiam at viverra orci. Suspendisse consequat rhoncus enim in mattis. Vestibulum a iaculis mauris. Vestibulum fringilla ipsum vitae diam ultrices, sit amet efficitur urna feugiat. Pellentesque volutpat iaculis justo, eu ornare metus viverra quis. Nunc tincidunt et arcu sed fringilla. Sed gravida nibh erat, vitae condimentum lacus malesuada vitae. Nulla feugiat egestas dolor eu rutrum. Pellentesque ut ipsum eget magna pretium placerat.</p>
      <p>Pellentesque tincidunt nisi quis mi tristique bibendum. Aenean sapien tortor, porta accumsan pretium non, interdum id turpis. Fusce non tempor turpis. Sed viverra at lacus quis euismod. Duis at enim tortor. Aliquam sodales nibh eget quam ornare, in euismod justo interdum. Phasellus non nibh luctus, varius mi eget, placerat tortor.</p>
      <p>Vivamus vel neque facilisis, vestibulum orci a, pellentesque urna. Cras placerat diam non malesuada porta. Donec varius viverra convallis. Nunc lacus nisi, pharetra sed dui et, tempor venenatis ipsum. Morbi molestie rutrum nisi, ac pharetra turpis lacinia et. Sed mollis dolor non magna imperdiet finibus. Maecenas risus sapien, finibus nec elit ut, scelerisque laoreet elit.</p>
      <p>Donec vitae commodo libero. Sed lobortis vestibulum purus non mollis. Ut laoreet maximus nunc sit amet aliquet. Integer pharetra odio diam, faucibus dapibus leo ornare consequat. Cras vel libero dignissim velit malesuada interdum ut eget eros. Donec suscipit sed nunc eu varius. Duis id est ut mi suscipit sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed egestas tincidunt felis non interdum. Morbi eu quam molestie, aliquet leo ac, ultrices orci. Fusce volutpat ultrices aliquet. Duis tincidunt dignissim metus, ultrices tincidunt lorem vestibulum in. In nec nulla ultrices, aliquam felis ac, maximus lorem. Phasellus a porttitor erat.</p>
      <p>Ut quis semper nisl, eget efficitur nisi. Phasellus eu volutpat justo. Maecenas in neque sagittis, lobortis felis vel, scelerisque mi. Aliquam erat volutpat. Donec semper ligula ac lectus vestibulum faucibus. Mauris pulvinar eu enim at interdum. Maecenas quis nibh congue, eleifend velit et, fermentum nisl. Suspendisse id massa eget risus venenatis dapibus a ut turpis. Integer laoreet interdum ornare. Sed suscipit, dolor ut facilisis semper, neque velit pulvinar nulla, in gravida mi metus eget sem.</p>

      </div>
                         
     </div>

			</div>
		</div>
	</section>
  

<?php get_footer(); ?>