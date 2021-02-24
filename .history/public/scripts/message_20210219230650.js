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
          // crée un nouvel élément div
          var newDiv = document.createElement("div");
          // et lui donne un peu de contenu
          var newContent = document.createTextNode("Hi there and greetings!");
          // ajoute le nœud texte au nouveau div créé
          newDiv.appendChild(newContent);
        } else if ((data = "")) {
          document.getElementById("result").innerHTML = "";
        } else {
          document.getElementById("result").innerHTML = "aucun resultat";
        }
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
