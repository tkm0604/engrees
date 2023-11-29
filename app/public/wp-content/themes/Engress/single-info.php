<?php
/*
Template Name:お知らせ記事ページ
*/
?>
<?php get_header(); ?>
<main>
<div class="mv">
        <img class="mv__img" src="<?php echo get_template_directory_uri(); ?>/img/blog.jpg" alt="お知らせ">
        <h2 class="mv__title">お知らせ</h2>
    </div>
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if (function_exists('bcn_display')) {
			bcn_display();
		} ?>
	</div>
	<div class="inner info_single__inner">
		<article>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2 class="blog-detail__title"><?php the_title(); ?></h2>
					<?php if (has_post_thumbnail()) : ?>
						<div class="blog-detail__image">
							<img src="<?php the_post_thumbnail_url(); ?>">
						</div>
					<?php endif; ?>
					<div class="blog-body"><?php echo the_content(); ?></div>
			<?php endwhile;
			endif; ?>
		</article>
	</div>

</main>
<?php get_template_part('template/document_request'); ?>
<?php get_footer();
