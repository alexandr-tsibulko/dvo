<?php get_header(); ?>

    <div class="wrap-about">
        <?php get_sidebar() ?>

        <div class="about-content">

            <?php if(have_posts()) : the_post() ?>

                <h1><?php the_title();?></h1>

                <?php the_content(); ?>

            <?php endif; wp_reset_query(); ?>


        </div><!-- #container -->

    </div>
<?php get_footer(); ?>