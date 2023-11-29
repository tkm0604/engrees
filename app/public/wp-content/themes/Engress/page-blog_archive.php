<?php
/*
Template Name:blog記事一覧ページ
*/
?>
<?php get_header(); ?>
<main>
    <div class="mv">
        <img class="mv__img" src="<?php echo get_template_directory_uri(); ?>/img/blog.jpg" alt="ブログ">
        <h2 class="mv__title">ブログ</h2>
    </div>

    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>

    <div class="inner blog_index__inner">
        <h2 class="lower_page__h2">新着一覧</h2>

        <?php
        $blog_args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'orderby' => 'post_date',
            'paged' => $paged, // 何ページ目を指定してサブクエリを取得する
        );
        $blog_query = new WP_Query($blog_args);
        ?>
        <?php if ($blog_query->have_posts()) : ?>
            <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <article class="blog-article">
                    <div class="blog-article__img">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('thumbnail', array('class' => 'blog_img')); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="No Image Available">
                        <?php endif; ?>
                        <?php the_category(); ?>
                    </div>
                    <div class="blog-txt">
                        <p class="blog-txt__date"> <?php echo get_the_date(); ?></p>
                        <a class="blog-txt__link" href="<?php the_permalink(); ?>">
                            <h3 class="blog-txt__link--title">
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
                        <p class="blog-txt__lead">
                        <?php
                        if (mb_strlen($post->post_content, 'UTF-8') > 100) {
                            $content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 100, 'UTF-8'));
                            echo $content . '…';
                        } else {
                            echo str_replace('\n', '', strip_tags($post->post_content));
                        }
                        wp_reset_postdata(); ?>
                        </p>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p class="blog__title">投稿が見つかりません。</p>
        <?php endif; ?>
        <div class="page_navi">
            <?php if (function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $blog_query)); ?>
            <?php wp_reset_postdata(); ?>
        </div>

    </div>
</main>
<?php get_template_part('template/document_request'); ?>
<?php get_footer();
