<?php get_header() ; ?>
<div class="container">
    <section class="site-content">
        <article>
            <div class="post_content">
                <?php the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
            </div>
        </article>
        <?php if (have_posts()) : while (have_posts()) : the_post() ; ?>
        <a href=<?php the_permalink();?>>
            <article>
                <?php if ( has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
                <?php endif; ?>
                <div class="post_content">
                    <h1><?php the_title();?></h1>
                    <?php the_excerpt(); ?>
                </div>
            </article>
        </a>
        <?php
		endwhile; else :?>
        <article>
            <div class="post_content">
                <h1><?php _e( 'Nothing Found', 'KiwiSkin' ); ?></h1>
                <hr>
                <p><?php _e( 'Nothing Found Try Again', 'KiwiSkin' ); ?></p>
                <form role="search" method="get" id="searchform" class="searchform" action="http://localhost/">
                    <input type="text" placeholder="<?php _e( 'Search Result', 'KiwiSkin' ); ?> …" value="" name="s" id="s">
                </form>
            </div>
        </article>
        <?php endif;?>
        <?php the_posts_navigation() ?>
    </section>
    <?php get_sidebar(); ?>
</div>
<?php get_footer() ; ?>