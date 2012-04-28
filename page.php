<?php include("header.php"); ?>

<body class="cv">
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>

	<?php include("footer.php"); ?>

</body>

</html>