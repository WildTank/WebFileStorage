console.log("Connected!");

const dropdownMenus = document.querySelectorAll(".dropdown-menu")
dropdownMenus.forEach(dropdown => {
    dropdown.classList.toggle("hide")
})

const dropdownButton = document.querySelectorAll(".dropdown-button")
dropdownButton.forEach(button => {
    button.addEventListener("click", () => {
        button.nextElementSibling.classList.toggle("hide")
    })
})
