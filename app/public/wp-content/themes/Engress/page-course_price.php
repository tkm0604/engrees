<?php
/*
Template Name:コース・料金ページ
*/
?>
<?php get_header(); ?>
<main>
    <div id="main_img">
        <div class="main_img__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/course_price.jpg" alt="コース・料金">
            <h2>コース・料金</h2>
        </div>
    </div>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <div id="fee_structure">
        <div class="inner fee_structure__inner">
            <h2 class="lower_page__h2">料金体系</h2>
            <div class="fee_structure_btn__wrap">
                <a href="#">入会金 39,800円</a>
                <p>+</p>
                <a href="#">月額費用</a>
            </div>
            <p class="fee_structure_text">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
        </div>
    </div>
    <!----#fee_structure------>
    <div id="price_list">
        <div class="inner price_list__inner">
            <h2 class="lower_page__h2">料金表</h2>
            <div class="price_list__contents">
                <ul class="plan">
                    <li class="plan_list">
                        <h3>基礎プラン</h3>
                        <div class="price_list__inner">
                            <h4><?php echo $field_value = get_field( 'price', 71 ); ?>円~</h4>
                            <p class="monthly">*月額（税抜価格）</p>
                            <ul class="price_list__ul">
                                <li class="price_list__li">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p>カリキュラム作成</p>
                                </li>
                                <li class="price_list__li">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p>TOEFL学習サポート</p>
                                </li>
                                <li class="price_list__li">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p>週一回のビデオMTG</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="plan_list">
                        <h3>演習プラン</h3>
                        <div class="price_list__inner">
                            <h4><?php echo $field_value = get_field( 'price', 72 ); ?>円~</h4>
                            <p class="monthly">*月額（税抜価格）</p>
                            <ul>
                                <li class="price_list__li">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p>カリキュラム作成</p>
                                </li>
                                <li class="price_list__li">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p>TOEFL学習サポート</p>
                                </li>
                                <li class="price_list__li">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p>週一回のビデオMTG</p>
                                </li>
                                <li class="price_list__li">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p>月二回の模試（解説付き）</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="plan_list">
                        <span>おすすめ</span>
                        <h3>志望校対策プラン</h3>
                        <div class="price_list__inner">
                            <h4><?php echo $field_value = get_field( 'price', 73 ); ?>円~</h4>
                            <p class="monthly">*月額（税抜価格）</p>
                            <ul>
                                <li class="price_list__li">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p>カリキュラム作成</p>
                                </li>
                                <li class="price_list__li">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p>TOEFL学習サポート</p>
                                </li>
                                <li class="price_list__li">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p>週一回のビデオMTG</p>
                                </li>
                                <li class="price_list__li">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p>月二回の模試（解説付き）</p>
                                </li>
                                <li class="price_list__li">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p>週一の英語面接対策</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="plan_list">
                        <h3>フレックスプラン</h3>
                        <div class="price_list__inner">
                            <h4><?php echo $field_value = get_field( 'price', 74 ); ?>円~</h4>
                            <p class="monthly">*月額（税抜価格）</p>
                            <ul>
                                <li class="price_list__li">
                                    <p>＊別途ご相談ください</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!----#price_list------>
    <?php get_template_part('template/document_request'); ?>
</main>
<?php get_footer();
