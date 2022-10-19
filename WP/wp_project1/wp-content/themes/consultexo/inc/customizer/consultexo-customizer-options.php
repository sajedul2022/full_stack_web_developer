<?php
/**
 * Customizer section options.
 *
 * @package consultexo
 *
 */

function consultexo_customizer_theme_settings( $wp_customize ){
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
		
		$wp_customize->add_setting(
			'aasta_footer_copright_text',
			array(
				'sanitize_callback' =>  'consultexo_sanitize_text',
				'default' => __('Copyright &copy; 2022 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Consultexo theme by <a target="_blank" href="//themearile.com/">ThemeArile</a>', 'consultexo'),
				'transport'         => $selective_refresh,
			)	
		);
		$wp_customize->add_control('aasta_footer_copright_text', array(
				'label' => esc_html__('Footer Copyright','consultexo'),
				'section' => 'aasta_footer_copyright',
				'priority'        => 10,
				'type'    =>  'textarea'
		));

}
add_action( 'customize_register', 'consultexo_customizer_theme_settings' );

function consultexo_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
}