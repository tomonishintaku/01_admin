<?php
/**
 * 連載情報のリスト生成
 * 次の形で追加していく↓
 * "URL" => "TITLE",
 */
echo "<strong style='display:block;font-weight:normal;margin-top:2em;'>シリーズ連載「コロナかもしれない人々は」</strong>";
$series_list = array(
  "https://tomonishintaku.com/blog/people-who-maybe-coronavirus_1" => "地元には帰れない",
  "https://tomonishintaku.com/blog/people-who-maybe-coronavirus_2" => "自力でレンタカーor自腹でホテル",
"https://tomonishintaku.com/blog/people-who-maybe-coronavirus_3" => "海外帰国者、コロナの疑いにつき",
"https://tomonishintaku.com/blog/people-who-maybe-coronavirus_4" => "真剣！体験！唾液しぼり",
"https://tomonishintaku.com/blog/people-who-maybe-coronavirus_5" => "コロナ容疑者、釈放される",

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