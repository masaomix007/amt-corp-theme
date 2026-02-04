// ▼▼▼ 以下は元のコードそのまま ▼▼▼

window.addEventListener('load', function () {
    let mainNavigation = document.getElementById('primary-navigation')
    // ... (中略) ...
})

document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('site-header');
    // ... (中略: ヘッダーやハンバーガーメニューの処理) ...
});

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

/* ▼▼▼ ここから追加（物理スティッキーヘッダー対応版） ▼▼▼ */
document.addEventListener('DOMContentLoaded', () => {
  // 要素の取得
  const headerHero = document.getElementById('header-hero');     // Home: 透明ヘッダー (fixed)
  const headerSticky = document.getElementById('sticky-header'); // Home: ニュース上ヘッダー (sticky)
  const mobileMenu = document.getElementById('mobile-menu-overlay');
  
  // メニューボタン (Hero用, Sticky用, 下層用すべて取得)
  const menuToggles = document.querySelectorAll('#menu-toggle, .menu-toggle-btn');

  // ------------------------------------------------
  // A. トップページ用：Heroヘッダー表示切替ロジック
  // ------------------------------------------------
  // 両方のヘッダーが存在する場合のみ実行（トップページ判定）
  if (headerHero && headerSticky) {
    window.addEventListener('scroll', () => {
      // メニューが開いている時は処理しない（表示崩れ防止）
      if (mobileMenu && mobileMenu.classList.contains('translate-x-0')) return;

      // Stickyヘッダーの位置を取得
      const rect = headerSticky.getBoundingClientRect();

      // rect.top が 0 以下 ＝ Stickyヘッダーが画面上部に到達して張り付いた状態
      if (rect.top <= 0) {
        // Heroヘッダーを消す (透明にしてクリック不可に)
        headerHero.classList.add('opacity-0', 'pointer-events-none');
      } else {
        // まだ張り付いていなければ Heroヘッダーを表示
        headerHero.classList.remove('opacity-0', 'pointer-events-none');
      }
    });
  }

  // ------------------------------------------------
  // B. ハンバーガーメニュー開閉ロジック (共通)
  // ------------------------------------------------
  if (menuToggles.length > 0 && mobileMenu) {
    
    // 全てのハンバーガーボタンにクリックイベントを設定
    menuToggles.forEach(toggle => {
      toggle.addEventListener('click', (e) => {
        e.preventDefault();
        toggleMenu();
      });
    });

    function toggleMenu() {
      const isOpen = mobileMenu.classList.contains('translate-x-0');

      if (isOpen) {
        // ▼▼▼ 閉じる処理 ▼▼▼
        mobileMenu.classList.remove('translate-x-0');
        mobileMenu.classList.add('translate-x-full');
        document.body.style.overflow = ''; // スクロールロック解除

        // 全てのアイコンを「3本線」に戻す
        menuToggles.forEach(btn => animateHamburger(btn, false));

        // Homeの場合: 閉じた瞬間のスクロール位置に応じてHeroヘッダーの状態を復帰させる
        if (headerHero && headerSticky) {
             const rect = headerSticky.getBoundingClientRect();
             // Stickyヘッダーがまだ張り付いていない位置なら、Heroを表示に戻す
             if (rect.top > 0) {
                 headerHero.classList.remove('opacity-0', 'pointer-events-none');
             }
        }

      } else {
        // ▼▼▼ 開く処理 ▼▼▼
        mobileMenu.classList.remove('translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        document.body.style.overflow = 'hidden'; // 背景固定

        // 全てのアイコンを「バツ印」にする
        menuToggles.forEach(btn => animateHamburger(btn, true));

        // Homeの場合: メニューが開いている間は、Heroヘッダーを強制表示
        // (これをしないと、メニュー背景の裏でヘッダーが消えてしまうことがあるため)
        if (headerHero) {
            headerHero.classList.remove('opacity-0', 'pointer-events-none');
        }
      }
    }

    // ハンバーガーアイコンのアニメーション制御関数
    function animateHamburger(btn, toClose) {
      const bar1 = btn.querySelector('.menu-bar-1');
      const bar2 = btn.querySelector('.menu-bar-2');
      const bar3 = btn.querySelector('.menu-bar-3');
      
      // 要素が足りない場合はエラー回避
      if (!bar1 || !bar2 || !bar3) return;

      if (toClose) {
        // バツ印に変形
        bar1.classList.remove('origin-left');
        bar1.classList.add('rotate-45', 'translate-y-[11px]', 'origin-center');
        
        bar2.classList.add('opacity-0');
        
        bar3.classList.remove('origin-left');
        bar3.classList.add('-rotate-45', '-translate-y-[11px]', 'origin-center');
      } else {
        // 3本線に戻す
        bar1.classList.remove('rotate-45', 'translate-y-[11px]', 'origin-center');
        bar1.classList.add('origin-left');
        
        bar2.classList.remove('opacity-0');
        
        bar3.classList.remove('-rotate-45', '-translate-y-[11px]', 'origin-center');
        bar3.classList.add('origin-left');
      }
    }
  }
});
/* ▲▲▲ 追加ここまで ▲▲▲ */

/* ============================================
   1. Q&A アコーディオン機能
   (Website, Graphic, Movie共通)
   - フェードイン＋スライドアップのアニメーション付き
============================================ */
window.toggleQa = function() {
    // 隠れている要素を取得
    const hiddenItems = document.querySelectorAll('.qa-hidden-item');
    const btnArea = document.getElementById('qa-view-more-area');
    
    // ボタンをフェードアウトさせて消す
    if(btnArea) {
        btnArea.style.transition = 'opacity 0.3s';
        btnArea.style.opacity = '0';
        setTimeout(() => {
            btnArea.style.display = 'none';
        }, 300);
    }

    // 各アイテムをアニメーション表示
    hiddenItems.forEach(function(item, index) {
        // 1. hiddenを消す前にアニメーションの初期状態（透明＆少し下）をセット
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        item.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        
        // 2. hiddenを削除（これで空間が確保される）
        item.classList.remove('hidden');

        // 3. 少しタイミングをずらしてフェードインさせる（順番に出てくるようにindexを使用）
        setTimeout(function() {
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        }, 50 + (index * 100)); // 50ms後に開始し、次の要素はさらに100ms遅らせる
    });
}

/* ============================================
   2. スムーススクロール機能
   (全ページ共通)
============================================ */
document.addEventListener('DOMContentLoaded', () => {
  // すべてのアンカーリンク（href="#"で始まるもの）を取得
  const anchors = document.querySelectorAll('a[href^="#"]');
  
  // ヘッダーの高さ（調整してください）
  const headerOffset = 100; 
  // スクロール速度（ミリ秒）
  const duration = 800;

  anchors.forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      
      // hrefが "#" だけ、または空の場合は何もしない
      if (href === '#' || href === '') return;

      const targetElement = document.querySelector(href);
      
      if (targetElement) {
        e.preventDefault(); // デフォルトの急な移動をキャンセル

        // ターゲットの位置を取得
        const elementPosition = targetElement.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        // アニメーション実行
        smoothScrollTo(offsetPosition, duration);
        
        // URLのハッシュを更新（履歴に残す場合）
        // history.pushState(null, null, href);
      }
    });
  });

  // イージング関数を使った自作スクロール関数
  function smoothScrollTo(targetPosition, duration) {
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    let startTime = null;

    function animation(currentTime) {
      if (startTime === null) startTime = currentTime;
      const timeElapsed = currentTime - startTime;
      
      // イージング（easeOutCubic: 最初は速く、最後はゆっくり）
      const run = easeOutCubic(timeElapsed, startPosition, distance, duration);
      
      window.scrollTo(0, run);

      if (timeElapsed < duration) {
        requestAnimationFrame(animation);
      }
    }

    // イージング計算式 (t: time, b: start, c: change, d: duration)
    function easeOutCubic(t, b, c, d) {
      t /= d;
      t--;
      return c * (t * t * t + 1) + b;
    }

    requestAnimationFrame(animation);
  }
});