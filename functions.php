<?php
// theme customizer
require get_template_directory() . '/customizer/telephone.php';
require get_template_directory() . '/customizer/copyright.php';

// add main style
function ast_load_main_style() {
	wp_enqueue_style(
		'ast-main-style',
		get_stylesheet_uri(),
		array(),
		filemtime( get_stylesheet_directory() . '/style.css' )
	);
	wp_enqueue_script(
		'fontawesome',
		'https://kit.fontawesome.com/1fa5c9fa7e.js'
	);
	wp_enqueue_script(
		'bootstrap-script',
		get_template_directory_uri() . '/js/bootstrap.min.js',
		array( 'jquery' )
	);
	wp_enqueue_script(
		'ast-main-script',
		get_template_directory_uri() . '/js/main.js',
		array( 'jquery' )
	);
}
add_action( 'wp_enqueue_scripts', 'ast_load_main_style' );

// add viewport
function add_viewport_meta_tag() {
	echo '<meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1, shrink-to-fit=no">';
}
add_action( 'wp_head', 'add_viewport_meta_tag', '1' );

// add title tag
add_theme_support( 'title-tag' );

// line template
if ( ! function_exists( 'ast_line' ) ) {
	function ast_line() {
		?>
		<div class="container">
			<div class="row">
				<div class="col-12 line d-flex mt-5 mb-5 justify-content-between align-items-center">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-icon-red.svg" alt="【画像】AST ロゴアイコン(赤)">
				</div>
			</div>
		</div>
		<?php
	}
}
