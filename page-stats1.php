<?php

/**
 * TOP
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'stats';
$g_page_title = '3x3.EXE PREMIER';
$g_page_slug = 'stats';
?>

<?php get_header(); ?>
<main>
    <section>
        <h1><span>STATS</span></h1>
    </section>
    <section>
    <?php
            $year = '2022';//!empty($_GET['y']) ? $_GET['y'] : 2021;
            if (empty($year)) {
        ?>
            <div class="comming-soon">
                COMING SOON
            </div>
        <?php } else { ?>
           <div class="contents full-width">
        <!-- <form id="" action="http://3x3exe.local/office/schedules/" method="GET" style="text-align: right;margin: 10px 15px;">
            <select name="year" onchange="this.form.submit()" style="padding: 5px;width: 200px;border-radius: 5px;margin: 10px 0px;">
                <option value="">Select Year</option>
                <option value="2022" <?= $year == '2022' ? 'selected="true"' : '' ?>>2022</option>
                <option value="2021" <?= $year == '2021' ? 'selected="true"' : '' ?>>2021</option>
                <option value="2020" <?= $year == '2020' ? 'selected="true"' : '' ?>>2020</option>
                <option value="2019" <?= $year == '2019' ? 'selected="true"' : '' ?>>2019</option>
            </select>
        </form> -->
            <div class="select-area">
                <div class="area">
                    <div class="country">
                        <div class="double selected" style="display: block;margin: 10px;text-align: center">
                            <?php
                            $stats = Display3x3Data::stats($year);
                            ?>
                            <?php
                            $i = 1;
                            foreach ($stats as $key => $_stat) : if (empty($key) || strpos($key, 'NZL')) continue; ?>
                                <a class="country-item <?= $i == 1 ? 'active' : '' ?>"
                                   data-result="<?= strtolower(str_replace(' ', '-', $key)) ?>"
                                   ><?= $key ?></a>
                                <?php $i++; endforeach; ?>
                        </div>
                    </div>
                    <div class="conference area">
                        <?php
                        $i = 1;
                        $searchVal = array("-NZL", "NZL", "THAILAND", "-THA", "-JPN", "-THA", " CHINESE TAIPEI", "-TEP", "JAPAN");
                        foreach ($stats as $key => $_stat) : if (empty($key)) continue; ?>
                            <div class="<?= strtolower(str_replace(' ', '-', $key)) ?> double selected <?= $i == 1 ? '' : 'hide' ?>">
                                <?php
                                $k = 1;
                                foreach ($_stat as $conference => $_sch) : ?>
                                    <a class="<?= $k == 1 ? 'active' : '' ?>"
                                       data-conference="<?= strtolower(str_replace(' ', '-', $conference)) ?>"
                                       data-country="<?= strtolower(str_replace(' ', '-', $key)) ?>"><?php

                                            echo str_replace($searchVal, '', $conference); ?></a>
                                    <?php $k++;endforeach; ?>
                            </div>
                        <?php $i++;endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="standings-result result-area" >
                <!-- <a href="<?php echo get_theme_file_uri( 'assets/pdf/aaa.pdf' ); ?>">aaa</a> -->
                <?php

                $colors = [
                            1 => 'gold',
                            2 => 'silver',
                            3 => 'bronze',
                            4 => 'bronze',
                            5 => 'bronze',
                        ];
                        $i = 1;
                foreach ($stats as $key => $_stats) :
                    foreach ($_stats as $key1 => $_statss) : ?>
                            <?php foreach ($_statss as $_sch) : ?>
                             <div data-country="<?= strtolower(str_replace(' ', '-', $key)) ?>" class="area-item result-item result-stats result-<?= strtolower(str_replace(' ', '-', $key1)) ?>" style="<?= $i == 1 ? 'display: block;' : 'display: none;'?> ">
                                <?php foreach ($_sch['stats_teams'] as $_sch) : ?>
                                    <h2>
                                        <span><?= strtoupper($_sch['start_name']) ?></span>
                                    </h2>
                                    <ul>
                                        <?php $rank = 1; ?>
                                        <?php foreach ($_sch['stats_teams_details'] as $_detail) : ?>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <img src="<?php echo $_detail['player_avatar'] ?>"  onerror="this.onerror=null;this.src='https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/player.png';" />
                                                        <div class="num num-ms <?= $colors[$rank] ?>"><?php echo sprintf('%02d', $rank); ?></div>
                                                    </li>
                                                    <li><span><?php echo $_detail['point']; ?></span>/ points</li>
                                                    <li>
                                                        <ul>
                                                            <li># <?php echo $_detail['number']; ?></li>
                                                            <li><?php echo $_detail['player_name_katakana'] ?></li>
                                                            <li><?php echo $_detail['player_name'] ?> </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li><img src="<?php echo $_detail['team_avatar'] ?>" onerror="this.onerror=null;this.src='https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/no-team.png';" /></li>
                                                            <li><?php echo $_detail['team_name'] ?></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <?php
                                            $rank ++;
                                            ?>
                                        <?php endforeach;?>
                                    </ul>
                                <?php endforeach; ?>
                            </div>
                            <?php $i++;endforeach; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>

            </div>
        </div>
        <?php } ?>
    </section>
</main>
<script src="<?= esc_url(get_template_directory_uri()) . '/assets/js/stats.js' ?>"></script>
<?php get_footer(); ?>
