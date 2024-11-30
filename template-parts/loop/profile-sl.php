
<?php 
$args = Array(
    'post_type' => 'update',      // 投稿「post」固定「page」カスタム投稿「名前」
    'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
    'tax_query' => array(
        array(
          'taxonomy' => 'page-update', // タクソノミーの名前を指定
          'field' => 'slug', // タームをスラッグで指定
          'terms' => array('about') // タクソノミーのスラッグを指定
        )
    ),
    'posts_per_page' => 1,     // 表示する投稿数(-1を指定すると全投稿を表示)
    'post_not_in' => array($post->ID),  // 表示中の投稿を除外
    'orderby' => 'date',  // ソートする基準となる項目を指定(デフォルトは最新順)
    'order' => 'DESC'           // ソートの並び順を指定'DESC' 降順、'ASC' 昇順
);
?>

<?php $about = new WP_Query($args); ?>
<?php if ($about->have_posts()) : ?>
    <?php while($about->have_posts()) : ?>
    <?php $about->the_post(); ?>


        <div class="p-about-profile__mainWrap">
            <div class="p-about-profile__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon.png" alt=""></div>
            <div class="p-about-profile__textWrap">
                <div class="p-about-profile__nameWrap">
                    <p class="p-about-profile__job"><?php the_field( '役職' ); ?></p>
                    <h3 class="p-about-profile__name">あいまる</h3>
                </div>
                <p class="p-about-profile__message u-space-underLine">

                <?php
                // カスタムフィールドの値を取得
                $custom_field_value = '<span class="is-space"></span><span>' . get_field('メッセージ') . "</span>";
                // 一字スペースを挿入して改行を保持する
                echo str_replace("\n", '</span><span class="is-space"></span><span>', nl2br($custom_field_value));
                ?>
                </p>

                
            </div>
        </div>
        <div class="p-about-profile__dataWrap">
            <div class="p-about-profile__resultWrap">
                <div class="p-about-profile__item p-about-profile__result">
                    <h4 class="p-about-profile__itemTitle"><span>経歴</span></h4>
                    <p class="p-about-profile__itemText"><?php the_field( '経歴' ); ?></p>
                </div>
                <div class="p-about-profile__item p-about-profile__career">
                    <h4 class="p-about-profile__itemTitle"><span>実績</span></h4>
                    <p class="p-about-profile__itemText"><?php the_field( '実績' ); ?></p>
                </div>
            </div>
            <div class="p-about-profile__statusWrap">
                <div class="p-about-profile__item p-about-profile__base">
                    <h4 class="p-about-profile__itemTitle"><span>拠点</span></h4>
                    <p class="p-about-profile__itemText"><?php the_field( '拠点' ); ?></p>
                </div>
                <div class="p-about-profile__item p-about-profile__age">
                    <h4 class="p-about-profile__itemTitle"><span>年齢</span></h4>
                    <p class="p-about-profile__itemText"><?php the_field( '年齢' ); ?></p>
                </div>
                <div class="p-about-profile__item p-about-profile__point">
                    <h4 class="p-about-profile__itemTitle"><span>長所</span></h4>
                    <p class="p-about-profile__itemText"><?php the_field( '長所' ); ?></p>
                </div>
                <div class="p-about-profile__item p-about-profile__hobby">
                    <h4 class="p-about-profile__itemTitle"><span>趣味</span></h4>
                    <p class="p-about-profile__itemText"><?php the_field( '趣味' ); ?></p>
                </div>
                <div class="p-about-profile__item p-about-profile__favorite">
                    <h4 class="p-about-profile__itemTitle"><span>好きなもの</span></h4>
                    <p class="p-about-profile__itemText"><?php the_field( '好きなもの' ); ?></p>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>