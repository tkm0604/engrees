<?php
/*
Template Name: フッター
*/
?>

<footer id="footer" class="footer">
	<div class="footer-contet">
		<!-- <div class="footer-left"> -->
				<ul class="footer-left-menu">
					<li class="footer-left-menu__item"><a class="footer-left-menu__item--link" href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li class="footer-left-menu__item"><a class="footer-left-menu__item--link" href="<?php echo home_url(); ?>/info">お知らせ</a></li>
					<li class="footer-left-menu__item"><a class="footer-left-menu__item--link" href="<?php echo home_url(); ?>/blog_archive">ブログ</a></li>
					<li class="footer-left-menu__item"><a class="footer-left-menu__item--link" href="<?php echo home_url(); ?>/course_price">コース・料金</a></li>
				</ul>
		<!-- </div> -->
		<div class="footer-right">
			<img class="footer-right__img" src="<?php echo get_template_directory_uri(); ?>/img/footer_logo.png" alt="フッターロゴ">
			<div class="footer-right-tel">
				<svg xmlns="http://www.w3.org/2000/svg" width="10" height="14.714">
					<path data-name="パス 29" d="M1.638 9.316c2.726 5.2 5.788 5.731 6.678 5.264l.232-.122-2.085-3.975-.233.12c-.718.377-1.435-.711-2.353-2.462s-1.406-2.959-.689-3.336l.232-.123L1.335.708 1.103.83c-.891.467-2.191 3.291.535 8.486zm8.171 4.481c.344-.18.155-.576-.041-.949l-1.4-2.67c-.151-.287-.4-.449-.6-.343-.126.066-.421.206-.8.394l2.081 3.967zM4.695 3.979c.2-.105.209-.4.059-.69s-1.4-2.67-1.4-2.67c-.2-.373-.413-.753-.758-.572l-.761.4 2.081 3.967c.37-.206.652-.369.779-.435z" fill="#fff" />
				</svg>
				<p class="footer-right-tel__num">0123-456-7890</p>
				<p class="footer-right-tel__time">平日08:00〜20:00</p>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<p class="footer-bottom__txt">© 2020 Engress. </p>
	</div>

</footer><!-- #colophon -->
<!-- #page -->

<?php wp_footer(); ?>
</body>

</html>