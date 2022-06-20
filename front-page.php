<?php

/**
 * TOP
 *
 */
?>
<?php
    $g_page_title = '3x3.EXE PREMIER';
    $g_page_category = '';
    $g_page_slug = '3x3news';
    $g_page_title = '3x3 NEWS';
?>

<?php get_header(); ?>

<main id="top-news">


        <?php
            echo do_shortcode('[smartslider3 slider="2"]');
        ?>

    <div class="main-wrapper">
        <div class="left-section">
            <section>
                <div class="contents top news">
                    <div class="col2-deviation">
                        <div class="col main-col">

                            <div class="information">
                                <h2 class="title">
                                    latest News
                                    <!-- <div class="btn-list"></div> -->
                                </h2>
                                <div class="pick-up">
                                    <?php get_latest_post(); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>

        <aside class="sns">
            <div class="contents sns">
                <div class="col3">
                    <div class="col">
                        <h2><span>TWITTER</span></h2>
                        <div class="sns-area twitter"><a class="twitter-timeline" data-lang="ja" data-width="316" data-height="436" data-theme="light" href="https://twitter.com/3x3league?ref_src=twsrc%5Etfw" style="background-color: red;">Tweets by 3x3league</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                    <div class="col">
                        <h2><span>FACEBOOK</span></h2>
                        <div class="sns-area facebook"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F3x3OFFICIAL%2F&tabs=timeline&width=320&height=440&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="320" height="440" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>
                        <!-- <div class="fb-page" data-href="https://www.facebook.com/3x3OFFICIAL/" data-tabs="timeline" data-width="320px" data-height="440px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/3x3OFFICIAL/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/3x3OFFICIAL/">3x3OFFICIAL</a></blockquote></div> -->
                    </div>
                    <!-- <div class="col">
                        <h2><span>INSTAGRAM</span></h2>
                        <div class="sns-area insta">
                            <a href="https://instawidget.net/v/user/3x3.exe" id="link-970aaab2d7351b9ddadba54fc655aadd15be54c060da80c72254b65cad564727">@3x3.exe</a>
                            <script async src="https://instawidget.net/js/instawidget.js?u=970aaab2d7351b9ddadba54fc655aadd15be54c060da80c72254b65cad564727&width=316px"></script>
                        </div>
                    </div> -->
                </div>
            </div>
        </aside>
    </div>

</main>
<?php get_footer(); ?>

<?php

function get_latest_post()
{
    $blogs = [];
    $blog_list = wp_get_sites();
    foreach ($blog_list as $blog) {
        array_push($blogs, $blog['blog_id']);
    }
    $posts = array();

    foreach ($blogs as $blog) {
        if ($blog == 1) continue;
        $current_blog_details = get_blog_details(array('blog_id' => $blog));
        switch_to_blog($blog);
        $args = array(
            'post_type'      => 'news', // or custom post type
            'posts_per_page' => 2, // number of posts per blog
        );
        $tagged_posts = get_posts($args);
        foreach ($tagged_posts as $tagged_post) {
            $images = wp_get_attachment_image_src(get_post_thumbnail_id($tagged_post), 'recommendation_sp');
            array_push($posts, array(
                'title'       => $tagged_post->post_title,
                'link'        => get_permalink($tagged_post->ID),
                'time'        => get_post_time('Y.m.d', $gmt = false, $tagged_post, $translate = false),
                'image'       => isset($images[0]) ? $images[0] : '',
                'country_tag' => $current_blog_details->blogname
            ));
        }
    }
    $count = 1;
    foreach ($posts as $post) { ?>
        <div class="article">
            <a class="thumbnail" href="<?php echo $post['link']; ?>">
                <picture>
                    <img src="<?php echo $post['image']; ?>" alt="">
                </picture>
            </a>
            <dl>
                <dt><?php echo $post['time']; ?></dt>
                <dt>
                   # <?php echo strtoupper($post['country_tag']); ?>
                </dt>
            </dl>
            <p><a href="<?php echo $post['link']; ?>"><?php echo esc_html($post['title']); ?></a></p>
        </div>
    <?php } ?>
<?php } ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v13.0" nonce="g47sXnfT"></script>
