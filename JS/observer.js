const nav = document.querySelector("nav");
const sect = document.querySelector(".section-a");

const sectionOneOptions = {
    rootMargin: "0px 0px 0px 0px"
};

const sectionOneObserver = new IntersectionObserver(function (
        entries,
        sectionOneObserver
    ) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                nav.classList.add("nav-scrolled");
            } else {
                nav.classList.remove("nav-scrolled");
            }
        });
    },
    sectionOneOptions);

sectionOneObserver.observe(sect);