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