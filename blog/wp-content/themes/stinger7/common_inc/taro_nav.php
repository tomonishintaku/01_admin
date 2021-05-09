<?php
echo "<strong style='display:block;font-weight:normal;margin-top:2em;padding-top:2em;border-top:1px solid #ccc;'>岡本太郎現代芸術賞(TARO賞)についての関連記事</strong>";
$series_list = array(
  "https://tomonishintaku.com/blog/taroaward-rejection_2019" => "岡本太郎現代芸術賞落選者の遠吠え",
  "https://tomonishintaku.com/blog/taroaward-result-opinion_2019" => "第23回岡本太郎現代芸術賞の審査結果に対する意見書",
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