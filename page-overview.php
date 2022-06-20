<?php
/**
 * STATS-archive (/office/stats/)
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'about';
$g_page_slug = 'overview';
$g_page_title = 'OVERVIEW';

?>
<?php get_header(); ?>
<main class="about">
    <section>
        <h1><span>OVERVIEW</span></h1>
        <div class="share-btn-area">
            <ul>
                <li>SHARE</li>
                <li><a class="share-twitter" href="http://twitter.com/share?text=&url=<?php echo esc_url($g_share_url); ?>&hashtags=3x3exe" rel="nofollow" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/btn-twitter.svg' ?>"></a></li>
                <li><a class="share-facebook" href="http://www.facebook.com/share.php?u=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/btn-facebook.svg' ?>"></a></li>
                <li><a class="share-line" href="https://social-plugins.line.me/lineit/share?url=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/btn-line.svg' ?>"></a></li>
            </ul>
        </div>
        <div class="contents">
            <?php
                the_content();

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
                        'after'  => '</div>',
                    )
                );
            ?>
        </div>
    </section>
</main>
<link rel="stylesheet" href="<?php echo  esc_url( get_template_directory_uri() ) . '/assets/css/about.css' ?>" media="all">
<?php get_footer(); ?>

