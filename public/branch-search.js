const searchBar = document.getElementById("search-bar");
const clearSearch = document.getElementById("clear-search");
const branchList = document.getElementById("branch-list");

let debounceTimer;

async function loadBranches(query) {
    try {
        const response = await fetch(`search_branches.php?q=${encodeURIComponent(query)}`);
        branchList.innerHTML = await response.text();
    } catch (error) {
        console.error("Search failed:", error);
    }
}

searchBar.addEventListener("input", () => {
    clearSearch.classList.toggle("visible", searchBar.value.length > 0);

    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => loadBranches(searchBar.value.trim()), 300);
});

clearSearch.addEventListener("click", () => {
    searchBar.value = "";
    clearSearch.classList.remove("visible");
    searchBar.focus();
    loadBranches("");
});