const sidebar = document.getElementById('sidebar');
const toggle = sidebar.querySelector('.sidebar-toggle');
const serviceButtons = sidebar.querySelectorAll('.service-list button');

function setOpen(isOpen) {
  sidebar.classList.toggle('open', isOpen);
  toggle.setAttribute('aria-expanded', String(isOpen));
}

// open / close with the hamburger
toggle.addEventListener('click', () => {
  setOpen(!sidebar.classList.contains('open'));
});

// close after picking a service (mobile)
serviceButtons.forEach((btn) => {
  btn.addEventListener('click', () => setOpen(false));
});

// reset when resizing up to tablet/desktop
window.matchMedia('(min-width: 768px)').addEventListener('change', (e) => {
  if (e.matches) setOpen(false);
});