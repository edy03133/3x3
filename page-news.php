<?php
/**
 *
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'news';
$g_page_slug = 'news';
$g_page_title = 'NEWS';

?>
<?php get_header(); ?>

<style type="text/css">
    .news-article .article.carousel .next,
    .news-article .article.carousel .prev {
        display: none !important;
    }
    .acf-map {
        width: 1020px;
        height: 500px;
    }

    /* fixes potential theme css conflict */
    .acf-map img {
        max-width: inherit !important;
    }

    @media screen and (max-width: 750px) {
        .acf-map {
            width: 375px;
            height: 250px;
            margin-left: -20px;
            margin-bottom: 41px;
        }
    }
    main {
        margin-bottom: 100px;
    }

    .standings .share-btn-area {
        margin-bottom: 30px;
    }

    .standings .select-area .country {
        margin-bottom: 30px;
    }

    .standings .select-area .country a {
        display: inline-block;
        width: 245px;
        height: 64px;
        margin-left: 4px;
        font-size: 16px;
        font-weight: bold;
        letter-spacing: 0.64px;
        color: #2D2D2D;
        text-decoration: none;
        line-height: 64px;
        text-align: center;
        background-color: #F5F5F5;
        cursor: pointer;
        transition: 0.2s;
    }

    .standings .select-area .country a:first-of-type {
        border-top-left-radius: 32px;
        border-bottom-left-radius: 32px;
        margin-left: 0;
    }

    .standings .select-area .country a:last-of-type {
        border-top-right-radius: 32px;
        border-bottom-right-radius: 32px;
    }

    .standings .select-area .country a.active,
    .standings .select-area .country a:hover {
        color: #FFFFFF;
        background-color: #2D2D2D;
        opacity: 1;
    }

    .standings .select-area .area {
        margin-bottom: 2px;
        text-align: center;
        font-weight: bold;
    }

    .standings .select-area .area>div.selected {
        display: block;
    }

    .standings .select-area .area .triple a {
        height: 54px;
        line-height: 54px;
    }

    .standings .select-area .area .double a {
        height: 54px;
        line-height: 54px;
    }

    .standings .select-area .area a {
        position: relative;
        display: inline-block;
        width: 144px;
        margin-right: 2px;
        font-size: 14px;
        color: #2D2D2D;
        letter-spacing: 0.56px;
        text-decoration: none;
        text-align: center;
        background-color: #F5F5F5;
        cursor: pointer;
        transition: 0.2s;
    }

    .standings .select-area .area a:last-of-type {
        margin-right: 0;
    }

    .standings .select-area .area a.active,
    .standings .select-area .area a:hover {
        color: #FFFFFF;
        background-color: #E5002D;
        opacity: 1;
    }
    .standings .select-area .area .country a.active,
    .standings .select-area .area .country a:hover {
        color: #FFFFFF;
        background-color: #2D2D2D;
        opacity: 1;
    }

    .standings .ranking {
        margin-bottom: 0;
    }

    .standings .result-area {
        padding-bottom: 14px;
    }

    .standings .result-area table {
        width: 100%;
    }

    .standings .result-area table>thead {
        border: 0;
        background-color: #2D2D2D;
    }

    .standings .result-area table>thead>tr>th {
        text-align: center;
        font-weight: bold;
        font-family: 'Noto Sans JP';
        letter-spacing: 0.48px;
        color: #ffffff;
        font-size: 12px;
        height: 54px;
        box-sizing: border-box;
        padding-left: 0;
    }

    .standings .result-area table>thead>tr>th:nth-of-type(8) {
        line-height: 16px;
    }

    .standings .result-area table>thead>tr>th:after {
        background-color: #ffffff;
    }

    .standings .result-area table>tbody>tr>td {
        height: 72px;
        text-align: center;
        padding: 0;
        font-family: Roboto Condensed;
        font-weight: bold;
        font-size: 13px;
    }

    .standings .result-area table>tbody>tr>td:first-of-type {
        width: 65px;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(2) {
        position: relative;
        width: 35px;
        letter-spacing: 0.28px;
        padding-right: 20px;
        box-sizing: border-box;
        text-align: right;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(2) span {
        position: absolute;
        display: inline-block;
        top: 14px;
        left: 20px;
        width: 45px;
        height: 45px;
        box-sizing: border-box;
        border: 1px solid #F5F5F5;
        text-align: center;
        line-height: 40px;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(2) span img {
        display: inline;
        max-width: 37px;
        max-height: 37px;
        background-color: #FFFFFF;
        vertical-align: middle;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(3) {
        width: 141px;
        letter-spacing: 0.32px;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(4) {
        width: 76px;
        letter-spacing: 0.32px;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(5) {
        width: 76px;
        letter-spacing: 0.32px;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(6) {
        width: 76px;
        letter-spacing: 0.32px;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(7) {
        width: 116px;
        letter-spacing: 0.32px;
    }

    .standings .result-area table>tbody>tr>td:last-of-type {
        width: 116px;
        letter-spacing: 0.32px;
    }

    .standings .result-area h5 {
        margin: 50px auto 0px auto;
        width: 1020px;
        height: 16px;
        font-size: 14px;
        letter-spacing: 0.56px;
        color: #2D2D2D;
        font-weight: normal;
        text-align: right;
    }

    @media screen and (max-width: 750px) {
        main {
            margin-bottom: 58px;
        }
        .standings .share-btn-area {
            margin-bottom: 40px;
        }
        .standings .select-area {
            margin-left: -20px;
            margin-right: -20px;
        }
        .standings .select-area .country {
            margin-bottom: 30px;
        }
        .standings .select-area .country a {
            width: 185.5px;
            height: 54px;
            margin-left: 4px;
            font-size: 12px;
            letter-spacing: 0.48px;
            font-weight: bold;
            line-height: 54px;
        }
        .standings .select-area .country a:first-of-type {
            border-radius: 0;
            margin-left: 0;
            margin-bottom: 4px;
        }
        .standings .select-area .country a:last-of-type {
            border-radius: 0;
            margin-bottom: 0;
        }
        .standings .select-area .country a:nth-child(2n+1) {
            margin-left: 0;
        }
        .standings .select-area .area {
            margin-bottom: 0;
            text-align: left;
            font-weight: bold;
        }
        .standings .select-area .area>div {
            display: none;
        }
        .standings .select-area .area>div.selected {
            display: block;
        }
        .standings .select-area .area a {
            position: relative;
            display: inline-block;
            margin-right: 2px;
            margin-bottom: 2px;
            color: #2D2D2D;
            text-decoration: none;
            text-align: center;
            background-color: #F5F5F5;
        }
        .standings .select-area .area a.active,
        .standings .select-area .area a:hover {
            color: #FFFFFF;
            background-color: #E5002D;
            opacity: 1;
        }
        .standings .select-area .area .double a {
            position: relative;
            width: 186px;
            height: 44px;
            line-height: 44px;
            font-size: 12px;
            letter-spacing: 0.48px;
        }
        .standings .select-area .area .double a:nth-of-type(2n) {
            margin-right: 0;
        }
        .standings .select-area .area .triple a {
            width: 123px;
            height: 44px;
            line-height: 44px;
            font-size: 12px;
            letter-spacing: 0.48px;
        }
        .standings .select-area .area .triple a:nth-of-type(3n) {
            margin-right: 0;
        }
        .standings .result-area {
            padding-bottom: 0px;
        }
        .standings .result-area .ranking {
            margin-left: -20px;
            margin-right: -20px;
        }
        .standings .result-area .ranking .result-table {
            overflow: auto;
        }
        .standings .result-area table {
            margin: 0;
            width: 737px;
        }
        .standings .result-area table>thead {
            border: 0;
            background-color: #2D2D2D;
        }
        .standings .result-area table>thead>tr>th {
            text-align: center;
            font-weight: bold;
            font-family: 'Noto Sans JP';
            font-size: 10px;
            letter-spacing: 0.4px;
            color: #ffffff;
            height: 40px;
            line-height: 40px;
            box-sizing: border-box;
            padding: 0;
        }
        .standings .result-area table>thead>tr>th:nth-of-type(8) {
            line-height: 14px;
        }
        .standings .result-area table>thead>tr>th:after {
            background-color: #ffffff;
        }
        .standings .result-area table>tbody>tr>td {
            height: 54px;
            text-align: center;
            padding: 0;
            font-family: Roboto Condensed;
            font-weight: 300;
            font-size: 16px;
            line-height: 54px;
        }
        .standings .result-area table>tbody>tr>td:first-of-type {
            width: 55px;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(2) {
            position: relative;
            width: 232px;
            font-size: 12px;
            letter-spacing: 0.24px;
            box-sizing: border-box;
            padding-left: 53px;
            text-align: left;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(2) span {
            position: absolute;
            display: inline-block;
            top: 0px;
            left: 9px;
            width: 35px;
            height: 35px;
            box-sizing: border-box;
            border: 0;
            text-align: center;
            line-height: 54px;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(2) span img {
            max-width: 34px;
            max-height: 34px;
            border: 1px solid #F5F5F5;
            background-color: #FFFFFF;
            vertical-align: middle;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(3) {
            width: 106px;
            letter-spacing: 0.24px;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(4) {
            width: 57px;
            letter-spacing: 0.24px;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(5) {
            width: 57px;
            letter-spacing: 0.24px;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(6) {
            width: 57px;
            letter-spacing: 0.24px;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(7) {
            width: 87px;
            letter-spacing: 0.24px;
        }
        .standings .result-area table>tbody>tr>td:last-of-type {
            width: 86px;
            letter-spacing: 0.24px;
        }
        .standings .result-area h5 {
            width: 100%;
            height: 13px;
            margin-top: 28px;
            margin-bottom: 0;
            padding-right: 16px;
            box-sizing: border-box;
            font-size: 12px;
            letter-spacing: 0.48px;
            font-weight: normal;
        }
    }

    .contents {

        width: 1200px;
        margin: 0px auto;

    }
    #dataTable1_length {
        display: none;
    }
</style>

<main class="news-article">
    <section>
        <h1><span>NEWS</span></h1>
        <div class="share-btn-area">
            <ul>
                <li>SHARE</li>
                <li><a class="share-twitter" href="http://twitter.com/share?text=&url=<?php echo esc_url($g_share_url); ?>&hashtags=3x3exe" rel="nofollow" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/btn-twitter.svg' ?>"></a></li>
                <li><a class="share-facebook" href="http://www.facebook.com/share.php?u=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/btn-facebook.svg' ?>"></a></li>
                <li><a class="share-line" href="https://social-plugins.line.me/lineit/share?url=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/btn-line.svg' ?>"></a></li>
            </ul>
        </div>
    </section>
    <section class="standings">
        <div class="contents full-width">
            <div class="select-area">
                <div class="area">
                    <div class="country">
                        <div class="double selected" style="display: block;margin: 10px;text-align: center">
                            <?php
                                $all_blog = wp_get_sites();
                                $i = 1;
                                //echo '<pre>';
                                //var_dump($all_blog);die;
                                $all_blog = [1, 5, 2, 3, 4];
                                foreach ($all_blog as $key=>$current_blog) {
                                    $current_blog_details = get_blog_details( array( 'blog_id' => $current_blog ) );
                            ?>
                            <a id="<?= strtolower(str_replace(' ', '-', $current_blog_details->blogname)); ?>" class="blogs-<?= $current_blog ?> <?= $i==1 ? 'active' : '' ?>"
                                   data-result="blog-<?= $current_blog ?>"
                                   style="width: 230px; margin-bottom: 5px;"><?= strtoupper($current_blog_details->blogname); ?></a>
                            <?php $i++; } ?>
                        </div>
                    </div>
                    <div class="conference area">
                    </div>
                </div>
            </div>
            <?php
                get_tagged_post(array(), 'news');
            ?>
        </div>
    </section>
</main>
<?php

function get_tagged_post($blogs = array(), $tag)
{
    if (count($blogs) < 1) {
        $blog_list = [1, 5, 2, 3, 4];
        foreach ($blog_list as $blog) {
            array_push($blogs, $blog);
            sort($blog_list);
        }
    }
    $posts = array();

    foreach ($blogs as $blog) {
        //if ($blog == 1) continue;
        $current_blog_details = get_blog_details( array( 'blog_id' => $blog) );
        switch_to_blog($blog);
        $args = array(
            'post_type'      => 'news', // or custom post type
            'posts_per_page' => -1, // number of posts per blog
        );
        $tagged_posts = get_posts($args);
        $count = 1;
        ?>
        <div class="blog-item blog-<?= $blog ?> <?= strtolower(str_replace(' ', '-', $current_blog_details->blogname)); ?>" style="<?= $blog == 1 ? '' : 'display: none' ?>">
            <div class="carousel article col3">
                <div class="paging">
                    <?php
                    foreach ($tagged_posts as $tagged_post) {
                        $images = wp_get_attachment_image_src(get_post_thumbnail_id($tagged_post),'news_article_pc');
                        array_push($posts, array(
                            'title' => $tagged_post->post_title,
                            'link'  => get_permalink($tagged_post->ID),
                            'time'  => get_post_time('Y.m.d', $gmt = false, $tagged_post, $translate = false),
                            'image'  => isset($images[0]) ? $images[0] : '',
                            'country_tag' => $current_blog_details->blogname
                        ));
                        ?>
                            <div class="col">
                                <a class="thumbnail" href="<?php echo get_permalink($tagged_post->ID); ?>">
                                    <picture>
                                        <img src="<?php echo isset($images[0]) ? $images[0] : '' ?>" alt="">
                                    </picture>
                                </a>
                                <div class="article-text">
                                    <div class="article-date"><?php echo get_post_time('Y.m.d', $gmt = false, $tagged_post, $translate = false); ?></div>
                                    <div class="article-tag">
                                        <a href=""># <?php echo strtoupper($current_blog_details->blogname); ?></a>
                                    </div>
                                    <p><a href="<?php echo get_permalink($tagged_post->ID); ?>"><?php echo $tagged_post->post_title; ?></a></p>
                                </div>
                            </div>
                            <?php if (($count % 15) == 0) { ?>
                            </div>
                            <div class="paging">
                            <?php } $count++; ?>
                        <?php
                    }
                    restore_current_blog();
                    ?>
                </div>
            </div>
        </div>

        <?php
    }
    ?>
    <!-- -->
<?php } ?>
<script>
    $(function() {
        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
            return false;
        };

        var tab = getUrlParameter('tab');
        console.log(tab)

        if (tab) {
            $('.select-area .country a').removeClass('active');
            $('#'+tab).addClass('active');            
            $('.contents .blog-item').hide();
            $('.contents .'+tab+'').show();
        }
        $(document).on('click', '.select-area .country a', function()
        {
            $('.select-area .country a').removeClass('active');
            $(this).addClass('active');

            $('.contents .blog-item').hide();
            var country_class = $(this).attr('data-result');
            $('.contents .'+country_class+'').show();
        });
        $('.blog-item-1').slick({
            autoplay: false,
            // adaptiveHeight: true,
            dots: true,
            arrows: true,
            prevArrow: '<div class="prev"></div>',
            nextArrow: '<div class="next"></div>'
        });

    });
</script>
<?php get_footer(); ?>
