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
        var mainContainer = document.getElementById("myData");
        for (var i = 0; i < data.length; i++) {
          var div = document.createElement("div");
          div.innerHTML = "Name: " + data[i].pseudo + " " + data[i].lastname;
          mainContainer.appendChild(div);
        }
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
