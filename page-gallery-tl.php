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
            <ul id="gallery-japan-list" class="list-3-column gallery-japan-list">
                <?php
                    $args = array(
                        'post_type' => 'gallery', /* 投稿タイプを指定 */
                        'paged' => $paged,
                        'posts_per_page' => -1
                        , 
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'info-cat',
                                'field' => 'slug',
                                'terms' => 'thailand'
                            )
                        )
                    );
                ?>
                <?php $wp_query = new WP_Query($args); ?>
                <?php if ($wp_query->have_posts()) : ?>
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <li class="list-item">
                        <a href="<?php the_permalink() ;?>">
                            <!-- 画像 -->
                            <div class="image-box">
                                <h2>
                                    <?php the_title(); ?>
                                </h2>
                                <?php the_post_thumbnail('full'); ?>
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
