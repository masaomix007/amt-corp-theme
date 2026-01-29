<?php
/**
 * Header (Home)
 * - 初期: 背景透明 / 文字白 / ロゴなし（透明で見えない）
 * - スクロール後: 背景白 / 文字グレー / ロゴ出現
 * - SPメニュー: z-45 (ヘッダーz-50の下に配置し、ボタンを押しやすくする)
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" class="fixed left-0 top-0 z-50 w-full transition-all duration-300 ease-in-out text-white bg-transparent group">
  <div class="mx-auto w-full max-w-[1440px] px-6 lg:px-10">
    <div class="flex h-20 items-center justify-between">

      <div class="flex-shrink-0 w-auto min-w-[120px]">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="block transition-all duration-300 opacity-0 group-[.is-scrolled]:opacity-100 group-[.is-scrolled]:pointer-events-auto pointer-events-none hover:opacity-80">
          <img 
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/logo.png" 
            alt="AMT" 
            class="h-10 w-auto"
          > 
        </a>
      </div>

      <nav class="hidden lg:flex items-center gap-x-12 font-outfit text-sm font-bold tracking-[0.2em]">
        <?php
          // 共通クラス定義
          $nav_link_class = "!no-underline transition-colors duration-300 hover:opacity-70 text-white group-[.is-scrolled]:text-gray-500";
        ?>
        <a href="#works"   class="<?php echo $nav_link_class; ?>">WORKS</a>
        <a href="#service" class="<?php echo $nav_link_class; ?>">SERVICE</a>
        <a href="#blog"    class="<?php echo $nav_link_class; ?>">BLOG</a>
        <a href="#company" class="<?php echo $nav_link_class; ?>">COMPANY</a>
        <a href="#contact" class="<?php echo $nav_link_class; ?>">CONTACT</a>
      </nav>
  
      <div class="flex items-center gap-6">
        
        <div class="hidden lg:flex items-center gap-4 transition-all duration-300 group-[.is-scrolled]:invert-[0.6]">
           <a href="https://x.com/amt_web" target="_blank" class="hover:opacity-70"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-x-white.png" alt="X" class="w-6 h-6 object-contain"></a>
           <a href="https://www.instagram.com/amt_web/" target="_blank" class="hover:opacity-70"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-instagram-white.png" alt="IG" class="w-6 h-6 object-contain"></a>
        </div>

        <button id="menu-toggle" class="lg:hidden relative z-[60] w-8 h-6 flex flex-col justify-between focus:outline-none">
          <span class="block w-full h-[2px] bg-white transition-all duration-300 group-[.is-scrolled]:bg-gray-600 menu-bar-1 origin-left"></span>
          <span class="block w-full h-[2px] bg-white transition-all duration-300 group-[.is-scrolled]:bg-gray-600 menu-bar-2"></span>
          <span class="block w-full h-[2px] bg-white transition-all duration-300 group-[.is-scrolled]:bg-gray-600 menu-bar-3 origin-left"></span>
        </button>

      </div>
    </div>
  </div>
</header>

<div id="mobile-menu-overlay" class="fixed inset-0 z-[45] bg-black text-white transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden flex flex-col pt-24">
  
  <div class="flex-1 overflow-y-auto px-8 py-10 relative">
    
    <nav class="space-y-6 font-noto">
      
      <div class="border-b border-gray-700 pb-4">
        <p class="mb-4 text-sm font-bold">業務内容</p>
        <ul class="space-y-4 pl-4 text-sm font-light">
          <li>
            <a href="#" class="!no-underline flex items-center gap-2 hover:text-gray-300">
              <span class="text-xs">&gt;</span> ホームページ制作・運用支援
            </a>
          </li>
          <li>
            <a href="#" class="!no-underline flex items-center gap-2 hover:text-gray-300">
              <span class="text-xs">&gt;</span> 印刷・グラフィック制作
            </a>
          </li>
          <li>
            <a href="#" class="!no-underline flex items-center gap-2 hover:text-gray-300">
              <span class="text-xs">&gt;</span> 映像・動画制作
            </a>
          </li>
        </ul>
      </div>

      <div class="border-b border-gray-700 pb-4">
        <a href="#service" class="!no-underline block w-full text-sm hover:text-gray-300 flex items-center gap-2">
          <span class="text-xs">&gt;</span> サービス（デザインサブスク）
        </a>
      </div>

      <div class="border-b border-gray-700 pb-4">
        <a href="#blog" class="!no-underline block w-full font-outfit font-bold tracking-widest hover:text-gray-300 flex items-center gap-2">
          <span class="text-xs font-noto font-normal">&gt;</span> BLOG
        </a>
      </div>

      <div class="border-b border-gray-700 pb-4">
        <a href="#company" class="!no-underline block w-full text-sm hover:text-gray-300 flex items-center gap-2">
          <span class="text-xs">&gt;</span> 会社案内
        </a>
      </div>

      <div class="border-b border-gray-700 pb-4">
        <a href="#" class="!no-underline block w-full text-sm hover:text-gray-300 flex items-center gap-2">
          <span class="text-xs">&gt;</span> 採用情報
        </a>
      </div>

    </nav>

    <div class="mt-12">
      <div class="flex justify-end gap-6 mb-8">
         <a href="https://x.com/amt_web" target="_blank" class="block"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-x-white.png" alt="X" class="w-8 h-8"></a>
         <a href="https://www.instagram.com/amt_web/" target="_blank" class="block"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-instagram-white.png" alt="IG" class="w-8 h-8"></a>
      </div>

      <a href="#contact" class="!no-underline block w-full border border-white rounded-full py-3 text-center text-sm hover:bg-white hover:text-black transition-colors flex items-center justify-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
        </svg>
        お問い合わせ
      </a>
    </div>

  </div>
</div>