<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' - '; } ?><?php bloginfo('name'); ?></title>	
		
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>">
		


<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crimson+Text">

<?php wp_head(); ?>
				
</head>

<div class="container">
<section>
	
<header class="bloginfo"><a href="<?php echo get_home_url(); ?>"> <h1><?php bloginfo('name'); ?></h1></a>
<p><?php bloginfo('description'); ?> </p>


</header>