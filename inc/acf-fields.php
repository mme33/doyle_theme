<?php /**
 * An Export of ACF Fields to be used with the Doyle Website. This file will be included with the functions.php
 *
 * @package futures
 */
 ?>

<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_595fff2034680',
	'title' => 'Homepage Options',
	'fields' => array (
		array (
			'key' => 'field_595fbd19683ac',
			'label' => 'Homepage Box',
			'name' => 'homepage_box',
			'type' => 'wysiwyg',
			'instructions' => 'This content appears in the widget to the right of the homepage content',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'toolbar' => 'full',
			'media_upload' => 1,
			'tabs' => 'all',
			'delay' => 0,
		),
		array (
			'key' => 'field_595fff33cdc35',
			'label' => 'Homepage Carousel',
			'name' => 'carousel',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 5,
			'layout' => 'row',
			'button_label' => 'Add Carousel Item',
			'sub_fields' => array (
				array (
					'key' => 'field_595fff75cdc36',
					'label' => 'Carousel Image',
					'name' => 'carousel_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '100',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'full',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_59600fdf5706e',
					'label' => 'Caption Title',
					'name' => 'caption_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_595fff95cdc37',
					'label' => 'Caption Description',
					'name' => 'caption_desc',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
				array (
					'key' => 'field_595fffb2cdc38',
					'label' => 'Read More Link',
					'name' => 'read_more_link',
					'type' => 'url',
					'instructions' => 'the url of the image',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_595fff20376d3',
	'title' => 'Post Loops Fields',
	'fields' => array (
		array (
			'key' => 'field_59552d79a670b',
			'label' => 'Add a Content Bucket?',
			'name' => 'show_post_loop',
			'type' => 'true_false',
			'instructions' => 'Would you like to add a bucket of content on this page? Checking this will allow you to select the category and number of posts you\'d like to feature on this page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array (
			'key' => 'field_595a665691530',
			'label' => 'Title of Content Bucket',
			'name' => 'bucket_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_59552d79a670b',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'html',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59552da2a670c',
			'label' => 'Select a Category',
			'name' => 'postloop_select_category',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_59552d79a670b',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'category',
			'field_type' => 'select',
			'allow_null' => 1,
			'load_save_terms' => 0,
			'return_format' => 'id',
			'multiple' => 0,
			'add_term' => 1,
			'load_terms' => 0,
			'save_terms' => 0,
		),
		array (
			'key' => 'field_59552dcca670d',
			'label' => 'Number of Items to Display',
			'name' => 'number_of_items_to_display',
      'instructions' => 'Select the number of posts to display. Select "0" for all posts.',
			'type' => 'select',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_59552d79a670b',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				0 => '0',
        1 => '1',
				2 => '2',
				3 => '3',
				4 => '4',
				5 => '5',
				6 => '6',
				7 => '7',
				8 => '8',
				9 => '9',
				10 => '10',
				11 => '11',
				12 => '12',
			),
			'default_value' => array (
				0 => '6:6',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
	),
	'active' => 1,
	'description' => '',
));

endif;
