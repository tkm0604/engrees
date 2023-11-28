<?php
/*
Template Name: お問い合わせページ
*/
?>
<?php get_header(); ?>
<?php wp_head(); ?>
<main>
    <div id="main_img">
        <div class="contact_img__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" alt="ブログ">
            <h2>お問い合わせ・<br>資料請求</h2>
        </div>
    </div>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <div id="contact">
        <div class="contact_inner">
            <div class="contact_txt">
            <p>弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
            </div>
            <!-- <form action="">
                <dl>
                    <dt>会社名</dt>
                    <dd>
                        <input type="text" placeholder="Engress">
                    </dd>
                    <dt>氏名</dt>
                    <dd>
                        <input type="text" placeholder="田中太郎">
                    </dd>
                    <dt>メールアドレス</dt>
                    <dd>
                        <input type="text" placeholder="example@example.com">
                    </dd>
                    <dt>電話番号</dt>
                    <dd>
                        <input type="text" placeholder="01-2345-6789">
                    </dd>
                    <dt class="contact_radio__wrap">お問い合わせの種類を選択してください（<span>資料請求の方は資料請求を選択ください</span>）</dt>
                    <dd>
                        <div class="radio">
                        <input id="male" type="radio" name="sex" value="male"><label for="male">商談のご相談</label>
                        </div>
                        <div class="radio">
                        <input id="male" type="radio" name="sex" value="male"><label for="male">サービスに関するお問い合わせ</label>
                        </div>
                        <div class="radio">
                        <input id="male" type="radio" name="sex" value="male"><label for="male">資料請求</label>
                        </div>
                        <div class="radio">
                        <input id="male" type="radio" name="sex" value="male"><label for="male">その他</label>
                        </div>                      
                    </dd>
                    <dt>お問い合わせ内容</dt>
                    <dd>
                        <textarea name="" id="" cols="30" rows="10" placeholder="入力して下さい"></textarea>
                    </dd>
                </dl>
                <div class="contact__privacy">
                    <p class="policy"><a href=""><span>プライバシーポリシー</span></a>に同意の上、<br>送信ください。</p>
                    <label for="">
                        <input type="checkbox">
                        <p class="privacy_check">プライバシーポリシーに同意する</p>
                    </label>
                    <a href="#">
                        <button>送信する</button>
                    </a>
                </div>
            </form> -->
          <?php echo do_shortcode ('[mwform_formkey key="114"]');?>
        </div>
    </div>
</main>

<?php get_footer(); ?>

