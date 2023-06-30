<head>
    <title>
        <?php wp_title('|', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?ver=0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
</head>

<div class="toggle-content">
    <p class="color7">Navegue por marcas</p>
    <ul class="category-list">
        <?php
        $categories = get_categories(); // Obtém todas as categorias
        $count = 0;

        foreach ($categories as $category) {
            $category_link = get_category_link($category->term_id); // Obtém a URL da página da categoria
            echo '<li><a href="' . esc_url($category_link) . '">' . $category->name . '</a></li>'; // Exibe o link da categoria
            $count++;
        }
        ?>
    </ul>
</div>
<div class="toggle">
    <a class="button is-small" onclick="openMenu();">menu</a>
</div>

<header class="has-text-centered">
    <div class="clearheader"></div>
    <?php display_custom_logo(); ?>
    <div class="clearheader"></div>
    <div class="brands">
        <p class="color7">navegue por marcas</p>
        <ul class="category-list">
            <?php
            $categories = get_categories(); // Obtém todas as categorias
            $count = 0;

            foreach ($categories as $category) {
                $category_link = get_category_link($category->term_id); // Obtém a URL da página da categoria
                echo '<li><a href="' . esc_url($category_link) . '">' . $category->name . '</a></li>'; // Exibe o link da categoria
                $count++;

                if ($count % 7 === 0) {
                    echo '<br>'; // Quebra de linha após o oitavo item
                }
            }
            ?>
        </ul>
        <div class="clearheader"></div>
    </div>
</header>
<script>
    function openMenu() {
        $(".toggle-content").fadeIn();
    }
</script>