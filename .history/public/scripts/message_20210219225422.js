document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault();
    const searchBar = e.target.value;

    fetch("index.php?action=HomeMessagerie&pseudo=" + searchBar, {
      method: "GET",
      headers: {
        "Content-Type": "application/json; charset=utf-8",
      },
    })
      .then((res) => res.text()) // la réponse
      .then((data) => {
        if (data) {
          document.getElementById("result").innerHTML = JSON.stringify(data["pseudo"]);
        } else {
          document.getElementById("result").innerHTML = "aucun resultat";
        }
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
