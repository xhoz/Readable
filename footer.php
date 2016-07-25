</section>
<footer>
<small> Copyright &#169; <?php print(date(Y)); ?> <?php bloginfo('name'); ?> </small>
<nav class="main center sans-serif small">

<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
	
</nav>
</footer>

<?php wp_footer(); ?>
</div> <!-- Closing container DIV -->
</body>
</html>

