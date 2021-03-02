const MAIL = document.getElementById("email").addEventListener("keyup", checkMail);
const PSEUDO = document.getElementById("pseudo").addEventListener("keyup", checkPseudo);
function checkMail(e) {
  e.preventDefault();
  const email = document.getElementById("email").value;
  fetch("index.php?action=validation&email=" + email, {
    method: "GET",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
  })
    .then((res) => res.json()) // la réponse

    .then((data) => {
      console.log(data);
      if (data == "e-mail already exist") {
        document.getElementById("error").innerHTML = "l'email existe déjà!";
      } else {
        document.getElementById("error").innerHTML = "e-mail disponible";
      }
    })

    .catch((err) => {
      console.log("u");
    });
}

function checkPseudo(e) {
  e.preventDefault();
  const email = document.getElementById("pseudo").value;
  fetch("index.php?action=validation&email=" + pseudo, {
    method: "GET",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
  })
    .then((res) => res.json()) // la réponse

    .then((data) => {
      console.log(data);
      if (data == "e-mail already exist") {
        document.getElementById("error").innerHTML = "l'email existe déjà!";
      } else {
        document.getElementById("error").innerHTML = "e-mail disponible";
      }
    })

    .catch((err) => {
      console.log("u");
    });
}
