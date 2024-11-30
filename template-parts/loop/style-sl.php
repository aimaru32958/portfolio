
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
    
    <div class="p-about-style__content p-about-style__content1">
        <div class="p-about-style__titleWrap p-about-style__titleWrap1">    
            <h3 class="p-about-style__itemTitle"><?php the_field( 'style-content【1】タイトル' ); ?></h3>
        </div>
        <p class="p-about-style__itemText"><?php the_field( 'style-content【1】テキスト' ); ?></p>
    </div>
    <div class="p-about-style__content p-about-style__content2">
        <div class="p-about-style__titleWrap p-about-style__titleWrap2">
            <h3 class="p-about-style__itemTitle"><?php the_field( 'style-content【2】タイトル' ); ?></h3>
        </div>    
        <p class="p-about-style__itemText"><?php the_field( 'style-content【2】テキスト' ); ?></p>
    </div>
    <div class="p-about-style__content p-about-style__content3">
        <div class="p-about-style__titleWrap p-about-style__titleWrap3">
            <h3 class="p-about-style__itemTitle"><?php the_field( 'style-content【3】タイトル' ); ?></h3>
        </div>
        <p class="p-about-style__itemText"><?php the_field( 'style-content【3】テキスト' ); ?></p>
    </div>

    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>