<?php
/**
 * 3x3NEWS-archive-taxonomy (news_tag)
 *
 */
?>
<?php
$term_slug = get_query_var('news_tag');
$term = get_term_by('slug', $term_slug, 'news_tag');
$term_name = $term->name;

global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'news';
$g_page_slug = 'news-article';
$g_page_title = $term_name;

?>
<?php get_header(); ?>
<style type="text/css">
    .news-article .article.carousel .next,
    .news-article .article.carousel .prev {
        bottom: -96px;
    }
</style>
<main>
    <section>
        <h1><span>#<?php echo esc_html($term->name); ?></span></h1>
        <div class="share-btn-area">
            <ul>
                <li>SHARE</li>
                <li><a class="share-twitter" href="http://twitter.com/share?text=&url=<?php echo esc_url($g_share_url); ?>&hashtags=3x3exe" rel="nofollow" target="_blank"><img src="/office/assets/img/icon/sns/btn-twitter.svg"></a></li>
                <li><a class="share-facebook" href="http://www.facebook.com/share.php?u=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="/office/assets/img/icon/sns/btn-facebook.svg"></a></li>
                <li><a class="share-line" href="https://social-plugins.line.me/lineit/share?url=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="/office/assets/img/icon/sns/btn-line.svg"></a></li>
            </ul>
        </div>
        <div class="contents full-width">
            <div class="carousel article col3">
                <?php
                $term_slugs = [ $term_slug ];
                if(substr($term_slug, 0, 3) == 'cr-')
                {
                    $original_term_slug = substr($term_slug, 3);
                    $term_slugs = [$original_term_slug, 'all-countries'];
                }

                $args = [
                    'posts_per_page' => -1,
                    'tax_query' => [
                        'relation' => 'OR',
                        [
                            'taxonomy' => 'news_tag',
                            'field' => 'slug',
                            'terms' => $term_slugs
                        ],
                    ],
                ];
                $query = new WP_Query($args);
                ?>
                <?php if($query->have_posts()): ?>
                <div class="paging">
                    <?php
                    $count = 1;
                    ?>
                    <?php while($query->have_posts()): $query->the_post(); ?>
                    <div class="col">
                        <a class="thumbnail" href="<?php the_permalink(); ?>">
                            <picture>
                                <source media="(max-width: 750px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_post_thumbnail_id(), 'news_article_sp')[0]); ?> 2x">
                                <source media="(min-width: 751px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_post_thumbnail_id(), 'news_article_pc')[0]); ?>">
                                <img src="<?php echo esc_url(wp_get_attachment_image_src(get_post_thumbnail_id(), 'news_article_pc')[0]); ?>" alt="">
                            </picture>
                        </a>
                        <div class="article-text">
                            <div class="article-date"><?php the_time('Y.m.d') ?></div>
                            <div class="article-tag">
                                <?php
                                $terms = get_the_terms($post->ID, 'news_tag');
                                if (!empty($terms) && !is_wp_error($terms))
                                {
                                    foreach($terms as $term)
                                    {
                                        ?>
                                        <a href="<?php echo get_term_link($term); ?>"># <?php echo esc_html($term->name); ?></a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                        </div>
                    </div>
                    <?php
                    if(($count % 15) == 0)
                    {
                        ?>
                        </div><div class="paging">
                        <?php
                    }
                    $count ++;
                    ?>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
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
                <div class="col">
                    <h2><span>INSTAGRAM</span></h2>
                    <div class="sns-area insta">
                        <a href="https://instawidget.net/v/user/3x3.exe" id="link-5526ef76d47d1dccf0e44e5356969553df62d9d60b63e50544b0aa7766c8458f">@3x3.exe</a>
                        <script async src="https://instawidget.net/js/instawidget.js?u=5526ef76d47d1dccf0e44e5356969553df62d9d60b63e50544b0aa7766c8458f&width=320px"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
