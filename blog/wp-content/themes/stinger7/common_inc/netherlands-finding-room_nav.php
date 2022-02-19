<?php
/**
 * 連載情報のリスト生成
 * 次の形で追加していく↓
 * "URL" => "TITLE",
 */
echo "<strong style='display:block;font-weight:normal;margin-top:2em;padding-top:2em;border-top:1px solid #ccc;'>オランダで家を探して見つけるまでの話 全5+1回</strong>";
$series_list = array(
  "https://tomonishintaku.com/blog/story-renting-house-in-netherlands-1" => "オランダで家を探して見つけるまでの話(1)",
  "https://tomonishintaku.com/blog/story-renting-house-in-netherlands-2" => "オランダで家を探して見つけるまでの話(2)",
  "https://tomonishintaku.com/blog/story-renting-house-in-netherlands-3" => "オランダで家を探して見つけるまでの話(3)",
  "https://tomonishintaku.com/blog/story-renting-house-in-netherlands-4" => "オランダで家を探して見つけるまでの話(4)",
  "https://tomonishintaku.com/blog/story-renting-house-in-netherlands-5" => "オランダで家を探して見つけるまでの話(5)",
  "https://tomonishintaku.com/blog/story-renting-house-in-netherlands-6" => "オランダで家を探して見つけるまでの話(番外編)",
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