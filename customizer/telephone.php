<?php

/**
 * Register customizer settings.
 *
 * @since 1.0.0
 * @param object $wp_customize The customizer content registered.
 */
function ast_theme_customize_tel_register( $wp_customize ) {

	// telephone
	$wp_customize->add_section(
		'ast_theme_tel_setting',
		array(
			'title'    => 'AST: 電話番号',
			'priority' => 30,
		)
	);

	$wp_customize->add_setting(
		'ast_telephone_no',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ast_telephone_no',
			array(
				'label'       => 'お問い合わせ用電話番号',
				'description' => 'サイト内のお問い合わせ用電話番号として使われます。半角のハイフンや括弧を利用する事ができます。',
				'section'     => 'ast_theme_tel_setting',
				'priority'    => 1,
				'type'        => 'text',
				'settings'    => 'ast_telephone_no', // setting と同名なら必要なし
			)
		)
	);

}
add_action( 'customize_register', 'ast_theme_customize_tel_register' );

/**
* Get telephone number
*
* @since 1.0.0
* @param boolean sanitize some charactors flag
 */
function get_ast_telephone_no( $flag = false ) {
	$ast_telephone_no = get_theme_mod( 'ast_telephone_no', false );
	if ( $flag ) {
		$ast_telephone_no = str_replace(
			array( '-', '(', ')' ),
			'',
			$ast_telephone_no
		);
	}
	return $ast_telephone_no;
}
