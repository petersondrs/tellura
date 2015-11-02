<?php 
/*	
	Template Name: Produto
*/
?>

<?php get_header(); ?>

<!-- Start Content
================================================== -->
<section class="primary section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-5">
				<div class="caixa-texto-produto">
					<?php $my_query = new WP_Query('page_id=10'); ?>
					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<div  class="bg-titulo">
							<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img-responsive center-block header-post-image" />
						</div>
						<div class="texto">
							<?php the_content() ?>
						</div>
					<?php endwhile; ?>
				</div>	
			</div>
		</div>
	</div>
</section>
<!-- End Content
================================================== -->


<?php
	get_footer();
?>
