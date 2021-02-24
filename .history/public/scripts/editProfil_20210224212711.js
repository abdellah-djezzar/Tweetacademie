document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("formEditProfil").addEventListener("click", editProfil);

  function editProfil(e) {
    e.preventDefault();

    form = document.getElementById("formEditProfil").value;
    fetch("index.php?action=profil#editprofil", {
      method: "POST",
      body: (data = new FormData(form)),
    })
      .then((response) => response.text())
      .then((response) => {
        console.log(response);
      })
      .catch((error) => console.log(error));
  }
});
