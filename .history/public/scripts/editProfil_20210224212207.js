document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("formEditProfil").addEventListener("click", editProfil);

  function editProfil(e) {
    e.preventDefault();

    form = document.getElementById("formEditProfil");
    fetch("index.php?action=editProfil", {
      method: "POST",
      body: (data = new FormData(form)),
    })
      .then((response) => response.text())
      .then((response) => {})
      .catch((error) => console.log(error));
  }
});
