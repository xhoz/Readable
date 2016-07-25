<?php get_header(); ?>

<article>
<?php the_post(); ?>
<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
<small class="grey" ><?php the_date() ?></small>
<?php the_content(); ?>
</article>

<pre class="tags"><?php the_tags(); ?></pre>
<div id="comments">
<?php disqus_embed('Yourdisqususername'); ?>
</div>
<?php get_footer(); ?>