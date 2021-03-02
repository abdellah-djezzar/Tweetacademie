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
      console.log(data);
      if (data == "e-mail already exist") {
        document.getElementById("errorMail").innerHTML = "l'email existante!";
      } else {
        document.getElementById("errorMail").innerHTML = "e-mail disponible";
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
        document.getElementById("error").innerHTML = "le pseudo existe déjà!";
      } else {
        document.getElementById("error").innerHTML = "pseudo disponible";
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
        document.getElementById("errorUsername").innerHTML = "l'username existe déjà!";
      } else {
        document.getElementById("errorUsername").innerHTML = "username disponible";
      }
    })

    .catch((err) => {
      console.log("u");
    });
}
