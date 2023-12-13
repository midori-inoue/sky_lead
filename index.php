<?php get_header(); ?>
<main>
<h1><img src="<?php echo get_template_directory_uri(); ?>/img/works/h1.png" alt="実績 Works"/></h1>
<section>
<div id="works">
<?php
  if(is_category()):
    $archive_title = single_cat_title('', false).'の実績一覧';
    $archive_description = category_description();
  elseif(is_tag()):
    $archive_title = single_cat_title('', false).'の実績一覧';
    $archive_description = tag_description();
  elseif(is_year()):
    $archive_title = get_the_time("Y年").'の実績一覧';
  elseif(is_month()):
    $archive_title = get_the_time("Y年m月").'の実績一覧';
  elseif(is_day()):
    $archive_title = get_the_time("Y年m月d日").'の実績一覧';
  elseif(is_author()):
    $author_id = get_query_var('author');
    $author_name = get_the_author_meta( 'display_name', $author_id );
    $archive_title = $author_name.'の実績一覧';
  endif;
 
  if(!empty($archive_title)):
    echo '<h2>'.$archive_title.'</h2>';
  endif;
  ?>
<ul>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<li><figure><a href="<?php the_permalink(); ?>"><!--画像を追加-->
<?php if( has_post_thumbnail() ): ?><?php the_post_thumbnail('medium'); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/img/works/dammy.png" alt="no-img"/><?php endif; ?></a></figure><dl><?php $cat = get_the_category(); $cat = $cat[0]; {
echo '<dt class="' . $cat->category_nicename . '_n" />';
} ?><?php the_category(','); ?></dt><dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd></dl></li>
<?php endwhile; endif; ?><!--ループ終了-->
</ul>
</div>    
</section>
<article>
<!--ページャー-->
<div class="pager">
<?php get_template_part('pager-archive'); ?>
</div>  
</article>
</main>
<?php get_footer(); ?>