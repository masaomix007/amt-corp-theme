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
  
  // ロゴのラッパー要素（確実なセレクタに変更）
  const logoWrapper = header.querySelector('.flex-shrink-0 a'); 

  // ハンバーガーの3本線
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
        if (bar1.classList.contains('origin-center')) {
             bar1.classList.remove('rotate-45', 'translate-y-[11px]', 'origin-center');
             bar1.classList.add('origin-left');
             
             bar2.classList.remove('opacity-0');
             
             bar3.classList.remove('-rotate-45', '-translate-y-[11px]', 'origin-center');
             bar3.classList.add('origin-left');
        }

        // ★修正点：ロゴを初期状態（透明）に戻す
        // メニューを開く時に削除したクラス(opacity-0など)を付与し直し、追加したクラス(opacity-100)を削除します。
        // ※スクロール時(.is-scrolled)はCSS側で表示されるため、この処理が入っても問題ありません。
        if (logoWrapper) {
          logoWrapper.classList.remove('opacity-100', 'pointer-events-auto');
          logoWrapper.classList.add('opacity-0', 'pointer-events-none');
        }

        // ヘッダーの色をスクロール位置に合わせて即座に戻す
        if (window.scrollY > 50) {
          header.classList.add('is-scrolled', 'bg-white', 'shadow-md', 'group');
          header.classList.remove('bg-transparent', 'text-white');
        } else {
          // トップ位置なら透明に戻る（ロゴも上でopacity-0にしたので消える）
          header.classList.remove('is-scrolled', 'bg-white', 'shadow-md', 'group');
          header.classList.add('bg-transparent', 'text-white');
        }

      } else {
        // -----------------------
        // 開く処理
        // -----------------------
        mobileMenu.classList.remove('translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        document.body.style.overflow = 'hidden';

        // アニメーション: バツにする
        bar1.classList.remove('origin-left');
        bar1.classList.add('rotate-45', 'translate-y-[11px]', 'origin-center'); 
        
        bar2.classList.add('opacity-0');
        
        bar3.classList.remove('origin-left');
        bar3.classList.add('-rotate-45', '-translate-y-[11px]', 'origin-center');

        // ロゴ: 強制表示
        // 元の隠すクラス(opacity-0)を消して、表示クラス(opacity-100)をつける
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