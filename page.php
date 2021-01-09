<?php get_header() ; ?>
<div class="container">
    <section class="site-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <h1 class="post_info_title"><?php the_title();?></h1>
            <p class="post_info">작성일자 <?php the_time('Y'); ?>년 <?php the_time('m'); ?>월
                <?php the_time('d'); ?>일 / 작성자 <?php the_author() ; ?></p>
            <hr>
            <?php the_content(); ?>
        </article>
        <?php endwhile; endif; ?>
    </section>
    <?php get_sidebar(); ?>
</div>
<?php get_footer() ; ?>