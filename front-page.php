<?php get_header(); ?>

<main class="container">
    <h1 class="my-3 text-center"><?php the_title(); ?></h1>
    <?php if(have_posts()){
        while(have_posts()){
            the_post(); ?>

            <div class="row my-3">
                <div class="col-3"></div>
                <div class="col-6"><?php the_content(); ?></div>
                <div class="col-3"></div>
            </div>

        <?php }
    } ?>
</main>

<?php get_footer(); ?>