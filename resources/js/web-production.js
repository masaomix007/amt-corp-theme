export function initWebProduction(page) {
  const tabList = page.querySelector('[data-case-tabs]');
  const tabs = tabList ? Array.from(tabList.querySelectorAll('[role="tab"]')) : [];

  function selectTab(selectedTab) {
    tabs.forEach((tab) => {
      const selected = tab === selectedTab;
      const panel = page.querySelector(`#${tab.getAttribute('aria-controls')}`);

      tab.setAttribute('aria-selected', String(selected));
      tab.tabIndex = selected ? 0 : -1;

      if (panel) {
        panel.hidden = !selected;
      }
    });
  }

  tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => selectTab(tab));
    tab.addEventListener('keydown', (event) => {
      let nextIndex;

      if (event.key === 'ArrowRight') nextIndex = (index + 1) % tabs.length;
      if (event.key === 'ArrowLeft') nextIndex = (index - 1 + tabs.length) % tabs.length;
      if (event.key === 'Home') nextIndex = 0;
      if (event.key === 'End') nextIndex = tabs.length - 1;
      if (nextIndex === undefined) return;

      event.preventDefault();
      selectTab(tabs[nextIndex]);
      tabs[nextIndex].focus();
    });
  });

  const menu = document.getElementById('mobile-menu-overlay');
  const menuToggle = document.getElementById('menu-toggle');

  if (menu && menuToggle) {
    menuToggle.setAttribute('aria-controls', menu.id);

    function updateMenuAccessibility() {
      const open = menu.classList.contains('translate-x-0');

      menu.inert = !open;
      menu.setAttribute('aria-hidden', String(!open));
      menuToggle.setAttribute('aria-expanded', String(open));
      menuToggle.setAttribute('aria-label', open ? 'メニューを閉じる' : 'メニューを開く');
    }

    updateMenuAccessibility();
    const menuObserver = new MutationObserver(updateMenuAccessibility);
    menuObserver.observe(menu, { attributes: true, attributeFilter: ['class'] });

    menu.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') {
        menuToggle.click();
        menuToggle.focus();
      }
    });
  }
}
