<?php get_header() ; ?>
<div class="container">
	<section class="site-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>
			<div class="content-wrap">
				<h1 class="post_info_title"><?php the_title();?></h1>
				<p class="post_info"><?php echo date_i18n(get_option('date_format'), false, false); ?> - <?php the_author() ; ?></p>
				<?php the_content(); ?>
				
				<?php comments_template(); ?>
			</div>
		</article>
		<?php endwhile; endif; ?>
	</section>
	<?php get_sidebar('main-sidebar'); ?>
</div>
<?php get_footer() ; ?>