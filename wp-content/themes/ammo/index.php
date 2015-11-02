

<? include (TEMPLATEPATH.'/headerIndex.php'); ?>

<body <?php body_class($body_classes); ?>>
	<div class="maior-18">
		<div class="bg-maior-18"></div>
			<div class="conteudo">
			 <?php $my_query = new WP_Query('p=1236'); ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img-responsive center-block header-post-image" />
					<h3><?php the_title(); ?></h3>
					<?php the_content() ?>
			<?php endwhile; ?>
		</div>
	</div>
	   
</body>