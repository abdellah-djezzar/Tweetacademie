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
      .then((res) => res.text()) // la réponse
      .then((data) => {
        if (data !== "error") {
          document.getElementById("myData").innerHTML = JSON.parse(data);
        } else {
          document.getElementById("myData").innerHTML = "";
        }
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
