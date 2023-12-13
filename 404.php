<?php
/**
 * The template for displaying 404 pages (not found)
 */
 ?>
<?php get_header(); ?>
<main>
<h1><img src="<?php echo get_template_directory_uri(); ?>/img/404/h1.png" alt="お問合せ"/></h1>
<section>
<div id="error">
<h2>お探しのページが見つかりませんでした</h2>
<p>誠に申し訳ございません。<br>お探しのページは一時的にアクセスが出来ない状況にあるか、もしくは移動、削除され見つけることができませんでした。<br>下記のリンクより再度アクセスをお願い致します。</p>
<ul><li><a href="javascript:history.back()">前のページへ戻る</a></li><li><a href="<?php echo home_url(); ?>">トップページへ戻る</a></li></ul>
</div><!--/#contact_text-->
</section>
</main>
<?php get_footer(); ?>
