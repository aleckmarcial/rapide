
/* ========================================
   HAMBURGER MENU
======================================== */

const hamburger = document.getElementById("hamburger-btn");
const menus = document.querySelectorAll(".navlinks, .menu-sidebar-actions");
const mainContent = document.querySelector("main");
const navlinks = document.querySelector(".navlinks");
const closeButton = document.getElementById("close-btn");

// Close all menus and remove the overlay
function closeMenu() {
  menus.forEach((menu) => menu.classList.remove("active"));
  hamburger?.classList.remove("open");
  mainContent?.classList.remove("dimmed");
}

// Toggle the menu when the hamburger is clicked
hamburger?.addEventListener("click", () => {
  menus.forEach((menu) => menu.classList.toggle("active"));
  hamburger.classList.toggle("open");
  mainContent?.classList.toggle("dimmed");
});

// Close the navigation menu using the close button
closeButton?.addEventListener("click", () => {
  navlinks?.classList.remove("active");
  mainContent?.classList.remove("dimmed");
});

// Handle outside clicks and service selection
document.addEventListener("click", (event) => {
  const target = event.target;

  const clickedInsideMenu = [...menus].some((menu) =>
    menu.contains(target)
  );

  const clickedHamburger = hamburger?.contains(target);

  // Close the menu when clicking outside
  if (
    hamburger?.classList.contains("open") &&
    !clickedInsideMenu &&
    !clickedHamburger
  ) {
    closeMenu();
  }

  // Close the menu after selecting a service
  if (target.closest(".menu-sidebar-actions [data-service]")) {
    closeMenu();
  }
});


/* ========================================
   BRANCH SEARCH & PAGINATION
======================================== */

const searchBar = document.getElementById("search-bar");
const clearSearch = document.getElementById("clear-search");
const branchList = document.getElementById("branch-list");
const pagination = document.getElementById("branch-pagination");

if (searchBar && clearSearch && branchList && pagination) {
  let debounceTimer;
  let currentQuery = "";

  // Fetch and display branch results
  async function loadBranches(query, page = 1) {
    try {
      const response = await fetch(
        `search_branches.php?q=${encodeURIComponent(query)}&page=${page}`
      );

      if (!response.ok) {
        throw new Error(`Request failed: ${response.status}`);
      }

      const data = await response.json();

      branchList.innerHTML = data.cards;
      pagination.innerHTML = data.pagination;

      // Animate filtered results for queries with 3+ characters
      branchList.classList.toggle(
        "is-filtered",
        query.length >= 3
      );
    } catch (error) {
      console.error("Failed to load branches:", error);
    }
  }

  // Search as the user types
  searchBar.addEventListener("input", () => {
    clearSearch.classList.toggle(
      "visible",
      searchBar.value.length > 0
    );

    clearTimeout(debounceTimer);

    debounceTimer = setTimeout(() => {
      currentQuery = searchBar.value.trim();
      loadBranches(currentQuery);
    }, 300);
  });

  // Clear the search input and reload all branches
  clearSearch.addEventListener("click", () => {
    searchBar.value = "";
    currentQuery = "";

    clearSearch.classList.remove("visible");
    searchBar.focus();

    clearTimeout(debounceTimer);
    loadBranches(currentQuery);
  });

  // Handle pagination buttons, including dynamically loaded buttons
  pagination.addEventListener("click", (event) => {
    const button = event.target.closest("button[data-page]");

    if (!button || button.disabled) return;

    loadBranches(currentQuery, Number(button.dataset.page));

    document
      .getElementById("branch-locator")
      ?.scrollIntoView({ behavior: "smooth" });
  });
}


/* ========================================
   AOS ANIMATION REFRESH
======================================== */

// Refresh animation positions after images and page assets load
window.addEventListener("load", () => {
  if (typeof AOS !== "undefined") {
    AOS.refresh();
  }
});


/* ========================================
   MEMBERSHIP FORM - IMAGE UPLOAD
======================================== */

const uploadBox = document.querySelector(".upload-box");

if (uploadBox) {
  // Highlight the upload box when a file is dragged over it
  ["dragenter", "dragover"].forEach((eventName) => {
    uploadBox.addEventListener(eventName, () => {
      uploadBox.classList.add("dragover");
    });
  });

  // Remove the highlight when dragging leaves or a file is dropped
  ["dragleave", "drop"].forEach((eventName) => {
    uploadBox.addEventListener(eventName, () => {
      uploadBox.classList.remove("dragover");
    });
  });
}
