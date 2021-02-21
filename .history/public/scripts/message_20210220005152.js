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
        for (i = 0; i < data.length; i++) {
          console.log(data[i]);
        }
        document.getElementById("myData").innerHTML = JSON.parse(data);
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
