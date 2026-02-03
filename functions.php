<?php
  
if (is_file(__DIR__.'/vendor/autoload_packages.php')) {
    require_once __DIR__.'/vendor/autoload_packages.php';
}

function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(fn($manager) => $manager
            ->withCompiler(new TailPress\Framework\Assets\ViteCompiler, fn($compiler) => $compiler
                ->registerAsset('resources/css/app.css')
                ->registerAsset('resources/js/app.js')
                ->editorStyleFile('resources/css/editor-style.css')
            )
            ->enqueueAssets()
        )
        ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
        ->menus(fn($manager) => $manager->add('primary', __( 'Primary Menu', 'tailpress')))
        ->themeSupport(fn($manager) => $manager->add([
            'title-tag',
            'custom-logo',
            'post-thumbnails',
            'align-wide',
            'wp-block-styles',
            'responsive-embeds',
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        ]));
}

tailpress();

add_action('wp_enqueue_scripts', function () {
  // Noto Sans JP (Regular=400)
  wp_enqueue_style(
    'amt-font-noto-sans-jp',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap',
    [],
    null
  );
}, 20);

// ---------------------------------------------------------
// Bootstrapping: required categories (news / blog)
// ---------------------------------------------------------
add_action('after_setup_theme', function () {
  foreach (['news', 'blog'] as $slug) {
    if (!term_exists($slug, 'category')) {
      wp_insert_term(ucfirst($slug), 'category', ['slug' => $slug]);
    }
  }
});

// ---------------------------------------------------------
// Admin menu shortcuts: News / Blog filtered post lists
// ---------------------------------------------------------
add_action('admin_menu', function () {

  // News（newsカテゴリのみ）
  add_menu_page(
    'News',
    'ニュース',
    'edit_posts',
    'edit.php?post_type=post&category_name=news',
    '',
    'dashicons-megaphone',
    5
  );

  // Blog（newsカテゴリ以外）
  $news_cat_id = get_cat_ID('news');

  add_menu_page(
    'Blog',
    'ブログ',
    'edit_posts',
    'edit.php?post_type=post&cat=-' . $news_cat_id,
    '',
    'dashicons-welcome-write-blog',
    6
  );
});

/**
 * 検索結果から特定のカテゴリー(news)を除外する
 */
function amt_exclude_category_from_search($query) {
    if (!$query->is_admin && $query->is_search && $query->is_main_query()) {
        // 'news'カテゴリーのIDを取得
        $news_cat = get_category_by_slug('news');
        if ($news_cat) {
            // カテゴリーIDの前にマイナスを付けることで除外設定になります
            $query->set('cat', '-' . $news_cat->term_id);
        }
    }
    return $query;
}
add_filter('pre_get_posts', 'amt_exclude_category_from_search');