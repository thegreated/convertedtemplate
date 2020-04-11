
<?php 
$categories = get_categories( array( 'taxonomy'   => 'group',  'orderby'    => 'id','parent'     => 0,'hide_empty' => 0, ) );
//print_r($categories);
foreach($categories as $category):
   
    $image = get_field('featured', $category->taxonomy . '_' . $category->term_id );
    $categorys =  get_category_link($category->term_id);
?>

<div class="mix col-lg-3 col-md-4 col-sm-6 genres">
<a href=" <?php echo $categorys; ?>">
					<div class="playlist-item">
                  <img src= "<?php echo $image['url']; ?> " ?>
						<h5><?php echo $category->name; ?></h5>
					</div>
				</div>
</a>
<?php endforeach; ?>