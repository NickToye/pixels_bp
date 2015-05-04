
		<footer>
			<div class="wrapper">
				<p class="pull-left">&copy; Sing for Pleasure 2005-<?php echo date('Y'); ?>. All rights reserved. Sing for Pleasure is a Registered Charity No.270384</p>
				<p class="pull-right">Designed &amp; Developed by <a href="http://www.pixelsandcode.co.uk">Pixels + Code</a></p>
				<?php wp_nav_menu( array('theme_location' => 'secondary', 'menu' => '', 'menu_class' => 'list-unstyled list-inline pull-left small-links', 'container' => '', )); ?>

			</div>
		</footer>

		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/-/js/min/scripts-min.js"></script>
		<script src="<?php bloginfo('template_url');?>/-/js/min/application-min.js"></script>
		<script src="<?php bloginfo('template_url');?>/-/js/gridset-overlay.js"></script>

		<!--[if lt IE 7 ]>
		  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

		<?php wp_footer(); ?>



    	</body>
</html>

