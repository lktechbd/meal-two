<?php


	function meal_testimonial_section_metabox($metaboxes){
		$section_id = 0;


		if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
			$section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
		}

		if('section' != get_post_type($section_id)){
			return $metaboxes;
		}

		$section_meta = get_post_meta($section_id, 'meal-section-type', true);
		$section_type = isset($section_meta['type'])? $section_meta['type']:'';

		if('testimonials' != $section_type){
			return $metaboxes;
		}

		$metaboxes[] = array(
			'id'        => 'meal-section-testimonial',
			'title'     => __( 'testimonial Settings', 'meal' ),
			'post_type' => 'section',
			'context'   => 'normal',
			'priority'  => 'default',
			'sections'  => array(
				array(
					'id'     => 'meal-testimonial-one',
					'icon'   => 'fa fa-image',
					'fields' => array(
						array(
							'id'    			=> 'testimonials',
							'title'   			=> __( 'Testimonial', 'meal' ),
							'type'    			=> 'group',
							'button_title'    	=> __('New Testimonial','meal'),
							'accordion_title' 	=> __('Add New Testimonial','meal'),
							'fields'			=>array(
								array(
									'id'    => 'name',
									'type'  => 'text',
									'title' => __('Name','meal'),
								),

								array(
									'id'    => 'title',
									'type'  => 'text',
									'title' => __('Title','meal'),
								),
								array(
									'id'    => 'image',
									'type'  => 'image',
									'title' => __('Image','meal'),
								),

								array(
									'id'    => 'testimonial',
									'type'  => 'textarea',
									'title' => __('Testimonials ','meal'),
								)
							)
						)
					),
				)
			),


		);

		return $metaboxes;
	}
	add_filter('cs_metabox_options', 'meal_testimonial_section_metabox');