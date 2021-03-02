document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("formEditProfil").addEventListener("click", editProfil);
  document.getElementById("DeleteAccount").addEventListener("click", deleteAccount);

  function editProfil(e) {
    e.preventDefault();

    form = document.getElementById("formEditProfil");
    console.log(form);
    fetch("index.php?action=editProfil", {
      method: "POST",
      body: (data = new FormData(form)),
    })
      .then((response) => response.text())
      .then((response) => {
        document.getElementById("names").innerHTML = "AZERTY";
      })
      .catch((error) => console.log(error));
  }
});
