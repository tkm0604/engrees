<?php
/*
Template Name:blog記事一覧ページ
*/
?>
<?php get_header(); ?>
<main>
    <div id="main_img">
        <div class="main_img__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog.jpg" alt="ブログ">
            <h2><?php the_archive_title(); ?></h2>
        </div>
    </div>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <div id="blog_index">
        <div class="inner blog_index__inner">
            <h2 class="lower_page__h2"><?php the_archive_title(); ?>一覧</h2>
            <div class="blog_index__wrap">
                <?php
                $blog_cat = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'orderby' => 'post_date',
                    'paged' => $paged, 
                );
                $blog_cat = new WP_Query($blog_cat);
                ?>
                <?php if ($blog_cat->have_posts()) : ?>
                    <?php
                    /* Start the Loop */
                    while (have_posts()) :
                        the_post(); ?>
                        <article class="blog_article">
                            <div class="blog_img">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'blog_img')); ?>
                                <p class="blog_category"><?php the_category(); ?></p>
                            </div>
                            <div class="blog_title_wrap">
                                <p class="blog_date"> <?php echo get_the_date(); ?></p>
                                <a class="blog_title" href="<?php the_permalink(); ?>">
                                    <h3><?php echo mb_substr($post->post_title, 0, 12) . '……'; ?></h3>
                                </a>
                                <p class="blog_text">
                                    <?php
                                    if (mb_strlen($post->post_content, 'UTF-8') > 100) {
                                        $content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 100, 'UTF-8'));
                                        echo $content . '…';
                                    } else {
                                        echo str_replace('\n', '', strip_tags($post->post_content));
                                    }
                                    ?></p>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p class="blog__title">投稿が見つかりません。</p>
                <?php endif;
                ?>
                <div class="page_navi">
                <?php wp_pagenavi(); ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_template_part('template/document_request'); ?>
<?php get_footer();
