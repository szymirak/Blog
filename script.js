// script.js

// Funkcja do wczytywania zawartości podstron
function loadContent(path) {
  fetch(path)
    .then((response) => response.text())
    .then((html) => {
      document.getElementById("content").innerHTML = html;
    });
}

// Obsługa nawigacji
const navigationLinks = document.querySelectorAll("nav a");

navigationLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    const href = link.getAttribute("href");
    history.pushState({}, "", href);
    loadContent(href + ".html");
  });
});

// Obsługa nawigacji w przypadku załadowania strony
window.addEventListener("popstate", () => {
  loadContent(location.pathname + ".html");
});

// Wczytaj domyślną zawartość
loadContent("omnie.html");
