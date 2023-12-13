<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );

//カスタムメニュー
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'top-page-nav',  ' トップページナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );


// wp_head()でのtitleタグ出力を止めておく
remove_action('wp_head', '_wp_render_title_tag', 1);


//画像パスを相対パスに
function replaceImagePath($arg) {
	$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
	return $content;
}  
add_action('the_content', 'replaceImagePath');


//TOPページの相対パス
add_shortcode('hurl', 'shortcode_hurl');
	function shortcode_hurl() {
	return home_url( '/' );
}
