<?php
/**
 * RESULT-single
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'schedule';
$g_page_slug = 'schedule-detail';
$g_page_title = '';

$conf_term = get_the_terms($post->ID, 'result2019_conference');
$conf_name = $conf_term[0]->name;
$conf_name = (get_field('general_suffix')) ? $conf_name . ' CONFERENCE' : $conf_name;

$round_term = get_the_terms($post->ID, 'result2019_round');
$round_name = $round_term[0]->name;

$date = date('n/j', strtotime(get_field('general_date')));

$g_page_title = $conf_name . ' ' . $round_name . ' ' . $date;

?>
<?php get_header(); ?>
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

<script type="text/javascript" src="/office/assets/js/ohen.js"></script>
<main>
    <section>
        <h1><span>2020 SCHEDULE / RESULT</span></h1>
        <div class="share-btn-area">
            <ul>
                <li>SHARE</li>
                <li><a class="share-twitter" href="http://twitter.com/share?text=&url=<?php echo esc_url($g_share_url); ?>&hashtags=3x3exe" rel="nofollow" target="_blank"><img src="/office/assets/img/icon/sns/btn-twitter.svg"></a></li>
                <li><a class="share-facebook" href="http://www.facebook.com/share.php?u=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="/office/assets/img/icon/sns/btn-facebook.svg"></a></li>
                <li><a class="share-line" href="https://social-plugins.line.me/lineit/share?url=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="/office/assets/img/icon/sns/btn-line.svg"></a></li>
            </ul>
        </div>
        <div class="contents">
            <div class="carousel">
                <div class="next-round">
                    <div class="conference_title">
                        <h2><?php echo esc_html($conf_name); ?></h2>
                        <div class="conference_schedule">
                            <p><?php echo esc_html($round_name); ?></p>
                            <p><?php echo esc_html(date('n/j D', strtotime(get_field('general_date')))); ?></p>
                        </div>
                    </div>
                    <div class="conference_info">
                        <a class="time" href="#time"><?php echo esc_html(get_field('general_datetime')); ?></a>
                        <a class="location" href="#access"><?php echo esc_html(get_field('general_place')); ?></a>
                        <?php
                        switch (get_field('general_ticket'))
                        {
                            case 0:
                                ?>
                                <div class="ticket">TICKET</div>
                                <?php
                                break;
                            case 1:
                                ?>
                                <a class="ticket" href="<?php echo esc_url(get_field('general_ticket_url')); ?>" target="_blank">TICKET<div class="on-sale"></div></a>
                                <?php
                                break;
                            case 2:
                                ?>
                                <div class="ticket">TICKET<div class="sold-out"></div></div>
                                <?php
                                break;
                            default:
                                ?>
                                <div class="ticket">TICKET</div>
                                <?php
                                break;
                        }
                        ?>
                        <a class="live" href="#live">LIVE VOD</a>
                    </div>

                    <?php if(get_field('banner_show') == 1): ?>
                    <div class="tCenter">
                        <?php
                        $team = get_term(get_field('banner_item'), 'result2019_banner');
                        $cat_data = get_option('cat_' . $team->term_id);
                        $text = $cat_data['text'];
                        $link = $cat_data['link'];
                        if($link != '')
                        {
                            ?>
                            <a class="arrow free" href="<?php echo esc_url($link); ?>"><?php echo $text; ?></a>
                            <?php
                        }
                        ?>
                    </div>
                    <?php endif; ?>

                    <?php if(get_field('general_sponsor_name') != ''): ?>
                    <div class="tCenter">
                        <a class="arrow sponsor" href="<?php echo esc_url(get_field('general_sponsor_link')); ?>" target="_blank"><span>ROUND SPONSOR</span><span><?php echo esc_html(get_field('general_sponsor_name')); ?></span></a>
                    </div>
                    <?php endif; ?>

                    <?php if(get_field('group_show') == 1): ?>
                        <?php if(have_rows('group_teams')): the_row(); ?>
                            <div class="conference_group">
                                <div class="col2">

                                    <?php if(have_rows('group-a')): ?>
                                    <div class="col">
                                        <div class="group-type">GROUP<span>A</span></div>
                                        <div class="group-team">
                                            <?php while(have_rows('group-a')): the_row(); ?>
                                                <?php
                                                $team = get_term(get_sub_field('team'), 'result2019_team');
                                                $cat_data = get_option('cat_' . $team->term_id);
                                                $link = $cat_data['link'];
                                                if($link != '')
                                                {
                                                    ?>
                                                    <a href="<?php echo esc_url($link); ?>" target="_blank"><img src="/office/assets/img/team/<?php echo $team->slug; ?>.png"></a>
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <div><img src="/office/assets/img/team/<?php echo $team->slug; ?>.png"></div>
                                                    <?php
                                                }
                                                ?>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <?php if(have_rows('group-b')): ?>
                                    <div class="col">
                                        <div class="group-type">GROUP<span>B</span></div>
                                        <div class="group-team">
                                            <?php while(have_rows('group-b')): the_row(); ?>
                                                <?php
                                                $team = get_term(get_sub_field('team'), 'result2019_team');
                                                $cat_data = get_option('cat_' . $team->term_id);
                                                $link = $cat_data['link'];
                                                if($link != '')
                                                {
                                                    ?>
                                                    <a href="<?php echo esc_url($link); ?>" target="_blank"><img src="/office/assets/img/team/<?php echo $team->slug; ?>.png"></a>
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <div><img src="/office/assets/img/team/<?php echo $team->slug; ?>.png"></div>
                                                    <?php
                                                }
                                                ?>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <?php if(have_rows('group-c')): ?>
                                    <div class="col">
                                        <div class="group-type">GROUP<span>C</span></div>
                                        <div class="group-team">
                                            <?php while(have_rows('group-c')): the_row(); ?>
                                                <?php
                                                $team = get_term(get_sub_field('team'), 'result2019_team');
                                                $cat_data = get_option('cat_' . $team->term_id);
                                                $link = $cat_data['link'];
                                                if($link != '')
                                                {
                                                    ?>
                                                    <a href="<?php echo esc_url($link); ?>" target="_blank"><img src="/office/assets/img/team/<?php echo $team->slug; ?>.png"></a>
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <div><img src="/office/assets/img/team/<?php echo $team->slug; ?>.png"></div>
                                                    <?php
                                                }
                                                ?>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php if(get_field('timetable_show') == 1): ?>
    <section id="time">
        <h1 class="sub"><span>TIME TABLE / RESULT</span></h1>
        <div class="contents">
            <div class="phase">
                <?php
                $game_count = 1;
                ?>
                <?php if(have_rows('timetable_events')): while(have_rows('timetable_events')): the_row(); ?>
                    <?php
                    $time = date('H : i', strtotime(get_sub_field('time') . ':00'));
                    $event_type = get_sub_field('event_type');
                    $event_name = get_sub_field('event_name');

                    switch ($event_type)
                    {
                        case 'join';
                            ?>
                            <div class="event">
                                <div class="event-time"><?php echo esc_html($time); ?></div>
                                <div class="event-name event-participation"><?php echo esc_html($event_name); ?></div>
                            </div>
                            <?php
                            break;

                        case 'nojoin';
                            ?>
                            <div class="event">
                                <div class="event-time"><?php echo esc_html($time); ?></div>
                                <div class="event-name"><?php echo esc_html($event_name); ?></div>
                            </div>
                            <?php
                            break;

                        case 'match';
                            $game_type = get_sub_field('game_type');
                            $icon = ($game_type == 'match') ? 's' : (($game_type == 'semifinal') ? 'm' : 'l final');
                            $inner_count = 0;
                            ?>
                            <?php if(have_rows('games')): while(have_rows('games')): the_row(); ?>
                            <?php
                            $time = ($inner_count == 0) ? $time : '';
                            ?>
                            <?php
                            if(get_sub_field('status') == 1)
                            {
                                $l_team = get_term(get_sub_field('left_name'), 'result2019_team');
                                $l_score = get_sub_field('left_score');
                                $r_team = get_term(get_sub_field('right_name'), 'result2019_team');
                                $r_score = get_sub_field('right_score');
                                ?>
                                <div class="result">
                                    <div class="result-time"><span class="num num-<?php echo $icon; ?>"><?php echo $game_count; ?></span><span class="time"><?php echo esc_html($time); ?></span></div>
                                    <div class="result-team-left">
                                        <span><?php echo esc_html(getTeamName($l_team->name)); ?></span>
                                        <a><img src="/office/assets/img/team/<?php echo $l_team->slug; ?>.png"></a>
                                    </div>
                                    <div class="result-score">
                                        <span><?php echo esc_html($l_score); ?></span>
                                        <div class="result-score-mark">
                                            <?php if(get_sub_field('stats') != ''): ?>
                                            <a class="stats" href="<?php echo get_sub_field('stats'); ?>" target="_blank"></a>
                                            <?php endif; ?>
                                            <?php if(get_sub_field('vod') != ''): ?>
                                                <a class="vod" href="<?php echo get_sub_field('vod'); ?>" target="_blank"></a>
                                            <?php endif; ?>
                                        </div>
                                        <span><?php echo esc_html($r_score); ?></span>
                                    </div>
                                    <div class="result-team-right">
                                        <a><img src="/office/assets/img/team/<?php echo $r_team->slug; ?>.png"></a>
                                        <span><?php echo esc_html(getTeamName($r_team->name)); ?></span>
                                    </div>
                                </div>
                                <?php
                            }
                            else
                            {
                                $l_text = get_term(get_sub_field('left_text'), 'result2019_timetable_text');
                                $r_text = get_term(get_sub_field('right_text'), 'result2019_timetable_text');
                                ?>
                                <div class="result undecided">
                                    <div class="result-time"><span class="num num-<?php echo $icon; ?>"><?php echo $game_count; ?></span><span class="time"><?php echo esc_html($time); ?></span></div>
                                    <div class="result-team-left">
                                        <span><?php echo esc_html($l_text->name); ?></span>
                                    </div>
                                    <div class="result-score">
                                        <span></span>
                                        <div class="result-score-mark">
                                        </div>
                                        <span></span>
                                    </div>
                                    <div class="result-team-right">
                                        <span><?php echo esc_html($r_text->name); ?></span>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <?php
                            $inner_count ++;
                            $game_count ++;
                            ?>
                            <?php endwhile; endif; ?>
                            <?php
                            break;

                        default:
                            break;
                    }
                    ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!--                --><?php //if(get_field('players_show') == 1): ?>
    <!--                    <section>-->
    <!--                        <h1 class="sub"><span>PLAYERS</span></h1>-->
    <!--                        <div class="contents">-->
    <!--                            <div class="roster">-->
    <!--                                --><?php //if(get_field('players_image') != ''): ?>
    <!--                                    <picture>-->
    <!--                                        <source media="(max-width: 750px)" srcset="--><?php //echo esc_url(wp_get_attachment_image_src(get_field('players_image'), 'full')[0]); ?><!-- 2x">-->
    <!--                                        <source media="(min-width: 751px)" srcset="--><?php //echo esc_url(wp_get_attachment_image_src(get_field('players_image'), 'full')[0]); ?><!--">-->
    <!--                                        <img class="access" src="--><?php //echo esc_url(wp_get_attachment_image_src(get_field('players_image'), 'full')[0]); ?><!--" alt="">-->
    <!--                                    </picture>-->
    <!--                                --><?php //endif; ?>
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </section>-->
    <!--                --><?php //endif; ?>

    <?php if(get_field('roster_show') == 1): ?>
        <section>
            <h1 class="sub"><span>PLAYERS</span></h1>
            <div class="contents">
                <div class="roster">
                    <div class="roster-top">
                        <img src="/office/assets/img/logo_black.svg">
                        <p>3x3 EXE PREMIER 2020<br><?php echo esc_html($round_name) ?></p>
                        <p class="small"><?php echo esc_html($conf_name) ?></p>
                    </div>
                    <div class="col3-2">
                        <?php if(have_rows('roster_teams')): while(have_rows('roster_teams')): the_row(); ?>
                            <?php
                            $team = get_term(get_sub_field('team'), 'result2019_team');
                            ?>
                            <div class="col roster-team">
                                <div class="roster-icon">
                                    <img src="/office/assets/img/team/<?php echo $team->slug ?>.png">
                                </div>
                                <dl>
                                    <?php if(have_rows('players')): while(have_rows('players')): the_row(); ?>
                                        <dt># <?php echo esc_html(get_sub_field('number')); ?></dt>
                                        <dd><?php echo esc_html(get_sub_field('player_name')); ?></dd>
                                    <?php endwhile; endif; ?>
                                </dl>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if(get_field('access_show') == 1): ?>
    <section id="access">
        <h1 class="sub"><span>ACCESS</span></h1>
        <div class="contents access">
            <div class="column-block access">
                <div class="left-block">
                    <p><?php echo esc_html(get_field('access_name_en')); ?></p>
                    <p class="small"><?php echo esc_html(get_field('access_name_jp')); ?></p>
                    <div class="underline"></div>
                    <div class="access-info">
                        <ul>
                            <li>ACCESS</li>
                            <li><?php echo (get_field('access_access')); ?></li>
                        </ul>
                        <ul>
                            <li>ADDRESS</li>
                            <li><?php echo (get_field('access_address')); ?></li>
                        </ul>
                        <ul>
                            <li>WEBSITE</li>
                            <li><a href="<?php echo esc_url(get_field('access_url')); ?>" target="_blank"><?php echo esc_html(get_field('access_url')); ?></a></li>
                        </ul>
                        <ul>
                            <li>INFORMATION</li>
                            <li><?php echo (get_field('access_information')); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="right-block">
                    <?php if(get_field('access_image') != ''): ?>
                        <picture>
                            <source media="(max-width: 750px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_field('access_image'), 'access_sp')[0]); ?> 2x">
                            <source media="(min-width: 751px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_field('access_image'), 'access_pc')[0]); ?>">
                            <img class="access" src="<?php echo esc_url(wp_get_attachment_image_src(get_field('access_image'), 'access_pc')[0]); ?>" alt="">
                        </picture>
                    <?php endif; ?>
                </div>
            </div>
            <?php
            $access_map = get_field('access_map');
            if(!empty($access_map))
            {
                ?>
<!--                <div class="acf-map">-->
<!--                    <div class="marker" data-lat="--><?php //echo $access_map['lat']; ?><!--" data-lng="--><?php //echo $access_map['lng']; ?><!--"></div>-->
<!--                </div>-->
                <?php
            }

            ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if(get_field('vod_show') == 1): ?>
    <section id="live">
        <h1 class="sub"><span>LIVE VOD</span></h1>
        <div class="contents live-vod">
        <?php
        $vod_status = get_field('vod_status');
        switch($vod_status)
        {
            case 'prepared':
                ?>
                <div class="tCenter">
                    <a class="not-yet">Coming soon</a>
                </div>
                <?php
                break;

            case 'live':
                $vod_archivelink = get_field('vod_archivelink_live');
                ?>
                <div class="tCenter">
                    <a class="arrow" href="<?php echo esc_url($vod_archivelink); ?>" target="_blank"><span>LIVE｜Youtube</span></a>
                </div>
                <?php
                break;

            case 'live_r2019':
                $vod_liveid = get_field('vod_liveid');
                $vod_livetxtid = get_field('vod_livetxtid');
                ?>
            <div class="oh-container-master" id="oh-container-master-<?php echo esc_html($vod_liveid) ?>"><ul class="oh-pagin" id="oh-pagin-<?php echo esc_html($vod_liveid) ?>"></ul><ul class="oh-container" id="oh-container-<?php echo esc_html($vod_liveid) ?>"></ul><div class="oh_iframe_parent"><iframe class="oh_iframe" allow="autoplay" allowfullscreen="true"></iframe><div class="close_iframe_button" data="<?php echo esc_html($vod_liveid) ?>">X</div></div></div>
            <!--Main embed code-->
            <script>
                ohDocumentSync(
                    {
                        params: {sort: "",current_page: 1, page_limit: 1, txt_id: <?php echo esc_html($vod_livetxtid); ?>, txt_title: "", txt_stream_name: "", txt_user_id: "", sel_sport: "", sel_channel: "",check_delivery_live: 0, check_delivery_vod: 0, check_inprepare: 0, check_during_delivery: 0, check_delivery_complete: 0, check_vod_applying: 0,check_live_applying: 0, check_userpermis_autho: 0, check_userpermis_no_autho: 0, check_recommend: 2},
                        col: 1,
                        row: 1,
                        textOnVideo: 1,
                        id: "<?php echo esc_html($vod_liveid) ?>",
                        backgroundTitle: 1,
                        displaySportLabel: 1,
                        playButton: 0,
                        imgWidth: 0,
                        maxItemOnPage: 0,
                        media_server: "wse01.oh-en2.com",
                        pageSize: 0,
                        settings: {padding : 10,titlePadding: 5, ratioWidth: 1, ratioHeight: 1},
                        single_video: 1
                    }
                );
            </script>
        <?php
        break;

            case 'ondemand':
            $vod_archivelink = get_field('vod_archivelink_archive');
                ?>
                <div class="tCenter">
                    <a class="arrow" href="<?php echo esc_url($vod_archivelink); ?>" target="_blank"><span>ARCHIVE</span></a>
                </div>
                <?php
                break;

            default:
                break;
        }
        ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if(get_field('commendation_show') == 1): ?>
        <section>
            <h1 class="sub"><span>COMMENDATION</span></h1>
            <div class="contents commendation">
                <div class="column-block">
                    <?php if(have_rows('commendation_place1')): while(have_rows('commendation_place1')): the_row(); ?>
                        <?php
                        $team = get_term(get_sub_field('team'), 'result2019_team');
                        ?>
                        <div class="left-block commendation">
                            <div class="commendation-title">1st PLACE</div>
                            <div class="commendation-icon">
                                <img src="/office/assets/img/team/<?php echo $team->slug; ?>.png">
                            </div>
                            <div class="commendation-name"> <?php echo esc_html(getTeamName($team->name)); ?> </div>
                        </div>
                        <div class="right-block">
                            <?php if(get_sub_field('image')): ?>
                                <picture>
                                    <source media="(max-width: 750px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_sub_field('image'), 'commendation_image_sp')[0]); ?> 2x">
                                    <source media="(min-width: 751px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_sub_field('image'), 'commendation_image_pc')[0]); ?>">
                                    <img src="<?php echo esc_url(wp_get_attachment_image_src(get_sub_field('image'), 'commendation_image_pc')[0]); ?>" alt="">
                                </picture>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="column-block">
                    <?php if(have_rows('commendation_place2')): while(have_rows('commendation_place2')): the_row(); ?>
                        <?php
                        $team = get_term(get_sub_field('team'), 'result2019_team');
                        ?>
                        <div class="left-block commendation">
                            <div class="commendation-title">2nd PLACE</div>
                            <div class="commendation-icon">
                                <img src="/office/assets/img/team/<?php echo $team->slug; ?>.png">
                            </div>
                            <div class="commendation-name"> <?php echo esc_html(getTeamName($team->name)); ?> </div>
                        </div>
                        <div class="right-block">
                            <?php if(get_sub_field('image')): ?>
                                <picture>
                                    <source media="(max-width: 750px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_sub_field('image'), 'commendation_image_sp')[0]); ?> 2x">
                                    <source media="(min-width: 751px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_sub_field('image'), 'commendation_image_pc')[0]); ?>">
                                    <img src="<?php echo esc_url(wp_get_attachment_image_src(get_sub_field('image'), 'commendation_image_pc')[0]); ?>" alt="">
                                </picture>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="column-block">
                    <?php if(have_rows('commendation_mvp')): while(have_rows('commendation_mvp')): the_row(); ?>
                        <?php
                        $team = get_term(get_sub_field('team'), 'result2019_team');
                        ?>
                        <div class="left-block commendation">
                            <div class="commendation-title">MVP</div>
                            <div class="mvp-icon">
                                <picture>
                                    <source media="(max-width: 750px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_sub_field('image_player'), 'commendation_player_sp')[0]); ?> 2x">
                                    <source media="(min-width: 751px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_sub_field('image_player'), 'commendation_player_pc')[0]); ?>">
                                    <img src="<?php echo esc_url(wp_get_attachment_image_src(get_sub_field('image_player'), 'commendation_player_pc')[0]); ?>" alt="">
                                </picture>
                            </div>
                            <div class="mvp-profile">
                                <div class="mvp-player">
                                    <div class="mvp-number"><?php echo esc_html(get_sub_field('number')); ?></div>
                                    <div class="mvp-name"><?php echo esc_html(get_sub_field('name_jp')); ?><span><?php echo esc_html(get_sub_field('name_en')); ?></span></div>
                                </div>
                                <div class="mvp-team">
                                    <div class="mvp-team-icon">
                                        <img src="/office/assets/img/team/<?php echo $team->slug; ?>.png">
                                    </div>
                                    <div class="mvp-team-name"><?php echo esc_html(getTeamName($team->name)); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="right-block">
                            <?php if(get_sub_field('image')): ?>
                                <picture>
                                    <source media="(max-width: 750px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_sub_field('image'), 'commendation_image_sp')[0]); ?> 2x">
                                    <source media="(min-width: 751px)" srcset="<?php echo esc_url(wp_get_attachment_image_src(get_sub_field('image'), 'commendation_image_pc')[0]); ?>">
                                    <img src="<?php echo esc_url(wp_get_attachment_image_src(get_sub_field('image'), 'commendation_image_pc')[0]); ?>" alt="">
                                </picture>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="tCenter">
                    <a class="arrow" href="/office/schedule/"><span>SCHEDULE / RESULT LIST</span></a>
                </div>
            </div>
        </section>
    <?php endif; ?>

</main>
<?php get_footer(); ?>
