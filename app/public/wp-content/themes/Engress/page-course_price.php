<?php
/*
Template Name:コース・料金ページ
*/
?>
<?php get_header(); ?>
<main>
    <div class="mv">
        <img class="mv__img" src="<?php echo get_template_directory_uri(); ?>/img/course_price.jpg" alt="コース・料金">
        <h2 class="mv__title">コース・料金</h2>
    </div>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <div class="fee-structure">
        <div class="inner">
            <h2 class="lower_page__h2">料金体系</h2>
            <div class="fee-structure-btn-wrap">
                <a class="fee-structure-btn" href="#">入会金 39,800円</a>
                <span class="fee-structure-btn-wrap__item">+</span>
                <a class="fee-structure-btn" href="#">月額費用</a>
            </div>
            <p class="fee_structure__text">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
        </div>
    </div>
    <!----fee-structure------>

    <div class="price-list">
        <div class="inner">
            <h2 class="lower_page__h2">料金表</h2>
            <!-- <div class="price_list__contents"> -->
                <ul class="plan">
                    <li class="plan-list">
                        <h3 class="plan-list__title">基礎プラン</h3>
                        <div class="price-list-content">
                            <h4 class="price-list-content__title"><?php echo $field_value = get_field('price', 71); ?>円~</h4>
                            <p class="price-list-content__monthly">*月額（税抜価格）</p>
                            <ul class="price-list-content-list">
                                <li class="price-list-content-list__item">
                                    <img  class="price-list-content-list__item--icon" src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p class="price-list-content-list__item--txt">カリキュラム作成</p>
                                </li>
                                <li class="price-list-content-list__item">
                                    <img  class="price-list-content-list__item--icon" src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p class="price-list-content-list__item--txt">TOEFL学習サポート</p>
                                </li>
                                <li class="price-list-content-list__item">
                                    <img  class="price-list-content-list__item--icon" src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p class="price-list-content-list__item--txt">週一回のビデオMTG</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="plan-list">
                        <h3 class="plan-list__title">演習プラン</h3>
                        <div class="price-list-content">
                            <h4 class="price-list-content__title"><?php echo $field_value = get_field('price', 72); ?>円~</h4>
                            <p class="price-list-content__monthly">*月額（税抜価格）</p>
                            <ul class="price-list-content-list">
                                <li class="price-list-content-list__item">
                                    <img  class="price-list-content-list__item--icon" src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p class="price-list-content-list__item--txt">カリキュラム作成</p>
                                </li>
                                <li class="price-list-content-list__item">
                                    <img  class="price-list-content-list__item--icon" src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p class="price-list-content-list__item--txt">TOEFL学習サポート</p>
                                </li>
                                <li class="price-list-content-list__item">
                                    <img  class="price-list-content-list__item--icon" src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p class="price-list-content-list__item--txt">週一回のビデオMTG</p>
                                </li>
                                <li class="price-list-content-list__item">
                                    <img  class="price-list-content-list__item--icon" src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p class="price-list-content-list__item--txt">月二回の模試（解説付き）</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="plan-list">
                        <span>おすすめ</span>
                        <h3 class="plan-list__title">志望校対策プラン</h3>
                        <div class="price-list-content">
                            <h4 class="price-list-content__title"><?php echo $field_value = get_field('price', 73); ?>円~</h4>
                            <p class="price-list-content__monthly">*月額（税抜価格）</p>
                            <ul class="price-list-content-list">
                                <li class="price-list-content-list__item">
                                    <img  class="price-list-content-list__item--icon" src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p class="price-list-content-list__item--txt">カリキュラム作成</p>
                                </li>
                                <li class="price-list-content-list__item">
                                    <img  class="price-list-content-list__item--icon" src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p class="price-list-content-list__item--txt">TOEFL学習サポート</p>
                                </li>
                                <li class="price-list-content-list__item">
                                    <img  class="price-list-content-list__item--icon" src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p class="price-list-content-list__item--txt">週一回のビデオMTG</p>
                                </li>
                                <li class="price-list-content-list__item">
                                    <img  class="price-list-content-list__item--icon" src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p class="price-list-content-list__item--txt">月二回の模試（解説付き）</p>
                                </li>
                                <li class="price-list-content-list__item">
                                    <img  class="price-list-content-list__item--icon" src="<?php echo get_template_directory_uri(); ?>/img/check.svg" alt="">
                                    <p class="price-list-content-list__item--txt">週一の英語面接対策</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="plan-list">
                        <h3 class="plan-list__title">フレックスプラン</h3>
                        <div class="price-list-content">
                            <h4 class="price-list-content__title"><?php echo $field_value = get_field('price', 74); ?>円~</h4>
                            <p class="price-list-content__monthly">*月額（税抜価格）</p>
                            <ul class="price-list-content-list">
                                <li class="price-list-content-list__item">
                                    <p class="price-list-content-list__item--txt">＊別途ご相談ください</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            <!-- </div> -->
        </div>
    </div>
    <!----#price_list------>
    <?php get_template_part('template/document_request'); ?>
</main>
<?php get_footer();
