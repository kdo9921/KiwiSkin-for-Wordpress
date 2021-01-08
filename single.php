<?php get_header() ; ?>
<div class="container">
	<section class="site-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>
			<div class="content-wrap">
				<h1><?php the_title();?></h1>
				<p><?php the_time('Y-m-d l'); ?> - <?php the_author() ; ?></p>
				<?php the_content(); ?>
				<hr>
				<?php comments_template(); ?>
			</div>
		</article>
		<?php endwhile; endif; ?>
	</section>
	<?php get_sidebar('main-sidebar'); ?>
</div>
<?php get_footer() ; ?>