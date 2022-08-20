// require('./bootstrap');

const ul = document.querySelector(".list");
const ham = document.querySelector(".ham-icons");
ham.addEventListener("click", () => {
    if (ul.style.display === "none") {
        ul.style.display = "block";
    } else {
        ul.style.display = "none";
    }
});
