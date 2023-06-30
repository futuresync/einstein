<?php wp_footer(); ?>

<footer class="footer">
    <div class="columns">
        <div class="column is-3">
            <?php display_custom_logo(); ?>
        </div>

        <div class="column is-3">
            <strong class="color6">Contato</strong><br>
            <small class="color7">Telefones</small><br>
            <p>(013) 99111 0101</p>
            <p>(011) 2473 4297</p>

            <hr>

            <p>Skype: doutorrolex</p>
            <p>E-Mail: contato@doutorrolex.com.br</p>
            <p>Whatsapp: (013) 99111 0101</p>
        </div>

        <div class="column">
            <ul>
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
        </div>
    </div>
</footer>