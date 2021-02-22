document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault();
    console.log(result);
    const searchBar = e.target.value;

    fetch("index.php?action=seachMember&pseudo=" + searchBar, {
      method: "GET",
      headers: {
        "Content-Type": "application/json; charset=utf-8",
      },
    })
      .then((res) => res.json()) // la réponse

      .then((data) => {
        if (data == "reponse ok") {
          document.getElementById("resulta").innerHTML = "ok";
        } else {
          result.innerHTML = "oooooo";
        }
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
