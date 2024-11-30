
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

<?php $quotation = new WP_Query($args); ?>
<?php if ($quotation->have_posts()) : ?>
    <?php while($quotation->have_posts()) : ?>
    <?php $quotation->the_post(); ?>
    
        <?php if(get_field( '表示' )): ?>
            <tr class="js-tr p-service-quotation__tr">
                <th><?php the_title(); ?></th>
                <th class="is-sp p-service-quotation__spTitle">数量</th> 
                <td class="js-count">
                    <select>
                        <?php if(get_field( '数量指定有' )):  ?>
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        <?php else: ?>
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                        <?php endif; ?>
                    </select>
                </td>
                <th class="is-sp p-service-quotation__spTitle">単価</th>
                <td>
                    <span class="js-price u-none"><?php the_field( '金額' ) ?></span>
                    <span>
                        <?php 
                            $price = get_field( '金額' );
                            echo number_format($price); 
                        ?>
                    </span>
                    円
                </td>
                <td class="js-total"></td>
            </tr>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>