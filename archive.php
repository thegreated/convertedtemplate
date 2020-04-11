
<?php get_header();
$category = get_queried_object();?>


<section class="category-section spad" style="margin-bottom:0px">
	<div class="container-fluid">
			<div class="section-title">
				<h2><?=$category->name?></h2>
			</div>
			<div class="container">
				<div class="category-links">
					<a href="" class="active"></a>
					<a href=""></a>
					<a href=""></a>
				</div>
			</div>
<!--				<div class="category-items">
				<div class="row">
					<div class="col-md-4">
						<div class="category-item">
							<img src="img/playlist/9.jpg" alt="">
							<div class="ci-text">
								<h4>Micke Smith</h4>
								<p>Live from Madrid</p>
							</div>
							<a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="category-item">
							<img src="img/playlist/2.jpg" alt="">
							<div class="ci-text">
								<h4>Micke Smith</h4>
								<p>Live from Madrid</p>
							</div>
							<a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="category-item">
							<img src="img/playlist/7.jpg" alt="">
							<div class="ci-text">
								<h4>Micke Smith</h4>
								<p>Live from Madrid</p>
							</div>
							<a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</section>
    <section class="songs-section">
		<div class="container">
			<!-- song -->

			
			<?php //echo $category->term_id; ?>

		
				<?php get_template_part('archive/section','album') ?>
		
			<!-- song -->
			<!-- <div class="site-pagination pt-5 mt-5">
				<a href="#" class="active">01.</a>
				<a href="#">02.</a>
				<a href="#">03.</a>
				<a href="#">04.</a>
			</div> -->
		</div>
	</section>

<?php get_footer(); ?>