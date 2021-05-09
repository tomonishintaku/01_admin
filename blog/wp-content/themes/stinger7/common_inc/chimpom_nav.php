<?php
/**
 * 連載情報のリスト生成
 * 次の形で追加していく↓
 * "URL" => "TITLE",
 */
echo "<strong style='display:block;font-weight:normal;margin-top:2em;padding-top:2em;border-top:1px solid #ccc;'>Chim↑Pom(チンポム)についての関連記事</strong>";
$series_list = array(
  "https://tomonishintaku.com/blog/essence-art-and-chimpom_2019" => "Chim↑Pom(チンポム)の本質はアートの本質",
  "https://tomonishintaku.com/blog/chimpom-controversy_2008" => "Chim↑Pom(チンポム)の是非-広島のピカッ",
  "http://tomonishintaku.com/blog/about-act-chimpom_2008" => "Chim↑Pom(チンポム)の行為について",
  "http://tomonishintaku.com/blog/about-act-chimpom-2_2008" => "Chim↑Pom(チンポム)の行為について(2)",
);

# 現在表示しているページのURL
$current_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") .
               $_SERVER["HTTP_HOST"] .
               $_SERVER["REQUEST_URI"];
# リストのHTML生成
$ret_list = "<ul class='series_list'>" . "\n";

foreach ($series_list as $key => $value) {
  # 現在表示ているページはリンクを貼らずに、右に本記事を表す文字を追記する
  if ($current_url === $key) {
    $ret_list .= "<li style='font-weight:bold;color:#999;padding-bottom: 0.7em;'>" . $value . "</li>" . "\n";
  } else {
    $ret_list .= "<li style='padding-bottom: 0.7em;'><a href='" . $key . "'>" . $value . "</a></li>" . "\n";
  }
}

$ret_list .= "</ul>\n";

# echo
echo $ret_list;