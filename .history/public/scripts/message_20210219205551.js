const MAIL = document.getElementById("searhBarMessage").addEventListener("keyup", searchMember);
function checkMail(e) {
  e.preventDefault();

  const email = document.getElementById("email").value;
  fetch("index.php?action=searchMember&pseudo=" + pseudo, {
    method: "GET",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
  })
    .then((res) => res.json()) // la réponse

    .then((data) => {
      console.log(data);
      if (data == "reponse ok") {
        document.getElementById("result").innerHTML = "l'email existe déjà!";
      } else {
        document.getElementById("result").innerHTML = "valide";
      }
    })

    .catch((err) => {
      console.log("u");
    });
}
