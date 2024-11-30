<?php 

// カスタマイズ設定
function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");


// css・jsの読み込み
function my_script_init() {
    wp_enqueue_style("my", get_template_directory_uri()."/assets/css/style.min.css", array(), filemtime(get_theme_file_path('assets/css/style.min.css')), "all");
    wp_enqueue_style("wow", get_template_directory_uri()."/assets/css/animate.css", array(), filemtime(get_theme_file_path('assets/css/animate.css')), "all");
    
    wp_enqueue_script("wow", get_template_directory_uri()."/assets/js/wow.min.js", array("jquery"), filemtime(get_theme_file_path('assets/js/wow.min.js')), true);
    wp_enqueue_script("my", get_template_directory_uri()."/assets/js/script.min.js", array("jquery"), filemtime(get_theme_file_path('assets/js/script.min.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");


// メニューの作成
function my_menu_init() {
    register_nav_menus(
        array(
            "global" => "ヘッダーメニュー",
            "drawer" => "ドロワーメニュー",
            "footer" => "フッターメニュー"
        )
    );
}
add_action( "init", "my_menu_init" );


// メニューの説明を表示する(2行にできる)
function prefix_nav_description($item_output, $item, $depth, $args) {
    if (!empty($item->description)) {
     $item_output = str_replace('">' . $args->link_before . $item->title, '">'. $item->title . '<br>' . '<span>' . $item->description . '</span>', $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'prefix_nav_description', 10, 4);


// // Breadcrumb NavXT 最終階層非表示 設定
// function foo_pop($trail) {
//     {
//         if ( is_single() ) {
//             array_shift($trail->trail);
//         }
//     }
// }
// add_action('bcn_after_fill', 'foo_pop');



?>

