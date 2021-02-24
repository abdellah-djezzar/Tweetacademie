document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault;

    const searchBar = e.value;
    console.log(searchBar);
  });
});
