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

/* ============================================
   1. ヘッダー & ハンバーガーメニュー制御 (ID不一致対応・完成版)
============================================ */
document.addEventListener('DOMContentLoaded', () => {
  // ------------------------------------------------
  // 1. 要素の取得とページ判定
  // ------------------------------------------------
  // ホームには sticky-header があるため、これで判定
  const stickyHeader = document.getElementById('sticky-header'); 
  
  // ホーム(header-home.php)も下層(header-default.php)も ID="site-header" を使用しているため、ここで取得
  const mainHeader = document.getElementById('site-header'); 
  
  const mobileMenu   = document.getElementById('mobile-menu-overlay');
  const menuToggles  = document.querySelectorAll('#menu-toggle, .menu-toggle-btn');

  // スティッキーヘッダーがあればトップページとみなす
  const isHomePage = !!stickyHeader;

  // トップページの場合、mainHeader は「透明なHeroヘッダー」として扱う
  const headerHero = isHomePage ? mainHeader : null;

  // ------------------------------------------------
  // 2. トップページ用：スクロール切り替えロジック
  // ------------------------------------------------
  if (isHomePage && headerHero && stickyHeader) {
    window.addEventListener('scroll', () => {
      // メニューが開いている時は処理しない
      if (mobileMenu && mobileMenu.classList.contains('translate-x-0')) return;

      const rect = stickyHeader.getBoundingClientRect();
      // Stickyヘッダーが画面上部に到達(top<=0)したら、Heroヘッダーを消す
      if (rect.top <= 0) {
        headerHero.classList.add('opacity-0', 'pointer-events-none');
      } else {
        headerHero.classList.remove('opacity-0', 'pointer-events-none');
      }
    });
  }

  // ------------------------------------------------
  // 3. ハンバーガーメニュー開閉ロジック (統合版)
  // ------------------------------------------------
  if (menuToggles.length > 0 && mobileMenu) {

    menuToggles.forEach(toggle => {
      toggle.addEventListener('click', (e) => {
        e.preventDefault();
        toggleMenu();
      });
    });

    function toggleMenu() {
      const isOpen = mobileMenu.classList.contains('translate-x-0');
      
      // ロゴ画像を取得（mainHeaderの中に必ずある）
      const logoImg = mainHeader ? mainHeader.querySelector('img') : null;
      
      // ハンバーガーの線を取得
      const allBars = document.querySelectorAll('.menu-bar-1, .menu-bar-2, .menu-bar-3');

      if (isOpen) {
        // ▼▼▼ 閉じる処理 ▼▼▼
        mobileMenu.classList.remove('translate-x-0');
        mobileMenu.classList.add('translate-x-full');
        document.body.style.overflow = ''; 

        // アイコンを3本線に戻す
        menuToggles.forEach(btn => animateHamburger(btn, false));

        // ★追加：隠していたStickyヘッダーを元に戻す（トップページのみ）
        if (isHomePage && stickyHeader) stickyHeader.classList.remove('opacity-0', 'pointer-events-none');

        // --- デザインの復帰 ---

// A. 線の色を戻す
        allBars.forEach(bar => {
            // その線がスティッキーヘッダーの中にあるかチェック
            const isStickyBar = stickyHeader && stickyHeader.contains(bar);

            if (isHomePage) {
                if (isStickyBar) {
                    // Topページ: Stickyヘッダーの線なら、本来の色(グレー)に戻す
                    bar.classList.remove('bg-white');
                    bar.classList.add('bg-gray-600');
                } else {
                    // Topページ: Heroヘッダーの線なら、本来の色(白)に戻す
                    bar.classList.remove('bg-gray-600');
                    bar.classList.add('bg-white');
                }
            } else {
                // 下層ページ: 必ずグレーに戻す
                bar.classList.remove('bg-white');
                bar.classList.add('bg-gray-600');
            }
        });
        
        // B. ヘッダー背景の復帰
        if (mainHeader) {
            if (isHomePage) {
                // Topページ: 透明に戻す
                mainHeader.classList.remove('bg-white', 'shadow-md', 'text-gray-500');
                mainHeader.classList.add('bg-transparent', 'text-white');
            } else {
                // 下層ページ: 白背景に戻す
                mainHeader.classList.add('bg-white', 'shadow-md', 'text-gray-500');
                mainHeader.classList.remove('bg-transparent', 'text-white');
            }
        }

        // C. ロゴの復帰
        if (logoImg) {
            logoImg.classList.remove('brightness-0', 'invert');
            
            if (isHomePage) {
                // Topページ: メニューを閉じたらロゴを「非表示(opacity-0)」に戻す
                // (ただし、親のaタグごと戻す必要がある)
                const logoLink = logoImg.closest('a');
                if (logoLink) {
                    logoLink.classList.remove('opacity-100', 'pointer-events-auto');
                    logoLink.classList.add('opacity-0', 'pointer-events-none');
                }
            } else {
                // 下層ページ: グレーに戻す
                logoImg.classList.add('grayscale', 'contrast-10');
            }
        }

        // Topページの場合: 閉じた瞬間のスクロール位置を見て、Heroヘッダーを表示するか再判断
        if (isHomePage && headerHero && stickyHeader) {
             const rect = stickyHeader.getBoundingClientRect();
             if (rect.top <= 0) {
                 // 張り付いている位置なら、Heroは隠したまま
                 headerHero.classList.add('opacity-0', 'pointer-events-none');
             } else {
                 // 上部にいるなら、Heroを再表示
                 headerHero.classList.remove('opacity-0', 'pointer-events-none');
             }
        }

      } else {
        // ▼▼▼ 開く処理 ▼▼▼
        mobileMenu.classList.remove('translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        document.body.style.overflow = 'hidden';

        // アイコンをバツ印にする
        menuToggles.forEach(btn => animateHamburger(btn, true));

        // ★追加：Stickyヘッダーを隠して、裏の黒背景（Hero/Main）を見せる（トップページのみ）
        if (isHomePage && stickyHeader) stickyHeader.classList.add('opacity-0', 'pointer-events-none');

        // --- メニュー用デザイン（黒背景・白文字）へ変更 ---

        // A. 線の色を白にする
        allBars.forEach(bar => {
            bar.classList.remove('bg-gray-600');
            bar.classList.add('bg-white');
        });

        // B. ヘッダー背景を透明にする（黒オーバーレイを見せるため）
        if (mainHeader) {
            mainHeader.classList.remove('bg-white', 'shadow-md', 'text-gray-500');
            mainHeader.classList.add('bg-transparent', 'text-white');
            
            // Topページ: 隠れているHeroヘッダーを強制的に表示状態にする
            if (isHomePage) {
                mainHeader.classList.remove('opacity-0', 'pointer-events-none');
            }
        }

        // C. ロゴを強制的に白く・表示する
        if (logoImg) {
            logoImg.classList.remove('grayscale', 'contrast-10', 'opacity-0');
            logoImg.classList.add('brightness-0', 'invert');
            
            // Topページ: 親のaタグが opacity-0 (透明) になっている場合、強制的に表示させる
            const logoLink = logoImg.closest('a');
            if (logoLink) {
                logoLink.classList.remove('opacity-0', 'pointer-events-none');
                logoLink.classList.add('opacity-100', 'pointer-events-auto');
            }
        }
      }
    }

    // ハンバーガーアイコンのアニメーション関数
    function animateHamburger(btn, toClose) {
      const bar1 = btn.querySelector('.menu-bar-1');
      const bar2 = btn.querySelector('.menu-bar-2');
      const bar3 = btn.querySelector('.menu-bar-3');
      if (!bar1 || !bar2 || !bar3) return;

      if (toClose) {
        bar1.classList.remove('origin-left');
        bar1.classList.add('rotate-45', 'translate-y-[11px]', 'origin-center');
        bar2.classList.add('opacity-0');
        bar3.classList.remove('origin-left');
        bar3.classList.add('-rotate-45', '-translate-y-[11px]', 'origin-center');
      } else {
        bar1.classList.remove('rotate-45', 'translate-y-[11px]', 'origin-center');
        bar1.classList.add('origin-left');
        bar2.classList.remove('opacity-0');
        bar3.classList.remove('-rotate-45', '-translate-y-[11px]', 'origin-center');
        bar3.classList.add('origin-left');
      }
    }
  }
});

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
  const headerOffset = 80; 
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