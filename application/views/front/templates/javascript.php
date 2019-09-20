		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/common/common.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery.stellar/jquery.stellar.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/frontend/js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/frontend/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/frontend/js/theme.init.js"></script>

		<?php if (isset($scriptExtra)) {
	        echo $scriptExtra;
	    } ?>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>