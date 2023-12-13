<?php get_header(); ?>
<main>
<div id="m_top"><img src="<?php echo get_template_directory_uri(); ?>/img/works/h1.png" alt="実績 Works"/></div>
<section>
<div id="single">
<h1><?php the_title(); ?></h1>
<p class="category1"><?php the_category(','); ?></p>
<div id="single_inner">
<?php the_content(); ?>
</div>
</div>    
</section>
<!--ページャー-->
<article>
<div class="pager">
<ul id="blog_more">
<li><?php previous_post_link('%link','≪ Prev'); ?></li><li><?php next_post_link('%link','Next ≫'); ?></li>
</ul>
</div>
</article>
</main>
<?php get_footer(); ?>