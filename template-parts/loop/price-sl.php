
<?php 
$args = Array(
    'post_type' => 'items',      // 投稿「post」固定「page」カスタム投稿「名前」
    'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
    'tax_query' => array(
        array(
          'taxonomy' => 'genre', // タクソノミーの名前を指定
          'field' => 'slug', // タームをスラッグで指定
          'terms' => array('price') // タクソノミーのスラッグを指定
        )
    ),
    'posts_per_page' => -1,     // 表示する投稿数(-1を指定すると全投稿を表示)
    'orderby' => 'meta_value_num',  // カスタムフィールドの値順設定
    'meta_key' => '順番',       //フィールド名を指定 
    'order' => 'ASC'           // ソートの並び順を指定'DESC' 降順、'ASC' 昇順
);
?>

<?php $price = new WP_Query($args); ?>
<?php if ($price->have_posts()) : ?>
    <?php while($price->have_posts()) : ?>
    <?php $price->the_post(); ?>
    
        <?php if(get_field( '表示' )): ?>
        <div class="p-price__item">
            <h4 class="p-price__itemTitle"><?php the_title(); ?></h4>
            <p class="p-price__itemPrice u-front">
                <?php 
                echo number_format(get_field( '金額' )) . "円" ;
                ?>
            </p>
            <p class="p-price__itemPrice u-back">
                <?php 
                echo get_field( '希望金額' ) ;
                ?>
            </p>
        </div>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>