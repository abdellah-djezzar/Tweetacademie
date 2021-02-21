document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault;

    let countries;

    const fetchResult = async () => {
      countries = await fetch("index.php?action=seachMember").then((res) => res.json());
    };
  });
});
