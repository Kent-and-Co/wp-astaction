<?php ast_line(); ?>

<div class="container">
	<div class="row mb-5">
		<div class="col-lg-4">
			<a class="twitter-timeline" data-height="400" data-theme="dark" href="https://twitter.com/astaction?ref_src=twsrc%5Etfw">Tweets by astaction</a>
			<script async src="https://platform.twitter.com/widgets.js"></script>
		</div>
		<div class="col-lg-4">
			<div class="fb-page" data-href="https://www.facebook.com/ASTactionschool/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ASTactionschool/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ASTactionschool/">AST(アスト)アクションスクール</a></blockquote></div>
		</div>
		<div class="col-lg-4 widget_company">
			<div class="footer_logo mt-3 mb-3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-teru-white.svg" alt="【画像】ASTロゴ">
			</div>
			<div class="footer_logo_text mt-3 mb-3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-text-white.svg" alt="Action Stunt Tecnique">
			</div>
			<div class="footer_address mt-3 mb-3">
				<address>〒188-0011<br>東京都西東京市田無町3-11-12 みどりやビル4F</address>
			</div>
			<div class="footer_contact_link">
				<a href="">
					<i class="fas fa-envelope-open"></i>
					<div class="button_text">お問い合わせ</div>
				</a>
			</div>
			<?php
			if ( get_ast_telephone_no() ) :
				?>
				<div class="footer_tel_link mt-3 mb-3">
					<a href="tel:<?php echo get_ast_telephone_no( true ); ?>">
						<i class="fas fa-mobile-alt"></i>
						<div class="button_text"><?php echo get_ast_telephone_no(); ?></div>
					</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<footer>
	<?php
	if ( get_ast_copyright() ) :
		?>
	<div class="container-fluid">
		<div class="row bg-gray copyright">
			<div class="col text-center">
				<small><?php echo get_ast_copyright(); ?></small>
			</div>
		</div>
	</div>
		<?php
	endif;
	?>

	<div class="container-fluid d-md-block d-lg-none">
		<div class="row fixed-bottom">
			<div class="col-12 drower" style="display: none;">
				<nav class="d-flex flex-wrap justify-content-around pt-1 pb-1">
					<a href="#" class="d-block mt-2 mb-2 mr-3 ml-3">
						<span class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-icon-red.svg" alt="【画像】ASTロゴアイコン（赤）" class="d-block">
						</span>
						<span class="text d-block">About</span>
					</a>
					<a href="#" class="d-block mt-2 mb-2 mr-3 ml-3">
						<span class="icon">
							<i class="fas fa-user-ninja"></i>
						</span>
						<span class="text d-block">Show</span>
					</a>
					<a href="#" class="d-block mt-2 mb-2 mr-3 ml-3">
						<span class="icon">
							<i class="fab fa-youtube"></i>
						</span>
						<span class="text d-block">Movie</span>
					</a>
					<a href="#" class="d-block mt-2 mb-2 mr-3 ml-3">
						<span class="icon">
							<i class="fas fa-calendar-alt"></i>
						</span>
						<span class="text d-block">Schedule</span>
					</a>
					<a href="#" class="d-block mt-2 mb-2 mr-3 ml-3">
						<span class="icon">
							<i class="fas fa-user-circle"></i>
						</span>
						<span class="text d-block">Personal</span>
					</a>
					<a href="#" class="d-block mt-2 mb-2 mr-3 ml-3">
						<span class="icon">
							<i class="fas fa-envelope-open-text"></i>
						</span>
						<span class="text d-block">Contact</span>
					</a>
				</nav>
			</div>
			<div class="col-12 tab-bar">
				<nav class="d-flex">
					<a href="
					<?php echo esc_url( home_url( '/' ) ); ?>
					" class="flex-fill text-center">
						<span class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-icon-red.svg" alt="【画像】ASTロゴアイコン（赤）">
						</span>
						<span class="text">Top</span>
					</a>
					<a href="#" class="flex-fill text-center"><span class="icon"><i class="far fa-id-card"></i></span><span class="text">Talents</span></a>
					<a href="#" class="flex-fill text-center"><span class="icon"><i class="fas fa-school"></i></span><span class="text">School</span></a>
					<a href="#" class="flex-fill text-center"><span class="icon"><i class="fas fa-comment-alt"></i></span><span class="text">Blog</span></a>
					<div class="flex-fill text-center menu"><span class="icon"><span class="bars"><span></span></span></span><span class="text">Menu</span><span class="text toggle">close</span></div>
				</nav>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
