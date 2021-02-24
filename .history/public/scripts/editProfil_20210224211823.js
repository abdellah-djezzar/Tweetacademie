document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("formEditProfil").addEventListener("click", editProfil);

  function editProfil(e) {
    e.preventDefault();

    fetch("index.php?action=editprofil", {
      method: "POST",
      body: (data = new FormData(btn)),
    })
      .then((response) => response.text())
      .then((response) => {
        document.getElementById("unsubBtn").value = "s'abonner";
      })
      .catch((error) => console.log(error));
  }
});
