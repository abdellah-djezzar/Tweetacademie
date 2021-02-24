document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("theme").addEventListener("submit", (e) => {
    e.preventDefault();
    fetch("index.php?action=themeController&theme=darkTheme", {
      method: "POST",
      body: (data = new FormData(btn)),
    })
      .then((response) => response.text())
      .then((response) => {})
      .catch((error) => console.log(error));
  });
});
