<?php

/**
 * TOP
 *
 */
?>

<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'teams';
$g_page_slug = 'player-detail';
$g_page_title = 'PLAYER DETAIL';

?>

<?php get_header(); ?>
<main id="team" class="contents js-headerNextContent">
    <?php
    $team = Display3x3Data::player($_GET['pid'], $_GET['t']);
    ?>

    <div class="team_contents">
        <a class="team_logo_box">
        <a href="<?= get_bloginfo('url') ?>/team-detail?n=<?= $team['team_id'] ?>"
            <img class="team_logo" style="width: 230px"
                 src="<?= $team['team_avatar'] ?>" alt=""></a>
        </h1>

        <div class="team_intro">
            <p class="team_address"><?= $team['team_name'] ?>
            <br/> <span style="font-size: 1.8rem;"> <?= $team['home_town'] ?> </span>
            </p>
        </div>
    </div>
    <section class="player">
        <div class="player-info">

            <ul style="text-align: center; padding: 20px">
                <li class="player_item">
                    <div class="player_img_box">
                        <img style="width: 100%" alt="<?= $team['team_name'] ?>" src="<?= $team['avatar'] ? $team['avatar'] : 'https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/player-detail.png' ?>">
                    </div>
                    <div class="player_name_block js-playerNameHeight">
                        <p class="player_number">#<?= $team['number'] ?></p>
                        <p class="player_name"><?= $team['name'] ?></p>
                    </div>
                    <div class="player_stats">
                        <ul>
                            <li>
                                <span class="stats-title">Birthplace</span>
                                <span class="stats-data"><?= $team['birthplace'] ?></span>
                            </li>
                            <li>
                                <span class="stats-title">Date of birth</span>
                                <span class="stats-data"><?= $team['birthday'] ?></span>
                            </li>
                            <li>
                                <span class="stats-title">High</span>
                                <span class="stats-data"><?= $team['height'] ?> cm</span>
                            </li>
                            <li>
                                <span class="stats-title">Weight</span>
                                <span class="stats-data"><?= $team['weight'] ?> kg</span>
                            </li>
                            <li>
                                <span class="stats-title">Nationality</span>
                                <span class="stats-data"><?= $team['nationality'] ?></span>
                            </li>

                        </ul>
                    </div>
                </li>


            </ul>

        </div>
        <div class="share-btn-area">
            <ul style="text-align: center; padding: 20px">
            <?php if(!empty($team['twitter_account'])) { ?>
                <li style="margin-right: 20px;"><a class="share-twitter" href="https://twitter.com/<?= $team['twitter_account'] ?>" rel="nofollow" target="_blank"><img src="https://3x3exe.com/premier/assets/img/icon/sns/btn-twitter.png"></a></li>
            <?php } ?>
            <?php if(!empty($team['instagram_account'])) { ?>
                <li><a class="share-instagram" href="https://www.instagram.com/<?= $team['instagram_account'] ?>" target="_blank"><img src="https://3x3exe.com/premier/assets/img/icon/sns/btn-instagram.png"></a></li>
            <?php } ?>
            </ul>
        </div>
    </section>
</main>
<?php get_footer(); ?>
