<?php
/**
 * 3x3NEWS-single
 *
 */
?>
<?php if(have_posts()): the_post(); ?>
<?php
// view count
if(!is_user_logged_in() && !is_robots())
{
    setPostViews(get_the_ID());
}

global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'news';
$g_page_slug = 'article';
$g_page_title = get_the_title();
//$str_width = (is_mobile()) ? 20 : 60;
//$g_page_title = mb_strimwidth(get_the_title(), 0, $str_width, '...', 'UTF-8');

$ids = getTargetPostId();
$news_top_post_id = $ids['3x3news_top'];

global $g_ogp_img_src;
$g_ogp_img_src = (wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'))[0];

?>
<?php get_header(); ?>
<main>
    <section>
        <div class="contents">
            <div class="col2-deviation">
                <div class="col main-col">
                    <div class="article-header">
                        <h1><?php the_title(); ?></h1>
                        <div class="post-time"><?php the_time('Y.m.d') ?></div>
                        <?php
                        if (!empty($terms) && !is_wp_error($terms))
                        {
                            ?>
                            <div class="tags">
                            <?php
                            foreach($terms as $term)
                            {
                                ?>
                                <a href="<?php echo get_term_link($term); ?>"># <?php echo esc_html($term->name); ?></a>
                                <?php
                            }
                            ?>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="share-btn-area">
                            <ul>
                                <li>SHARE</li>
                                <li><a class="share-twitter" href="http://twitter.com/share?text=&url=<?php echo esc_url($g_share_url); ?>&hashtags=3x3exe" rel="nofollow" target="_blank"><img src="/office/assets/img/icon/sns/btn-twitter.svg"></a></li>
                                <li><a class="share-facebook" href="http://www.facebook.com/share.php?u=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="/office/assets/img/icon/sns/btn-facebook.svg"></a></li>
                                <li><a class="share-line" href="https://social-plugins.line.me/lineit/share?url=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="/office/assets/img/icon/sns/btn-line.svg"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="article-content">
                        <?php echo getPostViews(); ?>
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col side-col">
                    <div class="side-panel">
                    <div class="side-header side-header-single">
                            <h4>
                                PICK UP
                            </h4>
                        </div>
                        <div class="side-content">
                        <a href="https://www.3x3exe.com/premier/2022_playerentries_ja.html" class="banner-entries img-03">
                                <img src="<?= esc_url(get_template_directory_uri()) . '/assets/img/playerenties23_0328.png' ?>"
                                        alt="">
                            </a>
                            <a href="https://www.3x3exe.com/premier/jpn/3x3news/articles/220316/" class="img-02">
                                <img src="<?= esc_url(get_template_directory_uri()) . '/assets/img/performer.png' ?>"
                                        alt="">
                            </a>
                        </div>
                    </div>
                    <!-- <div class="article-ranking">
                        <h1><span>RANKING</span>
                            <div class="btn-list"></div>
                        </h1>
                        <?php
                        $args = [
                            'post_type' => 'news',
                            'meta_key' => 'view_count',
                            'orderby' => 'meta_value_num',
                            'order' => 'DESC',
                            'posts_per_page' => 5,
                        ];

                        $query = new WP_Query($args);

                        if($query->have_posts())
                        {
                            ?>
                            <ul>
                            <?php

                            $rank = 1;
                            $color = '';
                            while($query->have_posts())
                            {
                                $query->the_post();

                                $color = ($rank == 1) ? 'gold' : (($rank == 2) ? 'silver' : 'bronze');
                                ?>
                                <li>
                                    <ul>
                                        <li><a class="thumbnail" href="<?php the_permalink() ?>">
                                                <picture>
                                                    <source media="(max-width: 750px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_post_thumbnail_id(), 'news_article_sp')[0]); ?> 2x">
                                                    <source media="(min-width: 751px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_post_thumbnail_id(), 'news_article_pc')[0]); ?>">
                                                    <img src="<?php echo esc_url(wp_get_attachment_image_src(get_post_thumbnail_id(), 'news_article_pc')[0]); ?>" alt="">
                                                </picture>
                                            </a>
                                            <div class="num num-ss <?php echo $color; ?>"><?php echo esc_html($rank); ?></div>
                                        </li>
                                        <li><a href="<?php the_permalink() ?>"><?php echo esc_html(get_the_title()); ?></a></li>
                                    </ul>
                                </li>
                                <?php
                                $rank ++;
                            }

                            ?>
                            </ul>
                            <?php
                        }
                        wp_reset_postdata();

                        ?>
                    </div>
                    <div class="article-tags">

                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <section>
        <h1 class="sub"><span>RECOMMENDATION</span></h1>
        <div class="contents">
            <div class="carousel recommendation col3">
                <?php if(have_rows('recommendation_posts', $news_top_post_id)): while(have_rows('recommendation_posts', $news_top_post_id)): the_row(); ?>
                    <?php
                    $post_id = get_sub_field('post');
                    setup_postdata(get_post($post_id));
                    ?>
                    <div class="col">
                        <a href="<?php echo esc_url(get_the_permalink($post_id)); ?>"><img src="<?php echo esc_url(get_the_post_thumbnail_url($post_id)); ?>"></a>
                        <div class="recommendation-text">
                            <div class="recommendation-date"><?php echo esc_html(get_the_time('Y.m.d', $post_id)); ?></div>
                            <?php
                            $terms = get_the_terms($post_id, 'news_tag');
                            if (!empty($terms) && !is_wp_error($terms))
                            {
                                ?>
                                <div class="recommendation-tag">
                                    <?php
                                    foreach($terms as $term)
                                    {
                                        ?>
                                        <a href="<?php echo get_term_link($term); ?>"># <?php echo esc_html($term->name); ?></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                            <p><a href="<?php echo esc_html(get_the_permalink($post_id)); ?>"><?php echo esc_html(get_the_title($post_id)); ?></a></p>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <section>
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
    </section>
</main>
<?php get_footer(); ?>
<?php endif; ?>
