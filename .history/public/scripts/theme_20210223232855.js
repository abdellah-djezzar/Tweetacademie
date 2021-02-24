document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("theme").addEventListener("click", (e) => {
    e.preventDefault();
    form = document.getElementById("formDark").value;
    fetch("index.php?action=themeController&theme=darkTheme", {
      method: "POST",
      body: (data = new FormData(form)),
    })
      .then((response) => response.text())
      .then((response) => {})
      .catch((error) => console.log(error));
  });
});
