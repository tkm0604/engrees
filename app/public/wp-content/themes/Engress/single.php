<?php
/*
Template Name:blog記事ページ
*/
?>
<?php get_header(); ?>
<main>
	<div id="blog_single">
		<div class="inner blog_single__inner">
			<div class="article_main">
				<article>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<p class="blog_category"><?php the_category(); ?></p>
							<h2 class="blog-detail__title"><?php the_title(); ?></h2>
							<div class="sns">
								<?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
								<p class="blog_date"> <?php echo get_the_date(); ?></p>
							</div>
							<?php if (has_post_thumbnail()) : ?>
								<div class="blog-detail__image">
									<img src="<?php the_post_thumbnail_url(); ?>">
								</div>
							<?php endif; ?>
							<div class="blog-detail__body">
								<div class="blog-content"><?php echo the_content(); ?></div>
							</div>
					<?php endwhile;
					endif; ?>
				</article>
				<div class="recommend_article">
					<h2>おすすめ記事</h2>
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
							<article>
								<div class="blog_img__wrap">
									<?php the_post_thumbnail('thumbnail', array('class' => 'blog_img')); ?>
									<a class="blog_content__link" href="<?php the_permalink(); ?>"></a>
									<p class="blog_category"><?php the_category(); ?></p>
								</div>
								<div class="blog_title_wrap">
									<p class="blog_date"> <?php echo get_the_date(); ?></p>
									<a href="<?php the_permalink(); ?>">
										<h3><?php
											if (mb_strlen($post->post_title, 'UTF-8') > 30) {
												$title = mb_substr($post->post_title, 0, 30, 'UTF-8');
												echo $title . '…';
											} else {
												echo $post->post_title;
											}
											?></h3>
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
				<div class="side_wrap">
					<div class="related_article">
						<h3 class="side_heading">関連記事</h3>
						<?php if (have_posts()) : ?>
							<?php
							/* Start the Loop */
							while (have_posts()) :
								the_post(); ?>
								<article class="blog_article">
									<div class="blog_img">
										<?php the_post_thumbnail('thumbnail', array('class' => 'blog_img')); ?>
									</div>
									<div class="blog_title_wrap">
										<a class="blog_title" href="<?php the_permalink(); ?>">
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
					<div class="related_article">
						<h3 class="side_heading">カテゴリー</h3>
						<ul>
							<?php
							$categories = get_categories();
							foreach ($categories as $category) :
							?>

								<a class="category_link" href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
									<li>・<?php echo $category->name; ?></li>
								</a>
							<?php endforeach; ?>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_template_part('template/document_request'); ?>
<?php get_footer();
