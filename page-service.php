<?php
/**
Template Name: [service]
***/
?>

<?php get_header(); ?>

<main class="u-page-top">

    <div class="l-top">
        <div class="l-inner l-top__inner">
            <div class="l-top__titleWrap">
                <h1 class="l-top__title">仕事</h1>
                <p class="l-top__subTitle">service</p>
            </div>
        </div>
        <!-- breadcrumb -->
        <?php get_template_part('template-parts/breadcrumb'); ?>
    </div>

    <section class="p-service-schedule u-section" id="schedule">
        <div class="l-inner p-service-schedule__inner">
            <h3 class="c-sectionTitle">スケジュール</h3>
            <p class="c-sectionSubTitle">schedule</p>
            <div class="p-service-schedule__content">
                <div class="p-service-schedule__schedule">
                    <iframe src="https://calendar.google.com/calendar/embed?height=700&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FTokyo&showTitle=0&showNav=1&showPrint=0&showCalendars=0&showTz=0&src=YjdiNWMwMjZmN2NjYjMwOWUyMGUwMGFmMGI3MjM1ZDZlMjRjY2MxOTk3YjY4ODk0MTg3MmM0ZjM1YTI3MGY0YkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y2I2ZWMxZjliMGYyNzdkNmVkMjk4ZDU5OTEzYjEyODU5YmY4NWI0MTNiMmRhNjc1MDM5NWYxYjQzMjE1NDQ4MEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=amEuamFwYW5lc2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%238E24AA&color=%23D81B60&color=%230B8043" style="border-width:0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
        </div>
    </section>
    
    <section class="p-price u-section" id="price">
        <div class="l-inner p-price__inner">
            <h3 class="c-sectionTitle">請負金額</h3>
            <p class="c-sectionSubTitle">price</p>
            <div class="p-price__content">
                <h3 class="p-price__title">料金表</h3>
                <div class="p-price__itemWrap">
                    <!-- <div class="p-price__item"> -->
                        <?php get_template_part('template-parts/loop/price-sl'); ?> 
                    <!-- </div> -->
                </div>
                <p class="p-price__text">※料金表の金額は、目安ですので予算に合わせてご相談ください。</p>
                <div class="p-price__clover p-price__clover1"><?php get_template_part('template-parts/svg/clover-svg'); ?></div>
                <div class="p-price__clover p-price__clover2"><?php get_template_part('template-parts/svg/clover-svg'); ?></div>
            </div>
        </div>
    </section>

    <section class="p-service-quotation u-section" id="quotation">
        <div class="l-inner p-service-quotation__inner">
            <h3 class="c-sectionTitle">見積り</h3>
            <p class="c-sectionSubTitle">quotation</p>
            <div class="p-service-quotation__content">
                <h3 class="p-service-quotation__subTitle">料金シミュレーション</h3>
                <div class="p-service-quotation__tableWrap">
                    <table class="p-service-quotation__table table">
                        <tr>
                            <th>項目</th>
                            <th class="is-pc-tab">数量</th>
                            <th class="is-pc-tab">単価</th>
                            <th>金額</th>
                        </tr>
                        <?php get_template_part('template-parts/loop/quotation-sl'); ?> 
                        <!-- <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr> -->

                        <!-- ダミー -->
                        <tr class="is-pc-tab">
                            <th></th>
                            <th class="is-sp p-service-quotation__spTitle">数量</th>
                            <td></td>
                            <th class="is-sp p-service-quotation__spTitle">単価</th>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="is-pc-tab">
                            <th></th>
                            <th class="is-sp p-service-quotation__spTitle">数量</th>
                            <td></td>
                            <th class="is-sp p-service-quotation__spTitle">単価</th>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="is-pc-tab">
                            <th></th>
                            <th class="is-sp p-service-quotation__spTitle">数量</th>
                            <td></td>
                            <th class="is-sp p-service-quotation__spTitle">単価</th>
                            <td></td>
                            <td></td>
                        </tr>

                        <!-- 合計 -->
                        <tr>
                            <td colspan="2" rowspan="3" class="is-table-none is-pc-tab"></td>
                            <th class="totalTitle">小計</th>
                            <td class="totalPrice" id="subTotal"></td>
                        </tr>
                        <tr>
                            <th class="totalTitle">消費税(10％)</th>
                            <td class="u-none is-pc-tab"></td>
                            <td class="totalPrice" id="tax"></td>
                        </tr>
                        <tr>
                            <th class="totalTitle">合計</th>
                            <td class="u-none  is-pc-tab"></td>
                            <td class="totalPrice" id="mainTotal"></td>
                        </tr>
                    </table>
                </div>
                <!-- <p class="p-service-quotation__text"> -->
                    <?php get_template_part('template-parts/loop/quotation-text-sl'); ?>
                <!-- </p> -->

                
                <!-- <div class="c-btn">
                    <a href="" download="見積り(案).pdf">見積り(案)を保存する</a>
                </div> -->

            </div>
        </div>
    </section>

    <section class="p-service-news u-section--news" id="news">
        <div class="l-inner p-service-news__inner">
            <h3 class="c-sectionTitle">お知らせ</h3>
            <p class="c-sectionSubTitle">news</p>
            <div class="p-service-news__wrap">
                <?php get_template_part('template-parts/loop/news-sv-sl'); ?>
            </div>
            <div  class="p-service-news__btn">
                <button>お知らせ一覧を表示する</button>
            </div>
             <!-- 装飾 -->
            <div class="p-service-news__clover p-service-news__clover1 u-change"><?php get_template_part('template-parts/svg/clover-svg'); ?></div>
            <div class="p-service-news__clover p-service-news__clover2 u-change"><?php get_template_part('template-parts/svg/clover-svg'); ?></div>
        </div>
    </section>


 











</main>

<?php get_footer(); ?>

