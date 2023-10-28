const searchBar = document.querySelector("#search-bar");
const searchButton = document.querySelector("#search-button");
const search = function () {
    const searchEntry = searchBar.value;
    console.log(searchEntry);
}
searchButton.addEventListener("click", search);