const dropdownButton = document.querySelectorAll(".dropdown-button");
dropdownButton.forEach(button => {
    button.addEventListener("click", () => {
        button.nextElementSibling.classList.toggle("hide");
    })
})

/*
will make dropdown menus be active one at a time
also closes dropdown menus when clicking anywhere else
*/
const dropdownMenus = document.querySelectorAll(".dropdown-menu");
const ddMenuHideHandler = function (dropdown) {
    if (dropdown.classList.contains("hide") === false) {
        dropdown.classList.toggle("hide");
    }
}
document.addEventListener("click", (e) => {
    if (e.target.closest(".dropdown-button") === null) {
        for (let i = 0; i < dropdownMenus.length; i++) {
            ddMenuHideHandler(dropdownMenus[i]);
        }
    } else {
        let currentDropdown = e.target.parentElement.nextElementSibling;
        for (let i = 0; i < dropdownMenus.length; i++) {
            if (dropdownMenus[i] !== currentDropdown) {
                ddMenuHideHandler(dropdownMenus[i]);
            }
        }
    }
})