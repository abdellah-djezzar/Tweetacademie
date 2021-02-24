document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("theme").addEventListener("click", (e) => {
    e.preventDefault();
    themeBtn = document.getElementById("theme").value;
    fetch("index.php?action=themeController&theme=darkTheme", {
      method: "POST",
      body: (data = new FormData(themeBtn)),
    })
      .then((response) => response.text())
      .then((response) => {})
      .catch((error) => console.log(error));
  });
});
