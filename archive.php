<?php get_header(); ?>

<main class="u-page-top">

    <div class="l-top">
        <div class="l-inner l-top__inner">
            <div class="l-top__titleWrap">
                <h1 class="l-top__title">制作実績</h1>
                <p class="l-top__subTitle">works</p>
            </div>
        </div>
        <!-- breadcrumb -->
        <?php get_template_part('template-parts/breadcrumb'); ?>
    </div>
    
    <section class="p-archive u-page-top">
        <div class="l-inner p-archive__inner">
            <div class="p-archive__itemWrap p-work">
                <?php get_template_part('template-parts/loop/works-archive-ml'); ?>
            </div>
            <div class="p-archive__pagenation">

                <!-- pagination -->
                <?php if(paginate_links()) : ?>  
                <div class="pagination">
                <?php
                    echo paginate_links(
                        array(
                        'end_size' => 1,
                        'mid_size' => 1,
                        'prev_next' => true,
                        'prev_text' => '',/* 「前へ」にあたるページ用テキスト */
                        'next_text' => '',/* 「次へ」にあたるページ用テキスト */
                        )
                    );
                ?>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </section>


</main>



<?php get_footer(); ?>
