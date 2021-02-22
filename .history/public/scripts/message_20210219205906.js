const MAIL = document.getElementById("searhBarMessage").addEventListener("keyup", searchMember);
console.log("ok");
function searchMember(e) {
  e.preventDefault();

  const pseudo = document.getElementById("searhBarMessage").value;
  fetch("index.php?action=seachMember&pseudo=" + pseudo, {
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
