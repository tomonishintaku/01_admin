<?php

//cusom post for VOICE BLOG
//add cusom post
add_action( 'init', 'create_post_type_voice' );
function create_post_type_voice() {
    register_post_type( 'voice', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => '音声ブログ', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'voice',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => true, // アーカイブ機能ON/OFF
        'menu_position' => 5,     // 管理画面上での配置場所
        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
        'supports' => array( 'title', 'custom-fields', 'comments', 'revisions') // control what elements display

// 'supports' option is here
// 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky'

    ]);
}

//cusom post for Books　================================
//add cusom post
add_action( 'init', 'create_post_type_books' );
function create_post_type_books() {
    register_post_type( 'books', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => '読書記録', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'books',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => true, // アーカイブ機能ON/OFF
        'menu_position' => 6,     // 管理画面上での配置場所
        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
        'supports' => array( 'title', 'thumbnail', 'editor', 'custom-fields', 'comments', 'revisions') // control what elements display

    ]);
}

//cusom post for Bento Recipe　================================
//add cusom post
add_action( 'init', 'create_post_type_bento' );
function create_post_type_bento() {
    register_post_type( 'bento', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => '弁当レシピ', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'bento',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => true, // アーカイブ機能ON/OFF
        'menu_position' => 7,     // 管理画面上での配置場所
        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
        'supports' => array( 'title', 'custom-fields', 'comments', 'revisions') // control what elements display

    ]);
}

// Add CATEGORY and TAG for custom post
add_action( 'init', function () {
    register_taxonomy( 'category', [ 'post', 'voice', 'books', 'bento' ],
        [
            'hierarchical' => true,
            'query_var'    => 'category_name',
        ]
    );
    register_taxonomy( 'post_tag', [ 'post', 'voice', 'books', 'bento' ],
        [
            'hierarchical' => false,
            'query_var'    => 'tag',
        ]
    );
} );

add_action( 'pre_get_posts', function ( $query ) {
    if ( is_admin() && ! $query->is_main_query() ) {
        return;
    }
    if ( $query->is_category() || $query->is_tag() ) {
        $query->set( 'post_type', [ 'post', 'voice', 'books', 'bento' ] );
    }
} );

function add_post_category_archive( $wp_query ) {
if ($wp_query->is_main_query() && $wp_query->is_category()) {
$wp_query->set( 'post_type', array('post', 'voice', 'books', 'bento'));
}
}
add_action( 'pre_get_posts', 'add_post_category_archive' , 10 , 1);


// Change Side bar's Icon
function my_dashboard_print_styles() {
    ?>
    <style>
    #dashboard_right_now .voice-count:before { content: "\f488"; }
    #adminmenu #menu-posts-voice div.wp-menu-image:before { content: "\f488"; }
    #dashboard_right_now .books-count:before { content: "\f330"; }
    #adminmenu #menu-posts-books div.wp-menu-image:before { content: "\f330"; }
    #dashboard_right_now .bento-count:before { content: "\f187"; }
    #adminmenu #menu-posts-bento div.wp-menu-image:before { content: "\f187"; }
    </style>
    <?php
    }
    add_action( 'admin_print_styles', 'my_dashboard_print_styles' );

?>