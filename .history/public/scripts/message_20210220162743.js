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
          document.getElementById("myData").textContent = data;
          console.log(data);
        } else {
          document.getElementById("myData").innerHTML = "";

          // ici j'affiche rien si l'input est vide.
        }
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
