<div class="row py-3">
    <div class="col-sm-4">

        <?php if(has_post_thumbnail()):
            the_post_thumbnail('medium', array('class' => 'img-fluid'));
            /*thes_post_thumbnail('medium_large', array('class' => 'img-larg'));*/
            /*the_post_thumbnail('large', array('class' => 'large-resulution'));*/
            /*the_post_thumbnail('full', array('class' => 'full-resulution'));*/
        endif; ?>

    </div>

    <div class="col-sm-8">

    </div>

</div>

<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

<p><?php the_category(','); ?><?php the_author(); ?><?php the_time('d/m/y'); ?></p>

<div>
    <?php the_content(); ?>

    <p><?php the_tags('tas:',',','');?></p>

    <p><a class= "btn btn-secondary" href="<?php the_permalink(); ?>">leia mais</a></p>
</div>


