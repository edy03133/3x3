<?php
/**
 * STATS-archive (/office/stats/)
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'what3x3';
$g_page_slug = 'rule';
$g_page_title = 'Rule';

?>
<?php get_header(); ?>
<main>
    <section>
        <h1><span>WHAT’S 3x3</span></h1>
    </section>
    <section>
        <div class="container">
            <div class="content-title">
                <h2>3x3 Rule</h2>
                <p>5人制とは全く異なるルールで攻守の切り替えやスピーディーな試合展開を後押しし、より試合が白熱し盛り上がるルール設計 が特徴です。</p>
            </div>
            <div class="image">
                <img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/3x3-rule.png' ?>" alt="3x3 Rule">
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

