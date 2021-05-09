<?php
/**
 * 連載情報のリスト生成
 * 次の形で追加していく↓
 * "URL" => "TITLE",
 */
echo "<strong style='display:block;font-size:0.8em;font-weight:normal;margin-top:2em;padding-top:2em;border-top:1px solid #ccc;'>【連載】わだば新加坡でゴッドになる<!--(全30回)--></strong>";
$series_list = array(
  "https://tomonishintaku.com/blog/christianity-in-singapore_01_1708" => "深い興味と浅い導き",
  "https://tomonishintaku.com/blog/christianity-in-singapore_02_1708" => "えび煎餅が食べたい"/*,
  "https://tomonishintaku.com/blog/christianity-in-singapore_03_1708" => "●",
  "https://tomonishintaku.com/blog/christianity-in-singapore_04_1708" => "●",
  "https://tomonishintaku.com/blog/christianity-in-singapore_05_1708" => "●",
  "https://tomonishintaku.com/blog/christianity-in-singapore_06_1708" => "●",
  "https://tomonishintaku.com/blog/christianity-in-singapore_07_1708" => "●",
  "https://tomonishintaku.com/blog/christianity-in-singapore_08_1708" => "●",
  "https://tomonishintaku.com/blog/christianity-in-singapore_09_1708" => "●",
  "https://tomonishintaku.com/blog/christianity-in-singapore_10_1708" => "●",

 ,*/
);

# 現在表示しているページのURL
$current_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") .
               $_SERVER["HTTP_HOST"] .
               $_SERVER["REQUEST_URI"];
# リストのHTML生成
$ret_list = "<ol class='series_list'>" . "\n";

foreach ($series_list as $key => $value) {
  # 現在表示ているページはリンクを貼らずに、右に本記事を表す文字を追記する
  if ($current_url === $key) {
    $ret_list .= "<li style='font-weight:bold;color:#999;'>" . $value . "</li>" . "\n";
  } else {
    $ret_list .= "<li><a href='" . $key . "'>" . $value . "</a></li>" . "\n";
  }
}

$ret_list .= "</ol>\n";

# echo
echo $ret_list;