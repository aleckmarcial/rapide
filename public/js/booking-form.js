//sidebar
const toggle = document.getElementById('sidebarToggle-btn');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('sidebarOverlay');

function setSidebar(open) {
  sidebar.classList.toggle('open', open);
  overlay.classList.toggle('show', open);
  toggle.classList.toggle('active', open);
  toggle.setAttribute('aria-expanded', open);
}

toggle.addEventListener('click', () => setSidebar(!sidebar.classList.contains('open')));
overlay.addEventListener('click', () => setSidebar(false));
sidebar.querySelectorAll('a').forEach(link =>
  link.addEventListener('click', () => setSidebar(false))
);
document.addEventListener('keydown', e => {
  if (e.key === 'Escape') setSidebar(false);
});