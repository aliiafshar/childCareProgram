document.addEventListener('DOMContentLoaded', function () {
  const menuBtn = document.getElementById('mobile-menu-button');
  const menuPanel = document.getElementById('mobile-menu-panel');
  const menuClose = document.getElementById('mobile-menu-close');
  const menuOverlay = document.getElementById('mobile-menu-overlay');

  const open = () => {
    if (menuPanel) menuPanel.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  };
  const close = () => {
    if (menuPanel) menuPanel.classList.add('hidden');
    document.body.style.overflow = '';
  };

  if (menuBtn) menuBtn.addEventListener('click', open);
  if (menuClose) menuClose.addEventListener('click', close);
  if (menuOverlay) menuOverlay.addEventListener('click', close);
  if (menuPanel) {
    menuPanel.querySelectorAll('a').forEach(a => a.addEventListener('click', close));
  }
});
