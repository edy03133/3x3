<?php
/**
 * STATS-archive (/office/stats/)
 *
 */
?>
<?php
global $g_page_category, $g_page_slug, $g_page_title;
$g_page_category = 'what3x3';
$g_page_slug = 'season-regulation';
$g_page_title = 'Season Regulation';

?>
<?php get_header(); ?>
<main id="season-regulation" class="about">
    <section>
        <h1 class="with-sub-title">
        
            <span>
                <span class="h1-sub-title">
                    3x3.EXE PREMIER JAPAN 2022
                </span> 
                <br>
                REGULATION
            </span>
        </h1>
        <!-- <div class="share-btn-area">
            <ul>
                <li>SHARE</li>
                <li><a class="share-twitter" href="http://twitter.com/share?text=&url=<?php echo esc_url($g_share_url); ?>&hashtags=3x3exe" rel="nofollow" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/btn-twitter.svg' ?>"></a></li>
                <li><a class="share-facebook" href="http://www.facebook.com/share.php?u=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/btn-facebook.svg' ?>"></a></li>
                <li><a class="share-line" href="https://social-plugins.line.me/lineit/share?url=<?php echo esc_url($g_share_url); ?>" target="_blank"><img src="<?= esc_url( get_template_directory_uri() ) . '/assets/img/icon/sns/btn-line.svg' ?>"></a></li>
            </ul>
        </div> -->
    </section>
    <section>
        <div class="container">
            <div class="content-title">
                <h2>１. シーズンフォーマット</h2>
            </div>
            <div class="context">
                <p class="mt-0-sp">
                3x3.EXE PREMIER JAPAN 2022シーズンは全42チームを6チームずつ7カンファレンスに分け、全8ラウンドの*レギュラーラウンドを実施します。各レギュラーラウンドでは成績に応じたプレミアポイントが付与され、プレミアポイントが多い順にカンファレンス内の総合順位が決定し、レギュラーラウンド終了時点のカンファレンス上位チームのみによるプレーオフで年間総合優勝チームを決定します。
                </p>
                <p class="sub-text">
                *レギュラーラウンド：カンファレンス内の総合順位を決めるための男子全8ラウンドの公式試合をレギュラーラウンドという。
                </p>
            </div>

            <div class="content-title">
                <h2>２. レギュラーラウンド大会方式</h2>
            </div>
            <div class="context">
                <p class="mt-0-sp">
                プレーオフを除く、カンファレンス内の総合順位を決めるための全8ラウンドのレギュラーラウンドには３つの対戦方式を認めております。（以降記載）<br>
                <span class="under-line">※新型コロナウイルス感染状況によって開催されるラウンド数や大会フォーマットが一部変更または中止になる可能性があります。</span></p>

                <h3>〔１〕レギュラーカンファレンス方式 / <span>【該当ラウンド】ラウンド1、３、６，７，８</span></h3>
                <p>
                カンファレンス毎に、3チーム×2グループに分かれて総当りのグループリーグ戦を実施し、各グループリーグの上位2チームずつ（計4チーム）による決勝トーナメントで順位を決定する。
                </p>
                <ul>
                    <li>3位決定戦は行わない</li>
                    <li>組み合わせは事前にリーグが決定する。</li>
                </ul>
                <p class="image-with-text">▽レギュラーカンファレンス方式/対戦組</p>
                <div class="image-wrapper ">
                    <div class="image-box image-01">
                        <img src="<?php echo get_theme_file_uri( 'assets/img/regular-conference-01.jpg' ); ?>" alt="">
                    </div>
                    <div class="image-box image-02">
                        <img src="<?php echo get_theme_file_uri( 'assets/img/regular-conference-02.jpg' ); ?>" alt="">
                    </div>
                </div>
                <h3>〔２〕インターカンファレンス方式 / <br class="pc_hide"><span>【該当ラウンド】ラウンド２、５</span></h3>
                <p>
                    異なる2つのカンファレンスが1,3,5位と2,4,6位の組み合わせで交流戦を行う。 3チーム×2グループに分かれて総当りのグループリーグ戦を実施し、各グループリーグの上位2チームずつ（計4チーム）による決勝トーナメントで順位を決定する。
                </p>
                <ul>
                    <li>3位決定戦は行わない</li>
                    <li>カンファレンスの組み合わせはリーグにて決定し、予選リーグの組み合わせは前ラウンド終了時点のスタンディングスで決定する。</li>
                </ul>
                <p class="image-with-text">▽カンファレンスの組み合わせ（前ラウンド終了時点のスタンディングスで決定）</p>
                <div class="image-wrapper inter-conference">
                    <div class="image-box image-01">
                        <img src="<?php echo get_theme_file_uri( 'assets/img/inter-conference-01.png' ); ?>" alt="">
                    </div>
                    <div class="image-box image-02">
                        <img src="<?php echo get_theme_file_uri( 'assets/img/inter-conference-02.png' ); ?>" alt="">
                    </div>
                </div>
                <h3>〔３〕クロスカンファレンスカップ方式 / <span>【男子/該当ラウンド】ラウンド４</span></h3>
                <p>
                    3チーム×14グループに分かれて総当たりのグループリーグ戦（DAY1）を実施し、各グループリーグの1位（14チーム）とワイルドカード（各グループリーグの成績2位チームの中から上位2チーム）の計16チームによるトーナメント戦（DAY2）で順位を決定する。
                </p>
                <ul>
                    <li>3位決定戦は行わない</li>
                    <li>カンファレンスの組み合わせはリーグにて決定し、予選リーグの組み合わせは前ラウンド終了時点のスタンディングスで決定する。</li>
                    <li>ワイルドカードはレギュラーラウンド順位決定方法によりRound.4（Day1）の結果で決定する。</li>
                </ul>
                <p class="image-with-text">▽グループリーグの組み合わせ（前ラウンド終了時点のスタンディングスで決定）</p>
                <div class="image-wrapper">
                    <div class="image-box one-image">
                        <img src="<?php echo get_theme_file_uri( 'assets/img/cross-conference-01.jpg' ); ?>" alt="">
                    </div>
                </div>
                <p class="image-with-text">▽決勝トーナメントの組み合わせ（Day1 グループリーグの成績順に決定）</p>
                <div class="image-wrapper">
                    <div class="image-box one-image mt-10-pc">
                        <img src="<?php echo get_theme_file_uri( 'assets/img/cross-conference-02.jpg' ); ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="content-title">
                <h2>３. 順位決定方法</h2>
            </div>
            <div class="context">
                <h3 class="order-deside">〔１〕レギュラーラウンド順位決定方法</h3>

                <p>
                    ・レギュラーラウンドのグループリーグおよび該当のラウンド全体におけるチームの順位（カンファレンス総合戦績における順位は除く）は、次の基準によって決定する。またトーナメントの場合は同じステージに進んだ複数のチームを対象として同じく次の基準で順位を決定する。
                </p>
                <ol>
                    <li>勝利数が最も多いチーム</li>
                    <li>上記の項目が同数の場合は、１ゲームあたりの平均得点が最も多いチーム</li>
                    <li>上記を経ても順位が決まらない場合、大会のシード順位が最も高いチームを上位とする。</li>
                </ol>
                <p>
                    ※各チームのシード順位は、国際バスケットボール連盟（FIBA）が定める個人ポイントランキング制度により、前ラウンド終了時点で当該チーム内の上位３人のランキングポイント合計に応じて決定される。
                </p>
                <h3>〔２〕カンファレンス順位決定方法</h3>
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
                <p>※3x3.EXE プレーヤーポイント：「６．3x3.EXE PLAYER POINTS」を参照</p>
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

            <div class="content-title">
                <h2>４. プレーオフ</h2>
            </div>
            <div class="context">
                <h3>〔１〕出場資格</h3>
                <p>国内外含むカンファレンス順位の上位2位までのチームがプレーオフに参加する。</p>
                <h3>〔３〕対戦方法</h3>
                <p>
                    調整中<br>
                    ※決定次第更新いたします。
                </p>
            </div>    

            <div class="content-title">
                <h2>５．選手</h2>
            </div>
            <div class="context">
                <h3>〔１〕ロスター</h3>
                <p>・各チーム6名の選手を登録することができる。</p>
                <h3>〔２〕U-23特別選手枠</h3>
                <p>
                    各チームはロスターに登録できる6名に加えて、U-23特別選手を最大4名まで登録することができる。<br>
                    ・U-23特別選手の対象は2022年4月1日時点で23歳未満（1999年4月2日以降の生年月日）のプレーヤーであること。
                </p>
                <p>※当該シーズンにチームに登録した場合、選手の変更やチームの変更は行えない。</p>
            </div>    

            <div class="content-title">
                <h2 class="small-x">６. 3x3.EXE PLAYER POINTS</h2>
            </div>
            <div class="context">
                <h3>〔１〕3x3.EXE PLAYER POINTS</h3>
                <p>公式大会では、大会の成績によって、出場した選手個人に付与されるリーグ独自の個人ポイントが付与される。このポイントを3x3.EXE プレーヤーポイントという。</p>
                <h3>〔２〕3x3.EXE PLAYER POINTS算出方法</h3>
                <p>大会順位ポイント ＋（個人の平均得点＋個人のハイライトプレー数）× 大会レベル</p>
                <div class="image-wrapper">
                    <div class="image-box one-image">
                        <img src="<?php echo get_theme_file_uri( 'assets/img/player-points-img.jpg' ); ?>" alt="">
                    </div>
                </div>
            </div>   

            <div class="content-title">
                <h2>7. 試合</h2>
            </div>
            <div class="context">
                <p>
                    公式試合は国際バスケットボール連盟の定める競技規則に従って実施される。<br>
                    ※一部3x3.EXE PREMIER 独自のルールを採用するものとする。
                </p>
                <table>
                    <tbody class="specification">
                        <tr>
                            <th>コートサイズ</th>
                            <td>横15ｍ、縦11ｍ </td>
                        </tr>
                        <tr>
                            <th>使用ボール</th>
                            <td>FIBA 3x3 GAME BASKETBALL：サイズ6号/重量7号</td>
                        </tr>
                        <tr>
                            <th>選手</th>
                            <td>4 名（3名+控え選手1名）</td>
                        </tr>
                        <tr>
                            <th>審判</th>
                            <td>2名</td>
                        </tr>
                        <tr>
                            <th>タイムアウト</th>
                            <td>1チーム1回（30秒） </td>
                        </tr>
                        <tr>
                            <th>ゲームの開始</th>
                            <td>コイン・トス（coin flip）によって決定※コイン・トスまたはじゃんけんに勝ったチームが最初に攻撃側チームとなるか防御側チームとなるかを選択する。※延長時には、ゲーム開始のときに防御側であったチームが延長開始時に攻撃側チームとなり開始する。</td>
                        </tr>
                        <tr>
                            <th>得点</th>
                            <td>ツー・ポイントラインの内側からのショットによるゴールは1点<br>
                                ツー・ポイントラインの外側からのショットによるゴールは2点<br>
                                フリースローによる得点は１点</td>
                        </tr>
                        <tr>
                            <th>競技時間とゲームの勝敗</th>
                            <td>試合時間は10分間<br>
                                競技時間が終了した時点で得点の多いチームが勝ち<br>
                                どちらかのチームが21点以上得点した時，試合は終了となり，そのチームを勝ちとする。<br>
                                ※21点目以降のプレイについてはフリースローが残っていたとしても行わない。</td>
                        </tr>
                        <tr>
                            <th>延長</th>
                            <td>先に2点を得点したチームの勝ち（この場合21点ルールは適用にならない。）<br>
                                ※1分間のインターバルの後に延長をおこなう。</td>
                        </tr>
                        <tr>
                            <th>ショットクロック</th>
                            <td>12秒</td>
                        </tr>
                        <tr>
                            <th>ショット動作中のファウルで与えられるフリースロー</th>
                            <td>ツー・ポイントラインの内側でのショット時のファウルは1個のフリースロー<br>
                                ツー・ポイントラインの外側でのショット時のファウルは2個のフリースロー</td>
                        </tr>
                        <tr>
                            <th>チーム・ファウル制限</th>
                            <td>6回</td>
                        </tr>
                        <tr>
                            <th>過剰チーム・ファウルによる罰則(7～9回)</th>
                            <td>ショット時でないファウルであっても、ファウルを受けたチームはフリースローを2個与えられる。</td>
                        </tr>
                        <tr>
                            <th>過剰チーム・ファウルによる罰則(10回以上)</th>
                            <td>ショット時でないファウルであっても、ファウルを受けたチームはフリースローを2個与えられ、さらに、ボールの所有権も与えられる。※｢チーム・ファウルによる罰則｣（7、8、9 回目および10回目以上）は、ショットが成功したときは得点が認められ、さらに2個のフリースローが与えられる。</td>
                        </tr>
                        <tr>
                            <th>テクニカルファウルによる罰則</th>
                            <td>相手に1個のフリースローが与えられ、攻守は変わらずチェックボールからリスタート<br>
                                ※オフェンスチームのテクニカルファウルの場合、ショットクロックは継続で再開される。</td>
                        </tr>
                        <tr>
                            <th>アンスポーツマンライク・ファウルによる罰則</th>
                            <td>相手に2個のフリースローが与えられる。チームファウルカウントは2つ加算される。（チームファウルが10回目を超える場合はボールポゼッションも与えられ、チェックボールでリスタート）</td>
                        </tr>
                        <tr>
                            <th>ディスクォリファイング・ファウルによる罰則</th>
                            <td>相手に2個のフリースローとボールポゼッションが与えられる。チームファウルカウントは2つ加算される。</td>
                        </tr>
                        <tr>
                            <th>個人ファウルと退場</th>
                            <td>アンスポーツマンライク・ファウルを2回、または、ディスクォリファイング・ファウルを宣されたプレイヤーは退場となる。</td>
                        </tr>
                        <tr>
                            <th>フィールドゴールが成功したときのボール所有権</th>
                            <td>攻守交替となり、守備側だったチームが攻撃側となりゲームを再開させる。※あらたに攻撃側になったチームは、リングの下からドリブルあるいはパスによってボールを一度ツー・ポイント・ラインの外まで運ばなければならない。あらたに防御側になったチームは、ボールが“ノー・チャージ・セミサークル”の外に出るまではボールに対してプレイをしてはならない</td>
                        </tr>
                        <tr>
                            <th>ボールがデッドになったときのボール所有権</th>
                            <td>コート内のツー・ポイント・ライン外側の頂点付近で、攻守交替であらたに守備側になるチームのプレイヤーがあらたに攻撃側になるチームのプレイヤーにボールをパスあるいはトスして渡し（“チェックボール”）ゲームを再開する。</td>
                        </tr>
                        <tr>
                            <th>守備側がリバウンド、スティールしたとき</th>
                            <td>ドリブルあるいはパスなどによって、ボールを一度ツー・ポイント・ラインの外まで運ばなければならない。</td>
                        </tr>
                        <tr>
                            <th>ジャンプ・ボール(ヘルドボール)のとき</th>
                            <td>攻守交替し、チェックボールでゲームを再開する。</td>
                        </tr>
                        <tr>
                            <th>5秒ルールについて</th>
                            <td>ボールをクリアしたオフェンスプレイヤーは、5秒以上バスケットに対して背を向けて、あるいは横を向いて、2Pエリア内でドリブルすることはヴァイオレイションとなります。</td>
                        </tr>
                        <tr>
                            <th>交代</th>
                            <td>ボールがデッドになったときに“チェックボール”前であればどちらのチームにも認められる。※あらたにコートに入る交代要員は、コートから退いて交代要員となるコート内のプレイヤーがコートの外に出て“タッチ”等の身体接触をおこなってからゲームに参加できる。その際にあらたにコートに入る交代要員は審判やTOに申し出たり報告したりする必要はない。</td>
                        </tr>
                    </tbody>
                </table>
                <h3>〔１〕オフィシャルタイムアウト</h3>
                <p>・すべての公式試合では両チームのタイムアウトに加え、ゲームクロックが4：59を示したあと、最初のデッドボール時に30秒間のオフィシャルタイムアウトが実施される。</p>
                <h3>〔２〕TVタイムアウト</h3>
                <p>・両チームのタイムアウトに加え、リーグが採用する試合は、ゲームクロックが 6:59 および 3:59 を示したあと最初のデッドボール時にそれぞれ、ゲームを通じて計 2 回の TV タイムアウトが実施される。</p>
                <p class="under-line">※レギュラーラウンドでは導入しない。</p>
                <p class="under-line">※導入対象となる試合はリーグが決定するものとする。</p>
                <h3>〔３〕没収試合</h3>
                <p>
                    ゲームが没収された場合、W-0または0-Wと記録される。<br>
                    予選グループリーグ戦で没収試合があった場合、以下のように記録される。
                </p>
                <ul>
                    <li>勝利したチーム：没収試合は試合数に含まない。</li>
                    <li>敗退したチーム：没収試合は試合数に含まれる。</li>
                </ul>
                <p>
                    例１：1試合目 W-L、2試合目17-18 Loseの場合、実際に行った2試合目の17点が平均得点となる<br>
                    例２：1試合目 L-W、2試合目19-18 Winの場合、1試合目0点、2試合目19点の為、平均得点は9.5点となる。
                </p>
            </div>
            <!-- <div class="context">
                <h3>“3x3”の魅力</h3>
                <p>◤「整備されたインフラ」を活用する都市型スポーツ 5人制バスケットボールの半分というコンパクトなスペースで開催ができ、また他のスポーツでは考えられないような象徴的なラ ンドマークや歴史的建造物、商業施設、駅前等、都市を象徴するランドマークを舞台に“整備されたインフラ”を活用し開催する ことができる都市型スポーツです。ハイトラフィックな場所にコートを設置することで多様な人々を魅了します。</p>
                <p>◤目が離せない攻守のせめぎ合いと迫力満点のスーパープレー 一試合10分間という試合時間の短さや21点先取、また12秒以内に攻撃しなくてはいけないなどの3x3独自のルールがあること から、攻守の切り替えの早さやスピーディーな試合展開が特徴です。 また、コートがコンパクトなため、ノールックパスやダンクシュート、相手の意表を突く迫力満点のプレーを間近で観戦することが できます。これは決して他の競技では味わうことのできない体験です。</p>
                <p>◤「スポーツエンターテインメント」という新たなカタチ 試合会場では、MCが3x3のルールや選手紹介、また繰り広げられるプレーを分かりやすく解説してくれるため、初めて観戦する 方でも楽しめます。試合中はDJが試合の展開や会場の雰囲気に合わせた音楽をかけ音で試合を盛り上げ、試合の合間にはチ アのダンスパフォーマンスをはじめ様々なエンターテインメントが披露され、会場の一体感を生み出します。まさに“SPORTS” “MUSIC” “DANCE”の融合が生み出す、新たなスポーツエンターテインメントとして楽しむことができます。</p>
                <p>「3x3」は、「ストリートで昔からプレーされている基盤」、「プレーする場所を選ばない競技性」、「音楽・ダンスなどのカルチャー との親和性」や「最小3人からチームを作れるシンプルさ」等、今までのスポーツにはなかったさまざまな魅力があり、誕生から わずか10数年で、世界競技人口42万人以上、国際大会には180以上の国と地域が参加するスポーツに発展しました。また、 2021年に開催された「東京オリンピック2020」では初の正式種目となり、2024年パリオリンピックでも引き続き種目採用が決定し ている等、今後もさらなる盛り上がりが期待される競技です。</p>
            </div> -->
        </div>
    </section>
</main>
<link rel="stylesheet" href="<?php echo  esc_url( get_template_directory_uri() ) . '/assets/css/about.css' ?>" media="all">
<?php get_footer(); ?>

