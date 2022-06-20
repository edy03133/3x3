<?php

/**
 * TOP
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'standing';
$g_page_title = '3x3.EXE PREMIER';
$g_page_slug = 'standings';
?>

<?php get_header(); ?>

<main>
    <section>
        <h1><span>STANDINGS</span></h1>
    </section>
    <section class="standings">
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
            <div class="country">
                <div class="double selected" style="display: block;margin: 10px;text-align: center">
                    <?php
                    $standings = Display3x3Data::standings($year);
                    $last_update = '';
                    ?>
                    <?php
                    $i = 1;
                    foreach ($standings as $key => $_standing) : if (empty($key) || strpos($key, 'NZL')) continue; ?>
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
                foreach ($standings as $key => $_standing) : if (empty($key)) continue; ?>
                    <div class="<?= strtolower(str_replace(' ', '-', $key)) ?> double selected <?= $i == 1 ? '' : 'hide' ?>"
                         style="display: block;">
                        <?php
                        $k = 1;
                        foreach ($_standing as $conference => $_std) : ?>
                            <a class="area-items <?= $k == 1 ? 'active' : '' ?>"
                               data-conference="<?= strtolower(str_replace(' ', '-', $conference)) ?>"
                               data-country="<?= strtolower(str_replace(' ', '-', $key)) ?>">
                               <?php

                                echo str_replace($searchVal, '', $conference); ?>
                               </a>
                            <?php $k++;endforeach; ?>
                    </div>
                <?php $i++;endforeach; ?>
            </div>
            <div class="standings-result result-area" >
                <?php
                $i = 1;
                foreach ($standings as $key => $_standing) : if (empty($key)) continue; ?>
                    <div data-country="<?= strtolower(str_replace(' ', '-', $key)) ?>"
                        class="area-item result-item result-<?= strtolower(str_replace(' ', '-', $key)) ?>"
                        data-area="1" style="<?= $i == 1 ? 'display: block;' : 'display: none;' ?> ">
                        <div class="js-scrollable scroll-hint result-table">
                            <table>
                                <thead>
                                <tr>
                                    <th>RANKING</th>
                                    <th>TEAM</th>
                                    <th>PREMIER POINT</th>
                                    <th>GAMES</th>
                                    <th>W</th>
                                    <th>L</th>
                                    <th style="width: 55px">AVG. WIN POINT</th>
                                    <th style="width: 55px">AVG. LOST POINT</th>
                                    <th>PLAYER POINTS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $k = 1;
                                    foreach ($_standing as $conference => $_conference) :
                                        $j = 1;
                                        foreach ($_conference as $key => $_std) :
                                        $last_update = $_std['last_updated'];
                                        ?>
                                        <tr class="conference-item <?= $k == 1 ? 'active' : 'hide' ?> <?= strtolower(str_replace(' ', '-', $conference)) ?>">
                                            <td><span class="icon-num w35 gold"><?= $j++; ?><span></td>
                                            <td>
                                                <div class="item-wrapper">
                                                    <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $_std['team_id'] ?>" target="_blank">
                                                        <img style="height: 50px;margin-right: 10px;" src="<?= $_std['avatar'] ?>"  onerror="this.onerror=null;this.src='https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/no-team.png';"/>
                                                        <?= $_std['name'] ?> 
                                                    </a>
                                                </div>
                                            </td>
                                            <td><?= $_std['premier_point'] ?></td>
                                            <td><?= !empty($_std['game']) ? $_std['game'] : '---' ?></td>
                                            <td><?= $_std['win_game'] ?></td>
                                            <td><?= $_std['loses_game'] ?></td>
                                            <td style="width: 55px"><?= round($_std['win'] / $_std['game'], 2) ?></td>
                                            <td style="width: 55px"><?= round($_std['loses'] / $_std['game'], 2) ?></td>
                                            <td><?= $_std['team_point'] ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                <?php $k++;endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php $i++;endforeach; ?>
                <div class="tbl-bottom-info">
                    <div class="col">
                        <p>
                        -PREMIER POINT：各ラウンドで成績に応じてチームへ付与されるポイント<br>
                        -GAMES：試合数<br>
                        -W：勝利数<br>
                        -L：敗戦数<br>
                        -AVG. WIN POINT：1試合あたりの平均得点数<br>
                        -AVG. LOST POINT：1試合あたりの平均失点数<br>
                        -PLAYER POINT：出場した選手個人に付与されるリーグ独自の個人ポイント<br>
                        </p>
                    </div>
                    <div class="col">
                        <!-- 日付 -->
                        <!-- <p>Last update : <?= date('Y/m/d', strtotime($last_update)); ?></p> -->
                        <p>Last update :2022/06/13 </p>
                    </div>
                </div>                          
            </div>
        </div>
        <div class="context" id="season-regulation">
   
            <h3>カンファレンス順位決定方法</h3>
            <p>各レギュラーラウンドで成績に応じたプレミアポイントが付与され、プレミアポイントの多いチームがカンファレンス内順位の上位となる。</p>
            <p>▽プレミアポイント一覧</p>
            <table class="sp_hide">
                <tbody>
                    <tr>
                        <th>STANDINGS</th>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <th>PREMIER POINT</th>
                        <td>100</td>
                        <td>80</td>
                        <td>70</td>
                        <td>60</td>
                        <td>50</td>
                        <td>45</td>
                    </tr>
                </tbody>
            </table>
            <table class="pc_hide  first-table">
                <tbody>
                    <tr>
                        <th>STANDINGS</th>
                        <th>PREMIER POINT</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>40</td>
                    </tr>
                </tbody>
            </table>
            <p>プレミアポイントが並んだ場合の順位決定方法は以下のとおり決定される。</p>
            <ol>
                <li>勝利数が多いチームを上位とする。</li>
                <li>上記の項目も同数の場合、平均得点数が高いチームを上位とする。</li>
                <li>上記の項目も同数の場合、平均失点数が低いチームを上位とする。</li>
                <li>上記の項目も同数の場合、チームロスター登録選手6名の*3x3.EXE プレーヤーポイント合計値を比較し、高いチームを上位とする。<br>
                （6名を超えるチームの場合はポイントの高い順に6名分の合算とする）</li>
                <li>上記の項目も同数の場合、抽選を行い順位を決定する。</li>
            </ol>
            <p>※3x3.EXE プレーヤーポイント：「<a href="/premier/season-regulation/" style="color: #0000FF; text-decoration: underline">REGULATION > ６．3x3.EXE PLAYER POINTS</a>」を参照</p>
            <p>※クロスカンファレンスカップにおけるプレミアポイントは以下の通り順位に応じて付与される。</p>
            <table class="sp_hide">
                <tbody>
                    <tr>
                        <th>STANDINGS</th>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9~12</td>
                        <td>13~16</td>
                        <td>17~28</td>
                        <td>29~42</td>
                    </tr>
                    <tr>
                        <th>PREMIER POINT</th>
                        <td>100</td>
                        <td>80</td>
                        <td>70</td>
                        <td>60</td>
                        <td>50</td>
                        <td>45</td>
                        <td>40</td>
                        <td>35</td>
                        <td>20</td>
                        <td>18</td>
                        <td>16</td>
                        <td>14</td>
                    </tr>
                </tbody>
            </table>
            <table class="pc_hide  first-table">
                <tbody>
                    <tr>
                        <th>STANDINGS</th>
                        <th>PREMIER POINT</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td>9~12</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>13~16</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>17~28</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td>29~42</td>
                        <td>14</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php } ?>

</section>
</main>
<script src="<?= esc_url(get_template_directory_uri()) . '/assets/js/standings.js' ?>"></script>
<link rel="stylesheet" href="<?php echo  esc_url( get_template_directory_uri() ) . '/assets/css/standings.css'; ?>" media="all">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/scroll-hint.css'); ?>">

<?php get_footer(); ?>
