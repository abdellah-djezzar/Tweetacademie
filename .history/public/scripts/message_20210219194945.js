document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault;

    const searchBar = document.getElementById("searhBarMessage").value;

    console.log(searchBar);

    const resultUl = document.getElementById("resultUl");
  });
});
