document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("formEditProfil").addEventListener("click", editProfil);

  function editProfil(e) {
    e.preventDefault();

    fetch("index.php?action=editprofil", {
      method: "POST",
      body: (data = new FormData(btn)),
    })
      .then((response) => response.text())
      .then((response) => {})
      .catch((error) => console.log(error));
  }
});
