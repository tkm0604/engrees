<?php
/*
Template Name:お知らせ一覧ページ
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

    <div class="inner blog_index">
        <h2 class="lower_page__h2">お知らせ一覧</h2>
        <?php
        $blog_args = array(
            'post_type' => 'info',
            'posts_per_page' => 10,
            'orderby' => 'post_date'
        );
        $blog_query = new WP_Query($blog_args);
        ?>
        <?php if ($blog_query->have_posts()) : ?>
            <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <article class="info-article">
                    <div class="info-article-wrap">
                        <p class="info-article-wrap__date"> <?php echo get_the_date(); ?></p>
                        <a class="info-article-wrap__title" href="<?php the_permalink(); ?>">
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
            <?php endwhile; ?>
        <?php else : ?>
            <p class="blog__title">投稿が見つかりません。</p>
        <?php endif; ?>

    </div>

</main>
<?php get_template_part('template/document_request'); ?>
<?php get_footer();
