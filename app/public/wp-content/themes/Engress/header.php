	<?php
	/*
	Template Name: トップページ
	*/
	?>
	<!doctype html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

			<header id="header">
				<!-- <div class="header__inner"> -->
					<div class="header-left">
						<h1 class="header-left__title"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="engressロゴ"></h1>
						<nav class="header-left__nav">
							<ul class="header-left__menu">
								<li class="header-left__menu--item"><a class="header-left__menu--link" href="<?php echo home_url(); ?>/">ホーム</a></li>
								<li class="header-left__menu--item"><a class="header-left__menu--link" href="<?php echo home_url(); ?>/info">お知らせ</a></li>
								<li class="header-left__menu--item"><a class="header-left__menu--link" href="<?php echo home_url(); ?>/blog_archive">ブログ</a></li>
								<li class="header-left__menu--item"><a class="header-left__menu--link" href="<?php echo home_url(); ?>/course_price">コース・料金</a></li>
							</ul>
						</nav>
					</div>

					<div class="header-right">
						<div class="header-right-tel_wrap">
							<p class="header-right-tel_wrap__time">平日08:00〜20:00</p>
							<svg xmlns="http://www.w3.org/2000/svg" width="10" height="14.714">
								<path data-name="パス 29" d="M1.638 9.316c2.726 5.2 5.788 5.731 6.678 5.264l.232-.122-2.085-3.975-.233.12c-.718.377-1.435-.711-2.353-2.462s-1.406-2.959-.689-3.336l.232-.123L1.335.708 1.103.83c-.891.467-2.191 3.291.535 8.486zm8.171 4.481c.344-.18.155-.576-.041-.949l-1.4-2.67c-.151-.287-.4-.449-.6-.343-.126.066-.421.206-.8.394l2.081 3.967zM4.695 3.979c.2-.105.209-.4.059-.69s-1.4-2.67-1.4-2.67c-.2-.373-.413-.753-.758-.572l-.761.4 2.081 3.967c.37-.206.652-.369.779-.435z" fill="#1b224c" />
							</svg>
							<p class="header-right-tel_wrap__tel_num">0123-456-7890</p>
						</div>
						<a class="header-right__btn btn btn_document" href="<?php echo home_url(); ?>/contact">資料請求</a>
						<a class="header-right__btn btn" href="<?php echo home_url(); ?>/contact">お問い合わせ</a>
					</div>

					<div id="app_sp">
						<!--ハンバーガーメニューのボタン-->
						<div class="hamburger-btn" v-on:click='ActiveBtn=!ActiveBtn'>
							<span class="hamburger-btn__line line_01" v-bind:class="{'btn_line01':ActiveBtn}"></span>
							<span class="hamburger-btn__line line_02" v-bind:class="{'btn_line02':ActiveBtn}"></span>
							<span class="hamburger-btn__line line_03" v-bind:class="{'btn_line03':ActiveBtn}"></span>
						</div>
						<!--サイドバー-->
						<div>
						<transition name="menu">
							<div class="menu" v-show="ActiveBtn">
								<ul class="menu-item">
									<li class="menu-item__list"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="engressロゴ"></li>
									<li class="menu-item__list"><a class="menu-item__list--link" href="<?php echo home_url(); ?>/">ホーム</a></li>
									<li class="menu-item__list"><a class="menu-item__list--link" href="<?php echo home_url(); ?>/info">お知らせ</a></li>
									<li class="menu-item__list"><a class="menu-item__list--link" href="<?php echo home_url(); ?>/blog_archive">ブログ</a></li>
									<li class="menu-item__list"><a class="menu-item__list--link" href="<?php echo home_url(); ?>/course_price">コース・料金</a></li>
								</ul>
								<div class="sp_nav__btn">
									<a class="btn btn_document" href="<?php echo home_url(); ?>/contact">資料請求</a>
									<a class="btn" href="<?php echo home_url(); ?>/contact">お問い合わせ</a>
								</div>
							</div>
						</transition>
						</div>
					</div>

				<!-- </div> -->
				<script>
					var app = new Vue({
						el: '#app_sp',
						data: {
							ActiveBtn: false
						}
					})
				</script>

			</header><!-- #masthead -->