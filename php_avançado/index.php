<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            </div>
        </div>
    </div>
       
        <?php
        if(have_posts()) :
            while (have_posts()) :
                the_post(); ?>
               
               <?php get_template_part('partials/post', 'default'); ?>
               
               <?php
            endwhile;
        else:
            ?>
            <?php
        endif;
        
        ?>
        <?php wp_footer(); ?>
    </body>
</html>