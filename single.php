<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>

        <div <?php post_class(); ?>>
            <div class="has-text-centered">
                <h1 class="title is-4 color6">
                    <?php the_title(); ?>
                </h1>

                <div class="post-box">
                    <div class="post-content">
                        <?php
                        $content = get_the_content();
                        $pattern = '/<img(.*?)src=[\'"](.*?)[\'"](.*?)>/i';

                        $content = preg_replace_callback($pattern, function ($matches) {
                            $link = '<a href="' . $matches[2] . '" data-lightbox="image">';
                            $image = '<img' . $matches[1] . 'src="' . $matches[2] . '"' . $matches[3] . '>';
                            return $link . $image . '</a>';
                        }, $content);

                        echo $content;
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="clear50x"></div>

        <?php
    }
}

get_footer();
?>