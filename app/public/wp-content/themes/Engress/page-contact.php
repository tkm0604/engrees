<?php
/*
Template Name: お問い合わせページ
*/
?>
<?php get_header(); ?>
<?php wp_head(); ?>
<main>
    <div class="mv">
        <img class="mv__img" src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" alt="ブログ">
        <h2 class="mv__title">お問い合わせ・資料請求</h2>
    </div>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <div class="contact">
        <p class="contact-txt">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
        <?php echo do_shortcode('[mwform_formkey key="114"]'); ?>
    </div>
</main>

<?php get_footer(); ?>