<?php get_header() ; ?>
<div class="content_container">
    <section class="site-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <a href=<?php the_permalink();?>>
            <article>
                <?php if ( has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
                <?php endif; ?>
                <div class="post_content">
                    <h1><?php the_title();?></h1>
                    <p><?php echo get_the_excerpt();?></p>
                </div>
            </article>
        </a>
        <?php endwhile; endif; ?>
        <?php the_posts_navigation() ?>
    </section>
    <?php get_sidebar(); ?>
</div>
<?php get_footer() ; ?>