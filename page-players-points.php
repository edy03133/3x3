<?php

/**
 * TOP
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'players-points';
$g_page_title = '3x3.EXE PREMIER';
$g_page_slug = 'players-points';
?>

<?php get_header(); ?>

<script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js" integrity="sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    jQuery(function () {
        jQuery('#datatable-all').DataTable({
            searching: false,
            "iDisplayLength": 100,
        });
    });
</script>
<style type="text/css">
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        margin-left: -5px !important;
    }
</style>

<main>
    <section>
        <h1><span>PLAYERS POINTS</span></h1>
    </section>
    <section class="players-points">
    <?php
            $year = '2022';//!empty($_GET['y']) ? $_GET['y'] : 2021;

            if (empty($year)) {
        ?>
            <div class="comming-soon">
                COMING SOON
            </div>
        <?php } else { ?>
        <div class="contents">
        <div class="select-area">
            <div class="area">
                <div class="country">
                    <div class="double selected" style="display: block;margin: 10px;text-align: center">
                        <?php
                        $points = Display3x3Data::pointsTop($year);
                        ?>
                        <?php
                        $i = 1;
                        foreach ($points as $key => $_point) : if (empty($key) || strpos($key, 'NZL')) continue; ?>
                            <a class="country-item <?= $i == 1 ? 'active' : '' ?>"
                               data-result="<?= strtolower(str_replace(' ', '-', $key)) ?>"
                               ><?= $key ?></a>
                            <?php $i++; endforeach; ?>
                    </div>
                </div>
                <div class="conference area">
                    <?php
                    $i = 1;
                    foreach ($points as $key => $_point) : if (empty($key)) continue; ?>
                        <div class="<?= strtolower(str_replace(' ', '-', $key)) ?> double selected <?= $i == 1 ? '' : 'hide' ?>"
                             style="display: block;">
                            <?php
                            $k = 1;
                            foreach ($_point as $title => $_sch) : ?>
                                <a class="area-items <?= $k == 1 ? 'active' : '' ?>"
                                   data-conference="<?= strtolower(str_replace(' ', '-', $title)) ?>"
                                   data-country="<?= strtolower(str_replace(' ', '-', $key)) ?>"><?= $title; ?></a>

                            <?php $k++;endforeach; ?>
                        </div>
                    <?php $i++;endforeach; ?>
                </div>
            </div>
        </div>
        <div class="standings-result result-area" >
            <?php
            $i = 1;

            foreach ($points as $key => $_point) : if (empty($key)) continue; ?>
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
                                foreach ($_point as $conference => $_conference) : $j = 1; ?>
                                     <?php
                                     foreach ($_conference as $key => $_sch) : ?>
                                          <tr style="text-align: center" class="conference-item <?= $k == 1 ? 'active' : 'hide' ?> <?= strtolower(str_replace(' ', '-', $conference)) ?>">
                                            <td>
                                                <span class="icon-num w35 gold"><?= $j++; ?></span>
                                            </td>
                                            <td class="time"><?= $_sch['name'] ?></td>
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
    </div>

        <?php } ?>
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
