<?php
/*
Template Name:お知らせ記事ページ
*/
?>
<?php get_header(); ?>
<main>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
	<div id="info_single">
		<div class="inner info_single__inner">
			<div class="article_main">
				<article>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<h2 class="blog-detail__title"><?php the_title(); ?></h2>
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
			</div>
		</div>
	</div>
</main>
<?php get_template_part('template/document_request'); ?>
<?php get_footer();
