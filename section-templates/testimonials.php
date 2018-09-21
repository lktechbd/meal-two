<?php
	global $meal_section_id;
	$meal_section_meta        = get_post_meta( $meal_section_id, 'meal-section-testimonial', true );
	$meal_section             = get_post( $meal_section_id );
	$meal_section_title       = $meal_section->post_title;
	$meal_section_description = $meal_section->post_content;
?>



<div id="section-testimonial" class="section bg-white" data-aos="fade-up">
	<div class="container">
		<div class="row section-heading justify-content-center mb-5">
			<div class="col-md-8 text-center">

				<h2 class="heading mb-3"><?php echo esc_html($meal_section_title );?></h2>

			</div>
		</div>

		<div class="row justify-content-center text-center" data-aos="fade-up">

			<?php
				$meal_testimonials = $meal_section_meta['testimonials'];

				if($meal_testimonials):
					?>

					<div class="col-md-8">
						<div class="owl-carousel home-slider-loop-false">

							<?php
								foreach($meal_testimonials as $meal_testimonial):

									$meal_testimonial_image = wp_get_attachment_image_src($meal_testimonial['image'], 'medium');
									;?>
									<div class="item">
										<blockquote class="testimonial">
											<?php echo esc_html($meal_testimonial['testimonial']);?>
											<div class="author">
												<img src="<?php echo esc_url($meal_testimonial_image[0]);?>" alt="Image placeholder" class="mb-3">
												<h4><?php echo esc_html($meal_testimonial['name']);?></h4>
												<?php echo esc_html($meal_testimonial['title']);?>
											</div>
										</blockquote>
									</div>

								<?php endforeach;?>

						</div>
					</div>

				<?php endif;?>
		</div>
	</div>
</div> <!-- .section -->