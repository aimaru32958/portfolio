
<?php 
$args = Array(
    'post_type' => 'items',      // 投稿「post」固定「page」カスタム投稿「名前」
    'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
    'tax_query' => array(
        array(
          'taxonomy' => 'genre', // タクソノミーの名前を指定
          'field' => 'slug', // タームをスラッグで指定
          'terms' => array('skill') // タクソノミーのスラッグを指定
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
    
        <div class="p-frontPage-service__skiiItem u-change">
            <?php  $title =  get_the_title(); ?>
            <div class="p-frontPage-service__skillImg p-frontPage-service__skillImg<?php the_field( '順番' ); ?>"><?php get_template_part('template-parts/svg/' . $title . '-svg'); ?></div>
            <p class="p-frontPage-service__skillName"><?php the_title(); ?></p>
        </div>

    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>