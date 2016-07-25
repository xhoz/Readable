<?php 
/*
Template Name: Page
*/
get_header(); ?>

<article>

<?php the_post(); ?>
<a href="<?php the_permalink(); ?>"  class="center" ><h1><?php the_title(); ?></h1></a>
<?php the_content(); ?>
</article>

<?php get_footer(); ?>