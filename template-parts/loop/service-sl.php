
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

        <div class="p-frontPage-service__item u-change wow fadeInUp">
            <div class="p-frontPage-service__img"><?php get_template_part('template-parts/svg/service1-svg'); ?></div>
            <h3 class="p-frontPage-service__itemTitle"><?php the_field( 'service content【1】タイトル' ); ?></h3>
            <p class="p-frontPage-service__itemText"><?php the_field( 'service content【1】テキスト' ); ?></p>
        </div>
        <div class="p-frontPage-service__item u-change wow fadeInUp">
            <div class="p-frontPage-service__img"><?php get_template_part('template-parts/svg/service2-svg'); ?></div>
            <h3 class="p-frontPage-service__itemTitle"><?php the_field( 'service content【2】タイトル' ); ?></h3>
            <p class="p-frontPage-service__itemText"><?php the_field( 'service content【2】テキスト' ); ?></p>
        </div>
        <div class="p-frontPage-service__item u-change wow fadeInUp">
            <div class="p-frontPage-service__img"><?php get_template_part('template-parts/svg/service3-svg'); ?></div>
            <h3 class="p-frontPage-service__itemTitle"><?php the_field( 'service content【3】タイトル' ); ?></h3>
            <p class="p-frontPage-service__itemText"><?php the_field( 'service content【3】テキスト' ); ?></p>
        </div>

    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>