<?php
/*
Template Name: トップページ
*/
?>
<?php get_header(); ?>
<main>
    <div id="main_visual">
        <div class="main_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top_mv.jpg" alt="TOEFLに最適化された無駄のないカリキュラム">
            <div class="main_txt__wrap">
                <h2>TOEFL対策はEngress</h2>
                <p>日本人へのTOEFL指導歴豊かな講師陣の<br>
                    コーチング型TOEFLスクール</p>
                <a class="btn btn_contents" href="<?php echo home_url(); ?>/contact">資料請求</a>
                <a class="mv_contact" href="<?php echo home_url(); ?>/contact">お問い合わせ</a>
            </div>
        </div>
    </div>
    <!----#main_visual------>
    <div id="toefl_studies">
        <div class="inner toefl_studies__inner">
            <h2>TOEFL学習で<br>こんな悩みありませんか？</h2>
            <ul>
                <li>勉強の習慣が<br>
                    身についていない</li>
                <li>勉強しているはず<br>
                    なのに点数が伸びない</li>
                <li>正しい勉強方法が<br>
                    わからない</li>
            </ul>
            <div class="about_engress">
                <div class="about_engress__inner">
                    <h3>Engressは<br>
                        <span>TOEFLに特化したスクール</span>です
                    </h3>
                    <p>完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>
                        TOEFLの苦手分野を克服します。</p>
                </div>
            </div>
        </div>
    </div>
    <!--#toefl_studies__inner-->
    <div id="strong_point">
        <div class="inner strong_point_inner">
            <h2>TOEFL対策に特化した<br>Engress3つの強み</h2>
            <div class="strong_point__contents">
                <div class="contents_txt">
                    <p class="feature">特長 1</p>
                    <h3>TOEFLに最適化された<br>
                        無駄のないカリキュラム</h3>
                    <p>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/engress_1.jpg" alt="TOEFLに最適化された無駄のないカリキュラム">
            </div>
            <div class="strong_point__contents">
                <div class="contents_txt">
                    <p class="feature">特長 2</p>
                    <h3>日本人指導歴10年以上の<br>
                        経験豊富な講師陣</h3>
                    <p>Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/engress_2.jpg" alt="日本人指導歴10年以上の経験豊富な講師陣">
            </div>
            <div class="strong_point__contents">
                <div class="contents_txt">
                    <p class="feature">特長 3</p>
                    <h3>平均3ヶ月でTOEFL iBT20点アップ</h3>
                    <p>Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/engress_3.jpg" alt="平均3ヶ月でTOEFL iBT20点アップ">
            </div>
        </div>
    </div>
    <!--#strong_point-->
    <div class="plan">
        <img src="<?php echo get_template_directory_uri(); ?>/img/price.jpg" alt="Engressの料金プラン">
        <div class="plan_txt">
            <h3>Engressの料金プランはこちら</h3>
            <a class="btn plan_btn" href="<?php echo home_url(); ?>/course_price">料金を見てみる</a>
        </div>
    </div>
    <!--plan-->
    <div id="success_stories">
        <div class="inner success_stories_inner">
            <h2>TOEFL成功事例</h2>
            <div class="contents_wrap">
                <?php
                $args = array(
                    'post_type' => 'success_stories',
                    'post_per_page' => 3,
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="success_stories_contents">
                            <p class="heading"><?php the_field('comment'); ?></p>
                            <img src="<?php the_field('image'); ?>" alt="顔写真">
                            <div class="status">
                                <p class="profession"><?php the_field('occupation'); ?></p>
                                <p class="name"><?php the_field('name'); ?></p>
                            </div>
                            <p class="score"><?php the_field('record'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>投稿はありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <!--#success_stories-->
    <div id="usage_flow">
        <div class="inner usage_flow__inner">
            <h2>ご利用の流れ</h2>
            <ol>
                <li>
                    <p class="num">01</p>
                    <h3>お問い<br>合わせ</h3>
                    <p class="explanation">まずはフォームまたはお電話からお申し込みください。</p>
                </li>
                <li>
                    <p class="num">02</p>
                    <h3>ヒアリング</h3>
                    <p class="explanation">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
                </li>
                <li>
                    <p class="num">03</p>
                    <h3>学習プランのご提供</h3>
                    <p class="explanation">目標達成のために最適な学習プランをご提案致します。</p>
                </li>
                <li>
                    <p class="num">04</p>
                    <h3>ご入会</h3>
                    <p class="explanation">お申込み完了後、レッスンがスタートします。</p>
                </li>
            </ol>
        </div>
    </div>
    <!--#usage_flow-->
    <div id="question">
        <div class="inner question_inner">
            <h2>よくある質問</h2>
            <div id="app">
                <js-accordion>
                    <div slot="title"><p>Engressはサラリーマンでも学習を続けられるでしょうか？</p></div>
                    <div class="js-accordion--body" slot="body">
                        <p>Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                    </div>
                </js-accordion>
                <js-accordion>
                    <div slot="title"><p>教材はオリジナルのものを使用しているのでしょうか？</p></div>
                    <div class="js-accordion--body" slot="body">
                        <p class="answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_+.jpg" alt="+アイコン">
                </js-accordion>
                <js-accordion>
                    <div slot="title"><p>講師に日本人はいますか？</p></div>
                    <div class="js-accordion--body" slot="body">
                        <p class="answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_+.jpg" alt="+アイコン">
                </js-accordion>
                <js-accordion>
                    <div slot="title"><p>TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p></div>
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
        <div class="inner contents_inner">
            <div class="blog_area">
                <h2>ブログ</h2>
                <?php
                $blog_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'post_date',
                );
                $blog_query = new WP_Query($blog_args);
                ?>
                <?php if ($blog_query->have_posts()) : ?>
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                        <article class="blog_content">
                            <div class="blog_img__wrap">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'blog_img')); ?>
                                <a class="blog_content__link" href="<?php the_permalink(); ?>"></a>
                                <p class="blog_category"><?php the_category(); ?></p>
                            </div>
                            <div class="blog_title_wrap">
                                <a class="blog_title" href="<?php the_permalink(); ?>">
                                    <h3><?php echo get_the_title(); ?></h3>
                                </a>
                                <p class="blog_date"> <?php echo get_the_date(); ?></p>
                            </div>
                        </article>
                        <!--blog_content-->
                    <?php endwhile;  ?>
                <?php else :  ?>
                    <p class="blog__title">投稿が見つかりません。</p>
                <?php endif; ?>
            </div>
            <!--blog_area-->
            <div class="info_area">
                <h2>お知らせ</h2>
                <?php
                $args = array(
                    'post_type' => 'info',
                    'posts_per_page' => 3,
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="info_content">
                            <p class="info_date"><?php the_time('Y.m.d'); ?></p>
                            <a class="info_title" href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
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