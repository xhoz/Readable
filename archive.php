<?php
/*
Template Name: Archive
*/

get_header(); ?>

<div class="container">
<section>
<h1> Archive </h1>
<?php

$previous_year = $year = 0;
$previous_month = $month = 0;
$ul_open = false;

$myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');

?>

<?php foreach($myposts as $post) : ?>	

	<?php

	setup_postdata($post);

	$year = mysql2date('Y', $post->post_date);
	$month = mysql2date('n', $post->post_date);
	$day = mysql2date('j', $post->post_date);

	?>

	<?php if($year != $previous_year || $month != $previous_month) : ?>

		<?php if($ul_open == true) : ?>
		</ul>
		<?php endif; ?>

		<h3><?php the_time('F Y'); ?></h3>

		<ul>

		<?php $ul_open = true; ?>

	<?php endif; ?>

	<?php $previous_year = $year; $previous_month = $month; ?>

	<li><span><?php the_time('j F'); ?> - </span> <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>

<?php endforeach; ?>
	</ul>


</section>





<?php get_footer(); ?>