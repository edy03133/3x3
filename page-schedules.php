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
$g_page_slug = 'schedules';

?>

<?php get_header(); ?>
<main>
    <section>
        <h1><span>SCHEDULES</span></h1>
    </section>
    <section class="schedules">
        <?php
        $year = !empty($_GET['y']) ? $_GET['y'] : 2022;
        if (empty($year) || $year == 2024) {
        ?>
            <div class="comming-soon">
                COMING SOON
            </div>
        <?php } else { ?>
            <div class="contents">
                <div class="select-area">
                    <div class="country">
                        <div class="double selected" style="display: block;margin-top: 30px;text-align: center">
                            <?php
                            $schedule = Display3x3Data::schedules($year);
                            ?>
                            <?php
                            $i = 1;
                            foreach ($schedule as $key => $_schedule) : if (empty($key) || strpos($key, 'NZL')) continue; ?>
                                <a class="country-item <?= $i == 1 ? 'active' : '' ?>" data-result="<?= strtolower(str_replace(' ', '-', $key)) ?>"><?= $key ?></a>
                            <?php $i++;
                            endforeach; ?>
                        </div>
                    </div>
                    <div class="conference area">
                        <?php
                        $i = 1;
                        $searchVal = array("-NZL", "NZL", "THAILAND", "-THA", "-JPN", "-THA", " CHINESE TAIPEI", "-TEP", "JAPAN");
                        foreach ($schedule as $key => $_schedule) : if (empty($key)) continue; ?>
                            <div class="<?= strtolower(str_replace(' ', '-', $key)) ?> double selected <?= $i == 1 ? '' : 'hide' ?>" style="display: block;">
                                <?php
                                $k = 1;
                                foreach ($_schedule as $conference => $_sch) : ?>
                                    <a class="area-items <?= $k == 1 ? 'active' : '' ?>" data-conference="<?= strtolower(str_replace(' ', '-', $conference)) ?>" data-country="<?= strtolower(str_replace(' ', '-', $key)) ?>">
                                        <?php

                                        echo str_replace($searchVal, '', $conference); ?>
                                    </a>
                                <?php $k++;
                                endforeach; ?>
                            </div>
                        <?php $i++;
                        endforeach; ?>
                    </div>
                    <div class="schedules-result result-area">

                        <?php
                        $i = 1;
                        foreach ($schedule as $key => $_schedule) : if (empty($key)) continue; ?>
                            <div data-country="<?= strtolower(str_replace(' ', '-', $key)) ?>" class="area-item result-item result-<?= strtolower(str_replace(' ', '-', $key)) ?>" data-area="1" style="<?= $i == 1 ? 'display: block;' : 'display: none' ?> ">
                                <div class="js-scrollable result-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ROUND</th>
                                                <th>DATE</th>
                                                <th>TIME</th>
                                                <th>VENUE</th>
                                                <th>TICKET</th>
                                                <th>NOTE</th>
                                                <th>DETAIL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $k = 1;
                                            foreach ($_schedule as $conference => $_conference) :
                                                $j = 1;
                                                foreach ($_conference as $key => $_conf) :

                                            ?>
                                                    <tr style="height: 58px" class="conference-item <?= $k == 1 ? 'active' : 'hide' ?> <?= strtolower(str_replace(' ', '-', $conference)) ?>">
                                                        <td><?= $_conf['round_name'] ?></td>
                                                        <td><?= $_conf['date'] ?></td>
                                                        <td><?= $_conf['time'] ?></td>
                                                        <td><?= !empty($_conf['venue']) ? $_conf['venue'] : '---' ?></td>
                                                        <td>
                                                            <div class="<?= strtolower(str_replace(' ',  '-', $_conf['ticket_status_name'])) ?>">
                                                                <span>
                                                                    <?= !empty($_conf['ticket_status_name']) ? strtoupper($_conf['ticket_status_name']) : '---'; ?>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td><?= strip_tags($_conf['note']) ?></td>
                                                        <td>
                                                            <?php if ($_conf['result_general_status_id'] == 1) { ?>
                                                                <div class="btn-dark" style="pointer-events: none;color: #fff;background: #7F7F7F;">
                                                                    <a style="" class="btn-view" href="<?= get_bloginfo('url') ?>/result?round=<?= $_conf['round_id'] ?>" class="btn ">View</a>
                                                                </div>
                                                            <?php } else if ($_conf['result_general_status_id'] == 2) { ?>
                                                                <div class="btn-dark" style="">
                                                                    <a class="btn-view" href="<?= get_bloginfo('url') ?>/result?round=<?= $_conf['round_id'] ?>" class="btn ">View</a>
                                                                </div>
                                                            <?php } else if ($_conf['result_general_status_id'] == 3) { ?>
                                                                <div class="btn-dark" style="">
                                                                    <a class="btn-view" href="<?= get_bloginfo('url') ?>/result?round=<?= $_conf['round_id'] ?>" class="btn ">Result</a>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="btn-dark" style="pointer-events: none;color: #fff;background: #7F7F7F;">
                                                                    <a style="" class="btn-view" href="" disabled="" class="btn ">View</a>
                                                                </div>
                                                            <?php } ?>

                                                        </td>

                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php $k++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php $i++;
                        endforeach; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>
</main>
<script src="<?= esc_url(get_template_directory_uri()) . '/assets/js/schedules.js' ?>"></script>
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/scroll-hint.css'); ?>">
<?php get_footer(); ?>