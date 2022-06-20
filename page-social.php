<?php
/**
 *
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'general';
$g_page_slug = 'social';
$g_page_title = '# SNS';
?>
<?php get_header(); ?>
<main>
    <section>
        <h1><span># SNS</span></h1>
        <div class="share-btn-area">
            <ul>
                <li>SHARE</li>
                <li><a class="share-twitter" href="http://twitter.com/share?text=&url=<?php echo esc_url($g_share_url); ?>&hashtags=3x3exe" rel="nofollow" target="_blank"><img src="/office/assets/img/icon/sns/btn-twitter.svg"></a></li>
                <li><a class="share-facebook" href="http://www.facebook.com/share.php?u=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="/office/assets/img/icon/sns/btn-facebook.svg"></a></li>
                <li><a class="share-line" href="https://social-plugins.line.me/lineit/share?url=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="/office/assets/img/icon/sns/btn-line.svg"></a></li>
            </ul>
        </div>
        <div class="contents">
            <div class="text-center mashupper">
                <div id="snsMasonry" class="snspostsWrap">
                    <div class="masonryItems postDummy">dummy</div>
                </div>
                <div class="tCenter">
                    <a class="arrow readmoreSnsposts"><span>MORE</span></a>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="/js/jquery.plugin.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.flexslider-min.js"></script>
<script src="/js/smooth-scroll.min.js"></script>
<script src="/js/skrollr.min.js"></script>
<script src="/js/spectragram.min.js"></script>
<script src="/js/scrollReveal.min.js"></script>
<script src="/js/isotope.min.js"></script>
<script src="/js/twitterFetcher_v10_min.js"></script>
<script src="/js/lightbox.min.js"></script>
<script src="/js/jquery.countdown.min.js"></script>
<!--<script src="/js/scripts.js"></script>-->
<script src="/js/masonry.pkgd.min.js"></script>
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="/js/Chart.js"></script>
<script data-page_id='1646' data-site_dir='//www.sposite.net/3x3exesns/' data-ellipsis='140' charset='utf-8' id='sposite_media_parts' async='true' src='//3x3exe.com/js/getarticle.js'></script>
<?php get_footer(); ?>
