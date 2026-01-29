window.addEventListener('load', function () {
    let mainNavigation = document.getElementById('primary-navigation')
    let mainNavigationToggle = document.getElementById('primary-menu-toggle')

    if(mainNavigation && mainNavigationToggle) {
        mainNavigationToggle.addEventListener('click', function (e) {
            e.preventDefault()
            mainNavigation.classList.toggle('hidden')
        })
    }
})

document.addEventListener('DOMContentLoaded', () => {
  const header = document.getElementById('site-header');
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu-overlay');
  
  // ロゴのラッパー要素（透明度を制御するため）
  // ※ header-home.php の構造に合わせて取得
  const logoWrapper = header.querySelector('a[href*="home_url"]') || header.querySelector('div a'); 

  // ハンバーガーの3本線 (クラス名で取得)
  const bar1 = menuToggle.querySelector('.menu-bar-1');
  const bar2 = menuToggle.querySelector('.menu-bar-2');
  const bar3 = menuToggle.querySelector('.menu-bar-3');

  // スクロール検知関数
  function handleScroll() {
    const isOpen = mobileMenu.classList.contains('translate-x-0');
    
    // メニューが開いている時は、スクロール判定を無視して「透明背景＆白文字」を維持
    if (isOpen) {
      return;
    }

    // 通常時のスクロール処理
    if (window.scrollY > 50) {
      header.classList.add('is-scrolled', 'bg-white', 'shadow-md', 'group');
      header.classList.remove('bg-transparent', 'text-white');
    } else {
      header.classList.remove('is-scrolled', 'bg-white', 'shadow-md', 'group');
      header.classList.add('bg-transparent', 'text-white');
    }
  }

  // スクロールイベント
  window.addEventListener('scroll', handleScroll);

  // ハンバーガーメニュー開閉
  if (menuToggle) {
    menuToggle.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.contains('translate-x-0');

      if (isOpen) {
        // -----------------------
        // 閉じる処理
        // -----------------------
        mobileMenu.classList.remove('translate-x-0');
        mobileMenu.classList.add('translate-x-full');
        document.body.style.overflow = ''; 

        // アニメーション: 3本線に戻す
        // origin-left がある場合は戻す（またはクラス削除のまま）
        bar1.classList.remove('rotate-45', 'translate-y-[11px]', 'origin-center');
        bar1.classList.add('origin-left'); // 元に戻す
        
        bar2.classList.remove('opacity-0');
        
        bar3.classList.remove('-rotate-45', '-translate-y-[11px]', 'origin-center');
        bar3.classList.add('origin-left'); // 元に戻す
        
        // ロゴ: トップ位置なら隠す（スクロールしてない場合）
        if (window.scrollY <= 50 && logoWrapper) {
          logoWrapper.classList.remove('opacity-100', 'pointer-events-auto');
          // 元のクラス(opacity-0)が効くようになる
        }

        // ヘッダーの色をスクロール位置に合わせて即座に戻す
        if (window.scrollY > 50) {
          header.classList.add('is-scrolled', 'bg-white', 'shadow-md', 'group');
          header.classList.remove('bg-transparent', 'text-white');
        }

      } else {
        // -----------------------
        // 開く処理
        // -----------------------
        mobileMenu.classList.remove('translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        document.body.style.overflow = 'hidden';

        // アニメーション: バツにする
        // きれいなバツを作るため、origin-left を消して origin-center で回転させる
        bar1.classList.remove('origin-left');
        bar1.classList.add('rotate-45', 'translate-y-[11px]', 'origin-center'); 
        
        bar2.classList.add('opacity-0');
        
        bar3.classList.remove('origin-left');
        bar3.classList.add('-rotate-45', '-translate-y-[11px]', 'origin-center');

        // ロゴ: 強制表示 (黒背景の上なので)
        if (logoWrapper) {
          logoWrapper.classList.remove('opacity-0', 'pointer-events-none');
          logoWrapper.classList.add('opacity-100', 'pointer-events-auto');
        }

        // ヘッダー: 透明背景・白文字に強制
        header.classList.remove('bg-white', 'shadow-md', 'is-scrolled');
        header.classList.add('bg-transparent', 'text-white');
      }
    });
  }
});