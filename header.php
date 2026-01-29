<?php
/**
 * Header (Router)
 * - ページに応じて template-parts 内のヘッダーファイルを読み分けます。
 * - 各パーツファイル側で <!doctype html> から記述しているため、ここはPHPのみです。
 */

if ( is_front_page() ) {
    // トップページ用 (template-parts/header-home.php)
    get_template_part('template-parts/header', 'home');
} else {
    // 下層ページ用 (template-parts/header-default.php)
    get_template_part('template-parts/header', 'default');
}