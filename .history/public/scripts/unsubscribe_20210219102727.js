document.addEventListener("DOMContentLoaded", function (event) {
  document.querySelector("#unsubscribe").addEventListener("submit", (e) => {
    e.preventDefault();
    let btn = document.querySelector("#unsubscribe");

    fetch("index.php?action=unsubscribe", {
      method: "POST",
      body: (data = new FormData(btn)),
    })
      .then((response) => response.text())
      .then((response) => {
        document.getElementById("unsubBtn").value = "s'abonner";
      })
      .catch((error) => console.log(error));
  });
});
