<?php
/**
 * Header (Home)
 * - PCビュー: WORKSドロップダウン修正版
 * - 修正: マウス移動時に消えないよう、判定エリアを拡大し「隙間」を完全になくしました
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
          // 共通クラス
          $nav_base_class = "!no-underline transition-colors duration-300 text-white group-[.is-scrolled]:text-gray-500 relative py-2 group/link";
          
          // 下線アニメーション用span
          $underline_span = '<span class="absolute bottom-0 left-0 h-[1px] w-0 bg-current transition-all duration-300 group-hover/link:w-full"></span>';
        ?>

        <div class="relative group/works h-full flex items-center">
            
            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="<?php echo $nav_base_class; ?> z-20">
                WORKS
                <span class="absolute bottom-0 left-0 h-[1px] w-0 bg-current transition-all duration-300 group-hover/link:w-full group-hover/works:w-full"></span>
            </a>

            <div class="absolute top-8 left-1/2 -translate-x-1/2 pt-12 w-48 flex flex-col gap-2 invisible opacity-0 translate-y-2 group-hover/works:visible group-hover/works:opacity-100 group-hover/works:translate-y-0 transition-all duration-300 ease-out pointer-events-none group-hover/works:pointer-events-auto z-10">
                
                <a href="<?php echo esc_url(home_url('/works/website/')); ?>" class="!no-underline block bg-gray-600/90 hover:bg-gray-500 text-white text-xs font-noto font-normal text-center py-3 tracking-widest rounded-sm transition-colors shadow-lg backdrop-blur-sm">
                    ホームページ制作
                </a>

                <a href="<?php echo esc_url(home_url('/works/graphic/')); ?>" class="!no-underline block bg-gray-600/90 hover:bg-gray-500 text-white text-xs font-noto font-normal text-center py-3 tracking-widest rounded-sm transition-colors shadow-lg backdrop-blur-sm">
                    印刷・グラフィック
                </a>

                <a href="<?php echo esc_url(home_url('/works/movie/')); ?>" class="!no-underline block bg-gray-600/90 hover:bg-gray-500 text-white text-xs font-noto font-normal text-center py-3 tracking-widest rounded-sm transition-colors shadow-lg backdrop-blur-sm">
                    映像・動画制作
                </a>

            </div>
        </div>

        <a href="<?php echo esc_url(home_url('/service/')); ?>" class="<?php echo $nav_base_class; ?>">
            SERVICE
            <?php echo $underline_span; ?>
        </a>
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="<?php echo $nav_base_class; ?>">
            BLOG
            <?php echo $underline_span; ?>
        </a>
        <a href="<?php echo esc_url(home_url('/company/')); ?>" class="<?php echo $nav_base_class; ?>">
            COMPANY
            <?php echo $underline_span; ?>
        </a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="<?php echo $nav_base_class; ?>">
            CONTACT
            <?php echo $underline_span; ?>
        </a>
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
            <a href="<?php echo esc_url(home_url('/works/website/')); ?>" class="!no-underline flex items-center gap-2 hover:text-gray-300">
              <span class="text-xs">&gt;</span> ホームページ制作・運用支援
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/works/graphic/')); ?>" class="!no-underline flex items-center gap-2 hover:text-gray-300">
              <span class="text-xs">&gt;</span> 印刷・グラフィック制作
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/works/movie/')); ?>" class="!no-underline flex items-center gap-2 hover:text-gray-300">
              <span class="text-xs">&gt;</span> 映像・動画制作
            </a>
          </li>
        </ul>
      </div>

      <div class="border-b border-gray-700 pb-4">
        <a href="<?php echo esc_url(home_url('/service/')); ?>" class="!no-underline block w-full text-sm hover:text-gray-300 flex items-center gap-2">
          <span class="text-xs">&gt;</span> サービス（デザインサブスク）
        </a>
      </div>

      <div class="border-b border-gray-700 pb-4">
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="!no-underline block w-full font-outfit font-bold tracking-widest hover:text-gray-300 flex items-center gap-2">
          <span class="text-xs font-noto font-normal">&gt;</span> BLOG
        </a>
      </div>

      <div class="border-b border-gray-700 pb-4">
        <a href="<?php echo esc_url(home_url('/company/')); ?>" class="!no-underline block w-full text-sm hover:text-gray-300 flex items-center gap-2">
          <span class="text-xs">&gt;</span> 会社案内
        </a>
      </div>

      <div class="border-b border-gray-700 pb-4">
        <a href="https://en-gage.net/amt_design/" target="_blank" class="!no-underline block w-full text-sm hover:text-gray-300 flex items-center gap-2">
          <span class="text-xs">&gt;</span> 採用情報
        </a>
      </div>

    </nav>

    <div class="mt-12">
      <div class="flex justify-end gap-6 mb-8">
         <a href="https://x.com/amt_web" target="_blank" class="block"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-x-white.png" alt="X" class="w-8 h-8"></a>
         <a href="https://www.instagram.com/amt_web/" target="_blank" class="block"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-instagram-white.png" alt="IG" class="w-8 h-8"></a>
      </div>

      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="!no-underline block w-full border border-white rounded-full py-3 text-center text-sm hover:bg-white hover:text-black transition-colors flex items-center justify-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
        </svg>
        お問い合わせ
      </a>
    </div>

  </div>
</div>
</html>