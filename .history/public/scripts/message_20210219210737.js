document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault();
    const searchBar = e.target.value;

    fetch("index.php?action=seachMember&pseudo=" + searchBar, {
      method: "GET",
      headers: {
        "Content-Type": "application/json; charset=utf-8",
      },
      body: result,
    })
      .then((res) => res.json()) // la réponse

      .then((data) => {
        if (data == "reponse ok") {
          document.querySelector(".result").innerHTML = "ok";
        } else {
          document.querySelector(".result").innerHTML = " pas ok";
        }
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
