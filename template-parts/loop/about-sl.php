

<?php 
$args = Array(
    'post_type' => 'update',      // 投稿「post」固定「page」カスタム投稿「名前」
    'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
    'tax_query' => array(
        array(
          'taxonomy' => 'page-update', // タクソノミーの名前を指定
          'field' => 'slug', // タームをスラッグで指定
          'terms' => array('top') // タクソノミーのスラッグを指定
        )
    ),
    'posts_per_page' => 1,     // 表示する投稿数(-1を指定すると全投稿を表示)
    'post_not_in' => array($post->ID),  // 表示中の投稿を除外
    'orderby' => 'date',  // ソートする基準となる項目を指定(デフォルトは最新順)
    'order' => 'DESC'           // ソートの並び順を指定'DESC' 降順、'ASC' 昇順
);
?>

<?php $top = new WP_Query($args); ?>
<?php if ($top->have_posts()) : ?>
    <?php while($top->have_posts()) : ?>
    <?php $top->the_post(); ?>
    
    <p class="p-frontPage-about__text u-space-underLine u-space-underLine--brown u-front">
        <?php
        // カスタムフィールドの値を取得
        $custom_field_value = '<span class="is-space"></span><span>' . get_field('あいまるのメッセージ') . "</span>";
        // 一字スペースを挿入して改行を保持する
        echo str_replace("\n", '</span><span class="is-space"></span><span>', nl2br($custom_field_value));
        ?>
    </p>
    <p class="p-frontPage-about__text u-space-underLine u-space-underLine--brown u-back">
        <?php
        // カスタムフィールドの値を取得
        $custom_field_value = '<span class="is-space"></span><span>' . get_field('あいまるのメッセージ【本音】') . "</span>";
        // 一字スペースを挿入して改行を保持する
        echo str_replace("\n", '</span><span class="is-space"></span><span>', nl2br($custom_field_value));
        ?>
    </p>

    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>