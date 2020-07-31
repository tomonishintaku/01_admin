<!-- Include common header from ja directory -->
<?php $header = file_get_contents('https://tomonishintaku.com/inc/header.php'); echo $header; ?>

<!-- road blog articles from WP-->
<div lang="en"><?php require_once dirname(__FILE__).'/../../en/blog/wp-load.php'; $page_id = 932; $content = get_page($page_id); echo $content->post_content; ?></div>
<!-- road blog articles from WP END-->
