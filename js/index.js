console.log("Connected!");

const dropdownButton = document.querySelectorAll(".dropdown-button");
dropdownButton.forEach(button => {
    button.addEventListener("click", () => {
        button.nextElementSibling.classList.toggle("hide");
    })
})

const dropdownMenus = document.querySelectorAll(".dropdown-menu");
document.addEventListener("click", (e) => {
    if (e.target.closest(".dropdown-button") === null) {
        for (let i = 0; i < dropdownMenus.length; i++) {
            if (dropdownMenus[i].classList.contains("hide") === false) {
                dropdownMenus[i].classList.toggle("hide");
            }
        }
    } else {
        let currentDropdown = e.target.parentElement.nextElementSibling;
        for (let i = 0; i < dropdownMenus.length; i++) {
            if (dropdownMenus[i] !== currentDropdown) {
                if (dropdownMenus[i].classList.contains("hide") === false) {
                    dropdownMenus[i].classList.toggle("hide");
                }
            }
        }
    }
})