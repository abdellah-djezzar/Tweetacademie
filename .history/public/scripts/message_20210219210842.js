document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault();
    const result = document.querySelector(".result");
    console.log(result);
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
          result.innerHTML = "oooooo";
        } else {
          result.innerHTML = "oooooo";
        }
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
