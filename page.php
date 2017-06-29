<?php

get_header(); ?>
<div class="clear"></div>
<div class="go-post-header" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center; background-size: cover">
	<div class="post-header-content">
		<div class="item-title reveal">
			<h1><?php the_title(); ?></h1>
		</div>

		<div class="item-content wow fadeInDown">
			<?php the_field('descrição'); ?>
		</div>
	</div>
	<div class="item-animation reveal-hero">
		<div class="arrow bounce">
			<a href="javascript:void(0)" onclick="goTo(box1)" class="fa fa-chevron-down fa-2x" href="#"></a>
		</div>
	</div>
</div>
<div id="page-container" style="padding: 0">
	<div id="box1" class="container-content" style="padding: 0;">
		<?php 
		while ( have_posts() ) : the_post();
//get all pages 
		the_content();
		endwhile; ?>

		<?php get_the_content(); ?>
		
		<?php if(is_page('desenvolvimento-de-sites')): ?>
		
		<?php include INC . 'desenvolvimento.php'; ?>

		<?php endif; ?>

	</div>

	<?php if( !is_page( array( 'contato', 'desenvolvimento-de-sites', 'management' ) ) ): include INC . 'banner1.php'; endif; ?>

	<?php get_footer(); ?>