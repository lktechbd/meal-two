



<footer class="ftco-footer">
	<div class="container">

		<div class="row">
			<div class="col-md-4 mb-5">

				<?php
					if(is_active_sidebar('footer-widgets-about')){
						dynamic_sidebar('footer-widgets-about');
					}

					;?>
			</div>

			<div class="col-md-4 mb-5">

				<?php
					if(is_active_sidebar('footer-widgets-service')){
						dynamic_sidebar('footer-widgets-service');
					}

					;?>
			</div>
			<div class="col-md-4">

				<?php
					if(is_active_sidebar('footer-widgets-follow-us')){
						dynamic_sidebar('footer-widgets-follow-us');
					}
					;?>

			</div>

		</div>



		<div class="row pt-5">
			<div class="col-md-12 text-center">
				<?php
					if(is_active_sidebar('copyright')){
						dynamic_sidebar('copyright');
					}
					;?>
			</div>
		</div>
	</div>
</footer>

</div>
</div>
<!-- loader -->
<div id="loader" class="show fullscreen">
	<svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#ff7a5c"/>
	</svg>
</div>

<?php wp_footer();?>
</body>
</html>