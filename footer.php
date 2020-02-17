<?php ast_line(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<a class="twitter-timeline" data-height="600" data-theme="dark" href="https://twitter.com/astaction?ref_src=twsrc%5Etfw">Tweets by astaction</a>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
		<div class="col-lg-4">
			<div class="fb-page" data-href="https://www.facebook.com/ASTactionschool/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ASTactionschool/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ASTactionschool/">AST(アスト)アクションスクール</a></blockquote></div>
		</div>
	</div>
</div>

<footer>
	<div class="container-fluid">
		<div class="row bg-gray copyright">
			<div class="col text-center">
				<small>&copy; アストアクションスクール</small>
			</div>
		</div>
	</div>

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
					<div class="flex-fill text-center menu"><span class="icon"><div class="bars"><span></span></div></span><span class="text">Menu</span><span class="text toggle">close</span></a>
				</nav>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
