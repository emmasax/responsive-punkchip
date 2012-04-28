<?php include("header.php"); ?>
<?php define('WP_USE_THEMES', false); get_header(); ?>
<body>

<?php include("navigation.php"); ?>

	<?php if (is_category()) { ?>
		<h2 id="category"><?php single_cat_title('All ', 'display'); ?> articles</h2>
	<?php } ?>
	<div class="other"><div class="container">
		<p>Page not found</p>
	</div></div>
	
	<?php include("footer.php"); ?>

</body>

</html>