<?php include("header.php"); ?>
<?php define('WP_USE_THEMES', false); get_header(); ?>
<body class="category">

<?php include("navigation.php"); ?>

	<div class="other"><div class="container">
		<h2><?php single_cat_title('All articles: '); ?></h2>
			<ul>
			<?php
				$count = 0;
				if (have_posts()) : 
				while (have_posts()) : 
					the_post();
					$count++;
			?>
				<li class="post">
					<p><time pubdate><?php the_time('j F Y'); ?></time> | <?php comments_popup_link(__('No comments'), __('1 comment'), __('% comments')); ?></p>
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>
				</li>
	
			<?php endwhile; endif; ?>
			</ul>

	</div></div>
	
	<?php include("footer.php"); ?>

</body>

</html>