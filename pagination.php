<ul class="pagination<?php if(is_paged()) : echo ' paged'; endif; ?>">
	<li id="next"><?php next_posts_link('More posts &gt;', 0); ?></li>
	<li id="previous"><?php previous_posts_link('&lt; Previous', 0); ?></li>
</ul>