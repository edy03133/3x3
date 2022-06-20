<?php

/**
 * TOP
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_title = '3x3.EXE PREMIER';
$g_page_category = 'schedule';
$g_page_slug = 'schedule-detail';
$default_image = esc_url(get_template_directory_uri()) . '/assets/img/team.png';
?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()) . '/assets/css/schedule-detail.css'; ?>"
      media="all">
<main class="schedule-detail">
    <?php
    $round_id = !empty($_GET['round']) ? $_GET['round'] : 9;
    if (!empty($round_id)) {
        $result = Display3x3Data::scheduleDetail($round_id);
        if (!empty($result['name'])) {
            ?>
            <section>
                <h1><span>SCHEDULE / RESULT</span></h1>

                <div class="contents" style="margin-top: 70px">
                    <div class="carousel">
                        <div class="next-round">

                            <div class="conference_title">
                                <h2><?= $result['name'] ?></h2>
                                <div class="conference_schedule">
                                    <p><?= strtoupper($result['round_name']) ?></p>
                                    <p><?= date('m/d D', strtotime($result['general']['event_date'])) ?></p>
                                </div>
                            </div>
                            <?php if ($result['general']['conference_fixed_text_show_hide_id'] == 2) { ?>
                                <div class="conference_info">
                                    <a class="time" href="#time"><?= $result['general']['open_time'] ?></a>
                                    <a class="location" href="#access"><?= $result['general']['venue_name'] ?></a>
                                    <a class="ticket" <?php echo $result['general']['ticket_status_name'] ? 'style="text-align: center"' : '' ?>
                                       href="<?= $result['general']['ticket_url'] ?>"
                                        <?php if ($result['general']['ticket_status_id'] !== 2) echo "style='pointer-events: none;cursor: default;'"; ?>
                                       target="_blank">TICKET
                                        <div class="<?= strtolower(str_replace(' ', '-', $result['general']['ticket_status_name'])); ?>"></div>
                                    </a>
                                    <?php if ($result['live_vod']['youtube_link']) { ?>
                                        <a class="live" href="<?= $result['live_vod']['youtube_link'] ?>">LIVE VOD</a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <div class="tCenter">
                            </div>
                            <div class="tCenter">
                                <?php if ($result['general']['round_sponsor_name']) { ?>
                                    <a class="arrow sponsor" href="<?= $result['general']['round_sponsor_link'] ?>"
                                       target="_blank"><span>ROUND SPONSOR</span><span><?= $result['general']['round_sponsor_name'] ?></span></a>
                                <?php } ?>
                            </div>
                            <?php if ($result['resule_group_show_hide_id'] == 2) { ?>
                                <div class="conference_group">
                                    <div class="col2">
                                        <?php foreach ($result['groups'] as $name => $group): ?>
                                            <div class="col">
                                                <div class="group-type"><?= $name ?></div>
                                                <div class="group-team">
                                                    <?php foreach ($group as $team): ?>
                                                        <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $team['team_id'] ?>"
                                                           target="_blank">
                                                            <img src="<?= $team['avatar'] ? $team['avatar'] : $default_image ?>"
                                                                 data-original="<?= $team['avatar'] ?>"
                                                                 style="">
                                                        </a>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php if ($result['result_time_table_show_hide_id'] == 2) { ?>
                <section id="time">
                    <h1 class="sub"><span>TIME TABLE / RESULT</span></h1>
                    <div class="contents">
                        <div class="phase">
                            <?php $i = 1;
                            foreach ($result['time_tables'] as $time):
                                $game_type = $time['match_type_name'];
                                $kinds_name = $time['kinds_name'];
                                $event_participation = $kinds_name == 'User participation event' ? 'event-participation' : '';
                                $icon = ($game_type == 'Qualifying') ? 's' : (($game_type == 'Semifinal') ? 'm' : 'l final');
                                ?>

                                <?php if (!empty($time['kinds_id']) && $time['kinds_id'] != 3) { ?>
                                <div class="event">
                                    <div class="event-time"><?= $time['time']; ?></div>
                                    <div class="event-name <?= $event_participation ?>"><?= strtoupper($time['event_name']); ?></div>
                                </div>
                            <?php } ?>
                                <?php if (!empty($time['kinds_id']) && $time['kinds_id'] == 3) { ?>
                                <?php foreach ($time['matchs'] as $match):
                                    //if (empty($match['left_team_id'] )) continue;
                                    $participating_team = $match['participating_team_status_id'];
                                    ?>
                                    <div class="result">
                                        <div class="result-time">
                                            <span class="num num-<?php echo $icon; ?>"><?= $i++; ?></span>
                                            <span class="time"><?= $time['time'] ?></span>
                                        </div>
                                        <div class="result-team-left" style="line-height: 64px">
                                            <?php if ($participating_team == 1) { ?>
                                                <span><?= $match['left_team_decision_conditiion_name'] ?></span>
                                            <?php } ?>

                                            <?php if ($participating_team == 2) { ?>
                                                <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $match['left_team_id'] ?>"><img
                                                            src="<?= $match['left_team_avatar'] ?>" style=""></a>
                                                <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $match['left_team_id'] ?>"><span><?= $match['left_team_name'] ?></span></a>

                                            <?php } ?>

                                        </div>
                                        <div class="result-score">
                                            <span><?= $match['left_core'] > 0 ? $match['left_core'] : '' ?></span>
                                            <div class="result-score-mark">
                                            </div>
                                            <span><?= $match['right_core'] > 0 ? $match['right_core'] : '' ?></span>
                                        </div>
                                        <div class="result-team-right" style="text-align: left;">
                                            <?php if ($participating_team == 1) { ?>
                                                <span><?= $match['right_team_decision_conditiion_name'] ?></span>
                                            <?php } ?>

                                            <?php if ($participating_team == 2) { ?>
                                                <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $match['right_team_id'] ?>"><img
                                                            src="<?= $match['right_team_avatar'] ?>" style=""></a>
                                                <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $match['right_team_id'] ?>"><span><?= $match['right_team_name'] ?></span></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php } ?>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            <?php } ?>
            <?php if ($result['result_poster_show_hide_id'] == 2) { ?>
                <section>
                    <h1 class="sub"><span>PLAYERS</span></h1>
                    <div class="contents">
                        <div class="roster">
                            <div class="roster-top">
                                <!--                        <img src="https://www.3x3exe.com/premier/assets/img/logo_black.svg"-->
                                <!--                             data-original="https://www.3x3exe.com//premier/assets/img/logo_black.svg">-->
                                <p>3x3 EXE PREMIER 2022<br><?= $result['round_name'] ?></p>
                                <p class="small"><?= $result['conference'] ?></p>
                            </div>
                            <div class="col3-2">
                                <?php foreach ($result['posters'] as $roster): ?>
                                    <div class="col roster-team">
                                        <div class="roster-icon">
                                            <a style="width: 100%;text-align: center"
                                               href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $roster['team_id'] ?>">
                                                <img src="<?= $roster['avatar'] ? $roster['avatar'] : $default_image; ?>">
                                            </a>
                                        </div>
                                        <dl>
                                            <?php foreach ($roster['players'] as $player): ?>
                                                <dt># <?= $player['number']; ?></dt>
                                                <dd>
                                                    <a style="width: 100%;text-align: center"
                                                       href="<?= get_bloginfo('url') ?>/player-detail?pid=<?= $player['player_id'] ?>&t=<?= $roster['team_id'] ?>">
                                                        <?= $player['name']; ?>
                                                    </a>
                                                </dd>
                                            <?php endforeach; ?>
                                        </dl>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>
            <?php if ($result['result_access_show_hide_id'] == 2) { ?>
                <section id="access">
                    <h1 class="sub"><span>VENUE INFORMATION</span></h1>
                    <div class="contents access">
                        <div class="column-block access">
                            <div class="left-block">
                                <p><?= $result['access']['venue_japanese'] ?></p>
                                <p class="small"><?= $result['access']['venue_english'] ?></p>
                                <div class="underline"></div>
                                <div class="access-info">

                                    <ul>
                                        <li>ADDRESS</li>
                                        <li><?= $result['access']['address'] ?></li>
                                    </ul>
                                    <ul>
                                        <li>ACCESS</li>
                                        <li><?= nl2br($result['access']['methods_of_transport']) ?></li>
                                    </ul>
                                    <ul>
                                        <li>WEBSITE</li>
                                        <li><a href="<?= $result['access']['website_link'] ?>"
                                               target="_blank"><?= $result['access']['website_link'] ?></a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>INFORMATION</li>
                                        <li><?= $result['access']['information'] ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right-block">
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>
            <?php if ($result['result_live_vod_show_hide_id'] == 2) { ?>
                <section id="live">
                    <h1 class="sub"><span>LIVE VOD</span></h1>
                    <?php if ($result['live_vod']['result_live_vod_youtube_status_id'] == 2) { ?>
                        <div class="contents live-vod">
                            <div class="tCenter">
                                <a class="arrow" href="<?= $result['live_vod']['youtube_link'] ?>"
                                   target="_blank"><span>LIVE</span></a>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($result['live_vod']['result_live_vod_youtube_status_id'] == 3) { ?>
                        <div class="contents live-vod">
                            <div class="tCenter">
                                <a class="arrow" href="<?= $result['live_vod']['youtube_link'] ?>"
                                   target="_blank"><span>ARCHIVE</span></a>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($result['live_vod']['result_live_vod_youtube_status_id'] == 5) { ?>
                        <div class="contents live-vod">
                            <div class="tCenter">
                                <p style="margin: 0;font-size: 20px;font-weight: bold;line-height: 40px;">NO
                                    LIVESTREAM</p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($result['live_vod']['result_live_vod_youtube_status_id'] == 1 || $result['live_vod']['result_live_vod_youtube_status_id'] == 4) { ?>
                        <div class="contents live-vod">
                            <div class="tCenter">
                                <p style="margin: 0;font-size: 20px;font-weight: bold;line-height: 40px;">COMING
                                    SOON</p>
                            </div>
                        </div>
                    <?php } ?>
                </section>
            <?php } ?>
            <?php if ($result['result_commendation_show_hide_id'] == 2) { ?>
                <section>
                    <h1 class="sub"><span>COMMENDATION</span></h1>
                    <div class="contents commendation">
                        <div class="column-block">
                            <div class="left-block commendation">
                                <div class="commendation-title">1st PLACE</div>
                                <div class="commendation-icon">
                                    <?php if ($result['commendation']['onest_place_team_avatar']) { ?>
                                        <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $result['commendation']['onest_place_team_id'] ?>">
                                            <img src="<?= $result['commendation']['onest_place_team_avatar'] ? $result['commendation']['onest_place_team_avatar'] : 'https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/no-team.png' ?>"
                                                 style="">
                                        </a>
                                    <?php } else { ?>
                                        <img src="<?= $result['commendation']['twond_place_team_avatar'] ? $result['commendation']['twond_place_team_avatar'] : 'https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/no-team.png' ?>"
                                                 style="">
                                    <?php } ?>
                                </div>
                                <div class="commendation-name"><a
                                            href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $result['commendation']['onest_place_team_id'] ?>"><?= $result['commendation']['onest_place_team_name'] ?></a>
                                </div>
                            </div>
                            <div class="right-block">
                                <picture>
                                    <?php if ($result['commendation']['onest_place_team_image']) { ?>
                                        <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $result['commendation']['onest_place_team_id'] ?>"><img
                                                    src="<?= $result['commendation']['onest_place_team_image'] ? $result['commendation']['twond_place_team_avatar'] : 'https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/no-team.png' ?>"
                                                    alt=""></a>
                                    <?php } ?>
                                </picture>
                            </div>
                        </div>
                        <div class="column-block">
                            <div class="left-block commendation">
                                <div class="commendation-title">2nd PLACE</div>
                                <div class="commendation-icon">
                                    <?php if ($result['commendation']['twond_place_team_avatar']) { ?>
                                        <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $result['commendation']['twond_place_team_id'] ?>">
                                            <img src="<?= $result['commendation']['twond_place_team_avatar'] ? $result['commendation']['twond_place_team_avatar'] : 'https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/no-team.png' ?>"
                                                 style="">
                                        </a>
                                    <?php } else { ?>
                                        <img src="<?= $result['commendation']['twond_place_team_avatar'] ? $result['commendation']['twond_place_team_avatar'] : 'https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/no-team.png' ?>"
                                                 style="">
                                    <?php } ?>

                                </div>
                                <div class="commendation-name">
                                    <?php if ($result['commendation']['twond_place_team_name']) { ?>
                                        <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $result['commendation']['twond_place_team_id'] ?>">
                                            <?= $result['commendation']['twond_place_team_name'] ?></a>
                                    <?php } else { ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="right-block">
                                <picture>
                                    <?php if ($result['commendation']['twond_place_team_image']) { ?>
                                        <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $result['commendation']['twond_place_team_id'] ?>">
                                            <img src="<?= $result['commendation']['twond_place_team_image'] ? $result['commendation']['twond_place_team_image'] : 'https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/no-team.png' ?>"
                                                 alt="">
                                        </a>
                                    <?php } ?>
                                </picture>
                            </div>
                        </div>
                        <div class="column-block">
                            <div class="left-block commendation">
                                <div class="commendation-title">MVP</div>
                                <div class="mvp-icon">
                                    <?php if ($result['commendation']['mvp_place_team_avatar']) { ?>
                                        <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $result['commendation']['mvp_team_id'] ?>">
                                            <img src="<?= $result['commendation']['mvp_place_team_avatar'] ? $result['commendation']['mvp_place_team_avatar'] : 'https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/player.png' ?>"
                                                 alt="">
                                        </a>
                                    <?php } else { ?>
                                        <img src="<?= $result['commendation']['mvp_place_team_avatar'] ? $result['commendation']['mvp_place_team_avatar'] : 'https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/player.png' ?>"
                                                 alt="">
                                    <?php } ?>
                                </div>
                                <?php foreach ($result['commendation']['player_mvp'] as $player_mvp): ?>
                                    <div class="mvp-profile">
                                        <div class="mvp-player">
                                            <div class="mvp-number"><?= $player_mvp['number'] ?></div>
                                            <div class="mvp-name">
                                                <span>
                                                    <a href="<?= get_bloginfo('url') ?>/player-detail?n=<?= $player_mvp['id'] ?>">
                                                    <?= $player_mvp['player_name'] ?>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mvp-team">
                                            <!-- <div class="mvp-team-icon">
                                                <img src="<? /*= $player_mvp['avatar'] */ ?>" style="">
                                            </div>-->
                                            <div class="mvp-team-name">
                                                <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $result['commendation']['mvp_team_id'] ?>">
                                                    <?= $result['commendation']['mvp_team_name'] ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="right-block">
                                <picture
                                <?php if ($result['commendation']['mvp_team_avatar']) { ?>
                                    <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $result['commendation']['mvp_team_id'] ?>">
                                        <img src="<?= $result['commendation']['mvp_team_avatar'] ? $result['commendation']['mvp_team_avatar'] : 'https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/no-team.png' ?>" alt="">
                                    </a>
                                <?php } ?>
                                </picture>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>
            <div class="tCenter">
                <a class="arrow" href="<?= $site_url ?>/schedule/"><span>SCHEDULE / RESULT LIST</span></a>
            </div>
            <?php
        }
    }
    ?>
</main>
<?php get_footer(); ?>
