<?php get_header() ; ?>
<div class="content_container">
	<section class="site-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>
			<div class="content-wrap">
				<h1 class="post_info_title"><?php the_title();?></h1>
				<p class="post_info"><?php echo get_the_date(); ?> - <?php the_author() ; ?></p>
				<?php the_content(); ?>
				
				<?php comments_template(); ?>
			</div>
		</article>
		<?php endwhile; endif; ?>
	</section>
	<?php get_sidebar('main-sidebar'); ?>
</div>
<?php get_footer() ; ?>