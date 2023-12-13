<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<?php /*titleタグの設定*/?>
<?php /*▼トップページの場合▼*/
if(is_home()): ?>
<title>トップページ｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title>
<?php /*▼デフォルトの「固定ページ」の場合▼*/
elseif(is_page()): ?>
<title><?php the_title(); ?>｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title>
 <?php /*▼404ページの場合▼*/
elseif(is_404()): ?>
<title>ページが見つかりませんでした｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title>
<?php /*▼デフォルトの「投稿」の場合▼*/
elseif(is_single()): ?>
<title>実績一覧｜<?php the_title(); ?>｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title> 
<?php /*▼デフォルトの「カテゴリー」に属する記事一覧ページの場合▼*/
elseif(is_category()): ?>
<?php $cat = get_the_category();$catid = $cat[0]->cat_ID;$getCatURL = get_category_link( $catid );$catName = $cat[0]->name;$catCnt = $cat[0]->category_count; ?>
<title>実績　<?php echo $catName; ?>一覧｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title>
<?php /*▼上記いずれにも属さないページの場合▼*/
else: ?>
<title>実績一覧｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title>
 
<?php endif; ?>
<!--[if lt IE 9]> 
<script src="js/html5shiv.js"></script>
<script type="text/javascript">
document.createElement('main');
</script>
<![endif]-->
<link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"><!--スタイルシートの呼び出し-->
<?php if( is_archive() ) : ?><!--アーカイブページの場合-->
    <link href="<?php echo get_template_directory_uri();?>/css/works.css" rel="stylesheet" type="text/css">
<?php elseif( is_single() ): ?> <!--シングルページの場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/single.css" rel="stylesheet" type="text/css">
<?php elseif( is_404()) : ?> <!--404ページの場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/404.css" rel="stylesheet" type="text/css"> 
<?php elseif( is_page('company') ) : ?> <!--会社概要の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/company.css" rel="stylesheet" type="text/css">
<?php elseif( is_page('contact') ) : ?> <!--お問合せの場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/contact.css" rel="stylesheet" type="text/css">
<?php elseif( is_page('thanks') ) : ?> <!--お問合せ（送信完了）の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/contact.css" rel="stylesheet" type="text/css">
<?php else: ?><!--以外のページの処理-->
<link href="<?php echo get_template_directory_uri(); ?>/css/works.css" rel="stylesheet" type="text/css">
<?php endif; ?>
<?php wp_head(); ?><!--システム・プラグイン用-->
</head>

<body>
<header> 
<div id="header_wrap"> 
<div id="header_inner">
<div id="logo"><a href="<?php echo home_url(); ?>"><span><img src="<?php echo get_template_directory_uri(); ?>/img/base/logo.png" width="280" height="85" alt=""/></span><i><img src="<?php echo get_template_directory_uri(); ?>/img/base/name.png" width="378" height="85" alt=""/></i></a></div>

</div></div>
<div id="sp"></div>
<?php wp_head(); ?><!--システム・プラグイン用-->
</header>