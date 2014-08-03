<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

<div class="row">
	
	<div class="eleven columns">
		<?php the_breadcrumb(); ?>
		<article id="post-0" class="post error404 not-found" role="main">
			<h1>Not Found</h1>
			<p>The page you requested could not be found.</p>
			<?php get_search_form(); echo '<script>document.getElementById(\'s\') && document.getElementById(\'s\').focus();</script>'.PHP_EOL; ?>
		</article>
	</div><!--/columns-->
	
	<div class="four columns push_one">
		<?php get_sidebar(); ?>
	</div><!--/columns-->
	
</div><!--/row-->

<script>
	if ( document.referrer.length ) {
		ga('send', 'event', '404 Not Found', 'Request: ' + document.URL, 'Referrer: ' + document.referrer);
		Gumby.log('Sending GA event: ' + '404 Not Found', 'Request: ' + document.URL, 'Referrer: ' + document.referrer);
	} else {
		ga('send', 'event', '404 Not Found', 'Request: ' + document.URL, 'No Referrer or Unknown');
		Gumby.log('Sending GA event: ' + '404 Not Found', 'Request: ' + document.URL, 'No Referrer or Unknown');
	}
</script>

<?php get_footer(); ?>