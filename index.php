<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article>
<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
<small class="grey" ><?php the_date() ?></small>

<?php the_content(__('Read more')); ?>
</article>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts found :)'); ?></p><?php endif; ?>

<div class="navigation center"><?php posts_nav_link(); ?></div>

<?php get_footer(); ?>