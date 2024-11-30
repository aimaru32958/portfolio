
    <footer class="l-footer u-change">
        <div class="l-innner l-footer__inner">
            <div class="l-footer__content">
                <div class="l-footer__titleWrap">
                    <div class="l-footer__logo">
                        <a href="<?php echo home_url();?>">
                            <img class="u-front" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="Aimaru's Portfolio">
                            <img class="u-back" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-white.png" alt="Aimaru's Portfolio">
                        </a>
                    </div>
                    <div class="l-footer__twitter">
                        <a href="https://twitter.com/aimaru0508" target="_blank">
                            <img class="u-front"  src="<?php echo get_template_directory_uri(); ?>/assets/img/common/x.svg" alt="">
                            <img class="u-back"  src="<?php echo get_template_directory_uri(); ?>/assets/img/common/x-blue.svg" alt="">
                         </a>
                    </div>
                </div>
                <nav class="l-footer__menu">
                    
                    <?php 
                        wp_nav_menu(
                            array(
                                'depth' => 2,  // 階層の指定
                                'theme_location' => 'footer',  // グローバルメニューをここに表示すると指定
                                'container' => '',     // ul をラップするかどうか、および何でラップするか.
                                'menu_class' => 'l-footer__nav' ,  // メニューを形成する ul 要素に使用する CSS クラス
                                'menu_id' => 'footer-nav'   // メニューを形成する ul 要素に使用する id クラス
                            )			
                        );
                    ?>
                </nav>

            </div>           
            
            <!-- 本音の扉 -->
            <?php if ( is_front_page()) : ?>
                <div class="l-footer__door" id="js-honne"></div>
                <!-- 開門中表示 -->
                <div class="l-footer__doorItem u-back">
                    <div class="l-footer__doorItemImg"></div>
                    <p class="l-footer__doorItemText"><span>【 本音の扉 】</span>開門中</p>
                </div>
            <?php endif; ?>
                
        </div>
        <p class="l-footer__copyright u-change">copyright&copy;Aimaru’s Portfolio</p>
     </footer>
        
        <!-- トップへ -->
        <a class="p-to-top" id="js-to-top" href="#"></a> 
        
        <!-- 本音の扉ダイアログ -->
        <div class="l-footer__doorDialog" id="js-dialog">
            <div class="l-footer__dialogContent">
                <p id="js-text">本当に<span>【 本音の扉 】</span>を開きますか？</p>
                <div class="l-footer__dialogWrap">
                    <button id="yes">はい</button>
                    <button id="no">いいえ</button>
                </div>
            </div>
        </div>

        
        
    <?php wp_footer(); ?>
    
</body>
</html>