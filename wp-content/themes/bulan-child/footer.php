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

<!-- Intercom Script -->

<script>
  window.intercomSettings = {
    app_id: "wczwof30"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/wczwof30';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

</body>
</html>
