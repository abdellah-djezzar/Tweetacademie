const MAIL = document.getElementById("email").addEventListener("keyup", checkMail);
const PSEUDO = document.getElementById("pseudo").addEventListener("keyup", checkPseudo);
const USERNAME = document.getElementById("username").addEventListener("keyup", checkUsername);
const PASSWORD = document.getElementById("password").addEventListener("keyup", checkPassword);

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
        document.getElementById("errorMail").innerHTML = "e-mail existante!";
      } else if (regex & (data == "e-mail available")) {
        document.getElementById("errorMail").innerHTML = "e-mail disponible";
      } else {
        document.getElementById("errorMail").innerHTML = "e-mail incorrect";
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
        document.getElementById("errorPseudo").innerHTML = "le pseudo existe déjà!";
      } else {
        document.getElementById("errorPseudo").innerHTML = "pseudo disponible";
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

function checkPassword() {
  let passwordVerify = this.value;
  let regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d.]{8,}$/.test(passwordVerify);
  let span = document.querySelector("#passwordError");

  if (regex) {
    span.style.color = "green";
    span.innerHTML = "Valide";
  } else {
    span.innerHTML = "Mot de passe invalide";
  }

  if (mailVerify.length == "") {
    span.classList.replace("fa-check", "require");
    span.style.color = "black";
    span.innerHTML = " Champs requis";
  }
}
