<?php

/**
 * TOP
 *
 */
?>
<?php
    $g_page_title = '3x3.EXE PREMIER';
?>
<?php get_header(); ?>
<link rel="stylesheet" href="/office/assets/css/new.css" media="all">
<style type="text/css">
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
</style>
<main style="margin-top: 30px;">
    <section>
        <div class="contents news   ">
            <div class="col2-deviation">
                <div class="col">
                    <div class="information">
                        <div class="pick-up">
                            <?php
                            $args = [
                                'post_type' => 'news',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'posts_per_page' => 1,
                            ];

                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();

                            ?>
                                    <div class="article">
                                        <a class="thumbnail" href="<?php the_permalink() ?>">
                                            <picture>
                                                <img src="<?php echo esc_url(wp_get_attachment_image_src(get_post_thumbnail_id(), 'news_kv_sp')[0]); ?>" alt="" style="width: 100%;">
                                            </picture>
                                        </a>
                                        <dl>
                                            <dt><?php the_time('Y.m.d'); ?></dt>
                                            <dt>
                                                <?php
                                                $terms = get_the_terms($post->ID, 'news_tag');
                                                if (!empty($terms) && !is_wp_error($terms)) {
                                                    foreach ($terms as $term) {
                                                ?>
                                                        <a href="<?php echo get_term_link($term); ?>"># <?php echo esc_html($term->name); ?></a>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </dt>
                                        </dl>
                                        <p><a href="<?php the_permalink() ?>"><?php echo esc_html(get_the_title()); ?></a></p>
                                    </div>
                            <?php
                                }
                            }
                            wp_reset_postdata();

                            ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="ranking ranking-fiba-premier fiba">
                        <div class="accordion">
                            <div class="gender">
                                <a class="title btn-fiba-gender active" data-type="0">NORTHEN ISLANDS</a>
                                <a class="title btn-fiba-gender" data-type="1">KANTO</a>
                                <a class="title btn-fiba-gender" data-type="1">CETRAL TOKYO</a>
                                <a class="title btn-fiba-gender" data-type="1">BEYZONE</a>
                                <a class="title btn-fiba-gender" data-type="1">CENTRAL MAIN</a>
                                <a class="title btn-fiba-gender" data-type="1">WEST MAIN</a>
                                <a class="title btn-fiba-gender" data-type="1">SOUTHERN ISLAND</a>
                                <a class="title btn-fiba-gender" data-type="1">WOMEN’S</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="contents">
            <div class="col2-deviation">
                <div class="col">
                    <div class="information">
                        <h2 class="title">INFORMATION<div class="btn-list"></div>
                        </h2>
                        <div class="accordion">
                            <div class="latest">
                                <dl>
                                    <?php
                                    if(have_rows('information_posts')): while(have_rows('information_posts')): the_row(); ?>
                                        <?php
                                        $post_id = get_sub_field('post');
                                        setup_postdata(get_post($post_id));
                                        ?>
                                        <dt><?php echo esc_html(get_the_time('Y.m.d', $post_id)); ?></dt>
                                        <dd><a href="<?php echo esc_url(get_the_permalink($post_id)); ?>"><?php echo esc_html(get_the_title($post_id)); ?></a></dd>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endwhile; endif; ?>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ranking ranking-ja" style="display: none;">
                        <h2 class="title">3x3.EXE PREMIER PLAYER RANKING<div class="btn-list"></div>
                        </h2>
                        <div class="accordion">
                            <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th>NAME</th>
                                <th>TEAM</th>
                                <th><div>FIBA</div><div>PREMIER</div></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $rank = 1; ?>
                            <?php if(have_rows('rank1_players')): while(have_rows('rank1_players')): the_row(); ?>
                                <?php
                                $color = ($rank == 1) ? 'gold' : (($rank == 2) ? 'silver' : (($rank == 3) ? 'bronze' : ''));
                                $player_name = get_sub_field('player_name');
                                $team = get_term(get_sub_field('team'), 'result2019_team');
                                $point_fiba = get_sub_field('point_fiba');
                                $point_premier = get_sub_field('point_premier');
                                ?>
                                <tr>
                                    <td><span class="icon-num <?php echo $color; ?>"><?php echo sprintf('%02d', $rank); ?></span></td>
                                    <td><?php echo esc_html($player_name); ?></td>
                                    <td><?php echo esc_html(getTeamName($team->name)); ?></td>
                                    <td>
                                        <div><?php echo esc_html(($point_fiba != '') ? number_format($point_fiba) : ''); ?></div>
                                        <div><?php echo esc_html(($point_premier != '') ? number_format($point_premier) : ''); ?></div>
                                    </td>
                                </tr>
                                <?php
                                $rank ++;
                                ?>
                            <?php endwhile; endif; ?>
                            <tr><td colspan="4"><h5>Last Update : <?php echo (get_field('rank1_players_last_update') != '') ? date('Y/m/d', strtotime(get_field('rank1_players_last_update'))) : '';?></h5></td></tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="ranking ranking-ja">
                        <h2 class="title">3x3.EXE PREMIER PLAYER RANKING<div class="btn-list"></div>
                        </h2>
                        <div class="accordion">
                            <table>
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>NAME</th>
                                    <th>TEAM</th>
                                    <th>POINTS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $rank = 1; ?>
                                <?php if(have_rows('rank1_players')): while(have_rows('rank1_players')): the_row(); ?>
                                    <?php
                                    $color = ($rank == 1) ? 'gold' : (($rank == 2) ? 'silver' : (($rank == 3) ? 'bronze' : ''));
                                    $player_name = get_sub_field('player_name');
                                    $team = get_term(get_sub_field('team'), 'result2019_team');
                                    $point = get_sub_field('point');
                                    ?>
                                    <tr>
                                        <td><span class="icon-num <?php echo $color; ?>"><?php echo sprintf('%02d', $rank); ?></span></td>
                                        <td><?php echo esc_html($player_name); ?></td>
                                        <td><?php echo esc_html(getTeamName($team->name)); ?></td>
                                        <td><?php echo esc_html(($point != '') ? number_format($point) : ''); ?></td>
                                    </tr>
                                    <?php
                                    $rank ++;
                                    ?>
                                <?php endwhile; endif; ?>
                                <tr><td colspan="4"><h5>Last Update : <?php echo (get_field('rank1_players_last_update') != '') ? date('Y/m/d', strtotime(get_field('rank1_players_last_update'))) : '';?></h5></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="ranking ranking-fiba-premier fiba">
                        <h2 class="title">FIBA 3x3 FEDERATION RANKING<div class="btn-list"></div>
                        </h2>
                        <div class="accordion">
                            <div class="gender">
                                <a class="title btn-fiba-gender active" data-type="0">MEN</a>
                                <a class="title btn-fiba-gender" data-type="1">WOMAN</a>
                            </div>
                            <table class="tb-fiba">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>COUNTRY</th>
                                    <th>POINTS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $rank = 1; ?>
                                <?php if(have_rows('rank2_countries')): while(have_rows('rank2_countries')): the_row(); ?>
                                    <?php
                                    $color = ($rank == 1) ? 'gold' : (($rank == 2) ? 'silver' : (($rank == 3) ? 'bronze' : ''));
                                    $country = get_term(get_sub_field('country'), 'news_country_flag');
                                    $point = get_sub_field('point');
                                    ?>
                                    <tr>
                                        <td><span class="icon-num <?php echo $color; ?>"><?php echo sprintf('%02d', $rank); ?></span></td>
                                        <td>
<!--                                            <span class="flag --><?php //echo esc_html($country->slug) ?><!--"></span>-->
                                            <?php echo esc_html($country->name) ?></td>
                                        <td><?php echo esc_html(($point != '') ? number_format($point) : '');; ?></td>
                                    </tr>
                                    <?php
                                    $rank ++;
                                    ?>
                                <?php endwhile; endif; ?>
                               </tbody>
                            </table>
                            <table class="tb-fiba" style="display: none">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>COUNTRY</th>
                                    <th>POINTS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $rank = 1; ?>
                                <?php if(have_rows('rank3_countries')): while(have_rows('rank3_countries')): the_row(); ?>
                                    <?php
                                    $color = ($rank == 1) ? 'gold' : (($rank == 2) ? 'silver' : (($rank == 3) ? 'bronze' : ''));
                                    $country = get_term(get_sub_field('country'), 'news_country_flag');
                                    $point = get_sub_field('point');
                                    ?>
                                    <tr>
                                        <td><span class="icon-num <?php echo $color; ?>"><?php echo sprintf('%02d', $rank); ?></span></td>
                                        <td>
<!--                                            <span class="flag --><?php //echo esc_html($country->slug) ?><!--"></span>-->
                                            <?php echo esc_html($country->name) ?></td>
                                        <td><?php echo esc_html(($point != '') ? number_format($point) : '');; ?></td>
                                    </tr>
                                    <?php
                                    $rank ++;

                                    ?>
                                <?php endwhile; endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="ranking ranking-fiba-premier premier" style="display: block;">
                        <div class="accordion">
                            <table class="tb-premier">
                                <tbody>
                                <?php if(have_rows('rank4_countries')): while(have_rows('rank4_countries')): the_row(); ?>
                                    <?php
                                    $rank = get_sub_field('rank');
                                    $color = ($rank == 1) ? 'gold' : (($rank == 2) ? 'silver' : (($rank == 3) ? 'bronze' : ''));
                                    $country = get_term(get_sub_field('country'), 'news_country_flag');
                                    $point = get_sub_field('point');
                                    ?>
                                    <tr>
                                        <td><span class="icon-num <?php echo $color; ?>"><?php echo sprintf('%02d', $rank); ?></span></td>
                                        <td>
                                            <!--                                            <span class="flag --><?php //echo esc_html($country->slug) ?><!--"></span>-->
                                            <?php echo esc_html($country->name) ?></td>
                                        <td><?php echo esc_html(($point != '') ? number_format($point) : '');; ?></td>
                                    </tr>
                                <?php endwhile; endif; ?>
                                <tr><td colspan="3"><h5>Last Update : <?php echo (get_field('rank2_countries_last_update') != '') ? date('Y/m/d', strtotime(get_field('rank2_countries_last_update'))) : '';?></h5></td></tr>
                                </tbody>
                            </table>
                            <table class="tb-premier" style="display: none">
                                <tbody>
                                <?php if(have_rows('rank5_countries')): while(have_rows('rank5_countries')): the_row(); ?>
                                    <?php
                                    $rank = get_sub_field('rank');
                                    $color = ($rank == 1) ? 'gold' : (($rank == 2) ? 'silver' : (($rank == 3) ? 'bronze' : ''));
                                    $country = get_term(get_sub_field('country'), 'news_country_flag');
                                    $point = get_sub_field('point');
                                    ?>
                                    <tr>
                                        <td><span class="icon-num <?php echo $color; ?>"><?php echo sprintf('%02d', $rank); ?></span></td>
                                        <td>
                                            <!--                                            <span class="flag --><?php //echo esc_html($country->slug) ?><!--"></span>-->
                                            <?php echo esc_html($country->name) ?></td>
                                        <td><?php echo esc_html(($point != '') ? number_format($point) : '');; ?></td>
                                    </tr>
                                <?php endwhile; endif; ?>
                                <tr><td colspan="3"><h5>Last Update : <?php echo (get_field('rank3_countries_last_update') != '') ? date('Y/m/d', strtotime(get_field('rank3_countries_last_update'))) : '';?></h5></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
