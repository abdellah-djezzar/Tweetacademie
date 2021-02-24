document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault();
    const searchBar = e.target.value;

    fetch("index.php?action=HomeMessagerie&pseudo=" + searchBar, {
      method: "GET",
      headers: {
        "Content-Type": "application/json; charset=utf-8",
      },
    })
      .then((res) => res.text()) // la réponse
      .then((data) => {
        var obj = JSON.parse(data);
        console.log(obj.pseudo); // == Object {cid: "1234", city: "value1", district: "value2", state: "value3"}
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
