<?php get_header(); ?>

<div class="has-text-centered">
    <h1 class="subtitle is-5 color6">CATEGORIA</h1>
    <h1 class="title is-1 color7" style="text-transform: capitalize">
        <?php echo $category_name; ?>
    </h1>

    <div class="clear20x"></div>
</div>

<div class="index-loop columns is-multiline">
    <?php
    $category = get_queried_object(); // Obtém o objeto da categoria atual
    $category_name = $category->name; // Obtém o nome da categoria atual
    
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'category_name' => $category_name // Filtra pelo nome da categoria atual
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            // Obtendo a miniatura (thumbnail) do post
            $thumbnail = get_the_post_thumbnail();

            // Obtendo o link da postagem
            $post_link = get_permalink();

            // Dividindo em 3 colunas
            echo '<div class="column is-one-third ">';

            // Adicionando o link da postagem
            echo '<a href="' . $post_link . '">';

            // Exibindo a miniatura (thumbnail) do post
            echo $thumbnail;
            echo '<div class="clear20x"></div>';

            // Exibindo o título do post
            echo '<h2 class="index-loop-title">' . get_the_title() . '</h2>';

            // Exibindo o conteúdo do post
            the_excerpt();
            echo '<div class="clear50x"></div>';

            // Fechando a tag de link
            echo '</a>';

            // Fechando a coluna
            echo '</div>';
        }
    }

    // Restaurando os dados originais do loop
    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>