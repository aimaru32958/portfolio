<?php get_header(); ?>


<main class="u-page-top">

    <div class="l-top">
        <div class="l-inner l-top__inner">
            <div class="l-top__titleWrap">
                <p class="l-top__title">制作実績</p>
                <p class="l-top__subTitle">works</p>
            </div>
        </div>
        <!-- breadcrumb -->
        <?php get_template_part('template-parts/breadcrumb'); ?>
    </div>


    <section class="p-single u-section">
        <div class="l-inner p-single__inner">
            <h1 class="p-single__title"><?php the_title(); ?></h1>
            <div class="p-single__content">
                <div class="p-single__img"><?php the_post_thumbnail(); ?></div>
                <div class="p-single__url p-single__item">
                    <h2 class="p-single__subTitle">URL</h2>
                    <div class="p-single__itemContent">
                        <a href="<?php the_field( 'url' ); ?>" class="p-single__link p-single__text" target="_blank"><?php the_field( 'url' ); ?></a>
                        <?php $id = get_field('ユーザーid'); ?>
                        <?php if( $id != "" ): ?>
                            <p class="p-single__id p-single__text">ユーザーID： <?php the_field( 'ユーザーid' ); ?></p>
                            <p class="p-single__pass p-single__text">パスワード： <?php the_field( 'パスワード' ); ?></p>
                        <?php else: ?>
                            <!-- <p class="p-single__id p-single__text">ユーザーID： なし</p>
                            <p class="p-single__pass p-single__text">パスワード： なし</p> -->
                        <?php endif; ?>
                    </div>
                </div>
                <div class="p-single__note p-single__item">
                    <h2 class="p-single__subTitle">制作詳細</h2>
                    <div class="p-single__itemContent">
                        <p class="p-single__manager p-single__text"><?php the_field( '制作詳細' ); ?></p>
                        <div class="p-single__skill p-single__text">
                            <?php $terms = get_the_terms(get_the_ID(),'skill'); ?> 
                            <?php if($terms): ?>
                                <?php 
                                $term_order = array(); // タームの順序を格納する配列
                                foreach ($terms as $term) {
                                    $order = get_term_meta($term->term_id, '順番', true); // カスタムフィールド '順番' から順序を取得
                                    $term_order[$term->term_id] = $order ; // idと'順番'で連想配列を作成
                                }
                                asort($term_order); // 順序に基づいてタームをソート
                                ?>
                                <?php foreach ($term_order as $term_id => $order): ?>
                                    <?php  $term = get_term($term_id, 'skill'); // タームの情報を取得 ?> 
                                    <span><?php echo $term->name ; ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="p-single__date p-single__item">
                    <h2 class="p-single__subTitle">制作期間</h2>
                    <div class="p-single__itemContent">
                        <p class="p-single__time p-single__text">制作期間： <?php the_field( '制作期間' ); ?></p>
                        <p class="p-single__day p-single__text">制作日： <?php the_field( '制作日' ); ?></p>
                    </div>
                </div>
                <div class="p-single__outline p-single__item">
                    <h2 class="p-single__subTitle">制作概要</h2>
                    <div class="p-single__itemContent">
                        <p class="p-single__outlineText p-single__text"><?php the_field( '制作概要' ); ?></p>
                    </div>
                </div>
                <?php $design = get_field('デザイン'); ?>
                <?php if( $design != "" ): ?>
                    <div class="p-single__design  p-single__item">
                        <h2 class="p-single__subTitle">デザイン</h2>
                        <div class="p-single__itemContent">
                            <p class="p-single__designManager p-single__text"><?php the_field( 'デザイン' ); ?></p>
                            <?php if(get_field('デザイナーurl')): ?>
                                <a class="p-single__designUrl p-single__text" href="<?php the_field( 'デザイナーurl' ); ?>" target="_blank">
                                    <?php the_field( 'デザイナーurl' ); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="p-single__pagenetion">

            <?php if(get_next_post()): ?>
                <div class="p-single__btn p-single__btn--next"><?php echo next_post_link("%link",""); ?></div>
            <?php else: ?>
                <div class="p-single__btn p-single__btn--none"></div>
            <?php endif; ?>

                <div class="p-single__archive"><a href="<?php echo get_post_type_archive_link('works'); ?>">制作物一覧へ</a></div>
        
            <?php if(get_previous_post()): ?>
                <div class="p-single__btn p-single__btn--prev"><?php echo previous_post_link("%link",""); ?></div>
            <?php else: ?>
                <div class="p-single__btn p-single__btn--none"></div>
            <?php endif; ?>

            </div>
        </div>
    </section>
    
</main>

<?php get_footer(); ?>