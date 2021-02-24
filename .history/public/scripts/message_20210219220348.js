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
      .then((res) => res.json()) // la réponse

      .then((data) => {
        if (data == "reponse ok") {
          document.getElementById("resulta").innerHTML = "ooooooooooooooooooooo";
        } else {
          document.getElementById("resulta").innerHTML = "gggg ok";
        }
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
