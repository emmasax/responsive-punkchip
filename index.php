<?php include("header.php"); ?>

<?php define('WP_USE_THEMES', false); get_header(); ?>

<body<?php if(is_page()) :?> class="page"<?php endif; ?>>

<?php include("navigation.php"); ?>
	
<?php if(is_page())	: ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="inner">
			<div class="post">
				<?php the_content("" . get_the_title('', '', false) . ""); ?>
			</div>
			<?php include("related.php"); ?>
		</div>
	<?php endwhile; endif; ?>
<?php else  : ?>
	<?php 
		if(!is_paged()) :
		$my_query = new WP_Query('posts_per_page=1');
		while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID;?>

	<div class="featured">
		<section>
			<header>
				<p><time pubdate><?php the_time('j F Y'); ?></time></p>
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h1>
			</header>
			<?php the_content(""); ?>
			<p class="post-categories">Posted in: <?php the_category(', '); ?></p>
		</section>
		<aside>
			<p>Emma Sax writes on punkchip.com about web standards and accessibility.  She is currently employed by Forward, working as a front-end developer.</p>
			<p><a href="/cv">Career history</a></p>
			<ul class="networking">
				<li><a href="http://www.twitter.com/emmasax" title="Follow Emma on Twitter"><img src="http://www.punkchip.com/cv/image/twitter.png" alt="Follow emmasax on Twitter" /></a></li>
				<li><a href="mailto:emma@punkchip.com" title="Contact Emma"><img src="http://www.punkchip.com/cv/image/email.png" alt="Contact me" /></a></li>
				<li><a href="http://www.linkedin.com/pub/emma-sax/3/618/490" title="Emma Sax on Linkedin"><img src="http://www.punkchip.com/cv/image/linkedin.png" alt="Emma Sax on Linkedin" /></a></li>
				<li><a href="/cv" title="Emma Sax's CV"><img src="http://www.punkchip.com/cv/image/favicon.png" alt="Emma Sax - CV" /></a></li>
			</ul>
		</aside>
	</div>

	<?php endwhile; endif; ?>
	
		<div class="other">
			<div class="container">
				<?php	$count = 0;
						if (have_posts()) : 
							while (have_posts() and $count < 4) : 
								the_post(); 
								if( $post->ID == $do_not_duplicate ) continue; 
									update_post_caches($posts); 
									$count++; ?>
	
					<section<?php if($count%2==0) : ?> class="edge<?php if($count==2) : ?> top<?php endif; ?>"<?php endif; ?><?php if($count==1) : ?> class="top first"<?php endif; ?>>
						<header>
							<p><?php the_time('j F Y'); ?></p>
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						</header>
						<?php the_content(""); ?>
					</section>
					
				<?php endwhile; endif; ?>
			</div>
		</div>
	<?php endif; ?>
	
	<?php include("footer.php"); ?>
	
</body>
</html>