document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault();
    const result = document.getElementById("result");
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
          console.log(data);
          document.getElementById("result").innerHTML = "d'accord";
        }
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
