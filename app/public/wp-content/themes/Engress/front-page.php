<?php
/*
Template Name: トップページ
*/
?>
<?php get_header(); ?>
<main>
    <div class="main-visual">
        <img class="main-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/top_mv.jpg" alt="TOEFLに最適化された無駄のないカリキュラム">
        <div class="main-visual-txt">
            <h2 class="main-visual-txt__title">TOEFL対策はEngress</h2>
            <p class="main-visual-txt__lead">日本人へのTOEFL指導歴豊かな講師陣の<br>
                コーチング型TOEFLスクール</p>
            <a class="btn btn_contents" href="<?php echo home_url(); ?>/contact">資料請求</a>
            <a class="main-visual-txt__contact" href="<?php echo home_url(); ?>/contact">お問い合わせ</a>
        </div>
    </div>
    <!----main_visual------>

    <div id="toefl_studies" class="toefl-studies">
        <div class="inner">
            <h2 class="toefl-studies__title">TOEFL学習で<br>こんな悩みありませんか？</h2>
            <ul class="toefl-studies-item">
                <li class="toefl-studies-item__list">勉強の習慣が<br>
                    身についていない</li>
                <li class="toefl-studies-item__list">勉強しているはず<br>
                    なのに点数が伸びない</li>
                <li class="toefl-studies-item__list">正しい勉強方法が<br>
                    わからない</li>
            </ul>
            <div class="about_engress">
                <div class="about_engress__inner">
                    <h3 class="about_engress__title">Engressは<br>
                        <span class="about_engress__sub-txt">TOEFLに特化したスクール</span>です
                    </h3>
                    <p class="about_engress__lead">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>
                        TOEFLの苦手分野を克服します。</p>
                </div>
            </div>
        </div>
    </div>
    <!--toefl_studies__inner-->


    <div id="strong_point" class="strong-point">
        <div class="inner">
            <h2 class="strong-point__title">TOEFL対策に特化した<br>Engress3つの強み</h2>
            <div class="strong-point-contents">
                <div class="strong-point-contents-txt">
                    <p class="strong-point-contents-txt__feature">特長 1</p>
                    <h3 class="strong-point-contents-txt__title">TOEFLに最適化された<br>
                        無駄のないカリキュラム</h3>
                    <p class="strong-point-contents-txt__lead">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                    </p>
                </div>
                <img class="strong-point-contents-txt__img" src="<?php echo get_template_directory_uri(); ?>/img/engress_1.jpg" alt="TOEFLに最適化された無駄のないカリキュラム">
            </div>
            <div class="strong-point-contents">
                <div class="strong-point-contents-txt">
                    <p class="strong-point-contents-txt__feature">特長 2</p>
                    <h3 class="strong-point-contents-txt__title">日本人指導歴10年以上の<br>
                        経験豊富な講師陣</h3>
                    <p class="strong-point-contents-txt__lead">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
                    </p>
                </div>
                <img class="strong-point-contents-txt__img" src="<?php echo get_template_directory_uri(); ?>/img/engress_2.jpg" alt="日本人指導歴10年以上の経験豊富な講師陣">
            </div>
            <div class="strong-point-contents">
                <div class="strong-point-contents-txt">
                    <p class="strong-point-contents-txt__feature">特長 3</p>
                    <h3 class="strong-point-contents-txt__title">平均3ヶ月でTOEFL iBT20点アップ</h3>
                    <p class="strong-point-contents-txt__lead">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
                    </p>
                </div>
                <img class="strong-point-contents-txt__img" src="<?php echo get_template_directory_uri(); ?>/img/engress_3.jpg" alt="平均3ヶ月でTOEFL iBT20点アップ">
            </div>
        </div>
    </div>
    <!--strong-point-->

    <div class="plan">
        <img class="plan__img" src="<?php echo get_template_directory_uri(); ?>/img/price.jpg" alt="Engressの料金プラン">
        <div class="plan-txt">
            <h3 class="plan-txt__title">Engressの料金プランはこちら</h3>
            <a class="btn plan-txt__btn" href="<?php echo home_url(); ?>/course_price">料金を見てみる</a>
        </div>
    </div>
    <!--plan-->

    <div id="success_stories" class="success-stories">
        <div class="inner">
            <h2>TOEFL成功事例</h2>
            <div class="success-stories-contents-wrap">
                <?php
                $args = array(
                    'post_type' => 'success_stories',
                    'post_per_page' => 3,
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="success-stories-contents">
                            <p class="success-stories-contents__heading"><?php the_field('comment'); ?></p>
                            <img class="success-stories-contents__img" src="<?php the_field('image'); ?>" alt="顔写真">
                            <div class="success-stories-contents-status">
                                <p class="success-stories-contents-status__profession"><?php the_field('occupation'); ?></p>
                                <p class="success-stories-contents-status__name"><?php the_field('name'); ?></p>
                            </div>
                            <p class="success-stories-contents__score"><?php the_field('record'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>投稿はありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <!--success-stories-->

    <div id="usage_flow" class="usage-flow">
        <div class="inner">
            <h2 class="usage-flow__title">ご利用の流れ</h2>
            <ol class="usage-flow-item">
                <li class="usage-flow-item__list">
                    <p class="usage-flow-item__list--num">01</p>
                    <h3 class="usage-flow-item__list--title">お問い合わせ</h3>
                    <p class="usage-flow-item__list--explanation">まずはフォームまたはお電話からお申し込みください。</p>
                </li>
                <li  class="usage-flow-item__list">
                    <p class="usage-flow-item__list--num">02</p>
                    <h3 class="usage-flow-item__list--title">ヒアリング</h3>
                    <p class="usage-flow-item__list--explanation">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
                </li>
                <li  class="usage-flow-item__list">
                    <p class="usage-flow-item__list--num">03</p>
                    <h3 class="usage-flow-item__list--title">学習プランのご提供</h3>
                    <p class="usage-flow-item__list--explanation">目標達成のために最適な学習プランをご提案致します。</p>
                </li>
                <li  class="usage-flow-item__list">
                    <p class="usage-flow-item__list--num">04</p>
                    <h3 class="usage-flow-item__list--title">ご入会</h3>
                    <p class="usage-flow-item__list--explanation">お申込み完了後、レッスンがスタートします。</p>
                </li>
            </ol>
        </div>
    </div>
    <!--#usage_flow-->

    <div id="question" class="question">
        <div class="inner question_inner">
            <h2 class="question__title">よくある質問</h2>
            <div id="app">
                <js-accordion>
                    <div slot="title">
                        <p>Engressはサラリーマンでも学習を続けられるでしょうか？</p>
                    </div>
                    <div class="js-accordion--body" slot="body">
                        <p>Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                    </div>
                </js-accordion>
                <js-accordion>
                    <div slot="title">
                        <p>教材はオリジナルのものを使用しているのでしょうか？</p>
                    </div>
                    <div class="js-accordion--body" slot="body">
                        <p class="answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_+.jpg" alt="+アイコン">
                </js-accordion>
                <js-accordion>
                    <div slot="title">
                        <p>講師に日本人はいますか？</p>
                    </div>
                    <div class="js-accordion--body" slot="body">
                        <p class="answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_+.jpg" alt="+アイコン">
                </js-accordion>
                <js-accordion>
                    <div slot="title">
                        <p>TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p>
                    </div>
                    <div class="js-accordion--body" slot="body">
                        <p class="answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_+.jpg" alt="+アイコン">
                </js-accordion>
            </div>
        </div>
    </div>
    <!--#question-->

    <div id="contents_area">
        <div class="inner contents-area">

            <div class="contents-wrap">
                <h2 class="contents-wrap__title">ブログ</h2>
                <?php
                $blog_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'orderby' => 'post_date',
                );
                $blog_query = new WP_Query($blog_args);
                ?>
                <?php if ($blog_query->have_posts()) : ?>
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                        <article class="blog-content">
                            <div class="blog-content-img">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'blog_img')); ?>
                                <a class="blog_content-link" href="<?php the_permalink(); ?>"></a>
                                <?php echo the_category(); ?>
                            </div>
                            <div class="blog-content-txt-wrap">
                                <a class="blog_title" href="<?php the_permalink(); ?>">
                                    <h3><?php echo get_the_title(); ?></h3>
                                </a>
                                <p class="blog_date"> <?php echo get_the_date(); ?></p>
                            </div>
                        </article>
                        <!--blog-content-->
                    <?php endwhile;  ?>
                <?php else :  ?>
                    <p class="blog__title">投稿が見つかりません。</p>
                <?php endif; ?>
            </div>
            <!--blog-area-->

            <div class="info">
                <h2 class="contents-wrap__title">お知らせ</h2>
                <?php
                $args = array(
                    'post_type' => 'info',
                    'posts_per_page' => 4,
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="info__content">
                            <p class="info__content--date"><?php the_time('Y.m.d'); ?></p>
                            <a class="info__content--link" href="<?php the_permalink(); ?>">
                                <h3 class="info__content__title" ><?php the_title(); ?></h3>
                            </a>
                        </div>
                        <!--info_content-->

                    <?php endwhile; ?>
                <?php else :  ?>
                    <p class="blog__title">投稿が見つかりません。</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!--#blog_area-->
    <?php get_template_part('template/document_request'); ?>
    <script>
        Vue.component('js-accordion', {
            template: `
            <div class="js-accordion" v-cloak>
            <button class="js-accordion--trigger" type="button" :class="{ '_state-open': isOpened }" @click="accordionToggle()">
                <slot name="title"></slot>
            </button>
            <transition name="js-accordion" @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave" @leave="leave">
                <div class="js-accordion--target" :class="{ '_state-open': isOpened }" v-if="isOpened">
                <slot name="body"></slot>
                </div>
            </transition>
            </div>

            `,

            data() {
                return {
                    isOpened: false
                };
            },
            props: {

            },

            methods: {
                accordionToggle: function() {
                    this.isOpened = !this.isOpened;
                },
                beforeEnter: function(el) {
                    el.style.height = '0';
                },
                enter: function(el) {
                    el.style.height = el.scrollHeight + 'px';
                },
                beforeLeave: function(el) {
                    el.style.height = el.scrollHeight + 'px';
                },
                leave: function(el) {
                    el.style.height = '0';
                }
            }
        });
        new Vue({
            el: '#app'
        });
    </script>
</main>
<?php
get_footer();
