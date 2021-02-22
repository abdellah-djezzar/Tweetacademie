document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
  e.preventDefault();

  const searchBar = e.target.value;
  fetch("index.php?action=validation&email=" + searchBar, {
    method: "GET",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
  })
    .then((res) => res.json()) // la réponse

    .then((data) => {
      console.log(data);
      if (data == "not valid") {
        document.getElementById("error").innerHTML = "l'email existe déjà!";
      } else {
        document.getElementById("error").innerHTML = "valide";
      }
    })

    .catch((err) => {
      console.log("u");
    });
}


  });
});
