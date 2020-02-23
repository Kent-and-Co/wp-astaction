<?php

/**
 * Register customizer settings.
 *
 * @since 1.0.0
 * @param object $wp_customize The customizer content registered.
 */
function ast_theme_customize_copyright_register( $wp_customize ) {

	// copyright
	$wp_customize->add_section(
		'ast_theme_copyright_setting',
		array(
			'title'    => 'AST: 著作表示',
			'priority' => 40,
		)
	);

	// Year add setting
	$wp_customize->add_setting(
		'ast_copyight_year',
		array(
			'default'           => '',
			'sanitize_callback' => 'ast_sanitize_year',
		)
	);

	// copyright name add setting
	$wp_customize->add_setting(
		'ast_copyight_name',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	// Year add control
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ast_copyight_year',
			array(
				'label'       => '著作権表示年度',
				'description' => '最初に公開した年を西暦で指定します。表示上は「XXXX-'
													. gmdate( 'Y', time() + 32400 )
													. '」と表示されます。'
													. '(今年とおなじ場合は期間表示では無く単年表示になります。)',
				'section'     => 'ast_theme_copyright_setting',
				'priority'    => 1,
				'type'        => 'number',
				'settings'    => 'ast_copyight_year', // setting と同名なら必要なし
			)
		)
	);

	// copyright add control
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ast_copyight_name',
			array(
				'label'       => '著作権者表示',
				'description' => '著作権表示に使われる名前を指定します。',
				'section'     => 'ast_theme_copyright_setting',
				'priority'    => 2,
				'type'        => 'text',
				'settings'    => 'ast_copyight_name', // setting と同名なら必要なし
			)
		)
	);
}
add_action( 'customize_register', 'ast_theme_customize_copyright_register' );

function ast_sanitize_year( $year ) {
	if ( is_int( absint( $year ) ) ) {
		return absint( $year );
	} else {
		return '';
	}
}

/**
* Get copyright
*
* @since 1.0.0
* @param boolean sanitize some charactors flag
 */
function get_ast_copyright() {
	$ast_copyright_year = intval( get_theme_mod( 'ast_copyight_year', false ) );
	$ast_copyright_name = get_theme_mod( 'ast_copyight_name', false );
	$result             = false;
	if ( $ast_copyright_year && $ast_copyright_name ) {
		if ( intval( gmdate( 'Y', time() + 32400 ) ) === $ast_copyright_year ) {
			$year = $ast_copyright_year;
		} else {
			$year = $ast_copyright_year . '-' . gmdate( 'Y', time() + 32400 );
		}
		$result = '&copy; ' . $year . ' ' . $ast_copyright_name . ' All rights reserved.';
	}
	return $result;
}
