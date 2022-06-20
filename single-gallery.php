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
<main id="single-gallery">
    <section>
        <h1><span>GALLERY</span></h1>
    </section>
    <section id="gallery">
        <div class="contents">
            <h2>
                <?php the_title(); ?>
            </h2>
            <?php the_content(); ?>
        </div>
    </section>
</main>
<script src="<?= esc_url(get_template_directory_uri()) . '/assets/js/schedules.js' ?>"></script>
<link rel="stylesheet" href="<?php echo get_theme_file_uri( 'assets/css/scroll-hint.css' ); ?>">
<?php get_footer(); ?>
