<?php include("header.php"); ?>
<body class="single">
	<?php include("navigation.php"); ?>
		
	<?php if ($posts) : foreach ($posts as $post) : start_wp(); ?>
		<div class="container">
			<article class="post">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				
				<a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="emmasax">Tweet</a>
				<script src="http://platform.twitter.com/widgets.js"></script>
				
				<iframe class="facebook-share-button" src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;font=lucida+grande&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
				
				<?php the_content(); ?>
				
				<div class="byline">
					<img src="http://www.punkchip.com/wp-content/uploads/2010/06/emma.png" alt="Emma Sax" width="50" height="50" />
					<p>Posted by Emma Sax</p>
					<time pubdate><?php the_time('F j, Y'); ?></time>
					<p><?php the_category(', '); ?></p>
				</div>
			</article>
			
			<?php include("related.php"); ?>

		</div>

		<?php include('comments.php'); ?>

	<?php endforeach; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

	<?php include("footer.php"); ?>
</body>

</html>