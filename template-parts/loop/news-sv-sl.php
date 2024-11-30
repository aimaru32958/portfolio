
<?php 
$args = Array(
    'post_type' => 'items',      // 投稿「post」固定「page」カスタム投稿「名前」
    'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
    'tax_query' => array(
        array(
          'taxonomy' => 'genre', // タクソノミーの名前を指定
          'field' => 'slug', // タームをスラッグで指定
          'terms' => array('news') // タクソノミーのスラッグを指定
        )
    ),
    'posts_per_page' => -1,     // 表示する投稿数(-1を指定すると全投稿を表示)
    'orderby' => 'date',  // 最新順
    'order' => 'DESC'           // ソートの並び順を指定'DESC' 降順、'ASC' 昇順
);
?>

<?php $news = new WP_Query($args); ?>
<?php if ($news->have_posts()) : ?>
    <?php while($news->have_posts()) : ?>
    <?php $news->the_post(); ?>

        <div class="p-service-news__itemWrap">
            <div class="p-service-news__item">
            
                <?php $date = get_the_time('Y/m/d'); ?>
                <?php $week = date('Y/m/d', strtotime('-7 days')); ?>
                <?php if($date > $week): ?>
                    <div class="p-service-news__new">NEW</div>
                <?php endif; ?>
                
                <time class="p-service-news__date" datetime="<?php the_time("c"); ?>">
                    <?php the_time("Y.m.d"); ?>
                </time>
                <p class="p-service-news__text"><?php the_title(); ?></p>
            </div>
        </div>
            
    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>