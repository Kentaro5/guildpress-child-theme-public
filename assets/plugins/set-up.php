<?php

if ( ! function_exists( 'guild_press_theme_enqueue_styles' ) ) {

	//テーマのスタイルの読み込みをこちらに合わせるように変更する。
	add_action( 'wp_enqueue_scripts', 'guild_press_theme_enqueue_styles' );
	function guild_press_theme_enqueue_styles() {

		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'main-child-style', get_stylesheet_directory_uri() . '/assets/css/main-child.css', array( '201801bootstrap' ) );

		wp_enqueue_script( 'main-child-js', get_stylesheet_directory_uri() . '/assets/js/main-child.js', array(), "20190210", true );

	}
}


if ( ! function_exists( 'guild_press_dequeue_my_css' ) ) {
	//親テーマのスタイルシートを削除する。
	function guild_press_dequeue_my_css() {

		wp_dequeue_style('main-css');
		wp_deregister_style('main-css');
	}
	add_action('wp_print_styles','guild_press_dequeue_my_css', 100);
}


if ( ! function_exists( 'guild_press_get_lesson_count' ) ) {

	function guild_press_get_lesson_count(  $page_slug  )
	{

		//スラッグが設定されていなければ、念の為IDから取得する。
		if( $page_slug === '' ){

			$page_slug = guild_press_get_page_slug();
		}

		$wpfunc = new WpFunc();

		$all_lesson_posts_items = $wpfunc->apply_filters( 'guild_press_get_taxonomy_lesson_lists', $page_slug );

		$lesson_post_link = ( isset($all_lesson_posts_items[0]['post_link']) && $all_lesson_posts_items[0]['post_link'] !== "" ) ? $all_lesson_posts_items[0]['post_link'] : '';

		//$lesson_post_linkが殻の場合は何も処理せずに返す。
		if( $lesson_post_link === '' ){

			return 0;
		}
		return count( $all_lesson_posts_items );
	}

}


//POSTのIDからスラッグ名を取得する関数
if ( ! function_exists( 'guild_press_get_page_slug' ) ) {

	function guild_press_get_page_slug()
	{

		$wpfunc = new WpFunc();
		$post_id = $wpfunc->get_the_ID();

		//複数ある場合は、最初のカテゴリーを取得
		$page_slug = $wpfunc->wp_get_post_terms( $post_id, 'guild_lesson_category', array("fields" => "all"));

		$slug = '';

		if( ! is_wp_error( $page_slug ) ){

			$page_slug[0] = ( isset($page_slug[0]) && $page_slug[0] !== "" ) ? $page_slug[0] : '';

			if( isset($page_slug[0]) && $page_slug[0] !== "" ){

				$slug = $page_slug[0]->slug;
			}

		}

		return $slug;
	}

}


function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );





