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
  
  // 1. スクロール検知でヘッダーの見た目を変える
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) { // 50px以上スクロールしたら
      header.classList.add('is-scrolled', 'bg-white', 'shadow-md', 'group');
      header.classList.remove('bg-transparent', 'text-white');
    } else {
      // メニューが開いていない時だけ透明に戻す
      if (!mobileMenu.classList.contains('translate-x-0')) {
        header.classList.remove('is-scrolled', 'bg-white', 'shadow-md', 'group');
        header.classList.add('bg-transparent', 'text-white');
      }
    }
  });

  // 2. ハンバーガーメニューの開閉処理
  menuToggle.addEventListener('click', () => {
    const isOpen = mobileMenu.classList.contains('translate-x-0');

    if (isOpen) {
      // 閉じる
      mobileMenu.classList.remove('translate-x-0');
      mobileMenu.classList.add('translate-x-full');
      document.body.style.overflow = ''; // スクロール再開
      
      // ハンバーガーアイコンを「三」に戻すアニメーション（必要ならCSSクラス制御）
      menuToggle.children[0].classList.remove('rotate-45', 'translate-y-2');
      menuToggle.children[1].classList.remove('opacity-0');
      menuToggle.children[2].classList.remove('-rotate-45', '-translate-y-2');
      
      // ヘッダーの色をスクロール位置に合わせて戻す
      if (window.scrollY <= 50) {
        header.classList.remove('is-scrolled', 'bg-white', 'shadow-md', 'group');
        header.classList.add('text-white', 'bg-transparent');
      }

    } else {
      // 開く
      mobileMenu.classList.remove('translate-x-full');
      mobileMenu.classList.add('translate-x-0');
      document.body.style.overflow = 'hidden'; // 背景固定

      // ヘッダーを一時的に透明・白文字にしてメニューとなじませる（または黒背景にする）
      // 今回はデザイン通り「黒背景メニュー」なので、ヘッダーの文字は白固定が望ましい
      header.classList.remove('bg-white', 'shadow-md', 'is-scrolled');
      header.classList.add('bg-transparent', 'text-white');

      // ハンバーガーアイコンを「✕」にするアニメーション
      menuToggle.children[0].classList.add('rotate-45', 'translate-y-2'); // 1本目
      menuToggle.children[1].classList.add('opacity-0');               // 2本目消す
      menuToggle.children[2].classList.add('-rotate-45', '-translate-y-2'); // 3本目
    }
  });
});