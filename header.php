<head>
    <title></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">
</head>

<header class="has-text-centered">
    <div class="clearheader"></div>
    <?php display_custom_logo(); ?>
    <div class="clearheader"></div>
    <p class="color7">navegue por marcas</p>
    <ul class="category-list">
        <?php
        $categories = get_categories(); // Obtém todas as categorias
        $count = 0;

        foreach ($categories as $category) {
            $category_link = get_category_link($category->term_id); // Obtém a URL da página da categoria
            echo '<li><a href="' . esc_url($category_link) . '">' . $category->name . '</a></li>'; // Exibe o link da categoria
            $count++;

            if ($count % 8 === 0) {
                echo '<br>'; // Quebra de linha após o oitavo item
            }
        }
        ?>
    </ul>

</header>