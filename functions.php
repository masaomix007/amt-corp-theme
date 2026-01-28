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
