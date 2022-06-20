<?php

/**
 * TOP
 *
 */
?>
<?php
    $g_page_title = '3x3.EXE PREMIER';
    $g_page_category = 'rank';
    $g_page_slug = 'rank';
?>

<?php get_header(); ?>
<?php
$domain = 'https://3x3exe.com/team-manager';
//$domain = 'https://xsm-stg.sakura.ne.jp/team-manager';
$url = $domain . '/api/v1/points/top?sex=1';
$response = wp_remote_get($url, $args = array('timeout'     => 120000,));

if (is_array($response) && !is_wp_error($response)) {
    $headers = $response['headers']; // array of http header lines
    $men    = json_decode($response['body']); // use the content
}

$url_women = $domain . '/api/v1/points/top?sex=2';
$url_women_re = wp_remote_get($url_women, $args = array('timeout'     => 120000,));

if (is_array($url_women_re) && !is_wp_error($url_women_re)) {
    $headers = $url_women_re['headers']; // array of http header lines
    $women    = json_decode($url_women_re['body']); // use the content
}
?>
<script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js" integrity="sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<?php if (count($men) > 13) { ?>
    <script>
        jQuery(function () {
            jQuery('#dataTable1').DataTable({
                searching: false,
                "iDisplayLength": 50,
            });
        })
    </script>
<?php } ?>
<?php if (count($women) > 13) { ?>
    <script>
        jQuery(function () {
            jQuery('#dataTable2').DataTable({
                searching: false,
                "iDisplayLength": 50,
            });
        });
    </script>
<?php } ?>

<main>
    <section>
        <h1><span>RANKING</span></h1>

        <div class="contents">
            <div class="tab_contents rank_content_tab" style="padding: 50px; margin-bottom: 30px">
                <ul class="btn filter">
                    <li class="select">MEN'S</li>
                    <li>WOMEN'S</li>
                </ul>
                <ul class="box" style="margin-top: 50px;">
                    <li>
                        <?php if (count($men) > 1) { ?>
                            <div class="top-player">
                                <div class="main_cont-inner news_contents">
                                    <ul class="rank_list">
                                        <li class="first" style="position: relative;">
                                            <div class="col-info">
                                                <span class="point"><?= number_format($men[0]->total_points, 0, '.', '') ?> PTS</span>
                                                <h5>
                                                    <?= $men[0]->name ?>
                                                </h5>
                                                <p>
                                                    <!--<img width="40" height="30" alt="Netherlands" class=" ls-is-cached lazyloaded" data-src="/flags/4x3/nl.svg" src="/flags/4x3/nl.svg">-->
                                                    <?php if ($men[0]->team_country) {
                                                        ?>
                                                        <img width="40" height="30" src="https://www.3x3exe.com/wp/wp-content/themes/33exe/assets/flats/flag_<?= str_replace(' ', '', strtolower($men[0]->team_country)).'.svg' ?>" alt="">
                                                        <?php
                                                    } ?>
                                                    <?= isset($men[0]->team_name) ? $men[0]->team_name : 'TR' ?>
                                                </p>
                                            </div>
                                            <div class="col-img">
                                                <img src="<?= $domain . '/storage/' . $men[0]->avatar ?>" alt="">
                                            </div>
                                        </li>
                                        <li class="second" style="position: relative;">
                                            <div class="col-info">
                                                <span class="point"><?= number_format($men[1]->total_points, 0, '.', '') ?> PTS</span>
                                                <h5><?= $men[1]->name ?></h5>
                                                <p>
                                                    <?php if ($men[1]->team_country) {
                                                        ?>
                                                        <img width="40" height="30" src="https://www.3x3exe.com/wp/wp-content/themes/33exe/assets/flats/flag_<?= str_replace(' ', '', strtolower($men[1]->team_country)).'.svg' ?>" alt="">
                                                        <?php
                                                    } ?>
                                                    <?= isset($men[1]->team_name) ? $men[1]->team_name : 'TR' ?>
                                                </p>
                                            </div>
                                            <div class="col-img">
                                                <img src="<?= $domain . '/storage/' . $men[1]->avatar ?>" alt="">
                                            </div>
                                        </li>
                                        <li class="third" style="position: relative;">
                                            <div class="col-info">
                                                <span class="point"><?= number_format($men[2]->total_points, 0, '.', '') ?> PTS</span>
                                                <h5><?= $men[2]->name ?></h5>
                                                <p>

                                                    <?php if ($men[2]->team_country) {
                                                        ?>
                                                        <img width="40" height="30" src="https://www.3x3exe.com/wp/wp-content/themes/33exe/assets/flats/flag_<?= str_replace(' ', '', strtolower($men[2]->team_country)).'.svg' ?>" alt="">
                                                        <?php
                                                    } ?>
                                                    <?= isset($men[2]->team_name) ? $men[2]->team_name : 'TR' ?>
                                                </p>
                                            </div>
                                            <div class="col-img">
                                                <img src="<?= $domain . '/storage/' . $men[2]->avatar ?>" alt="">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tournament_detail" id="men">
                                <div class="wrapper">
                                    <div class="sheduleTableDay game_table">
                                        <table id="dataTable1">
                                            <thead>
                                            <tr class="sheduleTableTtl">
                                                <th>Ranking</th>
                                                <th>Player Name</th>
                                                <th>Team</th>
                                                <th>Country</th>
                                                <th>Players Point</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1;
                                            foreach ($men as $data) :
                                                ?>
                                                <tr>
                                                    <td class="icon-num w35 gold"><?= $i++; ?></td>
                                                    <td class="time"><?= $data->name ?></td>
                                                    <td class="team-left"><?= $data->team_name ? $data->team_name : '未設定' ?></td>
                                                    <td class="score-left"><?= $data->team_country ? $data->team_country : '未設定' ?></td>
                                                    <td class="score-hyphen"><?= number_format($data->total_points, 0, '.', '');  ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div><!-- /game_table -->

                                </div>
                            </div><!-- /tournament_detail -->
                        <?php  } else { ?>
                            <div class="no-data-show">ランキングデータは存在しません</div>
                        <?php } ?>

                    </li>
                    <li>
                        <?php if (count($women) > 1) { ?>
                            <div class="top-player">
                                <div class="main_cont-inner news_contents">
                                    <ul class="rank_list">
                                        <li class="first" style="position: relative;">
                                            <div class="col-info">
                                                <span class="point"><?= number_format($women[0]->total_points, 0, '.', '') ?> PTS</span>
                                                <h5>
                                                    <?= $women[0]->name ?>
                                                </h5>
                                                <p>
                                                    <?php if ($women[0]->team_country) {
                                                        ?>
                                                        <img width="40" height="30" src="https://www.3x3exe.com/wp/wp-content/themes/33exe/assets/flats/flag_<?= str_replace(' ', '', strtolower($women[0]->team_country)).'.svg' ?>" alt=""> <?= isset($women[0]->team_name) ? $women[0]->team_name : 'TR' ?>
                                                        <?php
                                                    } ?>

                                                </p>
                                            </div>
                                            <div class="col-img">
                                                <img src="<?= $domain . '/storage/' . $women[0]->avatar ?>" alt="">
                                            </div>
                                        </li>
                                        <li class="second" style="position: relative;">
                                            <div class="col-info">
                                                <span class="point"><?= number_format($women[1]->total_points, 0, '.', '') ?> PTS</span>
                                                <h5><?= $women[1]->name ?></h5>
                                                <p>
                                                    <?php if ($women[1]->team_country) {
                                                        ?>
                                                        <img width="40" height="30" src="https://www.3x3exe.com/wp/wp-content/themes/33exe/assets/flats/flag_<?= str_replace(' ', '', strtolower($women[1]->team_country)).'.svg' ?>" alt=""> <?= isset($women[1]->team_name) ? $women[1]->team_name : 'TR' ?>
                                                        <?php
                                                    } ?>

                                                </p>
                                            </div>
                                            <div class="col-img">
                                                <img src="<?= $domain . '/storage/' . $women[1]->avatar ?>" alt="">
                                            </div>
                                        </li>
                                        <li class="third" style="position: relative;">
                                            <div class="col-info">
                                                <span class="point"><?= number_format($women[2]->total_points, 0, '.', '') ?> PTS</span>
                                                <h5><?= $women[2]->name ?></h5>
                                                <p>
                                                    <?php if ($women[2]->team_country) {
                                                        ?>
                                                        <img width="40" height="30" src="https://www.3x3exe.com/wp/wp-content/themes/33exe/assets/flats/flag_<?= str_replace(' ', '', strtolower($women[2]->team_country)).'.svg' ?>" alt=""> <?= isset($women[2]->team_name) ? $women[2]->team_name : 'TR' ?>
                                                        <?php
                                                    } ?>

                                                </p>
                                            </div>
                                            <div class="col-img">
                                                <img src="<?= $domain . '/storage/' . $women[2]->avatar ?>" alt="">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tournament_detail" id="women">
                                <div class="wrapper">
                                    <div class="sheduleTableDay game_table">
                                        <table id="dataTable2">
                                            <thead>
                                            <tr class="sheduleTableTtl">
                                                <th>Ranking</th>
                                                <th>Player Name</th>
                                                <th>Team</th>
                                                <th>Country</th>
                                                <th>Players Point</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $j = 1;
                                            foreach ($women as $data) :
                                                ?>
                                                <tr>
                                                    <td class="scheduleTableName icon-num w35 gold"><?= $j++; ?></td>
                                                    <td class="time"><?= $data->name ?></td>
                                                    <td class="team-left" style="width: 400px !important;"><?= $data->team_name ? $data->team_name : '未設定' ?></td>
                                                    <td class="score-left"><?= $data->team_country ? $data->team_country : '未設定' ?></td>
                                                    <td class="score-hyphen"><?= number_format($data->total_points, 0, '.', ''); ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div><!-- /game_table -->
                                </div>
                            </div><!-- /tournament_detail -->
                        <?php  } else { ?>
                            <div class="no-data-show">ランキングデータは存在しません</div>
                        <?php } ?>
                    </li>
                </ul>
            </div><!-- /tab_contents -->
        </div>
    </section>
</main>
<div class="main_cont">



</div>

<script>
    $(function() {
        //$('.main_nav li:nth-child(3) a,.hm_list li:nth-child(3) a').css('color','#50a94f');
    });
</script>
<style type="text/css">
    .icon-num {
        color: #fff !important;
        font-size: 12px !important;
    }

    .top-player {
        overflow: hidden;
        margin-bottom: 40px;
    }
    .dataTables_wrapper .dataTables_paginate {
        margin-top: 20px;
    }
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_length {
        display: none;
    }
    .dataTables_wrapper .dataTables_paginate {
        float: right;
        text-align: right;
        padding-top: 0.25em;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        box-sizing: border-box;
        display: inline-block;
        min-width: 1.5em;
        padding: 0.5em 1em;
        margin-left: 2px;
        text-align: center;
        text-decoration: none !important;
        cursor: pointer;
        *cursor: hand;
        color: #808080 !important;
        border: 1px solid transparent;
        border-radius: 2px;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        color: #333 !important;
        border: 1px solid #979797;
        background-color: white;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(100%, #dcdcdc));
        /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, white 0%, #dcdcdc 100%);
        /* Chrome10+,Safari5.1+ */
        background: -moz-linear-gradient(top, white 0%, #dcdcdc 100%);
        /* FF3.6+ */
        background: -ms-linear-gradient(top, white 0%, #dcdcdc 100%);
        /* IE10+ */
        background: -o-linear-gradient(top, white 0%, #dcdcdc 100%);
        /* Opera 11.10+ */
        background: linear-gradient(to bottom, white 0%, #dcdcdc 100%);
        /* W3C */
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
        cursor: default;
        color: #666 !important;
        border: 1px solid transparent;
        background: transparent;
        box-shadow: none;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        color: white !important;
        border: 1px solid #111;
        background-color: #808080;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:active {
        outline: none;
        background-color: #808080;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #2b2b2b), color-stop(100%, #0c0c0c));
        /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
        /* Chrome10+,Safari5.1+ */
        background: -moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
        /* FF3.6+ */
        background: -ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
        /* IE10+ */
        background: -o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
        /* Opera 11.10+ */
        background: linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);
        /* W3C */
        box-shadow: inset 0 0 3px #111;
    }
    .dataTables_wrapper .dataTables_paginate .ellipsis {
        padding: 0 1em;
    }
    .dataTables_wrapper .dataTables_processing {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 40px;
        margin-left: -50%;
        margin-top: -25px;
        padding-top: 20px;
        text-align: center;
        font-size: 1.2em;
        background-color: white;
        background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(25%, rgba(255, 255, 255, 0.9)), color-stop(75%, rgba(255, 255, 255, 0.9)), color-stop(100%, rgba(255, 255, 255, 0)));
        background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
        background: -moz-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
        background: -ms-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
        background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
        background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    }
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_processing,
    .dataTables_wrapper .dataTables_paginate {
        color: #333;
    }
    main section .contents {
        padding: 0px !important;
    }
    .wrapper {
        width: 1400px;
        margin: 0px auto;
    }
    .dataTable {
        width: 100%;
    }
    .no-data-show {
        color: #fff;
        padding: 0px 0px 100px 0px;
    }

    .sheduleTableDay td {
        font-size: 13px !important;
        font-family: "Roboto Condensed";
    }

    .sheduleTableDay td.scheduleTableName {
        width: 15px;
    }

    .sheduleTableDay td.team-left,
    .sheduleTableDay td.team-right {
        width: 200px;
    }

    .sheduleTableDay {
        overflow-x: auto;
    }

    .sheduleTableDay.game_table {
        border: 0px !important;
    }

    .rank_content_tab {
        background-color: #fff;
        width: 100%;
        margin: 0px auto;
        text-align: center;
    }
    .filter li {
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
    .filter li {
        font-size: 16px;
        display: inline-block;
        cursor: pointer;
        margin: 0 14px 10px 14px;
        font-weight: 700;
        padding: 15px 50px;
        opacity: 1;
    }

    .filter .select {
        border-bottom: 2px solid #d12d36;
        background-color: #E5002D;
        color: #fff;
    }

    .sheduleTableDay tr {
        height: 40px;
    }

    .sheduleTableDay th {
        text-align: center;
        font-weight: bold;
        font-family: 'Noto Sans JP';
        letter-spacing: 0.48px;
        color: #ffffff;
        font-size: 12px;
        height: 54px;
        box-sizing: border-box;
        padding-left: 0;
        text-transform: uppercase;
    }

    .sheduleTableDay tr:nth-child(2n) {
        background-color: #fff;
        color: #000;
    }

    .sheduleTableDay table > thead {
        background-color: #2D2D2D;
    }
    .sheduleTableDay td {
        color: #000;
    }

    .main_cont-inner {
        margin: 0 auto;
        box-sizing: border-box;
        height: 525px;
    }

    .rank_list {
        width: 100%;
        max-width: 100%;
        display: grid;
        padding: 0;
        margin: 0;
        grid-template-columns: repeat(3, 32%);
        grid-template-rows: repeat(2, 250px);
        grid-gap: 5% 2%;
        box-sizing: border-box;
    }

    .rank_list li {
        list-style: none;
        display: flex;
        -webkit-box-shadow: 0px 0px 10px 0px rgb(50 50 50 / 30%);
        -moz-box-shadow: 0px 0px 10px 0px rgba(50, 50, 50, 0.3);
        box-shadow: 0px 0px 10px 0px rgb(50 50 50 / 30%);
        background: #fff;
    }

    .rank_list li .col-img {
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
        flex: 0 0 40%;
        padding: 30px 15px;
        box-sizing: border-box;
    }

    .rank_list li .col-info {
        list-style: none;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        justify-content: space-between;
        flex: 0 0 60%;
        padding: 30px 15px;
        box-sizing: border-box;
        position: relative;
    }

    .rank_list li .col-info h5 span {
        display: block;
        font-size: 18px;
        z-index: 1;
    }

    .rank_list li .col-info .point {
        font-size: 48px;
        text-align: center;
        font-weight: bold;
        padding: 20px 0;
        z-index: 1;
        color: #fff;
        font-style: italic;
    }

    .rank_list li .col-info p {
        text-transform: uppercase;
        font-size: 14px;
        display: flex;
        align-items: center;
        z-index: 1;
        margin: 0;
        position: absolute;
        bottom: 10px;
        color: #fff;
    }

    .rank_list li .col-info p img {
        margin-right: 15px;
    }

    .rank_list li .col-img {
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
        flex: 0 0 40%;
        padding: 30px 20px;
        box-sizing: border-box;
    }

    .rank_list li .col-img {
        padding: 30px 20px;
    }

    .rank_list li .col-info {
        padding: 30px 20px;
    }

    .rank_list li:first-child .col-info h5 span {
        display: block;
        font-size: 28px;
    }

    .rank_list li.first h5 {
        top: 260px;
        left: 160px;
    }

    .rank_list li.second h5,
    .rank_list li.third h5 {
        top: 115px;
        left: 115px;
        font-size: 20px;
    }

    .rank_list li h5 {
        font-size: 50px;
        font-weight: bold;
        margin: 0;
        text-transform: uppercase;
        font-style: italic;
        position: absolute;
        text-align: left;
    }

    .rank_list li.first .col-info .point {
        position: absolute;
        top: 170px;
        left: 160px;
    }
    .rank_list li.second .col-info .point,
    .rank_list li.third .col-info .point {
        position: absolute;
        top: 65px;
        left: 115px;
        font-size: 18px;
    }

    .rank_list li:first-child .col-info p {
        text-transform: uppercase;
        font-size: 24px;
        display: flex;
        align-items: center;
        font-weight: bold;
        color: #fff;
        font-style: italic;
        position: absolute;
        bottom: 25px;
    }

    .rank_list li:first-child .col-info p img {
        width: 80px;
        margin-right: 15px;
    }

    .rank_list li:first-child {
        grid-row: 1 / 3;
        grid-column: 1 / 3;
        background: url('https://www.3x3exe.com/wp/wp-content/themes/33exe/assets/img/TOP1.png') no-repeat;
        background-size: cover;
    }

    .rank_list li:nth-child(2) {
        grid-row: 1;
        grid-column: 3 / 4;
        background: url('https://www.3x3exe.com/wp/wp-content/themes/33exe/assets/img/TOP2.png') no-repeat;
        background-size: cover;
    }

    .rank_list li:last-child {
        grid-row: 2;
        grid-column: 3 / 4;
        background: url('https://www.3x3exe.com/wp/wp-content/themes/33exe/assets/img/TOP3.png') no-repeat;
        background-size: cover;
    }

    img {
        max-width: 100%;
    }

    .rank_list li .col-info:after {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        color: #f2f2f2;
        font-style: italic;
        font-weight: bolder;
        z-index: 0;
    }


    @media screen and (max-width: 1024px) {
        .rank_list li.first {
            min-height: 250px;
        }

        .rank_list {position: relative;}
        .rank_list li .col-info .point {
            font-size: 20px;
            padding: 0px;
        }
        .rank_list li.first .col-info .point {
            position: absolute;
            top: 85px;
            left: 80px;
            padding: 0;
        }
        .rank_list li:first-child .col-info p {
            font-size: 12px;
        }
        .rank_list li:first-child .col-info p img {
            width: 30px;
            margin-right: 15px;
        }
        .rank_list li.first h5 {
            top: 120px;
            left: 80px;
            font-size: 24px;
        }

        .sheduleTableDay.game_table {
            border: 0px !important;
            padding: 0;
            margin: 0;
            width: 100%;
        }
        .sheduleTableDay tr.sheduleTableTtl th {
            background-color: #808080;
            color: #FFFFFF;
            display: table-cell;
            text-align: center;
            font-size: 12px;
            padding: 10px 5px;
            line-height: 16px;
        }
        .sheduleTableDay td {
            font-size: 12px !important;
        }
        .sheduleTableDay td.score-left {
            margin-right: 0;
            display: table-cell;
        }
        .rank_list li.second .col-info .point,
        .rank_list li.third .col-info .point {
            position: absolute;
            top: 85px;
            left: 80px;
            font-size: 16px;
        }
        .rank_list li:nth-child(2) {
            height: 200px;
            margin-top: 15px;
            width: 100%;
        }
        .rank_list li:last-child {
            height: 200px;
            width: 100%;
            margin-top: 15px;
        }
        .rank_list li.second h5,
        .rank_list li.third h5 {
            top: 120px;
            left: 80px;
            font-size: 15px;
        }
        .rank_list li .col-info p {
            left: 12px;
            min-width: 180px;
        }
        .rank_list li.second .col-info p,
        .rank_list li.third .col-info p {
            text-transform: uppercase;
            font-size: 12px;
            display: flex;
            align-items: center;
            z-index: 1;
            margin: 0;
            position: absolute;
            bottom: -5px;
            color: #fff;
        }
        .rank_list li .col-img {
            padding: 20px 15px;
        }
        .main_cont-inner {
            max-width: 100%;
        }

        .rank_list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            grid-gap: 0;
        }

        .rank_list li:first-child {
            flex: 0 0 100%;
        }

        .rank_list li {
            flex: 0 0 100%;
            margin-bottom: 2vw;
        }
    }
</style>
<script>
    $(function() {
        $('.box > li').not(':first').css('display', 'none');
        $('.tab_contents .btn > li').click(function() {
            var index = $('.btn > li').index(this);
            $('.box > li').css('display', 'none');
            $('.box > li').eq(index).css('display', 'block');
            $('.btn > li').removeClass('select');
            $(this).addClass('select')
        });
    });
</script>
<?php get_footer(); ?>
