<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- function設定でWordpressで設定可能にしているので不要 <title>Document</title><meta name="description">-->
    
    <!-- my -->
    <?php wp_head(); ?>

    <!-- font-family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>
<body>
    <header class="l-header header">
        <div class="l-header__inner">
            <?php if ( is_front_page() ) : ?>
                <h1 class="l-header__logo">
                    <a href="<?php echo home_url();?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="Aimaru's Portfolio">
                    </a>
                </h1>
            <?php else: ?>
                <div class="l-header__logo" >
                    <a href="<?php echo home_url();?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="Aimaru's Portfolio">
                    </a>
                </div>
            <?php endif; ?>

            <nav class="l-header__menu">
                
                <?php 
                    wp_nav_menu(
                        array(
                            'depth' => 2,  // 階層の指定
                            'theme_location' => 'global',  // グローバルメニューをここに表示すると指定
                            'container' => '',     // ul をラップするかどうか、および何でラップするか.
                            'menu_class' => 'l-header__nav' ,  // メニューを形成する ul 要素に使用する CSS クラス
                            'menu_id' => 'header-nav'   // メニューを形成する ul 要素に使用する id クラス
                        )			
                    );
                ?>
            </nav>
            
    
            <!-- drawer -->
            <div class="l-drawer">
                <div class="l-drawer__icon">
                    <div class="l-drawer__bar l-drawer__bar1"></div>
                    <div class="l-drawer__bar l-drawer__bar2"></div>
                    <div class="l-drawer__bar l-drawer__bar3"></div>
                </div>
            </div>
    
        </div>
    </header>


    