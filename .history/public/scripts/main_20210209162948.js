const MAIL = document.getElementById("email").addEventListener("input", checkMail);

function checkMail(e) {
  e.preventDefault();

  const email = document.getElementById("email").value;
  fetch("index.php?=email", {
    method: "GET",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
  })
    .then((res) => res.json()) // la réponse

    .then((data) => {
      if (data !== "ok") {
        document.getElementById("error").innerHTML = "l'email existe déjà!";
      } else {
        document.getElementById("error").innerHTML = "e mail dispnible";
      }
    })

    .catch((err) => {
      console.log("u");
      alert("sorry, there are no results for your search");
    });
}
