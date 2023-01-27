
const nav = document.querySelector(".nav"),
            navList = nav.querySelectorAll("li"),
            totalNavList = navList.length,
            allSection = document.querySelectorAll(".section"),
            totalSection = allSection.length;

            for (let i = 0; i < totalNavList; i++) {
                        const a = navList[i].querySelector("a");
                        a.addEventListener("click", function () {
                                    for (let i = 0; i < totalSection; i++) {
                                                allSection[i].classList.remove("back-section");
                                    }
                                    for (let j = 0; j < totalNavList; j++) {
                                                if (navList[j].querySelector("a").classList.contains("active")) {
                                                            allSection[j].classList.add("back-section");
                                                }
                                                navList[j].querySelector("a").classList.remove("active");
                                    }
                                    this.classList.add("active");
                                    showSection(this);
                                    if (window.innerWidth<1200) {
                                                asideSelectionTogglerBtn();
                                    }
                        })
            }

// active
function showSection(element) {
                        for (let i = 0; i < totalSection; i++) {
                                    allSection[i].classList.remove("active");
                        }
                        const target = element.getAttribute("href").split("#")[1];
                        document.querySelector("#" + target).classList.add("active");
}
// Toggle button
const navTogglerBtn = document.querySelector(".nav-toggler"),
            aside = document.querySelector(".aside");
navTogglerBtn.addEventListener("click", () => {
            asideSelectionTogglerBtn();
})
            function asideSelectionTogglerBtn() {
                        aside.classList.toggle("open");
                        navTogglerBtn.classList.toggle("open");
                        for (let i = 0; i < totalSection; i++) {
                                    allSection[i].classList.toggle("open");
                        }
}
// register and login page active
function registerBtnClick() {
            document.getElementById("LogIn").classList.add( "hidden")
            document.getElementById("Register").classList.remove("hidden")
}
function logInBtnClick() {
            document.getElementById("LogIn").classList.remove( "hidden")
            document.getElementById("Register").classList.add("hidden")
}
