<?php
/**
 *
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'regulation';
$g_page_slug = 'season-format';
$g_page_title = '2021 SEASON FORMAT';

?>
<?php get_header(); ?>
<main>
    <style>
        .text-underline {
            text-decoration: underline;
            text-underline-position: under;
        }

        .text-bold {
            font-weight: 600 !important;
        }
        .season-format .contents p {
            width: 100%;
            margin: 0px;
            margin-bottom: 5px;
            font-weight: 400;
        }
        main section .contents {
            margin-bottom: 40px;
        }
        .season-format .contents img {
            width: 100%;
        }

        @media screen and (max-width: 750px) {
            .mb-width {
                width: 100% !important;
            }

        }
    </style>
    <section>
        <h1><span>3x3.EXE PREMIER 2021<br class="br-sp"> SEASON FORMAT</span></h1>
        <div class="share-btn-area">
            <ul>
                <li>SHARE</li>
                <li><a class="share-twitter"
                       href="http://twitter.com/share?text=&url=<?php echo esc_url($g_share_url); ?>&hashtags=3x3exe"
                       rel="nofollow" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/btn-twitter.svg' ?>"></a></li>
                <li><a class="share-facebook"
                       href="http://www.facebook.com/share.php?u=<?php echo esc_url($g_share_url); ?>"
                       target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/btn-facebook.svg' ?>"></a></li>
                <li><a class="share-line"
                       href="https://social-plugins.line.me/lineit/share?url=<?php echo esc_url($g_share_url); ?>"
                       target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/btn-line.svg' ?>"></a></li>
            </ul>
        </div>
        <div class="contents season-intro" style="margin-bottom:50px">
            <p class="text-bold"> ◤3x3.EXE PREMIER 2021シーズンフォーマット</p>
            <p>男子カテゴリーはレギュラーラウンド6大会、女子カテゴリーはレギュラーラウンド4大会を開催します。各レギュラーラウンドにおいて順位に応じた「PREMIER POINT」がチームに付与され、「PREMIER
                POINT」の多いチームを上位としてカンファレンス内の順位を決定します。全レギュラーラウンド終了後、男子カテゴリーは各カンファレンスの上位2チーム、女子カテゴリーは上位3チームがプレーオフに進出し、年間総合優勝チームを決定します。</p>
        </div>
        <div class="contents pay-off">
            <p>●:Regular Conference方式、◎:Cross Conference Cup方式、□:1 Group Tournament方式</p>
            <p><img  src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/season-format/pc/Image01.png' ?>"></p>
        </div>
        <div class="contents pay-off">
            <p class="text-bold text-underline">■　Regular Conference方式</p><br>
            <p> 【該当カテゴリー/ラウンド】</p>
            <p> ・Mens JPN / Round.1,3,4,6</p>
            <p> ・Mens THA / Round.1,2,4,5</p>
            <p> ・Mens TPE / 該当ラウンド調整中（レギュラーラウンド6大会の内、4大会）</p>
            <p>・Women’s / Round.1,2,3,4</p>
        </div>
        <div class="contents pay-off">
            <p>【対戦方法】<br/>
                カンファレンス毎に、3チーム×2グループに分かれて総当りのグループリーグ戦を実施し、各グループリーグの上位2チームずつ（計4チーム）による決勝トーナメントで順位を決定します。（3位決定戦は行わない）
            </p>
            <br/>
            <div>
                <div class="mb-width" style="width: 45%;float: left;margin-right: 20px"><img  src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/season-format/pc/Image02.png' ?>"></div>
                <div class="mb-width" style="width: 45%;float: left;padding-top: 55px"><img  src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/season-format/pc/Image03.png' ?>"></div>
            </div>
            <div style="clear: both"></div>
        </div>
        <div class="contents pay-off">
            <p class="text-bold text-underline">■　Cross Conference Cup方式</p><br>
            <p>【該当カテゴリー/ラウンド】</p>
            <p>・Mens JPN / Round.2,5</p>
            <p>・Mens THA / Round.3,6</p>
            <p>・Mens TPE / 該当ラウンド調整中（レギュラーラウンド6大会の内、2大会）</p>
            <p>・Women’s / Round.1,2,3,4</p>
        </div>
        <div class="contents pay-off">
            <p>【JPN 対戦方法】</p>
            <p>3チーム×14グループに分かれて総当たりのグループリーグ戦（DAY1）を実施し、各グループリーグの1位（14チーム）とワイルドカード（各グループリーグの成績2位チームの中から上位2チーム）の計16チームによるトーナメント戦で順位を決定します</p>
            <img  src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/season-format/pc/Image04.png' ?>">
            <p></p>
            <img  class="mb-width" style="width: 80%;margin: 0px auto;margin-top: 40px;" src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/season-format/pc/Image05.png' ?>">
        </div>
        <div class="contents pay-off">
            <p>【THA,TPE 対戦方法】</p>
            <p>3チーム×4グループに分かれて総当たりのグループリーグ戦を実施し、各グループリーグの上位2チームずつ（計8チーム）による
            トーナメント戦で順位を決定します。</p>
            <img class="mb-width" style="width: 80%;margin: 0px auto;margin-top: 40px;"  src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/season-format/pc/Image06.png' ?>">
            <img class="mb-width" style="width: 80%;margin: 0px auto;margin-top: 40px;"  src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/season-format/pc/Image07.png' ?>">
        </div>
        <div class="contents pay-off">
            <p class="text-bold text-underline">■　1 Group Tournament方式</p><br>
            <p>【該当カテゴリー/ラウンド】</p>
            <p>・Mens NZL / Round.1,2,3</p>
            <p>※ニュージーランドは、新型コロナウイルスの影響によりプレーオフには参加しないため独自の対戦方式で実施します。</p>
        </div>
        <div class="contents pay-off">
            <p>【対戦方式】<br/>
                カンファレンス毎に6チーム総当たりのグループリーグ戦を実施し、グループリーグの上位4チームによる決勝トーナメントを二日間で実施し、順位を決定します。（3位決定戦は行わない）
            </p>
            <div>
                <div style="margin-top: 30px">
                    <div class="mb-width" style="width: 65%;float: left;margin-right: 20px"><img  src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/season-format/pc/Image08.png' ?>"></div>
                    <div class="mb-width" style="width: 30%;float: left;"><img  src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/season-format/pc/Image09.png' ?>"></div>
                </div>
                <div style="clear: both"></div>
            </div>
        </div>
        <div class="contents pay-off">
            <p class="text-bold">◤ラウンド順位決定方法</p><br>
            <p>3x3.EXE PREMIER 2021の各ラウンドにおける順位決定方法は下記に準ずる。</p>
            <p>1.	勝利数が多いチームを上位とする。</p>
            <p>2.	上記の項目も同数の場合、平均得点数が高いチームを上位とする。</p>
            <p>3.	上記の項目も同数の場合、ラウンドロスター3名の3x3.EXE PLAYERS POINTの合計値（ポイントが高い順）を比較し、高いチームを上位とする。</p>
            <p>4.	上記の項目も同数の場合、抽選を行い順位を決定する。</p>

        </div>
        <div class="contents pay-off">
            <p class="text-bold">◤カンファレンス順位決定方法</p>
            <p>各ラウンドで成績に応じたプレミアポイントが付与され、プレミアポイントの多いチームがカンファレンス内順位の上位となる。</p>
            <p>▽プレミアポイント一覧</p>
            <p>プレミアポイントが並んだ場合の順位決定方法は以下のとおり決定される。</p>
            <img style="margin: 20px 0px"  src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/season-format/pc/Image10.png' ?>">
            <p>1. 勝利数が多いチームを上位とする。</p>
            <p>2. 上記の項目も同数の場合、平均得点数が高いチームを上位とする。</p>
            <p>3. 上記の項目も同数の場合、平均失点数が低いチームを上位とする。</p>
            <p>4. 上記の項目も同数の場合、チームロスター登録選手6名の3x3.EXE PLAYERS POINTの合計値を比較し、高いチームを上位とする。（6名を超えるチームの場合はポイントの高い順に6名分の合算とする）</p>
            <p>5. 上記の項目も同数の場合、抽選を行い順位を決定する。</p>

        </div>
        <div class="contents pay-off">
            <p class="text-bold">◤プレーオフ</p>
            <p class="text-bold text-underline">■ プレーオフ 男子</p><br/>
            <p>ノックアウトトーナメント方式で実施され、レギュラーラウンド日程終了時点での各カンファレンスの上位2チームが進出します。</p>
            <p class="text-bold text-underline">■ プレーオフ 女子 </p><br/>
            <p>ノックアウトトーナメント方式で実施され、レギュラーラウンド日程終了時点での各カンファレンスの上位３チームが進出します。</p><br/>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p>※各海外カンファレンスのプレーオフ参加については、出入国規制などの状況をみてリーグが判断し、対戦方式を決定します。</p>
            <p>※ワイルドカードの進出枠数は、プレーオフの対戦方式が決定次第確定します。</p>


        </div>
        <div class="contents pay-off">
            <p class="text-bold">◤ TRプレーヤー制度</p>
            <p>TRプレーヤーとは「Temporary Registered Player」の略称。3x3.EXE PREMIERはマルチな活動を行う選手が多く所属するリーグ構造のため、出場選手が何らかの事情で規定数を下回った場合に、チームに所属していないプレーヤーを一時召集することができる制度。一時招集されるプレーヤーはリーグが経歴等を審査し承認されたプレーヤー（※プレミアプレーヤー候補リスト）が対象となり、TR制度を希望したカンファレンス順位が下位のチームから指名することができます。過去にはTRプレーヤーながらもラウンドMVPを獲得し、その成績が評価され、チームのロスター入りを果たす選手も多く誕生しています。3x3.EXE PREMIERでプレーすることを目指す選手達にとって最もアピールすることが出来る場にもなっています。</p>
            <p>※本制度は【JPN/男子】、【JPN/女子】のみ対象となります。</p>
            <p>※TRプレーヤー制度は、レギュラーラウンド（Round.1~6）のみ使用可能。プレーオフは活用できません。</p>
        </div>
        <div class="contents pay-off">
            <p class="text-bold">◤ チームロスター入替制度</p>
            <p>シーズン途中のレギュラーラウンド4終了後に、ロスター6名のうち最大2名まで選手を変更することができる制度。マルチな活動を行う多様な選手に対して一人でも多くプレーする機会を提供することを目的としています。新たな戦力補充やチーム間の移籍/トレード、またはシーズン前半でTR選手として活躍した選手がチームにロスター入りする等、チームの戦力が大きく動きます。</p>
            <p>※本制度は【JPN/男子】のみが対象となります。</p>

        </div>
        <div class="contents pay-off">
            <p class="text-bold text-underline"> ◤ 3x3.EXE PLAYERS POINTとは</p>
            <p>2020シーズンまでグループリーグ順位決定方法においては、FIBAが開発管理している「FIBA 3x3 個人ランキングポイント」を採用していましたが、2021シーズンより、参戦するプレーヤーの価値を創出することを目的として、選手個人に付与されるポイント「3x3.EXE PLAYERS POINT（スリーエックススリードットエグゼプレーヤーズポイント）」を発行し、リーグ独自のポイント制度を導入します。</p>
            <p>「3x3.EXE PLAYERS POINT」は、大会の順位成績や個人のスタッツによって大会毎にポイントとして付与され、より個人としてのパフォーマンスが可視化される他、グループリーグ戦の順位決定方法等でもこのプレーヤーポイントが扱われる為、ポイントを多く所持していることが上位進出の鍵になる重要な制度になります。</p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p class="text-underline">▷3x3.EXE PLAYERS POINTの計算方法</p>
            <p class="text-bold">（大会順位ポイント）＋｛個人の試合数＋個人の平均得点＋個人のノックアウトショット数｝×（大会レベル）</p>
            <img  src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/season-format/pc/Image11.png' ?>">
        </div>
        <div class="contents pay-off">
            <p>※Playoffsのみ以下の計算式でポイントを付与する。</p>
            <p>（大会順位ポイント）＋｛試合数＋個人の平均得点＋個人のノックアウトショット数+個人のハイライトプレー数｝×（大会レベル）</p>

            <img style="margin-top: 40px"  src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/season-format/pc/Image12.png' ?>">
            <p style="text-align: right">※上図：2021シーズン対象</p>
            <p>・ポイントの獲得期間は4月1日～翌年3月31日までの一年間。</p>
            <p>・ポイントの有効期限は毎年3月31日までとなり、獲得したポイントは4月1日に失効される。</p>
            <p>・ポイントの上限はなく、期間内に獲得したポイントがすべて累積される。</p>
            <p>・ポイントは各大会が終了した2日後に付与される。</p>

        </div>
    </section>
</main>
<?php get_footer(); ?>
