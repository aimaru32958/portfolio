<?php
/**
Template Name: [top]
***/
?>

<?php get_header(); ?>

<main class="u-page-top">

    <section class="p-frontPage-top u-change">
        <div class="l-inner p-frontPage-top__inner">
            <h2 class="p-frontPage-top__title u-front">
                <strong>完璧</strong>を追及する<br>
                <span>Webコーダー</span>
            </h2>
            <h2 class="p-frontPage-top__title u-back">
                <strong>お金</strong>をもとめる<br>
                <span>Webコーダー</span>
            </h2>
            <div class="p-frontPage-top__icon">
                <div class="p-frontPage-top__img u-front"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon.png" alt=""></div>
                <div class="p-frontPage-top__img u-back"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon2.png" alt=""></div>
                <p class="p-frontPage-top__name">あいまる</p>
            </div>
        </div>
    </section>

    <section class="p-frontPage-news u-change" id="fp-news">
        <div class="l-inner p-frontPage-news__inner u-change">
            <div class="p-frontPage-news__symbol u-change"><?php get_template_part('template-parts/svg/symbol-svg'); ?></div>
            <div class="p-frontPage-news__wrap">
                <div class="p-frontPage-news__content">
                    <p class="p-frontPage-news__title">お知らせ</p>
                    <!-- <p class="p-frontPage-news__text"> -->
                        <?php get_template_part('template-parts/loop/news-sl'); ?>
                    <!-- </p> -->
                </div>
                <div class="p-frontPage-news__img u-change"></div>
            </div>
            <div class="p-frontPage-news__link u-change">
                <a href="<?php echo get_page_link( get_page_by_path('service')->ID );?>/#schedule" >スケジュールはこちら</a>
            </div>
        </div>
    </section>

    <section class="p-frontPage-works u-section u-change" id="fp-works">
        <div class="l-inner p-frontPage-works__inner">
            <h2 class="c-sectionTitle">製作実績</h2>
            <p class="c-sectionSubTitle">works</p>
            <div class="p-frontPage-works__itemWrap">

                <?php get_template_part('template-parts/loop/works-sl'); ?>

            </div>
            <div class="c-btn c-btn--red">
                <a href="<?php echo get_post_type_archive_link('works'); ?>">
                    制作実績一覧へ
                    <div id="js-risu" class="p-hover--risu"></div>
                </a>
            </div>
        </div>
    </section>

    <section class="p-frontPage-about u-section u-change" id="fp-about">
        <div class="l-inner p-frontPage-about__inner">
            <h2 class="c-sectionTitle">私について</h2>
            <p class="c-sectionSubTitle">about</p>
            <div class="p-frontPage-about__container">
                <div class="p-frontPage-about__content">
                    <div class="p-frontPage-about__icon is-change">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon.png" class="u-front" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon2.png" class="u-back" alt="">
                    </div>
                    <div class="p-frontPage-about__plofile">
                        <div class="p-frontPage-about__nameWrap u-change">
                            <p class="p-frontPage-about__job u-front">Webコーダー</p>
                            <p class="p-frontPage-about__job u-back">こだわり職人</p>
                            <h3 class="p-frontPage-about__name">あいまる</h3>
                        </div>
                        <!-- <p class="p-frontPage-about__text"> -->
                            <?php get_template_part('template-parts/loop/about-sl'); ?>
                        <!-- </p> -->
                    </div>
                </div>
                <div class="p-frontPage-about__subContent">
                    <div class="p-frontPage-about__timeWrap">
                        <p class="p-frontPage-about__timeTitle u-change">業務時間</p>
                        <div class="p-frontPage-about__timeItems">
                            <div class="p-frontPage-about__timeItem">
                                <p class="p-frontPage-about__itemTitle">作業時間</p>
                                <div class="p-frontPage-about__contentWrap">
                                    <p class="p-frontPage-about__itemSubTitle">業務日</p>
                                    <div class="p-frontPage-about__times">
                                        <p class="p-frontPage-about__time">９：００ ～  １８：００</p>
                                        <p class="p-frontPage-about__time">２２：００   ～  ２４：００</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-frontPage-about__timeItem">
                                <p class="p-frontPage-about__itemTitle">対応可能<br class="is-sp">時間</p>
                                <div class="p-frontPage-about__itemContent">
                                    <div class="p-frontPage-about__contentWrap">
                                        <p class="p-frontPage-about__itemSubTitle">業務日</p>
                                        <div class="p-frontPage-about__times">
                                            <p class="p-frontPage-about__time"><span>２</span>９：００ ～  １８：００</p>
                                        </div>
                                    </div>
                                    <p class="p-frontPage-about__info">
                                        ※確実に対応できる時間です。
                                        この時間以外でも随時対応いたします。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-frontPage-about__twitterWrap">
                        <div class="p-frontPage-about__twitter is-pc">
                            <a class="twitter-timeline" data-lang="ja" data-height="250" href="https://twitter.com/aimaru0508?ref_src=twsrc%5Etfw" target="_blank">
                                Tweets by aimaru0508
                            </a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <a class="p-frontPage-about__twitter--x is-tab-sp u-change"  href="https://twitter.com/aimaru0508" target="_blank"></a>
                    </div>
                </div>
                <!-- <div class="c-btn c-btn--brown">
                    <a href="<?php echo get_page_link( get_page_by_path('about')->ID );?>/#aimaru">あいまるとは何者？</a>
                </div> -->
                <div class="c-btn c-btn--brown">
                    <a href="<?php echo get_page_link( get_page_by_path('about')->ID );?>/#aimaru">
                        あいまるとは何者？
                        <div id="js-bird" class="p-hover--bird"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="p-frontPage-service u-section u-change" id="fp-service">
        <div class="l-inner p-frontPage-service__inner">
            <h2 class="c-sectionTitle">業務内容</h2>
            <p class="c-sectionSubTitle">service</p>
            <div class="p-frontPage-service__itemWrap">
                <?php get_template_part('template-parts/loop/service-sl'); ?>
            </div>
            <div class="p-frontPage-service__skill u-change  wow fadeInUp">
                <h2 class="c-sectionTitle">能力</h2>
                <p class="c-sectionSubTitle">skill</p>
                <div class="p-frontPage-service__skillWrap">
                    <?php get_template_part('template-parts/loop/skill-sl'); ?>   
                </div>
            </div>
            <div class="c-btn c-btn--navy ">
                <a href="<?php echo get_page_link( get_page_by_path('service')->ID );?>/#schedule">
                    スケジュールを確認
                    <div id="js-snake" class="p-hover--snake"></div>
                </a>
            </div>
        </div>
    </section>

    <section class="p-price u-section--fpPrice u-change" id="fp-price">
        <div class="l-inner p-price__inner">
            <h2 class="c-sectionTitle">請負金額</h2>
            <p class="c-sectionSubTitle">price</p>
            <div class="p-price__content u-change">
                <h3 class="p-price__title u-front">料金表</h3>
                <h3 class="p-price__title u-back">料金表 (嘘)</h3>
                <div class="p-price__itemWrap">
                    <!-- <div class="p-price__item"> -->
                        <?php get_template_part('template-parts/loop/price-sl'); ?> 
                    <!-- </div> -->
                </div>
                <p class="p-price__text">※料金表の金額は、目安ですので予算に合わせてご相談ください。</p>
                <div class="p-price__clover p-price__clover1 u-change"><?php get_template_part('template-parts/svg/clover-svg'); ?></div>
                <div class="p-price__clover p-price__clover2 u-change"><?php get_template_part('template-parts/svg/clover-svg'); ?></div>
            </div>
            <div class="c-btn c-btn--green">
                <a href="<?php echo get_page_link( get_page_by_path('service')->ID );?>/#quotation">
                    見積りする
                    <div id="js-mush" class="p-hover--mush"></div>
                </a>
            </div>
        </div>
    </section>

    <section class="p-frontPage-contact u-section u-change" id="contact">
        <div class="l-inner p-frontPage-contact__inner">
            <h2 class="c-sectionTitle c-sectionTitle--contact">お問い合わせ</h2>
            <p class="c-sectionSubTitle c-sectionSubTitle--contact">contact</p>
            <p class="p-frontPage-contact__text">Web制作のご依頼について、<span>お気軽にご相談ください。</span></p>
            <div class="p-frontPage-contact__form">
            
                <?php echo do_shortcode('[contact-form-7 id="bdc4df5" title="CONTACT"]'); ?>
            
                <!-- <form class="wpcf7-form" action="">       
                    <dl class="form__dl" id="js-form">
                        <div class="form__row">
                            <dt class="form__label"><label for="your-company">会社名・屋号</label></dt>
                            <dd class="form__input">[text your-company id:your-company placeholder "(株)BEARS"]</dd>
                        </div>
                        <div class="form__row">
                            <dt class="form__label"><label for="your-name" class="is-required">お名前</label></dt>
                            <dd class="form__input">[text* your-name id:your-name placeholder "熊沢 くま男"]</dd>
                        </div>
                        <div class="form__row">
                            <dt class="form__label"><label for="your-email" class="is-required">メールアドレス</label></dt>
                            <dd class="form__input">[email* your-email id:your-email placeholder "xxx@example.com"]</dd>
                        </div>
                        <div class="form__row">
                            <dt class="form__label"><label for="your-number">電話番号</label></dt>
                            <dd class="form__input">[tel your-number id:your-number placeholder "000-0000-0000"]</dd>
                        </div>
                        <div class="form__row">
                            <dt class="form__label form__label--checkbox">
                                <div class="checkbox-wrap is-required">
                                    <label>ご依頼内容</label>
                                    <p class="checkbox-text">(※複数選択可)</p>
                                </div>
                            </dt>
                            <dd class="form__checkbox">
                                [checkbox* checkbox use_label_element "コーディング" "WordPress構築" "見積り" "相談" "その他"]
                            </dd>
                        </div>
                        <div class="form__row">
                            <dt class="form__label"><label for="your-message" class="is-required">お問い合わせ内容</label></dt>
                            <dd class="form__input">
                                [textarea* your-message id:your-message placeholder "ご自由にご記入ください。"]
                            </dd>
                        </div>
                        <div class="form__row">
                            <dt class="form__label form__label--privacy"><label for="your-privacy" class="is-required">個人情報の取り扱い</label></dt>
                            <dd class="form__privacy">
                                <p class="form__privacyText">
                                    ご記入いただいた個人情報は、お問い合わせへの対応および業務にのみ利用します。また、お預かりした情報は適切に管理し、次のいずれかに該当する場合を除いて個人情報を第三者に提供しません。
                                </p>    
                                <p class="form__privacyInfo">
                                    【第三者に提供する場合】
                                    ・お客様の同意がある場合
                                    ・法令に基づき開示することが必要である場合
                                </p>
                                <div class="form__privacyCheckbox">
                                    [checkbox* checkbox use_label_element "確認しました"]
                                </dlv>
                            </dd>
                        </div>
                    </dl> 
                    <div class="form__btn">
                        [submit id:js-submit "送  信"]
                    </div>
                </form> -->            
            </div>
        </div>
    </section>

    <section class="p-introduction u-section--introduction u-change" id="fp-introduction">
        <div class="l-inner p-introduction__inner">
            <h2 class="c-sectionTitle p-introduction__title">コーダー紹介</h2>
            <p class="c-sectionSubTitle">introduction</p>
            <div class="p-introduction__content">
                <?php get_template_part('template-parts/loop/introduction-text'); ?>
                <div class="p-introduction__itemWrap">
                    <?php get_template_part('template-parts/loop/introduction-fp-sl'); ?>
                </div>
                <p class="p-introduction__more u-change"><a href="<?php echo get_page_link( get_page_by_path('about')->ID );?>/#introduction">MORE</a></p>
                <!-- 装飾 -->
                <div class="p-introduction__clover p-introduction__clover1 u-change"><?php get_template_part('template-parts/svg/clover-svg'); ?></div>
                <div class="p-introduction__clover p-introduction__clover2 u-change"><?php get_template_part('template-parts/svg/clover-svg'); ?></div>
            </div>
        </div>
    </section>
    
    
</main>

<?php get_footer(); ?>