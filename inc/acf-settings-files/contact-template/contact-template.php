<?php

add_action('acf/include_fields', function () {
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}

	acf_add_local_field_group(array(
		'key' => 'group_64e330342299a',
		'title' => 'Contact Template',
		'fields' => array(
			array(
				'key' => 'field_64e33035ec8d2',
				'label' => 'Contact Template',
				'name' => 'contact_template',
				'aria-label' => '',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_64e333d4156fb',
						'label' => 'Form Block',
						'name' => '',
						'aria-label' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array(
						'key' => 'field_64e333e1156fc',
						'label' => 'Show Form Block',
						'name' => 'show_form_block',
						'aria-label' => '',
						'type' => 'true_false',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
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
					array(
						'key' => 'field_64e331b2ec8d4',
						'label' => 'Form Block',
						'name' => 'form_block_group',
						'aria-label' => '',
						'type' => 'group',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array(
							array(
								array(
									'field' => 'field_64e333e1156fc',
									'operator' => '==',
									'value' => '1',
								),
							),
						),
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'layout' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_64e332d9ec8d5',
								'label' => 'Title Form',
								'name' => 'title_form',
								'aria-label' => '',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'maxlength' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
							),
							array(
								'key' => 'field_64e33099ec8d3',
								'label' => 'Form ID',
								'name' => 'form_id',
								'aria-label' => '',
								'type' => 'number',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'min' => '',
								'max' => '',
								'placeholder' => '',
								'step' => '',
								'prepend' => '',
								'append' => '',
							),
							array(
								'key' => 'field_64e33319ec8d6',
								'label' => 'Title List',
								'name' => 'title_list',
								'aria-label' => '',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'maxlength' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
							),
							array(
								'key' => 'field_64e3332bec8d7',
								'label' => 'List Information',
								'name' => 'list_information',
								'aria-label' => '',
								'type' => 'repeater',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'layout' => 'block',
								'pagination' => 0,
								'min' => 0,
								'max' => 0,
								'collapsed' => '',
								'button_label' => 'Add Row',
								'rows_per_page' => 20,
								'sub_fields' => array(
									array(
										'key' => 'field_64e33356ec8d8',
										'label' => 'Icon',
										'name' => 'icon',
										'aria-label' => '',
										'type' => 'font-awesome',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'icon_sets' => array(
											0 => 'fas',
											1 => 'far',
											2 => 'fal',
											3 => 'fad',
											4 => 'fab',
										),
										'custom_icon_set' => '',
										'default_label' => '',
										'default_value' => '',
										'save_format' => 'class',
										'allow_null' => 0,
										'show_preview' => 1,
										'enqueue_fa' => 0,
										'fa_live_preview' => '',
										'choices' => array(),
										'parent_repeater' => 'field_64e3332bec8d7',
									),
									array(
										'key' => 'field_64e3337aec8d9',
										'label' => 'Title',
										'name' => 'title',
										'aria-label' => '',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'maxlength' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'parent_repeater' => 'field_64e3332bec8d7',
									),
									array(
										'key' => 'field_64e3338aec8da',
										'label' => 'Link',
										'name' => 'link',
										'aria-label' => '',
										'type' => 'link',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'return_format' => 'array',
										'parent_repeater' => 'field_64e3332bec8d7',
									),
								),
							),
						),
					),
					array(
						'key' => 'field_64e349866e006',
						'label' => 'Map Block',
						'name' => '',
						'aria-label' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array(
						'key' => 'field_64e349a36e008',
						'label' => 'Show Map Block',
						'name' => 'show_map',
						'aria-label' => '',
						'type' => 'true_false',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
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
					array(
						'key' => 'field_64e349996e007',
						'label' => 'Map Block',
						'name' => 'map_group',
						'aria-label' => '',
						'type' => 'group',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array(
							array(
								array(
									'field' => 'field_64e349a36e008',
									'operator' => '==',
									'value' => '1',
								),
							),
						),
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'layout' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_64e349ca6e009',
								'label' => 'Map Iframe',
								'name' => 'map_iframe',
								'aria-label' => '',
								'type' => 'textarea',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'maxlength' => '',
								'rows' => '',
								'placeholder' => '',
								'new_lines' => '',
							),
						),
					),
					array(
						'key' => 'field_64e34c97aef9c',
						'label' => 'Information Block',
						'name' => '',
						'aria-label' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array(
						'key' => 'field_64e34cbbaef9e',
						'label' => 'Show Information Block',
						'name' => 'show_information_block',
						'aria-label' => '',
						'type' => 'true_false',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
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
					array(
						'key' => 'field_64e34cabaef9d',
						'label' => 'Information Block',
						'name' => 'information_group',
						'aria-label' => '',
						'type' => 'group',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array(
							array(
								array(
									'field' => 'field_64e34cbbaef9e',
									'operator' => '==',
									'value' => '1',
								),
							),
						),
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'layout' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_64e34cedaef9f',
								'label' => 'Information',
								'name' => 'information_text',
								'aria-label' => '',
								'type' => 'wysiwyg',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
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
						),
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_template',
					'operator' => '==',
					'value' => 'views/contact-template.php',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));
});
