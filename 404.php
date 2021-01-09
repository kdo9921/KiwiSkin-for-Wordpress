<?php get_header() ; ?>
<div class="container">
    <section class="site-content">
        <article>
            <div class="content-wrap">
                <h1>404 Not Found</h1>
                <p>앗! 페이지를 찾을 수 없네요.</p>
                <?php the_content(); ?>
                <hr>
                <h2>최근 글</h2>
                <ul>
                    <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; wp_reset_postdata(); ?>
                </ul>
            </div>
        </article>
    </section>
    <?php get_sidebar('main-sidebar'); ?>
</div>
<?php get_footer() ; ?>