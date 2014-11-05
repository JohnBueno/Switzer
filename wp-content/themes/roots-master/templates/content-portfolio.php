
<?php 
 	$args = array(
		'type' => 'portfolio',
		'exclude' => 1
	);
 	$categories = get_categories($args);
?>
<div class="portfolio-fixed"> 
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-6">
				<div class="page-header">
					<div class="breadcrumbs">
				    	<?php echo roots_title(); ?>
				  	</div>
				  	
				</div>	
				<div class="dropdown portfolio-dropdown">
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
						Dropdown
						<span class="caret pull-right"></span>
					</button>
					<ul class="dropdown-menu" role="menu" aria-labelledby="Categories">
						<?php foreach ($categories as $c): ?>
							<li role="presentation">
								<a role="menuitem" tabindex="-1" href="<?php echo(get_category_link($c->cat_ID)); ?>">
									- <?php echo($c->name); ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-12 category-thumbs">

	<div class="row">
		<?php foreach ($categories as $c): ?>
			<div class="col-md-3">
				<?php  if (function_exists('z_taxonomy_image_url')): ?>
					<div class="bg">
						<a href="<?php echo(get_category_link($c->cat_ID)); ?>">
							<img class="img-responsive" src="<?php echo z_taxonomy_image_url($c->cat_ID); ?>" alt="<?php echo($c->name); ?>">
						</a>
					</div>
					<h4><?php echo($c->name); ?></h4>

				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>	

</div>
