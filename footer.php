			<!-- footer -->
			<footer id="footer" class="footer" role="contentinfo">
				<div class="row">
					<div class="col-md-12">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-1')) ?>
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-2')) ?>
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-3')) ?>


					</div>


				</div>
                <div class="row">
                    <div class="col-md-12 lower-footer">
                        <!-- copyright -->
                        <p class="copyright">
                            &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
                        </p>
                        <!-- /copyright -->
                    </div>
                </div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
