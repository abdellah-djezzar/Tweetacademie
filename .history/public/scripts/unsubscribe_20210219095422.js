document.addEventListener("DOMContentLoaded", function (event) {
  document.querySelector("#subscribe").addEventListener("submit", (e) => {
    e.preventDefault();
    let btn = document.querySelector("#subscribe");

    fetch("index.php?action=unsubscribe", {
      method: "POST",
      body: (data = new FormData(btn)),
    })
      .then((response) => response.text())
      .then((response) => {})
      .catch((error) => console.log(error));
  });
});
