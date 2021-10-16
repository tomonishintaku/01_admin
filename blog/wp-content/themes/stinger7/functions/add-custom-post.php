<?php

//cusom post for VOICE BLOG
//add cusom post
add_action( 'init', 'create_post_type' );
function create_post_type() {
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

// Add CATEGORY and TAG for custom post
add_action( 'init', function () {
    register_taxonomy( 'post_tag', [ 'post', 'voice' ],
        [
            'hierarchical' => false,
            'query_var'    => 'tag',
        ]
    );
    register_taxonomy( 'category', [ 'post', 'voice' ],
        [
            'hierarchical' => true,
            'query_var'    => 'category_name',
        ]
    );
} );

add_action( 'pre_get_posts', function ( $query ) {
    if ( is_admin() && ! $query->is_main_query() ) {
        return;
    }
    if ( $query->is_category() || $query->is_tag() ) {
        $query->set( 'post_type', [ 'post', 'voice' ] );
    }
} );


//cusom post for Bento Recipe　
//add cusom post
add_action( 'init', 'create_post_type_2' );
function create_post_type_2() {
    register_post_type( 'bento', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => '弁当レシピ', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'bento',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => true, // アーカイブ機能ON/OFF
        'menu_position' => 6,     // 管理画面上での配置場所
        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
        'supports' => array( 'title', 'custom-fields', 'comments', 'revisions') // control what elements display

// 'supports' option is here
// 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky'


    ]);
}

// Add CATEGORY and TAG for custom post
add_action( 'init', function () {
    register_taxonomy( 'post_tag', [ 'post', 'bento' ],
        [
            'hierarchical' => false,
            'query_var'    => 'tag',
        ]
    );
    register_taxonomy( 'category', [ 'post', 'bento' ],
        [
            'hierarchical' => true,
            'query_var'    => 'category_name',
        ]
    );
} );

add_action( 'pre_get_posts', function ( $query ) {
    if ( is_admin() && ! $query->is_main_query() ) {
        return;
    }
    if ( $query->is_category() || $query->is_tag() ) {
        $query->set( 'post_type', [ 'post', 'bento' ] );
    }
} );




?>