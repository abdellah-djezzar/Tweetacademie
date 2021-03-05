const MAIL = document.getElementById("email").addEventListener("keyup", checkMail);
const PSEUDO = document.getElementById("pseudo").addEventListener("keyup", checkPseudo);
const USERNAME = document.getElementById("username").addEventListener("keyup", checkUsername);

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
      let regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g.test(email);

      console.log(regex);
      if (data == "e-mail already exist") {
        document.getElementById("errorMail").innerHTML = "ATTENTION ! E-mail déjà utilisée !";
      } else if (regex & (data == "e-mail available")) {
        document.getElementById("errorMail").innerHTML = "E-mail disponible. ";
      } else {
        document.getElementById("errorMail").innerHTML = "ATTENTION ! E-mail incorrect.";
      }
    })

    .catch((err) => {
      console.log("u");
    });
} 

function checkPseudo(e) {
  e.preventDefault();
  const pseudo = document.getElementById("pseudo").value;
  fetch("index.php?action=validation&pseudo=" + pseudo, {
    method: "GET",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
  })
    .then((res) => res.json()) // la réponse

    .then((data) => {
      console.log(data);
      if (data == "pseudo already exist") {
        document.getElementById("errorPseudo").innerHTML = "ATTENTION ! Le pseudo existe déjà !";
      } else {
        document.getElementById("errorPseudo").innerHTML = "Le pseudo est disponible.";
      }
    })

    .catch((err) => {
      console.log("u");
    });
}

function checkUsername(e) {
  e.preventDefault();
  const username = document.getElementById("username").value;
  fetch("index.php?action=validation&username=" + username, {
    method: "GET",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
  })
    .then((res) => res.json()) // la réponse

    .then((data) => {
      console.log(data);
      if (data == "pseudo already exist") {
        document.getElementById("errorUsername").innerHTML = "ATTENTION ! L'username existe déjà!";
      } else {
        document.getElementById("errorUsername").innerHTML = "Ce username est disponible.";
      }
    })

    .catch((err) => {
      console.log("u");
    });
}
