
<?php 
$args = Array(
    'post_type' => 'items',      // 投稿「post」固定「page」カスタム投稿「名前」
    'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
    'tax_query' => array(
        array(
          'taxonomy' => 'genre', // タクソノミーの名前を指定
          'field' => 'slug', // タームをスラッグで指定
          'terms' => array('coder') // タクソノミーのスラッグを指定
        )
    ),
    'posts_per_page' => -1,     // 表示する投稿数(-1を指定すると全投稿を表示)
    'orderby' => 'meta_value_num',  // カスタムフィールドの値順設定
    'meta_key' => '順番',       //フィールド名を指定 
    'order' => 'ASC'           // ソートの並び順を指定'DESC' 降順、'ASC' 昇順
);
?>

<?php $skill = new WP_Query($args); ?>
<?php if ($skill->have_posts()) : ?>
    <?php while($skill->have_posts()) : ?>
    <?php $skill->the_post(); ?>
    
        <?php if(get_field( '表示' )): ?>
        <div class="p-introduction__item--about">
            <a href="<?php the_field( 'ポートフォリオurl' ); ?>" target="_blank">
                <p class="p-introduction__itemImg"><?php the_post_thumbnail(); ?></p>
                <h4 class="p-introduction__itemName p-introduction__itemName--about""><?php the_title(); ?></h4>
            </a>
        </div>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>