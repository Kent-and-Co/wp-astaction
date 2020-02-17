<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
</head>
<body  <?php body_class(); ?>>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v6.0&appId=301435123631625&autoLogAppEvents=1"></script>
	<div class="container">
		<div class="row mt-2 logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" alt="【画像】AST Action School ロゴ" class="mx-auto d-block col-md-5">
		</div>
		<div class="row">
			<div class="col-md-12">
				<p class="small text-center">
					東京アクションスクール・イベント・出し物・忍者ショー・芸能事務所・体操教室
				</p>
			</div>
		</div>
	</div>
	<div class="container-fluid d-none d-lg-block sticky-top">
		<div class="row justify-content-center bg-gray">
			<nav class="nav">
				<a class="nav-link text-center border-top border-bottom mt-2 mb-2 ml-1 mr-1" href="
				<?php echo esc_url( home_url( '/' ) ); ?>
				">TOP</a>
				<a class="nav-link text-center border-top border-bottom mt-2 mb-2 ml-1 mr-1" href="#">ABOUT AST</a>
				<a class="nav-link text-center border-top border-bottom mt-2 mb-2 ml-1 mr-1" href="#">タレント</a>
				<a class="nav-link text-center border-top border-bottom mt-2 mb-2 ml-1 mr-1" href="#">忍者ショー</a>
				<a class="nav-link text-center border-top border-bottom mt-2 mb-2 ml-1 mr-1" href="#">アクション動画</a>
				<a class="nav-link text-center border-top border-bottom mt-2 mb-2 ml-1 mr-1" href="#">スクール</a>
				<a class="nav-link text-center border-top border-bottom mt-2 mb-2 ml-1 mr-1" href="#">稽古日程</a>
				<a class="nav-link text-center border-top border-bottom mt-2 mb-2 ml-1 mr-1" href="#">個人レッスン</a>
				<a class="nav-link text-center border-top border-bottom mt-2 mb-2 ml-1 mr-1" href="#">忍者ブログ</a>
				<a class="nav-link text-center border-top border-bottom mt-2 mb-2 ml-1 mr-1" href="#">お問い合わせ</a>
			</nav>
		</div>
	</div>
