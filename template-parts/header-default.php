<?php
/**
 * Header (Default)
 * - 下層ページ用（白背景 / グレー文字 / ロゴ常時表示）
 * - <!doctype html> から始まる完全な構造
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K94Z838');</script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K94Z838"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<header id="site-header" class="fixed left-0 top-0 z-50 w-full bg-white shadow-md text-gray-500 group">
  <div class="mx-auto w-full max-w-[1440px] px-6 lg:px-10">
    <div class="flex h-20 items-center justify-between">

      <div class="flex-shrink-0 w-auto min-w-[120px]">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="block hover:opacity-80 transition-opacity">
          <img 
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/logo.svg" 
            alt="AMT" 
            class="h-10 w-auto invert grayscale contrast-10" 
          > 
        </a>
      </div>

      <nav class="hidden lg:flex items-center gap-x-12 font-outfit text-sm font-bold tracking-[0.2em]">
        <?php
          // 共通クラス: グレー文字ベース
          $nav_base_class = "!no-underline transition-colors duration-300 text-gray-500 hover:text-gray-800 relative py-2 group/link";
          $underline_span = '<span class="absolute bottom-0 left-0 h-[1px] w-0 bg-gray-800 transition-all duration-300 group-hover/link:w-full"></span>';
        ?>

        <div class="relative group/works h-full flex items-center">
            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="<?php echo $nav_base_class; ?> z-20">
                WORKS
                <span class="absolute bottom-0 left-0 h-[1px] w-0 bg-gray-800 transition-all duration-300 group-hover/link:w-full group-hover/works:w-full"></span>
            </a>
            <div class="absolute top-8 left-1/2 -translate-x-1/2 pt-12 w-48 flex flex-col gap-2 invisible opacity-0 translate-y-2 group-hover/works:visible group-hover/works:opacity-100 group-hover/works:translate-y-0 transition-all duration-300 ease-out pointer-events-none group-hover/works:pointer-events-auto z-10">
                <a href="<?php echo esc_url(home_url('/works/website/')); ?>" class="!no-underline block bg-white border border-gray-100 hover:bg-gray-50 text-gray-600 text-xs font-noto font-normal text-center py-3 tracking-widest rounded-sm transition-colors shadow-lg">
                    ホームページ制作
                </a>
                <a href="<?php echo esc_url(home_url('/works/graphic/')); ?>" class="!no-underline block bg-white border border-gray-100 hover:bg-gray-50 text-gray-600 text-xs font-noto font-normal text-center py-3 tracking-widest rounded-sm transition-colors shadow-lg">
                    印刷・グラフィック
                </a>
                <a href="<?php echo esc_url(home_url('/works/movie/')); ?>" class="!no-underline block bg-white border border-gray-100 hover:bg-gray-50 text-gray-600 text-xs font-noto font-normal text-center py-3 tracking-widest rounded-sm transition-colors shadow-lg">
                    映像・動画制作
                </a>
            </div>
        </div>

        <?php /*<a href="<?php echo esc_url(home_url('/service/')); ?>" class="<?php echo $nav_base_class; ?>">SERVICE<?php echo $underline_span; ?></a>*/ ?>
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="<?php echo $nav_base_class; ?>">BLOG<?php echo $underline_span; ?></a>
        <a href="<?php echo esc_url(home_url('/company/')); ?>" class="<?php echo $nav_base_class; ?>">COMPANY<?php echo $underline_span; ?></a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="<?php echo $nav_base_class; ?>">CONTACT<?php echo $underline_span; ?></a>
      </nav>
  
      <div class="flex items-center gap-6">
        <div class="hidden lg:flex items-center gap-4">
              <a href="https://x.com/amt_web" target="_blank" class="text-gray-600 hover:text-gray-400 transition-colors">
                  <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.045 4.126H5.078z"/>
                  </svg>
              </a>
              <a href="https://www.instagram.com/amt_web/" target="_blank" class="text-gray-600 hover:text-gray-400 transition-colors">
                <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.266.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
              </a>
        </div>

        <button id="menu-toggle" class="lg:hidden relative z-[60] w-8 h-6 flex flex-col justify-between focus:outline-none">
          <span class="block w-full h-[2px] bg-gray-600 transition-all duration-300 menu-bar-1 origin-center"></span>
          <span class="block w-full h-[2px] bg-gray-600 transition-all duration-300 menu-bar-2"></span>
          <span class="block w-full h-[2px] bg-gray-600 transition-all duration-300 menu-bar-3 origin-center"></span>
        </button>
      </div>
    </div>
  </div>
</header>

<div id="mobile-menu-overlay" class="fixed inset-0 z-[45] bg-black text-white transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden flex flex-col pt-24">
    <div class="flex-1 overflow-y-auto px-16 py-10 relative">
        <nav class="space-y-6 font-noto">
            <div class="border-b border-t border-white pb-4 pt-4">
                <p class="mb-4 text-lg font-bold">業務内容</p>
                <ul class="space-y-4 pl-4 text-sm font-light">
                    <li><a href="<?php echo esc_url(home_url('/works/website/')); ?>" class="!no-underline flex items-center gap-2 hover:text-gray-300"><span class="text-sm">&gt;</span> ホームページ制作・運用支援</a></li>
                    <li><a href="<?php echo esc_url(home_url('/works/graphic/')); ?>" class="!no-underline flex items-center gap-2 hover:text-gray-300"><span class="text-sm">&gt;</span> 印刷・グラフィック制作</a></li>
                    <li><a href="<?php echo esc_url(home_url('/works/movie/')); ?>" class="!no-underline flex items-center gap-2 hover:text-gray-300"><span class="text-sm">&gt;</span> 映像・動画制作</a></li>
                </ul>
            </div>
            <?php /*
            <div class="border-b border-gray-700 pb-4">
                <a href="<?php echo esc_url(home_url('/service/')); ?>" class="!no-underline block w-full text-sm hover:text-gray-300 flex items-center gap-2"><span class="text-xs">&gt;</span> サービス（デザインサブスク）</a>
            </div>
            */ ?>
            <div class="border-b border-white pb-4">
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="!no-underline block w-full text-lg font-outfit font-bold tracking-widest hover:text-gray-300 flex items-center gap-2">BLOG</a>
            </div>
            <div class="border-b border-white pb-4">
                <a href="<?php echo esc_url(home_url('/company/')); ?>" class="!no-underline block w-full text-lg hover:text-gray-300 flex items-center gap-2">会社案内</a>
            </div>
            <div class="border-b border-white pb-4">
                <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="!no-underline block w-full text-lg hover:text-gray-300 flex items-center gap-2">採用情報</a>
            </div>
        </nav>
        <div class="mt-12">
            <div class="flex justify-end gap-6 mb-8">
              <a href="https://x.com/amt_web" target="_blank" class="text-white hover:text-gray-600 transition-colors">
                  <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.045 4.126H5.078z"/>
                  </svg>
              </a>
              <a href="https://www.instagram.com/amt_web/" target="_blank" class="text-white hover:text-gray-600 transition-colors">
                <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.266.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
              </a>
            </div>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="!no-underline block w-full border border-white rounded-full py-3 text-center text-sm hover:bg-white hover:text-black transition-colors flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" /></svg>
                お問い合わせ
            </a>
        </div>
    </div>
</div>