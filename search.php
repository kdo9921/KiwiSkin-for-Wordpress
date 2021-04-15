<?php get_header() ; ?>
<div class="container">
    <section class="site-content">
        <article>
            <div class="post_content">
                <h1><?php _e( 'Search Result', 'KiwiSkin' ); ?> : <?php echo $s ; ?></h1>
            </div>
        </article>
        <?php if (have_posts()) : while (have_posts()) : the_post() ; ?>
        <a href=<?php the_permalink();?>>
            <article>
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
                <p><?php _e( 'Nothing Found Try Again', 'KiwiSkin' ); ?></p>
                <form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo( 'url' ); ?>">
                    <input class="search-field" type="text" placeholder="_e( 'Search', 'KiwiSkin' ); …" value="" name="s" id="s">
                </form>
            </div>
        </article>
        <?php endif;?>
        <?php the_posts_navigation() ?>
    </section>
    <?php get_sidebar(); ?>
</div>
<?php get_footer() ; ?>