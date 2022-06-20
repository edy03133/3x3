<?php
/**
 *
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'teams';
$g_page_slug = 'teams';
$g_page_title = 'Team';

?>
<?php get_header(); ?>
<main>

    <?php
    $year = 2022;//!empty($_GET['y']) ? $_GET['y'] : 2021;
    if (empty($year)) { ?>
        <section>
            <h1><span>Coming Soon</span></h1>
        </section>
    <?php } else { ?>

        <script src="<?= esc_url(get_template_directory_uri()) . '/assets/js/teams.js' ?>"></script>
        <section class="teams">
            <div class="contents">
                <div class="select-area">
                    <div class="area">
                        <div class="country">
                            <div class="double selected" style="display: block;text-align: center">
                                <?php
                                $teams = Display3x3Data::teams($year);
                                ?>
                                <?php
                                $i = 1;
                                foreach ($teams as $key => $_schedule) : if (empty($key) || strpos($key, 'NZL')) continue; ?>
                                    <a class="<?= $i == 1 ? 'active' : '' ?>"
                                       data-result="<?= strtolower(str_replace(' ', '-', $key)) ?>"
                                       style="width: 230px; margin-bottom: 5px;"><?= $key ?></a>
                                    <?php $i++; endforeach; ?>
                            </div>
                        </div>
                        <div class="conference area">
                            <?php
                            $k = 1;
                            $searchVal = array("-NZL", "THAILAND", "-THA", "-JPN", "-THA", " CHINESE TAIPEI", "-TEP", "JAPAN");
                            foreach ($teams as $key => $_schedule) : if (empty($key)) continue; ?>
                                <div class="<?= $k == 1 ? '' : 'hide' ?> <?= strtolower(str_replace(' ', '-', $key)) ?> double selected"
                                     style="display: block;">
                                    <?php
                                    foreach ($_schedule as $conference => $_sch) : ?>
                                        <a style="width: 240px;" class="<?= $k == 1 ? 'active' : '' ?>"
                                           data-conference="<?= strtolower(str_replace(' ', '-', $conference)) ?>"
                                           data-country="<?= strtolower(str_replace(' ', '-', $key)) ?>">


                                           <?php

                                            echo str_replace($searchVal, '', $conference); ?></a>
                                        <?php $k++;endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="schedules-result result-area" style="margin-top: 100px">
                            <?php
                            $i = 1;
                            foreach ($teams as $key => $_team) : if (empty($key)) continue; ?>
                                <div data-country="<?= strtolower(str_replace(' ', '-', $key)) ?>"
                                     class="area-item result-item result-<?= strtolower(str_replace(' ', '-', $key)) ?>"
                                     data-area="1" style="<?= $i == 1 ? 'display: block;' : 'display: none;' ?> ">
                                    <div class="result-table col3-2">
                                     <?php $k = 1;
                                     foreach ($_team as $conference => $data) : $j = 1;
                                            foreach ($data as $team) :
                                                ?>
                                                <div class="col roster-team conference-item <?= $k == 1 ? 'active' : 'hide' ?> <?= strtolower(str_replace(' ', '-', $conference)) ?>">
                                                    <div class="roster-icon">
                                                        <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $team['team_id'] ?>" style="width: 320px;">
                                                            <img alt="<?= $team['team_name'] ?>" src="<?= $team['team_avatar'] ? $team['team_avatar'] : 'https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/team.png' ?>" style="width: 220px;background:transparent"
                                                        ></a>

                                                    </div>
                                                </div>
                                     <?php endforeach; ?><?php $k++;endforeach; ?>
                                    </div>
                                </div>
                            <?php $i++;endforeach; ?>
                        </div>
                    </div>
                </div>
        </section>
    <?php } ?>
</main>
<?php get_footer(); ?>
