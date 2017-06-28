<?php

get_header(); ?>
<div class="clear"></div>
<div class="go-post-header" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center; background-size: cover">
	<div class="post-header-content">
		<div class="item-title reveal">
			<?php the_title(); ?>
		</div>

		<div class="item-content wow fadeInDown">
			<?php the_field('sobre_o_projeto'); ?>
		</div>
	</div>
	<div class="item-animation reveal-hero">
		<div class="arrow bounce">
				<a href="javascript:void(0)" onclick="goTo(box1)" class="fa fa-chevron-down fa-2x" href="#"></a>
			</div>
	</div>
</div>
<div class="go-post-header-info reveal">
	<h2 id="box1" class="go-title x1">
		O Que foi <span class="thin">Desenvolvido?</span>
	</h2>
	<p><?php the_field('o_que_foi_desenvolvido'); ?></p>
</div>

<div id="post-container">
<div class="container-content reveal">
	<?php 
	while ( have_posts() ) : the_post();
//get all pages 
	the_content();
	endwhile; ?>

	<?php get_the_content(); ?>
</div>

<a class="page-nav wow fadeInDown" href="projetos">
Voltar para <span class="thin">projetos</span>
</a>

<!-- <div class="page-nav">
	<div class="next">
		<?php if (next_post_link('%link') != null): ?>

		<?php next_post_link('%link') ?>
		<i class="fa fa-angle-right" aria-hidden="true"></i>
		<?php else: ?>
		<?php previous_post_link('%link') ?>
		<i class="fa fa-angle-right" aria-hidden="true"></i>
		<?php endif; ?>
	</div>
</div> -->

</div>
<?php include INC . 'banner1.php' ?>

<?php get_footer(); ?>