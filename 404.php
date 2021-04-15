<?php get_header() ; ?>
<div class="container">
    <section class="site-content">
        <article>
            <div class="post_content">
                <h1><?php _e( '404 Not Found', 'KiwiSkin' ); ?></h1>
                <p><?php _e( 'Oops! That page can’t be found.', 'KiwiSkin' ); ?></p>
                <form role="search" method="get" id="searchform" class="searchform"
                    action="<?php bloginfo( 'url' ); ?>">
                    <input class="search-field" type="text" placeholder="검색 …" value="" name="s" id="s">
                </form>
            </div>

        </article>
        <article>
            <div class="post_content">
                <h1><?php _e( 'Recent Post', 'KiwiSkin' ); ?></h1>
            </div>
        </article>
        <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <a href="<?php the_permalink() ?>">
            <article>
                <div class="post_content">
                    <h1><?php the_title();?></h1>
                    <p><?php echo get_the_excerpt();?></p>
                </div>
            </article>
        </a>
        <?php endwhile; wp_reset_postdata(); ?>
    </section>
    <?php get_sidebar('main-sidebar'); ?>
</div>
<?php get_footer() ; ?>