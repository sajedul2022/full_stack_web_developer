<?php
$group_color = 'Typo & Color';

vc_map( array(
    'base'          => 'penci_recent_posts',
    'icon'          => get_template_directory_uri() . '/images/vc-icon.png',
    'category'      => penci_get_theme_name('Soledad'),
    'html_template' => get_template_directory() . '/inc/js_composer/shortcodes/recent_posts/frontend.php',
    'weight'        => 700,
    'name'          => penci_get_theme_name('Penci').' '.esc_html__( 'Widget Recent/Popular Posts', 'soledad' ),
    'description'   => __( 'Recent Posts Block', 'soledad' ),
	'controls'      => 'full',
	'params'        => array_merge(
		array(
            array(
                'type'        => 'loop',
                'heading'     => __( '', 'soledad' ),
                'param_name'  => 'build_query',
                'value'       => 'post_type:post|size:10',
                'settings'    => array(
                    'size'      => array( 'value' => 10, 'hidden' => false ),
                    'post_type' => array( 'value' => 'post', 'hidden' => false )
                ),
                'description' => __( 'Create WordPress loop, to populate content from your site.', 'soledad' ),
            ),
            array(
                'type'       => 'textfield',
                'heading'    => esc_html__( 'Custom words length for post titles', 'soledad' ),
                'param_name' => 'title_length',
                'description'     => __( 'If your post titles is too long - You can use this option for trim it. Fill number value here.', 'soledad' ),
            ),
            array(
                'type' => 'dropdown',
                'heading' => __('Image Size Type', 'soledad'),
                'value' => array(
                    'Default' => '',
                    'Horizontal Size' => 'horizontal',
                    'Square Size' => 'square',
                    'Vertical Size' => 'vertical',
                    'Custom' => 'custom',
                ),
                'std' => 'horizontal',
                'param_name' => 'penci_size',
            ),
            array(
                'type'             => 'penci_only_number',
                'heading'          => esc_html__( 'Image Ratio.Unit is %. E.g: 50', 'soledad' ),
                'param_name'       => 'penci_img_ratio',
                'value'            => '',
                'std'              => '',
                'min'              => 0,
                'max'              => 100,
                'suffix'           => '%',
                'edit_field_class' => 'vc_col-sm-6',
                'dependency' => array( 'element' => 'penci_size', 'value' => 'custom' ),
            ),
			array(
				'type'             => 'dropdown',
				'heading'          => __( 'Custom Image Size', 'soledad' ),
				'value'            => array(
					'Default' => '',
					'Thumbnail - 150 x 150' => 'thumbnail',
					'Medium - 300 x 300' => 'medium',
					'Medium Large - 768 x auto' => 'medium_large',
					'Large - 1024 x 1024' => 'large',
					'Penci-single-full - 1920 x auto' => 'penci-single-full',
					'Penci-slider-full-thumb - 1920 x 800' => 'penci-slider-full-thumb',
					'Penci-full-thumb - 1170 x auto' => 'penci-full-thumb',
					'Penci-slider-thumb - 1170 x 663' => 'penci-slider-thumb',
					'Penci-magazine-slider - 780 x 516' => 'penci-magazine-slider',
					'Penci-thumb - 585 x 390' => 'penci-thumb',
					'Penci-masonry-thumb - 585 x auto' => 'penci-masonry-thumb',
					'Penci-thumb-square - 585 x 585' => 'penci-thumb-square',
					'Penci-thumb-vertical - 480 x 650' => 'penci-thumb-vertical',
					'Penci-thumb-small - 263 x 175' => 'penci-thumb-small',
					'Full' => 'full',
				),
				'param_name'       => 'thumb_size',
				'dependency'       => array( 'element' => 'penci_size', 'value' => 'custom' ),
			),
			array(
				'type'             => 'dropdown',
				'heading'          => __( 'Custom Image Size for Featured Posts', 'soledad' ),
				'value'            => array(
					'Default'                              => '',
					'Thumbnail - 150 x 150'                => 'thumbnail',
					'Medium - 300 x 300'                   => 'medium',
					'Medium Large - 768 x auto'            => 'medium_large',
					'Large - 1024 x 1024'                  => 'large',
					'Penci-single-full - 1920 x auto'      => 'penci-single-full',
					'Penci-slider-full-thumb - 1920 x 800' => 'penci-slider-full-thumb',
					'Penci-full-thumb - 1170 x auto'       => 'penci-full-thumb',
					'Penci-slider-thumb - 1170 x 663'      => 'penci-slider-thumb',
					'Penci-magazine-slider - 780 x 516'    => 'penci-magazine-slider',
					'Penci-thumb - 585 x 390'              => 'penci-thumb',
					'Penci-masonry-thumb - 585 x auto'     => 'penci-masonry-thumb',
					'Penci-thumb-square - 585 x 585'       => 'penci-thumb-square',
					'Penci-thumb-vertical - 480 x 650'     => 'penci-thumb-vertical',
					'Penci-thumb-small - 263 x 175'        => 'penci-thumb-small',
					'Full'                                 => 'full',
				),
				'param_name'       => 'thumb_bigsize',
				'dependency'       => array( 'element' => 'penci_size', 'value' => 'custom' ),
			),
			array(
				'type'       => 'penci_switch',
				'heading'    => esc_html__( 'Hide thumbnail?', 'soledad' ),
				'param_name' => 'hide_thumb',
				'true_state'       => 'yes',
				'false_state'      => 'no',
				'default'          => 'no',
				'std'              => 'no',
			),
			array(
				'type'       => 'penci_switch',
				'heading'    => esc_html__( 'Display thumbnail on right?', 'soledad' ),
				'param_name' => 'thumbright',
				'true_state'       => 'yes',
				'false_state'      => 'no',
				'default'          => 'no',
				'std'              => 'no',
			),
			array(
				'type'             => 'penci_switch',
				'heading'          => esc_html__( 'Display on 2 columns?', 'soledad' ),
				'param_name'       => 'twocolumn',
                'description'     => __( 'If you use 2 columns option, it will ignore option display thumbnail on right.', 'soledad' ),
				'true_state'       => 'yes',
				'false_state'      => 'no',
				'default'          => 'no',
				'std'              => 'no',
            ),
            array(
                'type'       => 'penci_switch',
                'heading'    => esc_html__( 'Display 1st post featured?', 'soledad' ),
                'param_name' => 'featured',
                'true_state'       => 'yes',
                'false_state'      => 'no',
                'default'          => 'no',
                'std'              => 'no',
            ),
            array(
	            'type'       => 'penci_switch',
	            'heading'    => esc_html__( 'Display featured post style 2?', 'soledad' ),
	            'param_name' => 'featured2',
	            'true_state'       => 'yes',
	            'false_state'      => 'no',
	            'default'          => 'no',
	            'std'              => 'no',
            ),
			array(
				'type'        => 'penci_switch',
				'heading'     => esc_html__( 'Display all post featured?', 'soledad' ),
				'param_name'  => 'allfeatured',
				'description' => __( 'If you use all post featured option, it will ignore option display thumbnail on right & 2 columns.', 'soledad' ),
				'true_state'       => 'yes',
				'false_state'      => 'no',
				'default'          => 'no',
				'std'              => 'no',
			),
			array(
				'type'       => 'penci_switch',
				'heading'    => esc_html__( 'Show author name?', 'soledad' ),
				'param_name' => 'show_author',
				'true_state'       => 'yes',
				'false_state'      => 'no',
				'default'          => 'no',
				'std'              => 'no',
			),
			array(
				'type'       => 'penci_switch',
				'heading'    => esc_html__( 'Hide post date?', 'soledad' ),
				'param_name' => 'hide_postdate',
				'true_state'       => 'yes',
				'false_state'      => 'no',
				'default'          => 'no',
				'std'              => 'no',
			),
			array(
				'type'       => 'penci_switch',
				'heading'    => esc_html__( 'Show Comment Count?', 'soledad' ),
				'param_name' => 'show_comment',
				'true_state'       => 'yes',
				'false_state'      => 'no',
				'default'          => 'no',
				'std'              => 'no',
			),
			array(
				'type'       => 'penci_switch',
				'heading'    => esc_html__( 'Show Post Views?', 'soledad' ),
				'param_name' => 'show_postviews',
				'true_state'       => 'yes',
				'false_state'      => 'no',
				'default'          => 'no',
				'std'              => 'no',
			),
			array(
				'type'       => 'penci_switch',
				'heading'    => esc_html__( 'Enable icon post format?', 'soledad' ),
				'param_name' => 'icon_format',
				'true_state'       => 'yes',
				'false_state'      => 'no',
				'default'          => 'no',
				'std'              => 'no',
			),
			array(
				'type'       => 'penci_switch',
				'heading'    => esc_html__( 'Show the order numbers?', 'soledad' ),
				'param_name' => 'ordernum',
				'true_state'       => 'yes',
				'false_state'      => 'no',
				'default'          => 'no',
				'std'              => 'no',
			),
			array(
				'type'       => 'penci_switch',
				'heading'    => esc_html__( 'Hide Border at The Bottom?', 'soledad' ),
				'param_name' => 'showborder',
				'true_state'       => 'yes',
				'false_state'      => 'no',
				'default'          => 'no',
				'std'              => 'no',
			),
			array(
				'type'        => 'penci_responsive_sizes',
				'param_name'  => 'imgwidth',
				'heading'     => __( 'Custom Image Width', 'soledad' ),
				'description' => __( 'This option doesn\'t apply for featured posts.', 'soledad' ),
				'value'       => '',
				'std'         => '',
				'suffix'      => 'px',
				'min'         => 1,
			),
			array(
				'type'       => 'penci_responsive_sizes',
				'param_name' => 'row_gap',
				'heading'    => __( 'Custom Rows Gap Between Post Items', 'soledad' ),
				'value'      => '',
				'std'        => '',
				'suffix'     => 'px',
				'min'        => 1,
			),
		),
		Penci_Vc_Params_Helper::heading_block_params(),
		Penci_Vc_Params_Helper::params_heading_typo_color(),
        array(
            array(
                'type'             => 'textfield',
                'param_name'       => 'heading_ptittle_settings',
                'heading'          => esc_html__( 'General Posts', 'soledad' ),
                'value'            => '',
                'group'            => $group_color,
                'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
            ),
            array(
                'type'             => 'colorpicker',
                'heading'          => esc_html__( 'Post Border Color', 'soledad' ),
                'param_name'       => 'post_border_color',
                'group'            => $group_color,
                'edit_field_class' => 'vc_col-sm-6',
            ),
            // Post title
            array(
                'type'             => 'colorpicker',
                'heading'          => esc_html__( 'Post Title Color', 'soledad' ),
                'param_name'       => 'ptitle_color',
                'group'            => $group_color,
                'edit_field_class' => 'vc_col-sm-6',
            ),
            array(
                'type'             => 'colorpicker',
                'heading'          => esc_html__( 'Post Title Hover Color', 'soledad' ),
                'param_name'       => 'ptitle_hcolor',
                'group'            => $group_color,
                'edit_field_class' => 'vc_col-sm-6',
            ),
            array(
                'type'             => 'penci_responsive_sizes',
                'param_name'       => 'ptitle_fsize',
                'heading'          => __( 'Font Size for Post Title', 'soledad' ),
                'value'            => '',
                'std'              => '',
                'suffix'           => 'px',
                'min'              => 1,
                'group'            => $group_color,
                'edit_field_class' => 'vc_col-sm-6',
            ),
            array(
                'type'             => 'penci_switch',
                'heading'          => __( 'Custom Font Family for Post Title', 'soledad' ),
                'param_name'       => 'use_ptitle_typo',
                'default'          => 'no',
                'std'              => 'no',
                'group'            => $group_color,
                'edit_field_class' => 'vc_col-sm-6',
            ),
            array(
                'type'       => 'google_fonts',
                'group'      => $group_color,
                'param_name' => 'ptitle_typo',
                'value'      => '',
                'dependency' => array( 'element' => 'use_ptitle_typo', 'value' => 'yes' ),
            ),
            array(
                'type'       => 'penci_separator',
                'param_name' => 'penci_separator1',
                'group'      => $group_color,
            ),
            // Post meta
            array(
                'type'             => 'colorpicker',
                'heading'          => esc_html__( 'Post Meta Color', 'soledad' ),
                'param_name'       => 'pmeta_color',
                'group'            => $group_color,
                'edit_field_class' => 'vc_col-sm-6',
            ),
            array(
                'type'             => 'penci_responsive_sizes',
                'param_name'       => 'pmeta_fsize',
                'heading'          => __( 'Font Size for Post Meta', 'soledad' ),
                'value'            => '',
                'std'              => '',
                'suffix'           => 'px',
                'min'              => 1,
                'group'            => $group_color,
                'edit_field_class' => 'vc_col-sm-6',
            ),
            array(
                'type'             => 'penci_switch',
                'heading'          => __( 'Custom Font Family for Post Meta', 'soledad' ),
                'param_name'       => 'use_pmeta_typo',
                'default'          => 'no',
                'std'              => 'no',
                'group'            => $group_color,
                'edit_field_class' => 'vc_col-sm-6',
            ),
            array(
                'type'       => 'google_fonts',
                'group'      => $group_color,
                'param_name' => 'pmeta_typo',
                'value'      => '',
                'dependency' => array( 'element' => 'use_pmeta_typo', 'value' => 'yes' ),
            ),
        ),
		Penci_Vc_Params_Helper::extra_params()
	)
) );
