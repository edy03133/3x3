<?php

/**
 * TOP
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'rank';
$g_page_title = '3x3.EXE PREMIER';
$g_page_slug = 'rank';
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
    main {
        margin-bottom: 100px;
    }

    .standings .share-btn-area {
        margin-bottom: 30px;
    }

    .standings .select-area .country {
        margin-bottom: 30px;
    }

    .standings .select-area .country a {
        display: inline-block;
        width: 245px;
        height: 64px;
        margin-left: 4px;
        font-size: 16px;
        font-weight: bold;
        letter-spacing: 0.64px;
        color: #2D2D2D;
        text-decoration: none;
        line-height: 64px;
        text-align: center;
        background-color: #F5F5F5;
        cursor: pointer;
        transition: 0.2s;
    }

    .standings .select-area .country a:first-of-type {
        border-top-left-radius: 32px;
        border-bottom-left-radius: 32px;
        margin-left: 0;
    }

    .standings .select-area .country a:last-of-type {
        border-top-right-radius: 32px;
        border-bottom-right-radius: 32px;
    }

    .standings .select-area .country a.active,
    .standings .select-area .country a:hover {
        color: #FFFFFF;
        background-color: #2D2D2D;
        opacity: 1;
    }

    .standings .select-area .area {
        margin-bottom: 2px;
        text-align: center;
        font-weight: bold;
    }

    .standings .select-area .area>div.selected {
        display: block;
    }

    .standings .select-area .area .triple a {
        height: 54px;
        line-height: 54px;
    }

    .standings .select-area .area .double a {
        height: 54px;
        line-height: 54px;
    }

    .standings .select-area .area a {
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

    .standings .select-area .area a:last-of-type {
        margin-right: 0;
    }

    .standings .select-area .area a.active,
    .standings .select-area .area a:hover {
        color: #FFFFFF;
        background-color: #E5002D;
        opacity: 1;
    }
    .standings .select-area .area .country a.active,
    .standings .select-area .area .country a:hover {
        color: #FFFFFF;
        background-color: #2D2D2D;
        opacity: 1;
    }

    .standings .ranking {
        margin-bottom: 0;
    }

    .standings .result-area {
        padding-bottom: 14px;
    }

    .standings .result-area table {
        width: 100%;
    }

    .standings .result-area table>thead {
        border: 0;
        background-color: #2D2D2D;
    }

    .standings .result-area table>thead>tr>th {
        text-align: center;
        font-weight: bold;
        font-family: 'Noto Sans JP';
        letter-spacing: 0.48px;
        color: #ffffff;
        font-size: 12px;
        height: 54px;
        box-sizing: border-box;
        padding-left: 0;
    }

    .standings .result-area table>thead>tr>th:nth-of-type(8) {
        line-height: 16px;
    }

    .standings .result-area table>thead>tr>th:after {
        background-color: #ffffff;
    }

    .standings .result-area table>tbody>tr>td {
        height: 72px;
        text-align: center;
        padding: 0;
        font-family: Roboto Condensed;
        font-weight: bold;
        font-size: 13px;
    }

    .standings .result-area table>tbody>tr>td:first-of-type {
        width: 65px;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(2) {
        position: relative;
        width: 35px;
        letter-spacing: 0.28px;
        padding-right: 20px;
        box-sizing: border-box;
        text-align: right;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(2) span {
        position: absolute;
        display: inline-block;
        top: 14px;
        left: 20px;
        width: 45px;
        height: 45px;
        box-sizing: border-box;
        border: 1px solid #F5F5F5;
        text-align: center;
        line-height: 40px;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(2) span img {
        display: inline;
        max-width: 37px;
        max-height: 37px;
        background-color: #FFFFFF;
        vertical-align: middle;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(3) {
        width: 141px;
        letter-spacing: 0.32px;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(4) {
        width: 76px;
        letter-spacing: 0.32px;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(5) {
        width: 76px;
        letter-spacing: 0.32px;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(6) {
        width: 76px;
        letter-spacing: 0.32px;
    }

    .standings .result-area table>tbody>tr>td:nth-of-type(7) {
        width: 116px;
        letter-spacing: 0.32px;
    }

    .standings .result-area table>tbody>tr>td:last-of-type {
        width: 116px;
        letter-spacing: 0.32px;
    }

    .standings .result-area h5 {
        margin: 50px auto 0px auto;
        width: 1020px;
        height: 16px;
        font-size: 14px;
        letter-spacing: 0.56px;
        color: #2D2D2D;
        font-weight: normal;
        text-align: right;
    }

    @media screen and (max-width: 750px) {
        main {
            margin-bottom: 58px;
        }
        .standings .share-btn-area {
            margin-bottom: 40px;
        }
        .standings .select-area {
            margin-left: -20px;
            margin-right: -20px;
        }
        .standings .select-area .country {
            margin-bottom: 30px;
        }
        .standings .select-area .country a {
            width: 185.5px;
            height: 54px;
            margin-left: 4px;
            font-size: 12px;
            letter-spacing: 0.48px;
            font-weight: bold;
            line-height: 54px;
        }
        .standings .select-area .country a:first-of-type {
            border-radius: 0;
            margin-left: 0;
            margin-bottom: 4px;
        }
        .standings .select-area .country a:last-of-type {
            border-radius: 0;
            margin-bottom: 0;
        }
        .standings .select-area .country a:nth-child(2n+1) {
            margin-left: 0;
        }
        .standings .select-area .area {
            margin-bottom: 0;
            text-align: left;
            font-weight: bold;
        }
        .standings .select-area .area>div {
            display: none;
        }
        .standings .select-area .area>div.selected {
            display: block;
        }
        .standings .select-area .area a {
            position: relative;
            display: inline-block;
            margin-right: 2px;
            margin-bottom: 2px;
            color: #2D2D2D;
            text-decoration: none;
            text-align: center;
            background-color: #F5F5F5;
        }
        .standings .select-area .area a.active,
        .standings .select-area .area a:hover {
            color: #FFFFFF;
            background-color: #E5002D;
            opacity: 1;
        }
        .standings .select-area .area .double a {
            position: relative;
            width: 186px;
            height: 44px;
            line-height: 44px;
            font-size: 12px;
            letter-spacing: 0.48px;
        }
        .standings .select-area .area .double a:nth-of-type(2n) {
            margin-right: 0;
        }
        .standings .select-area .area .triple a {
            width: 123px;
            height: 44px;
            line-height: 44px;
            font-size: 12px;
            letter-spacing: 0.48px;
        }
        .standings .select-area .area .triple a:nth-of-type(3n) {
            margin-right: 0;
        }
        .standings .result-area {
            padding-bottom: 0px;
        }
        .standings .result-area .ranking {
            margin-left: -20px;
            margin-right: -20px;
        }
        .standings .result-area .ranking .result-table {
            overflow: auto;
        }
        .standings .result-area table {
            margin: 0;
            width: 737px;
        }
        .standings .result-area table>thead {
            border: 0;
            background-color: #2D2D2D;
        }
        .standings .result-area table>thead>tr>th {
            text-align: center;
            font-weight: bold;
            font-family: 'Noto Sans JP';
            font-size: 10px;
            letter-spacing: 0.4px;
            color: #ffffff;
            height: 40px;
            line-height: 40px;
            box-sizing: border-box;
            padding: 0;
        }
        .standings .result-area table>thead>tr>th:nth-of-type(8) {
            line-height: 14px;
        }
        .standings .result-area table>thead>tr>th:after {
            background-color: #ffffff;
        }
        .standings .result-area table>tbody>tr>td {
            height: 54px;
            text-align: center;
            padding: 0;
            font-family: Roboto Condensed;
            font-weight: 300;
            font-size: 16px;
            line-height: 54px;
        }
        .standings .result-area table>tbody>tr>td:first-of-type {
            width: 55px;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(2) {
            position: relative;
            width: 232px;
            font-size: 12px;
            letter-spacing: 0.24px;
            box-sizing: border-box;
            padding-left: 53px;
            text-align: left;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(2) span {
            position: absolute;
            display: inline-block;
            top: 0px;
            left: 9px;
            width: 35px;
            height: 35px;
            box-sizing: border-box;
            border: 0;
            text-align: center;
            line-height: 54px;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(2) span img {
            max-width: 34px;
            max-height: 34px;
            border: 1px solid #F5F5F5;
            background-color: #FFFFFF;
            vertical-align: middle;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(3) {
            width: 106px;
            letter-spacing: 0.24px;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(4) {
            width: 57px;
            letter-spacing: 0.24px;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(5) {
            width: 57px;
            letter-spacing: 0.24px;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(6) {
            width: 57px;
            letter-spacing: 0.24px;
        }
        .standings .result-area table>tbody>tr>td:nth-of-type(7) {
            width: 87px;
            letter-spacing: 0.24px;
        }
        .standings .result-area table>tbody>tr>td:last-of-type {
            width: 86px;
            letter-spacing: 0.24px;
        }
        .standings .result-area h5 {
            width: 100%;
            height: 13px;
            margin-top: 28px;
            margin-bottom: 0;
            padding-right: 16px;
            box-sizing: border-box;
            font-size: 12px;
            letter-spacing: 0.48px;
            font-weight: normal;
        }
    }

    .contents {

        width: 1200px;
        margin: 0px auto;

    }
    #dataTable1_length {
        display: none;
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
        color: #000 !important;
        border: 1px solid transparent;
        border-radius: 2px;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        color: #000 !important;
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
        color: #000 !important;
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

    .no-data-show {
        color: #fff;
        padding: 0px 0px 100px 0px;
    }
    .standings-result {
        overflow: hidden;
    }
</style>

<script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js" integrity="sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    jQuery(function () {
        jQuery('#datatable-all').DataTable({
            searching: false,
            "iDisplayLength": 50,
        });
    });
</script>

<main>
    <section>
        <h1><span>RANK</span></h1>
    </section>
    <section class="standings">
        <div class="comming-soon">
            COMING SOON
        </div>
    <!-- <div class="contents">
        <div class="select-area">
            <div class="area">
                <div class="country">
                    <div class="double selected" style="display: block;margin: 10px;text-align: center">
                        <?php
                        $schedule = wp_remote_get('https://xsm-stg.sakura.ne.jp/team-manager/api/v1/global-site/points/top', array('timeout' => 120, 'httpversion' => '1.1'));
                        $schedule = json_decode($schedule['body'], true);
                        //unset($schedule['ALL'])
                        ?>
                        <?php
                        $i = 1;
                        foreach ($schedule as $key => $_schedule) : if (empty($key) || strpos($key, 'NZL')) continue; ?>
                            <a class="<?= $i == 1 ? 'active' : '' ?>"
                               data-result="<?= strtolower(str_replace(' ', '-', $key)) ?>"
                               style="width: 230px; margin-bottom: 5px;"><?= $key ?></a>
                            <?php $i++; endforeach; ?>
                    </div>
                </div>
                <div class="conference area">
                    <?php
                    $i = 1;
                    foreach ($schedule as $key => $_schedule) : if (empty($key)) continue; ?>
                        <div class="<?= strtolower(str_replace(' ', '-', $key)) ?> double selected <?= $i == 1 ? '' : 'hide' ?>"
                             style="display: block;">
                            <?php
                            $k = 1;
                            foreach ($_schedule as $conference => $_sch) : ?>
                                <a style="width: 240px;" class="<?= $k == 1 ? 'active' : '' ?>"
                                   data-conference="<?= strtolower(str_replace(' ', '-', $conference)) ?>"
                                   data-country="<?= strtolower(str_replace(' ', '-', $key)) ?>"><?= $conference; ?></a>
                                <?php $k++;endforeach; ?>
                        </div>
                    <?php $i++;endforeach; ?>
                </div>
            </div>
        </div>
        <div class="standings-result result-area" >
            <?php
            $i = 1;

            foreach ($schedule as $key => $_schedule) : if (empty($key)) continue; ?>
                <div data-country="<?= strtolower(str_replace(' ', '-', $key)) ?>"
                     class="area-item result-item result-<?= strtolower(str_replace(' ', '-', $key)) ?>"
                     data-area="1" style="<?= $i == 1 ? 'display: block;' : 'display: none;' ?> ">
                    <div class="result-table">
                        <table id="datatable-<?= strtolower(str_replace(' ', '-', $key)) ?>">
                            <thead>
                            <tr>
                                <th style="width: 25px;">RANKING</th>
                                <th>PLAYER NAME</th>
                                <th>TEAM</th>
                                <th>COUNTRY</th>
                                <th>PLAYERS POINT</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $k = 1;
                                foreach ($_schedule as $conference => $_conference) : $j = 1; ?>
                                     <?php
                                     foreach ($_conference as $key => $_sch) : ?>
                                          <tr style="text-align: center" class="conference-item <?= $k == 1 ? 'active' : 'hide' ?> <?= strtolower(str_replace(' ', '-', $conference)) ?>">
                                            <td style="width: 25px;height: 25px;margin-top: 25px" class="icon-num w35 gold"><?= $j++; ?></td>
                                            <td class="time" style="text-transform: uppercase"><?= $_sch['name'] ?></td>
                                            <td class="team-left"><?= !empty($_sch['team_name']) ? $_sch['team_name'] : '未設定' ?></td>
                                            <td class="score-left"><?= !empty($_sch['team_country']) ? $_sch['team_country'] : '未設定' ?></td>
                                            <td class="score-hyphen"><?= number_format($_sch['total_points'], 0, '.', '');  ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                            <?php $k++;endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php $i++;endforeach; ?>
        </div>
    </div> -->
</section>
</main>
<script type="text/javascript">
    $(document).on('click', '.select-area .country a', function()
    {
        $('.select-area .country a').removeClass('active');
        $(this).addClass('active');

        $('.standings-result .result-item').hide();
        $('.select-area .conference > div').hide();
        var country = $(this).attr('data-result');
        $('.select-area .conference > div.'+country+'').removeClass('hide').show();
        $('.select-area .conference > div.'+country+' a').removeClass('active')
        $('.select-area .conference > div.'+country+' a').first().addClass('active')
        $('.standings-result .result-item[data-country='+ country +']').first().removeClass('hide').fadeIn(200);
    });
     $(document).on('click', '.conference a', function()
    {
        $('.select-area .conference a').removeClass('active');
        $(this).addClass('active');

        var country = $(this).attr('data-country');
        var conference = $(this).attr('data-conference');
        $('.standings-result .result-item[data-country='+ country +'] .conference-item').hide();
        $('.standings-result .result-item[data-country='+ country +'] .conference-item').removeClass('active');
        $('.standings-result .result-item[data-country='+ country +'] .conference-item.'+conference+'').removeClass('hide').fadeIn(200);
        $("main img,footer img").lazyload();
    });
</script>
<?php get_footer(); ?>
