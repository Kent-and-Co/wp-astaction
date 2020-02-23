<?php
get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="hero-container">
				<div class="hero-inner">
					<div class="hero-inner-container">
						<div class="slides slide1">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-teru.svg" alt="【画像】ASTロゴ 忍者シルエット有り">
						</div>
						<div class="slides slide2">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-text-black.svg" alt="【画像】ASTロゴ Action Stunt Tecnique">
						</div>
						<div class="slides slide3">
							<img src="<?php echo get_template_directory_uri(); ?>/images/lead1.svg" alt="クオリティの高いアクションスクール" class="lead1">
						</div>
						<div class="slides slide4">
							<img src="<?php echo get_template_directory_uri(); ?>/images/lead2.svg" alt="自信を持ってお送りする忍者ショー" class="lead2">
							<img src="<?php echo get_template_directory_uri(); ?>/images/hero-image1.jpg" alt="【画像】浦和美園イオンモールでの忍者ショー" class="image1">
							<img src="<?php echo get_template_directory_uri(); ?>/images/hero-image2.jpg" alt="【画像】西東京市民まつりでの忍者ショー" class="image2">
						</div>
						<div class="slides slide5">
							<img src="<?php echo get_template_directory_uri(); ?>/images/lead3.svg" alt="子役から殺陣のできる大人まで アクションタレント" class="lead3">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php ast_line(); ?>

<div class="container justify-content-between">
	<div class="row">
		<div class="col-md-4">
			<h2 class="h4 text-center font-weight-bold">ブログ</h2>
			<table class="table">
				<?php
					$args           = array(
						'posts_per_page' => 5,
					);
					$the_query_post = new WP_Query( $args );
					if ( $the_query_post->have_posts() ) :
						while ( $the_query_post->have_posts() ) :
							$the_query_post->the_post();
							?>
							<tr>
								<td><?php the_time( 'Y.m.d' ); ?></td>
								<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
							</tr>
							<?php
						endwhile;
					else :
						?>
						<tr>
							<td>投稿はまだありません</td>
						</tr>
						<?php
					endif;
					?>
			</table>
		</div>

		<div class="col-md-4">
			<h2 class="h4 text-center font-weight-bold">出演情報</h2>
			<table class="table">
				<tr>
					<td>
						<span class="badge badge-pill badge-talent">長谷川 晃誉</span>
						○○に出演します！
					</td>
				</tr>
			<tr>
				<td>
			<span class="badge badge-pill badge-talent">長谷川 晃誉</span>
					○○に出演します！
			</td>
				</tr>
			<tr>
				<td>
			<span class="badge badge-pill badge-talent">長谷川 晃誉</span>
					○○に出演します！
			</td>
				</tr>
			<tr>
				<td>
			<span class="badge badge-pill badge-talent">長谷川 晃誉</span>
					○○に出演します！
			</td>
				</tr>
			<tr>
				<td>
			<span class="badge badge-pill badge-talent">長谷川 晃誉</span>
					○○に出演します！
			</td>
				</tr>
			</table>
		</div>

		<div class="col-md-4">
			<h2 class="h4 text-center font-weight-bold">イベント情報</h2>
			<table class="table">
				<tr>
				<td>2020.02.02</td>
				<td>イベントタイトルが入ります。イベントタイトルが入ります。（場所が入るところ）</td>
				</tr>
			<tr>
				<td>2020.02.02</td>
				<td>イベントタイトルが入ります。イベントタイトルが入ります。（場所が入るところ）</td>
				</tr>
			<tr>
				<td>2020.02.02</td>
				<td>イベントタイトルが入ります。イベントタイトルが入ります。（場所が入るところ）</td>
				</tr>
			<tr>
				<td>2020.02.02</td>
				<td>イベントタイトルが入ります。イベントタイトルが入ります。（場所が入るところ）</td>
				</tr>
			<tr>
				<td>2020.02.02</td>
				<td>イベントタイトルが入ります。イベントタイトルが入ります。（場所が入るところ）</td>
				</tr>
			</table>
		</div>
	</div>
</div>

<?php
get_footer();
