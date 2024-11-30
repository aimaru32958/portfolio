<?php
/**
Template Name: [about]
***/
?>

<?php get_header(); ?>

<main class="u-page-top">

    <div class="l-top">
        <div class="l-inner l-top__inner">
            <div class="l-top__titleWrap">
                <h1 class="l-top__title">私について</h1>
                <p class="l-top__subTitle">about</p>
            </div>
        </div>
        <!-- breadcrumb -->
        <?php get_template_part('template-parts/breadcrumb'); ?>
    </div>


    <section class="p-about-profile u-section" id="aimaru">
        <div class="l-inner p-about-profile__inner">
            <h3 class="p-about-profile__title">My Profile</h3>

                
            <?php get_template_part('template-parts/loop/profile-sl'); ?>

            <!-- <div class="p-about-profile__mainWrap">
                <div class="p-about-profile__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon.png" alt=""></div>
                <div class="p-about-profile__textWrap">
                    <div class="p-about-profile__nameWrap">
                        <p class="p-about-profile__job"><?php the_field( '役職' ); ?></p>
                        <h3 class="p-about-profile__name">あいまる</h3>
                    </div>
                    <p class="p-about-profile__message"><?php the_field( 'メッセージ' ); ?></p>
                </div>
            </div>
            <div class="p-about-profile__dataWrap">
                <div class="p-about-profile__resultWrap">
                    <div class="p-about-profile__result">
                        <h4 class="p-about-profile__itemTitle">経歴</h4>
                        <p class="p-about-profile__itemText"><?php the_field( '経歴' ); ?></p>
                    </div>
                    <div class="p-about-profile__career">
                        <h4 class="p-about-profile__itemTitle">実績</h4>
                        <p class="p-about-profile__itemText"><?php the_field( '実績' ); ?></p>
                    </div>
                </div>
                <div class="p-about-profile__statusWrap">
                    <div class="p-about-profile__base">
                        <h4 class="p-about-profile__itemTitle">拠点</h4>
                        <p class="p-about-profile__itemText"><?php the_field( '拠点' ); ?></p>
                    </div>
                    <div class="p-about-profile__age">
                        <h4 class="p-about-profile__itemTitle">年齢</h4>
                        <p class="p-about-profile__itemText"><?php the_field( '年齢' ); ?></p>
                    </div>
                    <div class="p-about-profile__point">
                        <h4 class="p-about-profile__itemTitle">長所</h4>
                        <p class="p-about-profile__itemText"><?php the_field( '長所' ); ?></p>
                    </div>
                    <div class="p-about-profile__hobby">
                        <h4 class="p-about-profile__itemTitle">趣味</h4>
                        <p class="p-about-profile__itemText"><?php the_field( '趣味' ); ?></p>
                    </div>
                    <div class="p-about-profile__favorite">
                        <h4 class="p-about-profile__itemTitle">好きなもの</h4>
                        <p class="p-about-profile__itemText"><?php the_field( '好きなもの' ); ?></p>
                    </div>
                </div>
            </div> -->
        
        </div>
    </section>

    <section class="p-about-style u-section" id="style">
        <div class="l-inner p-about-style__inner">
            <h3 class="c-sectionTitle">仕事の流儀</h3>
            <p class="c-sectionSubTitle">style</p>
            <div class="p-about-style__main">
                
                <?php get_template_part('template-parts/loop/style-sl'); ?>
                <!-- <div class="p-about-style__content p-about-style__content1">
                    <div class="p-about-style__titleWrap1">    
                        <h3 class="p-about-style__itemTitle"><?php the_field( 'style-content【1】タイトル' ); ?></h3>
                    </div>
                    <p class="p-about-style__itemText"><?php the_field( 'style-content【1】テキスト' ); ?></p>
                </div>
                <div class="p-about-style__content p-about-style__content2">
                    <div class="p-about-style__titleWrap2">
                        <h3 class="p-about-style__itemTitle"><?php the_field( 'style-content【2】タイトル' ); ?></h3>
                    </div>    
                    <p class="p-about-style__itemText"><?php the_field( 'style-content【2】テキスト' ); ?></p>
                </div>
                <div class="p-about-style__content p-about-style__content3">
                    <div class="p-about-style__titleWrap3">
                        <h3 class="p-about-style__itemTitle"><?php the_field( 'style-content【3】タイトル' ); ?></h3>
                    </div>
                    <p class="p-about-style__itemText"><?php the_field( 'style-content【3】テキスト' ); ?></p>
                </div>
            </div> -->
        </div>
    </section>

    <section class="p-introduction u-section--introduction-ab" id="introduction">
        <div class="l-inner p-introduction__inner">
            <h3 class="c-sectionTitle  p-introduction__title">コーダー紹介</h3>
            <p class="c-sectionSubTitle">introduction</p>
            <div class="p-introduction__content">
                <?php get_template_part('template-parts/loop/introduction-text'); ?>
                <div class="p-introduction__itemWrap--about">
                    <?php get_template_part('template-parts/loop/introduction-ab-sl'); ?>
                </div>
                 <!-- 装飾 -->
                <div class="p-introduction__clover p-introduction__clover3 u-change"><?php get_template_part('template-parts/svg/clover-svg'); ?></div>
                <div class="p-introduction__clover p-introduction__clover4 u-change"><?php get_template_part('template-parts/svg/clover-svg'); ?></div>
                <div class="p-introduction__clover p-introduction__clover5 u-change"><?php get_template_part('template-parts/svg/clover-svg'); ?></div>
                <div class="p-introduction__clover p-introduction__clover6 u-change"><?php get_template_part('template-parts/svg/clover-svg'); ?></div>
            </div>
        </div>
    </section>
    


</main>

<?php get_footer(); ?>

