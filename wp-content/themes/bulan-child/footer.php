		</div><!-- .wide-container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo" <?php hybrid_attr( 'footer' ); ?>>
		<div class="wide-container">

			<div class="site-info">
				<?php bulan_footer_text(); ?>
			</div><!-- .site-info -->

			<?php bulan_social_links(); // Get the social links data. ?>

		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Google Analytics Tracking -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75604460-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
