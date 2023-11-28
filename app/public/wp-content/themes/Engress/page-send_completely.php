<?php
/*
Template Name: 送信完了画面
*/
?>
<?php get_header(); ?>
<main>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <div id="send_completely">
        <div class="inner">
            <p>
                お問い合わせいただきありがとうございます<br>
                内容を確認した後、担当者よりご連絡いたします
            </p>
            <a href="<?php echo home_url(); ?>">ホームへ戻る</a>
        </div>
    </div>
</main>
<?php
get_footer();
