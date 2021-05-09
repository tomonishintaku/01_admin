<?php


/* 【管理画面】管理画面にもファビコンを表示 */
function admin_favicon() {
 echo '<link rel="shortcut icon" type="image/x-icon" href="/blog/wp-content/themes/stinger7/images/favicon-blog-JP.ico" />';
}
add_action('admin_head', 'admin_favicon');

// USE php code on the widget
function widget_text_exec_php( $widget_text ) {
    if( strpos( $widget_text, '<' . '?' ) !== false ) {
        ob_start();
        eval( '?>' . $widget_text );
$widget_text = ob_get_contents();
ob_end_clean();
}
return $widget_text;
}
add_filter( 'widget_text', 'widget_text_exec_php', 99 );



/*連載用_series*/
function short_php($params = array()) {
  extract(shortcode_atts(array(
    'file' => 'default'
  ), $params));
  ob_start();
  include(get_theme_root() . '/' . get_template() . "/common_inc/$file.php");
  return ob_get_clean();
}
add_shortcode('myphp1', 'short_php');

//管理画面のタイトルを変更する

/*
add_filter('admin_title', 'my_admin_title', 10, 2);
function my_admin_title($admin_title, $title)
{
 //   return $title .' &lsaquo; ' . _;
}
//管理画面から上部固定バー左上のブログタイトル、右上の管理者アイコン表示を削除
function remove_wp_nodes()
{
    global $wp_admin_bar;
        $wp_admin_bar->remove_node( 'site-name' ); // site-name
        $wp_admin_bar->remove_node( 'my-account' ); // site-name
}
add_action( 'admin_bar_menu', 'remove_wp_nodes', 999 );
*/

?>


