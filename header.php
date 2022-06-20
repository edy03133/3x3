<?php

global $g_page_category, $g_page_slug, $g_page_title;
global $g_primary_term_slug;
global $g_share_url;
$g_share_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

global $g_ogp_img_src;
$g_ogp_img_src = (isset($g_ogp_img_src)) ? $g_ogp_img_src : 'https://www.3x3exe.com/office/assets/img/share/ogp.png';

global $site_url;
$site_url = get_option( 'siteurl' );
?>
<!DOCTYPE html>
<html lang="ja" style="margin-top: 0;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=375">
    <title><?php echo esc_html($g_page_title); ?> | 3x3.EXE PREMIER | 3x3 Global Professional League</title>
    <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon.png">
    <link rel="icon" href="apple-touch-icon.png">
    <meta name="description" content="Official website of the first global 3x3 basketball league established in 2014 with FIBA endorcement. We provide news, schedules and scores, video streaming service, content, and information about team ownership and partner organizations.">
    <meta name="keywords" content="3人制バスケ,3人制バスケットボール,3x3,3on3,3x3.EXE,3x3.EXE PREMIER,スリーエックススリー,スリーオンスリー,3対3バスケ,ドットエグゼ">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo esc_url($g_share_url); ?>">
    <meta property="og:title" content="<?php echo esc_html($g_page_title); ?> | 3x3.EXE PREMIER | 3x3 Global Professional League">
    <meta property="og:url" content="<?php echo esc_url($g_share_url); ?>">
    <meta property="og:image" content="<?php echo esc_url($g_ogp_img_src); ?>">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Official website of the first global 3x3 basketball league established in 2014 with FIBA endorcement. We provide news, schedules and scores, video streaming service, content, and information about team ownership and partner organizations.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_html($g_page_title); ?> | 3x3.EXE PREMIER | 3x3 Global Professional League">
    <meta name="twitter:description" content="Official website of the first global 3x3 basketball league established in 2014 with FIBA endorcement. We provide news, schedules and scores, video streaming service, content, and information about team ownership and partner organizations.">
    <meta name="twitter:image:src" content="<?php echo esc_url($g_ogp_img_src); ?>">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400,700|Roboto+Condensed|Roboto:300,400,700" rel="stylesheet">
  

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css" />
    <!-- <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script> -->

    <script src="<?= esc_url( get_template_directory_uri() ) . '/assets/js/lib/jquery-3.3.1.min.js' ?>"></script>
    <script src="https://d.shutto-translation.com/trans.js?id=1261"></script>
    <?php if($g_page_slug) { ?>
        <link rel="stylesheet" href="<?php echo  esc_url( get_template_directory_uri() ) . '/assets/css/'.$g_page_slug ?>.css" media="all">
    <?php } ?>

    <?php wp_head(); ?>
</head>
<?php
    $url = get_bloginfo('url');
    $country_slug = substr($url, -2);
?>
<body class="<?php echo $g_page_slug ?>">
<header>
    <div class="header-top">
        <div class="language">
            <button class="btn-language">Change language</button>
            <button class="close-lang"></button>
            <ul>
                <li><a href="#" data-stt-changelang="ja" data-stt-ignore>日本語</a></li>
                <li><a href="#" data-stt-changelang="en" data-stt-ignore>ENGLISH</a></li>
                <!-- <li><a href="#" data-stt-changelang="zh-CN" data-stt-ignore>中文(簡体)</a></li> -->
                <li><a href="#" data-stt-changelang="th" data-stt-ignore>ไทย</a></li>
            </ul>
            <div class="lang-backdrop"></div>
        </div>
        <!-- <div class="header-bottom" style="background: #fff;background-color: #F5F5F5;width: 400px;margin: 0px auto;position: absolute;left: 40%;">
            <div class="countries-nav">
                <div>Countries <br class="pc">& Region : </div>
                <div class="<?php if($country_slug == 'tpe'){ echo 'selected'; } ?>"><a href="<?= $url ?>/tpe/"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/flag/flag_taipei.svg' ?>"></a></div>
                <div class="<?php if($country_slug == 'jpn'){ echo 'selected'; } ?>"><a href="<?= $url ?>/jpn/"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/flag/flag_japan.svg' ?>"></a></div>
                <div class="<?php if($country_slug == 'nzl'){ echo 'selected'; } ?>"><a href="<?= $url ?>/nzl/"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/flag/flag_newzealand.svg' ?>"></a></div>
                <div class="<?php if($country_slug == 'tha'){ echo 'selected'; } ?>"><a href="<?= $url ?>/tha/"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/flag/flag_thai.svg' ?>"></a></div>
            </div>
        </div> -->
        <div class="header-contents">
            <ul class="top-menu">
                <li class="dropdown <?php if($g_page_category == 'what3x3'){ echo 'active';} ?>">
                    <a href="javascript:void();" class="dropdown-item dropdown-title"> WHAT’S 3x3 </a>
                    <button class="dropdown-btn what3x3-btn"><span></span></button>
                    <ul class="dropdown-content">
                        <li><a class="dropdown-item" href="<?= $site_url ?>/3x3-history"> HISTORY </a></li>
                        <li><a class="dropdown-item" href="<?= $site_url ?>/rule"> 3x3 RULE </a></li>
                    </ul>
                </li>
                <li class="dropdown <?php if($g_page_category == 'about'){ echo 'active';} ?>">
                    <a href="javascript:void();" class="dropdown-item dropdown-title"> ABOUT LEAGUE </a>
                    <button class="dropdown-btn about-btn"><span></span></button>
                    <ul class="dropdown-content">
                        <li><a class="dropdown-item" href="<?= $site_url ?>/philosophy"> PHILOSOPHY</a></li>
                        <li><a class="dropdown-item" href="<?= $site_url ?>/overview"> OVERVIEW </a></li>
                        <li><a class="dropdown-item" href="<?= $site_url ?>/history"> HISTORY </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="header-bottom">
        <div class="logo">
            <p><a href="https://www.3x3exe.com/premier/3x3news/"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/logo@2x.png' ?>"></a></p>
        </div>
        <div class="site-nav">
            <ul class="navbar-nav">
                <li class="nav-item news-dropdown dropdown <?php if($g_page_category == 'news'){ echo 'active';} ?>">
                    <a href="<?= $site_url ?>/news">NEWS</a>
                    <button class="btn-expand-menu"><span></span></button>
                        <div class="dropdown-content news-sub-menu">
                        <div class="col">
                            <ul>
                                <li>
                                    <button class="btn-back-menu"><span></span></button>
                                    <a href="<?= $site_url ?>/news/?tab=league">LEAGUE</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li>
                                    <a class="sub-menu" href="<?= $site_url ?>/news/?tab=chinese-taipei">CHINESE TAIPEI</a>
                                </li>
                                <li>
                                    <a class="sub-menu" href="<?= $site_url ?>/news/?tab=japan">JAPAN</a>
                                </li>
                                <li>
                                    <a class="sub-menu" href="<?= $site_url ?>/news/?tab=new-zealand">NEW ZEALAND</a>
                                </li>
                                <li>
                                    <a class="sub-menu" href="<?= $site_url ?>/news/?tab=thai-land">THAILAND</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown <?php if($g_page_category == 'about-ticket'){ echo 'active';} ?>">
                    <a href="<?= $site_url ?>/about-ticket">TICKET</a>
<!--                    <button class="btn-expand-menu"></button>-->
<!--                    <div class="dropdown-content news-sub-menu">-->
<!--                        <div class="col">-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/teams/?y=2021">2021</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/teams/?y=2022">2022</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                </li>
                <li class="nav-item dropdown <?php if($g_page_category == 'teams'){ echo 'active';} ?>">
                    <a href="<?= $site_url ?>/teams">TEAMS</a>
<!--                    <button class="btn-expand-menu"></button>-->
<!--                    <div class="dropdown-content news-sub-menu">-->
<!--                        <div class="col">-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/teams/?y=2021">2021</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/teams/?y=2022">2022</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                </li>
                <li class="nav-item dropdown <?php if($g_page_category == 'schedule'){ echo 'active';} ?>">
                <a href="<?= $site_url ?>/schedules">SCHEDULE</a>
<!--                    <button class="btn-expand-menu"></button>-->
<!--                    <div class="dropdown-content news-sub-menu">-->
<!--                        <div class="col">-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/schedules/?y=2021">2021</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/schedules/?y=2022">2022</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                    </li>
                <li class="nav-item dropdown <?php if($g_page_category == 'standing'){ echo 'active';} ?>"><a href="<?= $site_url ?>/standings">STANDINGS</a>
<!--                    <button class="btn-expand-menu"></button>-->
<!--                    <div class="dropdown-content news-sub-menu">-->
<!--                        <div class="col">-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/standings/?y=2021">2021</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/standings/?y=2022">2022</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->

                </li>
                <li class="nav-item dropdown <?php if($g_page_category == 'stats'){ echo 'active';} ?>"><a href="<?= $site_url ?>/stats">STATS</a>
<!--                    <button class="btn-expand-menu"></button>-->
<!--                    <div class="dropdown-content news-sub-menu">-->
<!--                        <div class="col">-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/stats/?y=2021">2021</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/stats/?y=2022">2022</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                </li>
                <li class="nav-item dropdown <?php if($g_page_category == 'players-points'){ echo 'active';} ?>"><a href="<?= $site_url ?>/players-points/">PLAYERS POINTS</a>
<!--                    <button class="btn-expand-menu"></button>-->
<!--                    <div class="dropdown-content news-sub-menu">-->
<!--                        <div class="col">-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/players-points/?y=2021">2021</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/players-points/?y=2022">2022</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                </li>
                <li class="nav-item dropdown <?php if($g_page_category == 'gallery'){ echo 'active';} ?>"><a href="<?= $site_url ?>/gallery/">GALLERY</a>
<!--                    <button class="btn-expand-menu"></button>-->
<!--                    <div class="dropdown-content news-sub-menu">-->
<!--                        <div class="col">-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/players-points/?y=2021">2021</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a class="year" href="--><?//= $site_url ?><!--/players-points/?y=2022">2022</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                </li>
            </ul>
        </div>
        <button id="btn-menu-mobile">
            <div class="hamburger hamburger--slider js-hamburger">
                <div class="hamburger-box">
                <div class="hamburger-inner"></div>
                </div>
            </div>
        </button>
    </div>
</header>
