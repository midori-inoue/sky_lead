<?php get_header(); ?>
<main <?php post_class( 'kiji' ); ?>>
<?php if(have_posts()): the_post(); ?>
<?php the_content(); ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>