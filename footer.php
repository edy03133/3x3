<?php
global $g_page_category, $g_page_slug, $g_page_title;
global $g_primary_term_slug;
?>
<footer>

<?php

$args = array(
'post_type' => 'footer-logo', /* 投稿タイプを指定 */
'paged' => $paged,
'posts_per_page' => -1,

    'tax_query' => array(
    array(
        'taxonomy' => 'tac-footer-logo',
        'field' => 'slug',
        'terms' => 'ofiicial-main-partners'
    )
)
); ?>
<?php wp_reset_query() ?>
<?php $wp_query = new WP_Query($args); ?>
<?php if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <ul>
            <li style="list-style: none;"><a href="<?php the_field('footer-logo-link'); ?>" target="_blank"><img src="<?php the_field('footer-logo-image'); ?>"></a></li>
        </ul>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <li>ニュースはありません</li>
<?php endif; ?>

    <div class="footer-top">
         <div class="sponsor"> OFFICIAL MAIN PARTNERSsss
            <div class="banner">
                <a href="https://www.cocacola.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_cocacola.png' ?>"></a>
                <a href="https://www.cocacola.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_cocacola.png' ?>"></a>
                <a href="https://www.aquarius-sports.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_aquarius.png' ?>"></a>
                <a href="https://www.supersports.com/ja-jp/xebio" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_zebio.png' ?>"></a>
                <a href="https://www.supersports.com/ja-jp/victoria" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_victoria.png' ?>"></a>
                <a href="<?php the_field('footer-logo-link'); ?>" target="_blank"><img src="<?php the_field('footer-logo-image'); ?>"></a>
            </div>
        </div>



        <div class="sponsor"> OFFICIAL PARTNERS 
            <div class="banner">
                <a href="https://www.golfpartner.co.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_golfpartner.png' ?>"></a>
                <a href="https://jlab-audio.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/Parter_JLab.png' ?>"></a>
                <a href="https://drsupporter.com/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/Partner_Dr.Supporter.png' ?>"></a>
                <!-- <a href="https://www.unisys.co.jp/" target="_blank"><img style="height: 43px" src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_NihonUnisysLtd-logo.png' ?>"></a> -->
                <a href="https://www.persol-career.co.jp/" target="_blank"><img style="height: 43px" src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/PERSOL_Horizontal.jpg' ?>"></a>
                <a href="https://bcstock.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_bc-stock.png' ?>"></a>
                <a href="https://www.mwt.co.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_meitetsu.jpg' ?>"></a>
            </div>
        </div>
        <div class="sponsor"> OFFICIAL SUPPLIERS 
            <div class="banner">
                <a href="https://www.zygospec.com/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_zygospec.png' ?>"></a>
                <a href="http://www.wilson.co.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_wilson.png' ?>"></a>
                <a href="https://www.saraya.com/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/Supplier_SARAYA.png' ?>"></a>
                <a href="http://www.senoh.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_senoh.png' ?>"></a>
                <a href="https://bit.ly/3jDqbMb" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/Supplier_FOOTER.png' ?>"></a>
                <a href="https://jp.puma.com/jp/ja/home" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/Supplier_PUMA.png' ?>"></a>
                <a href="https://www.ryzwear.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/Supplier_RYZ.png' ?>"></a>
                <!-- <a href="http://www.neweracap.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_newera.png' ?>"></a> -->
                <!--<a href="http://stance-jp.com/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_stance.png' ?>"></a>
                <a href="https://izmo.energy/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_izmo.png' ?>"></a>
                <a href="https://www.seirogan.co.jp/cleverin/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/sponsor_cleverin.jpg' ?>"></a>-->
            </div>
        </div>
        <div class="sponsor"> OFFICIAL BROADCASTING PARTNER 
            <div class="banner">
                <a href="https://www.spotvnow.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/Broadcasting_SPOTVNOW.png' ?>"></a>
            </div>
        </div>
        <div class="sponsor"> SUPPORTING COMPANIES
            <div class="banner">
                <a href="https://www.docomo.ne.jp/biz/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/Supporting_docomo.png' ?>"></a>
                <a href="https://www.ctv.co.jp/indexmenu.html" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/Supporting_CHUKYO-TV.png' ?>"></a>
                <a href="https://bsy.co.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/Supporting_BSyoshimoto.png' ?>"></a>
                <a href="https://www.makita-hosp.or.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/Supporting_makitasougouByouin.png' ?>"></a>
                <a href="https://www.yasuda-re.co.jp/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/banners/Supporting_yasudahudousan.png' ?>"></a>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="footer-middle-l">
            <a href="/premier/"><img class="mb30" src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/logo_black.svg' ?>"></a>
            <a><img class="mb30" src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/jba_3x3.png' ?>"></a>
            <a><img class="mb30" width="150" src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/fiba_end2.png' ?>"></a>
            <a><img class="mb30" style="margin-bottom: 22px !important;" src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/Chinese_Taipei_Basketball_Association-e1586587147806.png' ?>"></a>
            <a><img class="mb30" src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/logo_bsat.png' ?>"></a>
<!--            <a><img class="mb30" src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/Indonesia-e1586587187324.png' ?>"></a>-->
            <a><img class="mb30" src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/logo_newzealand.jpg' ?>"></a>
<!--            <a><img class="mb30" src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/logo_korea.png' ?>"></a>-->

            <!-- <p><a href="/premier/">PREMIER TOP</a></p>
            <p><a href="/">3x3exe.com</a></p> -->
        </div>
        <div class="footer-middle-r">
            <ul class="active">double selected
                <li><a href="/premier/">TOP</a></li>
                <li><a href="/premier/3x3-history">WHAT’S 3x3</a></li>
                <li><a href="/premier/philosophy/">ABOUT LEAGUE</a></li>
                <li><a href="/premier/season-regulation/">REGULATION</a></li>
                <li><a href="/premier/for-media/">FOR MEDIA</a></li>
            </ul>
            <ul>
                <li><a href="<?= get_bloginfo('url') ?>/news">NEWS</a></li>
                <li><a href="/premier/teams/">TEAMS</a></li>
<!--                <li><a href="">LIVE</a></li>-->
                <li><a href="/premier/schedules/">SCHEDULE</a></li>
                <li><a href="/premier/standings/">STANDINGS</a></li>
                <li><a href="/premier/stats/">STATS</a></li>
                <li><a href="/premier/rank/">PLAYERS POINTS</a></li>
            </ul>
            <ul>
                <li><a href="mailto:info@exebasketball.com">お問い合わせ</a></li>
                <li><a href="/premier/privacy/">プライバシーポリシー</a></li>
            </ul>
            <div class="social-site">
                <p>Social Site</p>
                <ul>
                    <li><a href="https://www.instagram.com/3x3.exe/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/sns_header_insta.svg' ?>"></a></li>
                    <li><a href="https://twitter.com/3x3league" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/sns_header_twitter.svg' ?>"></a></li>
                    <li><a href="https://www.facebook.com/3x3OFFICIAL/" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/sns_header_facebook_official_light.svg' ?>"></a></li>
                    <li><a href="https://www.facebook.com/3x3EXEGlobal" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/sns_header_facebook_global_light.svg' ?>"></a></li>
                    <li><a href="https://www.youtube.com/user/3x3league" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/sns_header_youtube.svg' ?>"></a></li>
                    <li><a href="https://www.linkedin.com/company/3x3-exe-premier" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/sns_header_linkedin.svg' ?>"></a></li>
                </ul>
            </div>
        </div>
        <div class="btn-top"></div>
    </div>
    <div class="footer-bottom">
        <div class="company-info">
            <p>運営会社</p>
            <ul>
                <li>クロススポーツマーケティング株式会社</li>
                <li>3x3.EXE事務局：03-6870-6009</li>
                <li>東京都千代田区神田錦町 3-20 錦町トラッドスクエア 14階</li>
            </ul>
        </div>
        <div class="copyright"> &copy; Copyright 2021 3x3.EXE All Rights Reserved</div>
    </div>
</footer>


<script src="https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js"></script>
<script>
    window.addEventListener('DOMContentLoaded', function(){
    new ScrollHint('.js-scrollable', {
        i18n: {
          scrollable: 'スクロールできます'
        }
      });
});

</script>


<script src="<?= esc_url( get_template_directory_uri() ) . '/assets/js/common.js' ?>"></script>
<script src="<?= esc_url( get_template_directory_uri() ) . '/assets/js/main.js' ?>"></script>


<!-- End Google Tag Manager (noscript) -->
</body>
</html>
