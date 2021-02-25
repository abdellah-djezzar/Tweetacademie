document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("deleteAccount").addEventListener("click", editProfil);

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
        console.log(response);
      })
      .catch((error) => console.log(error));
  }
});
