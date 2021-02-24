document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("theme").addEventListener("submit", (e) => {
    e.preventDefault();
    fetch("index.php?action=subscribe", {
      method: "POST",
      body: (data = new FormData(btn)),
    })
      .then((response) => response.text())
      .then((response) => {
        document.getElementById("subBtn").value = "se désabonner";
      })
      .catch((error) => console.log(error));
  });
  });
});
