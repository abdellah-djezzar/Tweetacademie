document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault();
    const searchBar = e.target.value;

    fetch("index.php?action=SearchMember&pseudo=" + searchBar, {
      method: "GET",
      headers: {
        "Content-Type": "application/json; charset=utf-8",
      },
    })
      .then((res) => res.json()) // la réponse
      .then((data) => {
        let pseud = JSON.parse(data.pseudo);
        console.log(pseud);
        document.getElementById("myData").innerHTML = pseud;
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
