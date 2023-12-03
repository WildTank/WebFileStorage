const subpages = document.querySelectorAll(".subpage");
const panels = document.querySelectorAll(".main-panel");
for (let i = 0; i < subpages.length; i++) {
    subpages[i].addEventListener("click", () => {
        let activeSubpage = document.querySelector(".active-subpage");
        let activePanel = document.querySelector(".active-panel");
        if(subpages[i] !== activeSubpage) {
            activeSubpage.classList.toggle("active-subpage");
            subpages[i].classList.toggle("active-subpage");
            activePanel.classList.toggle("active-panel");
            panels[i].classList.toggle("active-panel");
        }
    })
}

const switches = document.querySelectorAll(".switch");
for (let i = 0; i < switches.length; i++) {
    switches[i].addEventListener("click", (e) => {
        e.target.classList.toggle("active-switch");
    })
}

// login form
const form = document.querySelector(".login-form-wrapper");
const formButton = document.querySelector("#settings-login");
try {
    formButton.addEventListener("click", (e) => {
        form.classList.toggle("hide");
    })
} catch (err) {
    console.log("Probably sign in successful...");
}
document.addEventListener("click", (e) => {
    if (e.target.closest(".login-form-wrapper") === null &&
        e.target !== formButton && !e.target.classList.contains("dark-theme")) {
        if (!form.classList.contains("hide")) {
            form.classList.toggle("hide");
        }
    }
})