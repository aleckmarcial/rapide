const hamburger = document.getElementById("hamburger-btn");
const menus = document.querySelectorAll(".navlinks, .menu-sidebar-actions");
const mainContent = document.querySelector("main");

function closeMenu() {
  menus.forEach((menu) => menu.classList.remove("active"));
  hamburger.classList.remove("open");
  mainContent?.classList.remove("dimmed");
}

// Open/close menu when hamburger clicked
hamburger.addEventListener("click", () => {
  menus.forEach((menu) => menu.classList.toggle("active"));
  hamburger.classList.toggle("open");
  mainContent?.classList.toggle("dimmed");
});

// Close menu when clicked outside
document.addEventListener("click", (event) => {
  const clickedInsideMenu = [...menus].some((menu) =>
    menu.contains(event.target)
  );
  const clickedHamburger = hamburger.contains(event.target);

  if (
    hamburger.classList.contains("open") &&
    !clickedInsideMenu &&
    !clickedHamburger
  ) {
    closeMenu();
  }
});

// Close menu after picking a service (the popup logic handles opening the form)
document.addEventListener("click", (event) => {
  if (event.target.closest(".menu-sidebar-actions [data-service]")) {
    closeMenu();
  }
});

//search bar & pagination
const searchBar = document.getElementById("search-bar");
const clearSearch = document.getElementById("clear-search");
const branchList = document.getElementById("branch-list");
const pagination = document.getElementById("branch-pagination");

if (searchBar && clearSearch && branchList && pagination) {
  let debounceTimer;
  let currentQuery = "";

  async function loadBranches(query, page = 1) {
    try {
      const response = await fetch(
        `search_branches.php?q=${encodeURIComponent(query)}&page=${page}`,
      );
      const data = await response.json();
      branchList.innerHTML = data.cards;
      pagination.innerHTML = data.pagination;

      // animate the results only when the search has 3+ characters
      branchList.classList.toggle("is-filtered", query.length >= 3);
    } catch (error) {
      console.error("Search failed:", error);
    }
  }
  searchBar.addEventListener("input", () => {
    clearSearch.classList.toggle("visible", searchBar.value.length > 0);

    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => {
      currentQuery = searchBar.value.trim();
      loadBranches(currentQuery, 1); // new search always starts at page 1
    }, 300);
  });

  clearSearch.addEventListener("click", () => {
    searchBar.value = "";
    currentQuery = "";
    clearSearch.classList.remove("visible");
    searchBar.focus();
    loadBranches("", 1);
  });

  // One listener handles every page button, including ones added later
  pagination.addEventListener("click", (event) => {
    const button = event.target.closest("button[data-page]");
    if (!button || button.disabled) return;

    loadBranches(currentQuery, Number(button.dataset.page));
    document
      .getElementById("branch-locator")
      .scrollIntoView({ behavior: "smooth" });
  });
}

//AOS
// recalculate positions after images load, since they change layout heights
window.addEventListener("load", () => AOS.refresh());





