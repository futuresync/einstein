<?php get_header(); ?>

<?php echo do_shortcode('[metaslider id="9"]'); ?>

<main id="primary" class="site-main">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            // Conteúdo do post ou página
            get_template_part('template-parts/content', get_post_type());
        endwhile;
    else:
        // Caso não haja nenhum post ou página encontrada
        get_template_part('template-parts/content', 'none');
    endif;
    ?>
</main>

<?php get_footer(); ?>