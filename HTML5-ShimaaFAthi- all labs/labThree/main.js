const addFilter = (element, filter) => {
    element.style.filter = filter;
};

const saturate = document.getElementById("saturate");
const opacity = document.getElementById("opacity");
const invert = document.getElementById("invert");
const sepla = document.getElementById("sepla");
const grayscale = document.getElementById("grayscale");
const imageone = document.getElementById("imageone");

saturate.addEventListener("click", () => addFilter(imageone, "saturate(30%)"));
opacity.addEventListener("click", () => addFilter(imageone, "opacity(25%)"));
invert.addEventListener("click", () => addFilter(imageone, "invert(75%)"));
sepla.addEventListener("click", () => addFilter(imageone, "sepia(60%)"));
grayscale.addEventListener("click", () => addFilter(imageone, "grayscale(50%)"));
