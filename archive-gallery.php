<?php

/**
 * TOP
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_title = '3x3.EXE PREMIER';
$g_page_category = 'gallery';
$g_page_slug = 'gallery';

?>

<?php get_header(); ?>
<main>
    <section>
        <h1><span>GALLERY</span></h1>
    </section>
    <section id="gallery">
        <div class="contents">
            <ul class="gal-country-list">
                <?php
                    $args = array(
                        'post_type' => 'gal-country', /* 投稿タイプを指定 */
                        'paged' => $paged,
                        'posts_per_page' => -1
                        // , 
                        // 'tax_query' => array(
                        //     array(
                        //         'taxonomy' => 'column-category',
                        //         'field' => 'slug',
                        //         'terms' => 'brand-column'
                        //     )
                        // )
                    );
                ?>
                <?php $wp_query = new WP_Query($args); ?>
                <?php if ($wp_query->have_posts()) : ?>
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <li class="">
                        <a href="<?php the_field('gal-link-1'); ?>">
                            <!-- 画像 -->
                            <div class="">
                                <?php $image = get_field('country-01-img'); if( !empty($image) ): ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                            </div>

                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
        </div>
    </section>
</main>
<script src="<?= esc_url(get_template_directory_uri()) . '/assets/js/schedules.js' ?>"></script>
<link rel="stylesheet" href="<?php echo get_theme_file_uri( 'assets/css/scroll-hint.css' ); ?>">
<?php get_footer(); ?>
