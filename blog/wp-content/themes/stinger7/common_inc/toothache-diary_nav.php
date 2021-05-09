<?php
/**
 * 連載情報のリスト生成
 * 次の形で追加していく↓
 * "URL" => "TITLE",
 */
echo "<strong style='display:block;font-weight:normal;margin-top:2em;padding-top:2em;border-top:1px solid #ccc;'>【実録ドキュメント】歯痛悶絶日記(全4回)</strong>";
$series_list = array(
  "https://tomonishintaku.com/blog/toothache-diary-1" => "歯痛悶絶日記（1）〜ヤブ医者の診断は拙速を極めて",
  "https://tomonishintaku.com/blog/toothache-diary-2" => "歯痛悶絶日記（2）〜切った張ったの歯医者さん",
  "https://tomonishintaku.com/blog/toothache-diary-3" => "歯痛悶絶日記（3）〜義理人情忘れセカンドオピニオン",
  "https://tomonishintaku.com/blog/toothache-diary-4" => "歯痛悶絶日記（4）〜名医と歯痛はかく語りき",

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