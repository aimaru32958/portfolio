
<?php 
$args = Array(
    'post_type' => 'update',      // 投稿「post」固定「page」カスタム投稿「名前」
    'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
    'tax_query' => array(
        array(
          'taxonomy' => 'page-update', // タクソノミーの名前を指定
          'field' => 'slug', // タームをスラッグで指定
          'terms' => array('service') // タクソノミーのスラッグを指定
        )
    ),
    'posts_per_page' => 1,     // 表示する投稿数(-1を指定すると全投稿を表示)
    'post_not_in' => array($post->ID),  // 表示中の投稿を除外
    'orderby' => 'date',  // ソートする基準となる項目を指定(デフォルトは最新順)
    'order' => 'DESC'           // ソートの並び順を指定'DESC' 降順、'ASC' 昇順
);
?>

<?php $service = new WP_Query($args); ?>
<?php if ($service->have_posts()) : ?>
    <?php while($service->have_posts()) : ?>
    <?php $service->the_post(); ?>

        <p class="p-service-quotation__text"><?php the_field( '見積り留意テキスト' ); ?></p>

    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>