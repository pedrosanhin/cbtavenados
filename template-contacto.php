<?php 
//Template Name: Página de Contacto
get_header(); ?>

<main class="container">
    <h1 class="my-3"><?php the_title();?></h1>
    <?php if(have_posts()){
            while(have_posts()){
                the_post(); ?>
                <?php the_content(); ?>

                <div class="col-md-6 col-12">
                    <?php echo do_shortcode('[wpgmza id="1"]'); ?>
                </div>

            <?php }
    } ?>
</main>

<?php get_footer(); ?>