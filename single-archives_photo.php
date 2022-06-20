<?php
/**
 * GALLERY 2018 (single post)
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'gallery2018';
$g_page_slug = 'gallery2018';
$g_page_title = get_the_title();

?>
<?php get_header(); ?>
<main>
    <section>
        <h1><span>2018 GALLERY</span></h1>
        <div class="share-btn-area">
            <ul>
                <li>SHARE</li>
                <li><a class="share-twitter" href="http://twitter.com/share?text=&url=<?php echo esc_url($g_share_url); ?>&hashtags=3x3exe" rel="nofollow" target="_blank"><img src="/office/assets/img/icon/sns/btn-twitter.svg"></a></li>
                <li><a class="share-facebook" href="http://www.facebook.com/share.php?u=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="/office/assets/img/icon/sns/btn-facebook.svg"></a></li>
                <li><a class="share-line" href="https://social-plugins.line.me/lineit/share?url=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="/office/assets/img/icon/sns/btn-line.svg"></a></li>
            </ul>
        </div>
        <div class="contents">
            <div class="result-area">
                <div class="result">
                    <div class="game">
                        <?php
                        $args = [
                            'post_type' => 'archives_photo',
                            'posts_per_page' => -1,
                        ];
                        $query = new WP_Query($args);

                        if($query->have_posts())
                        {
                            $posts = $query->posts;
                            $current = get_the_ID();

                            foreach($posts as $post)
                            {
                                $is_current = ($current == $post->ID) ? 'active' : '';
                                ?>
                                <a class="<?php echo $is_current; ?>" href="<?php echo esc_html(get_permalink($post->ID)); ?>"><?php echo esc_html(get_the_title($post->ID)); ?></a>
                                <?php
                            }
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="result-img">
                        <?php if(have_rows('area')): while(have_rows('area')): the_row(); ?>
                        <?php
                            $areaname = get_sub_field('areaname');
                            $areaname = ($areaname == '@') ? '' : $areaname;
                            $photos = get_sub_field('photos');
                        ?>
                        <div class="result-img-chilid">
                            <h2><span><?php echo esc_html($areaname); ?></span></h2>
                            <?php
                            foreach($photos as $photo)
                            {
                                $link = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $photo['url'];

                                $src = str_replace('.jpg', '-300x200.jpg', $link);
                                $size = 'width="300" height="200"';
                                if(!isExistUrl($src))
                                {
                                    $src = str_replace('.jpg', '-200x300.jpg', $link);
                                    $size = 'width="200" height="300"';
                                }
                                ?>
                                <a href="<?php echo esc_url($link); ?>" target="_blank">
                                    <img <?php echo $size; ?> src="<?php echo esc_url($src); ?>" class="attachment-medium size-medium" alt="" srcset="<?php echo esc_url($src); ?> 300w, <?php echo esc_url($link); ?> 720w" sizes="(max-width: 300px) 100vw, 300px">
                                </a>
                                <?php
                            }
                            ?>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
