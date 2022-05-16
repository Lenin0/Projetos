<?php get_header(); ?>

<div class="container pt-5">
    <div class="row">
        <div class="col-sm-8">
            <div class="col-sm-4">
                <?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();