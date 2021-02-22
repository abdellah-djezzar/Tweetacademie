document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault;

    const searchBar = e.target.value;

    console.log(searchBar);

    const resultUl = document.getElementById("resultUl");
  });
});
