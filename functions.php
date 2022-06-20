<?php
function load_3x3_assets_files() {
    // Print styles.
    wp_enqueue_style( '', get_template_directory_uri() . '/assets/css/style.css', array(), null, 'all' );
    wp_enqueue_style( '', get_template_directory_uri() . '/assets/css/news.css', array(), null, 'all' );
    wp_enqueue_style( '', get_template_directory_uri() . '/assets/css/normalize.css', array(), null, 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_3x3_assets_files' );
function na_remove_slug( $post_link, $post, $leavename ) {

    if ( 'news' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }
    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );


    return $post_link;
}
add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );

function na_parse_request( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'news', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'na_parse_request' );

include_once( WP_CONTENT_DIR . '/settings/main.php' );

Class Display3x3Data {

    const API_HOST = 'https://xsm-stg.sakura.ne.jp/team-manager/api';

    public static function get($url) {
        $result = [];
        try {
            $request = wp_remote_get($url, array( 'timeout' => 120, 'httpversion' => '1.1' ));
            $result = wp_remote_retrieve_body( $request );
            if ($result) {
                $result = json_decode($result, true);
            }
        } catch (Exception $e) {
        }

        return $result;
    }

	public static function news($limit) {
	    $url = self::API_HOST . '/v1/global-site/top/standings?limit='.$limit;
        return self::get($url);
	}

	public static function standings($year) {
	    $url = self::API_HOST . '/v1/global-site/standings/'.$year;
        return self::get($url);
	}

	public static function schedules($year) {
	    $url = self::API_HOST . '/v1/global-site/schedule/'.$year;
        return self::get($url);
	}

	public static function stats($year) {
	    $url = self::API_HOST . '/v1/global-site/stats/'.$year;
        return self::get($url);
	}

	public static function scheduleDetail($round_id) {
	    $url = self::API_HOST . '/v1/global-site/result/detail?round_id='.$round_id;
        return self::get($url);
	}

	public static function teams($year) {
	    $url = self::API_HOST . '/v1/global-site/team/conference/'.$year;
        return self::get($url);
	}

	public static function teamDetail($id) {
	    $url = self::API_HOST . '/v1/global-site/team/'.$id;
        return self::get($url);
	}

	public static function teamInConference($id) {
	    $url = self::API_HOST . '/v1/local-site/team-in-conference/'.$id;
        return self::get($url);
	}

    public static function pointsTop($year) {
	    $url = self::API_HOST . '/v1/global-site/points/top?year='.$year;
        return self::get($url);
	}

    public static function player($player_id, $team_id) {
	    $url = self::API_HOST . '/v1/global-site/player/'.$player_id.'/'.$team_id;
        return self::get($url);
	}
}

// =======================================
// カスタム投稿	
// =======================================

// ギャラリーページ
function add_custom_post() {
    register_post_type(
      'gallery',
      array(
        'label' => 'ギャラリー投稿',
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array(
                        'title',
                        'editor',
                        'thumbnail',
                        'revisions',
                        'excerpt',
                        'custom-fields',
                        )
      )
    );
  // ギャラリーページTOP 国一覧ページ用
    register_post_type(
        'gal-country',
        array(
          'label' => 'ギャラリー国一覧',
          'public' => true,
          'has_archive' => true,
          'menu_position' => 5,
          'supports' => array(
                          'title',
                          'editor',
                          'thumbnail',
                          'revisions',
                          'excerpt',
                          'custom-fields',
                          )
        )
      );
  // フッターロゴ用
    register_post_type(
        'footer-logo',
        array(
          'label' => 'フッターロゴ',
          'public' => true,
          'has_archive' => true,
          'menu_position' => 5,
          'supports' => array(
                          'title',
                          'editor',
                          'thumbnail',
                          'revisions',
                          'excerpt',
                          'custom-fields',
                          )
        )
      );
  }
  add_action('init', 'add_custom_post');



// =======================================
// タクソノミー
// =======================================
function add_taxonomy() {
    register_taxonomy(
    // タクソノミースラッグ
    'info-cat',
    // 対象ページ
    'gallery',
    array(
      'label' => '国',
      'singular_label' => '国',
      'labels' => array(
        'all_items' => '国一覧',
        'add_new_item' => '国を追加'
      ),
      'public' => true,
      'show_ui' => true,
      'show_in_nav_menus' => true,
      'hierarchical' => true
      )
    );
    register_taxonomy(
    // タクソノミースラッグ
    'tac-footer-logo',
    // 対象ページ
    'footer-logo',
    array(
      'label' => '表示場所',
      'singular_label' => '表示場所',
      'labels' => array(
        'all_items' => '全ての表示場所',
        'add_new_item' => '表示場所を追加'
      ),
      'public' => true,
      'show_ui' => true,
      'show_in_nav_menus' => true,
      'hierarchical' => true
      )
    );
  }
  add_action( 'init', 'add_taxonomy' );
  

