<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php bloginfo('name'); ?><?php wp_title("|"); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="author" content="Emma Sax" />
	<meta name="keywords" content="Accessibility, Web standards, Javascript, jQuery, CSS, HTML, HTML5" />
	<style media="screen">
		@import url( <?php echo get_settings('siteurl'); ?>/wp-content/themes/new/style.css );
	</style>
	<link rel="shortcut icon" href="/favicon.ico" type="image/ico">
	<link rel="alternate" type="application/atom+xml" title="Atom article feed" href="http://www.punkchip.com/feed/atom/" />
	<!--link rel="alternate" type="application/rss+xml" title="Twitter feed for emmasax" href="https://twitter.com/statuses/user_timeline/1757021.rss" /-->
    	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php comments_template(); ?>
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-583170-1']);
    _gaq.push(['_setDomainName', 'punkchip.com']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</head>
