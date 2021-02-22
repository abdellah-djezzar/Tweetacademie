document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault();
    const searchBar = e.target.value;

    fetch("index.php?action=SearchMember&pseudo=" + searchBar, {
      method: "GET",
      headers: {
        "Content-Type": "application/json; charset=utf-8",
      },
    })
      .then((res) => res.json()) // la réponse
      .then((data) => {
        if (data !== "error") {
          document.getElementById("myData").textContent = JSON.stringify(data);
          // cette ligne me ressort l'echo sous forme d'objet :

          /*[{"ID":"8","lastname":"ege","firstname":"yalcin","username":"username","pseudo":"ege","dob":"2000-12-10","email":"ege@ege.fr","password":"$2y$10$aywQMLTqJ6tp4GC9BUtKve/2tgqo9RVjIgrBmtXqW.lDvVX5X3b96","avatar":null,"bio":"io","city":"city","link":"ink","deleted":"0"}*/

          // si 2 membres ont le meme pseudo alors j'ai 2 objets.

          // Si je veux par ex que le pseudo je suis obligé de le préciser dans ma boucle foreach PHP (views/messagerie). je n'arrive pas à parcourir cet objet directement ici.

          // une fois le problème du rendu trouvé je compte faire une boucle qui va me créer un élément (li par par ex) avec le pseudo de la personne
          // et un lien avec comme  ?id_user = son id pour pouvoir avoir accès à son profil et / ou discuter via une messagerie.
        } else {
          document.getElementById("myData").innerHTML = "";
        }
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
