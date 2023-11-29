<?php
/*
Template Name:blog記事ページ
*/
?>
<?php get_header(); ?>
<main>
	<div class="mv">
		<img class="mv__img" src="<?php echo get_template_directory_uri(); ?>/img/blog.jpg" alt="ブログ">
		<h2 class="mv__title">ブログ</h2>
	</div>
	<div class="inner blog-single">
		<div class="article-main">
			<article class="blog-single-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_category(); ?>
						<h2 class="blog-single-content__title"><?php the_title(); ?></h2>
						<div class="sns">
							<?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
							<p class="blog_date"> <?php echo get_the_date(); ?></p>
						</div>
						<?php if (has_post_thumbnail()) : ?>
							<div class="blog-detail__image">
								<img src="<?php the_post_thumbnail_url(); ?>">
							</div>
						<?php endif; ?>
						<div class="blog-body">
							<?php echo the_content(); ?>
						</div>
				<?php endwhile;
				endif; ?>
			</article>
			<div class="recommend">
				<h2 class="recommend__title">おすすめ記事</h2>
				<?php
				$blog_args = array(
					'category_name' => 'pick-up',
					'post_type' => 'post',
					'posts_per_page' => 4,
					'orderby' => 'post_date',
				);
				$blog_query = new WP_Query($blog_args);
				?>
				<?php if ($blog_query->have_posts()) : ?>
					<?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
						<article class="recommend-single-content">
							<div class="recommend-img">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail('thumbnail', array('class' => 'blog_img')); ?>
								<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="No Image Available">
								<?php endif; ?>
								<a class="blog_content__link" href="<?php the_permalink(); ?>"></a>
								<?php the_category(); ?>
							</div>
							<div class="blog-title-wrap">
								<p class="blog-title-wrap__date"> <?php echo get_the_date(); ?></p>
								<a href="<?php the_permalink(); ?>">
									<h3 class="blog-title-wrap__title">
										<?php
										if (mb_strlen($post->post_title, 'UTF-8') > 30) {
											$title = mb_substr($post->post_title, 0, 30, 'UTF-8');
											echo $title . '…';
										} else {
											echo $post->post_title;
										}
										?>
									</h3>
								</a>
							</div>
						</article>
						<!--blog_content-->
					<?php endwhile;  ?>
				<?php else :  ?>
					<p class="blog__title">投稿が見つかりません。</p>
				<?php endif; ?>
			</div>
		</div>

		<div class="side">
			<div class="related">
				<h3 class="related__title">関連記事</h3>
				<?php if (have_posts()) : ?>
					<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post(); ?>
						<article class="related-article">
							<div class="related-article-img">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail('thumbnail', array('class' => 'blog_img')); ?>
								<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="No Image Available">
								<?php endif; ?>
							</div>
							<div class="related-article-txt">
								<a class="related-article-txt__title" href="<?php the_permalink(); ?>">
									<?php
									if (mb_strlen($post->post_title, 'UTF-8') > 30) {
										$title = mb_substr($post->post_title, 0, 30, 'UTF-8');
										echo $title . '…';
									} else {
										echo $post->post_title;
									}
									?>
								</a>
							</div>
						</article>
					<?php endwhile; ?>
				<?php else : ?>
					<p class="blog__title">投稿が見つかりません。</p>
				<?php endif; ?>
			</div>
			<div class="related">
				<h3 class="related__title">カテゴリー</h3>
				<ul class="side-category">
					<?php
					$categories = get_categories();
					foreach ($categories as $category) :
					?>
				<li class="side-category__item">
					<a class="side-category__item--link" href="<?php echo esc_url(get_category_link($category->term_id)); ?>">・<?php echo $category->name; ?></a>
				</li>
						
					<?php endforeach; ?>

				</ul>
			</div>
		</div>
	</div>
</main>
<?php get_template_part('template/document_request'); ?>
<?php get_footer();
