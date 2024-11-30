


<?php if (have_posts()) : ?>
    <?php while(have_posts()) : ?>
        <?php the_post(); ?>
            <div class="p-work__item p-work__item--archive">
                <div class="p-work__imgWrap">
                    <div class="p-work__img">
                        <?php the_post_thumbnail(); ?>
                        <a href="<?php the_permalink(); ?>" class="p-work__workLink">詳細を見る</a>
                        <a href="<?php the_field( 'url' ); ?>" class="p-work__archiveLink is-pc"  target="_blank">サイトを見る</a>
                    </div>
                </div>
                <a href="<?php the_permalink(); ?>">
                    <h2 class="p-work__itemTitle"><?php the_title(); ?></h2>
                    <div class="p-work__contentWrap">
                        <p class="p-work__time">制作期間：<?php the_field( '制作期間' ); ?></p>
                        <p class="p-work__day">制作日：<?php the_field( '制作日' ); ?></p>
                        <p class="p-work__skill">
                            
                            <?php $terms = get_the_terms(get_the_ID(),'skill'); ?> 
                            <?php if($terms): ?>
                            <?php 
                            $term_order = array(); // タームの順序を格納する配列
                            foreach ($terms as $term) {
                                $order = get_term_meta($term->term_id, '順番', true); // カスタムフィールド '順番' から順序を取得
                                $term_order[$term->term_id] = $order ; // idと'順番'で連想配列を作成
                            }
                            asort($term_order); // 順序に基づいてタームをソート
                            foreach ($term_order as $term_id => $order) {
                                $term = get_term($term_id, 'skill'); // タームの情報を取得
                                if($order == 1) {
                                    echo $term->name ;
                                } else {
                                    echo " / " . $term->name ;
                                }
                            }
                            ?>
                            <?php endif; ?>
                        </p>
                        <?php $id = get_field('ユーザーid'); ?>
                        <?php if( $id != "" ): ?>
                            <p class="p-work__idPass">ID・パスワード：<?php the_field( 'ユーザーid' ); ?></p>
                        <?php endif; ?>
                    </div>
                </a>
            </div>
    <?php endwhile; ?>	
<?php endif; ?>	