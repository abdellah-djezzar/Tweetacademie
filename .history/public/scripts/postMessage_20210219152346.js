document.addEventListener("DOMContentLoaded", function (event) {
  document.querySelector("#postFormMessage").addEventListener("submit", (e) => {
    e.preventDefault();
    const inputMessage = document.getElementById("postMessages").value;
    let form = document.querySelector("#postFormMessage");

    fetch("index.php?action=postMessage", {
      method: "POST",
      body: (data = new FormData(form)),
    })
      .then((response) => response.text())
      .then((response) => {
        document.getElementById("getMessage").innerHTML = response;
      })
      .catch((error) => console.log(error));
  });
});
