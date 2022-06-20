<?php

/**
 * TOP
 *
 */
?>

<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'teams';
$g_page_slug = 'team-detail';
$g_page_title = 'TEAM DETAIL';

?>

<?php get_header(); ?>
<style>

</style>
<main id="team" class="contents js-headerNextContent" xmlns="http://www.w3.org/1999/html">
    <?php
    $team = Display3x3Data::teamDetail($_GET['n']);
    ?>

    <div class="team_contents">
        <h1 class="team_logo_box">
            <img class="team_logo" style="width: 230px"
                 src="<?= $team['team_avatar'] ?>" alt="">
        </h1>

        <div class="team_intro">
            <p class="team_address"><?= $team['team_name'] ?>
            <br/> <span style="font-size: 1.8rem;"> <?= $team['home_town'] ?> </span>
            </p>
        </div>

        <div class="team_intro">
            <p class="home_town" style="font-size: 1.4rem;font-weight: 400"><?= $team['slogan'] ?></p>
            <div class="team_text" style="border-bottom: 2px solid;padding: 0px"></div>
            <p class="team_text" style="font-size: 1.2rem;padding: 20px;text-align: left !important;"><?= $team['description'] != 'null' ? nl2br($team['description']) : ''; ?></p>

        </div>
    </div>
    <section class="player">
        <div class="share-btn-area">
            <ul style="text-align: center; padding: 20px">
                <?php if(!empty($team['facebook'])) { ?>
                <li style="margin-right: 20px;"><a class="share-facebook" href="<?= $team['facebook'] ?>" target="_blank"><img src="https://3x3exe.com/premier/assets/img/icon/sns/btn-facebook.png"></a></li>
            <?php } ?>
            <?php if(!empty($team['twitter'])) { ?>
                <li style="margin-right: 20px;"><a class="share-twitter" href="<?= $team['twitter'] ?>" rel="nofollow" target="_blank"><img src="https://3x3exe.com/premier/assets/img/icon/sns/btn-twitter.png"></a></li>
            <?php } ?>
            <?php if(!empty($team['instagram'])) { ?>
                <li><a class="share-instagram" href="<?= $team['instagram'] ?>" target="_blank"><img src="https://3x3exe.com/premier/assets/img/icon/sns/btn-instagram.png"></a></li>
            <?php } ?>
            </ul>
        </div>
        <h2 class="section_title" style="padding: 50px">
            <!--<span class="section_title_text"><img src="https://team.3x3exe.com/assets/images/team/section_title.svg" alt="PLAYER"></span>-->
            <span class="section_title_ruby">TEAM ROSTER</span>
        </h2>
        <ul class="player_list">
            <?php foreach ($team['players'] as $player) : ?>
                <li class="player_item">
                    <div class="player_img_box">
                        <a class="player_link" href="https://www.3x3exe.com/premier/player-detail?pid=<?= $player['id'] ?>&t=<?= $_GET['n'] ?>">
                            <img class="player_img"
                                 src="<?= $player['avatar'] ? $player['avatar'] : 'https://3x3exe.com/premier/wp-content/themes/3x3_v2/assets/img/player.png' ?>"
                                 alt="">
                        </a>

                    </div>
                    <div class="player_name_block js-playerNameHeight">
                        <p class="player_number">#<?= $player['number'] ?></p>
                        <p class="player_name"><?= $player['name'] ?></p>
                    </div>
<!--                    <div class="player_stats">-->
<!--                        <ul>-->
<!--                            <li>-->
<!--                                <span class="stats-title">3Pts</span>-->
<!--                                <span class="stats-data">8/10</span>-->
<!--                                <span class="stats-data">80%</span>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <span class="stats-title">STL</span>-->
<!--                                <span class="stats-data">5/10</span>-->
<!--                                <span class="stats-data">50%</span>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>
<?php get_footer(); ?>
