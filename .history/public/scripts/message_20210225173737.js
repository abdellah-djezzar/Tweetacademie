document.addEventListener("DOMContentLoaded", function (event) {
  const loadMessage = () => {
    let idUser = document.getElementById("user_id").value;
    fetch("index.php?action=showMessage&id_user=" + idUser)
      .then((response) => response.text())
      .then((response) => {
        document.getElementById("viewMessage").innerHTML = response;
      })
      .catch((error) => console.log(error));
  };

  loadMessage();

  document.getElementById("sendMessage").addEventListener("submit", (e) => {
    e.preventDefault();

    let idUser = document.getElementById("user_id").value;
    let form = document.getElementById("sendMessage");
    console.log(form);
    fetch("index.php?action=saveMessage&id_user=" + idUser, {
      method: "POST",
      body: (data = new FormData(form)),
    })
      .then((response) => response.text())
      .then((response) => {
        loadMessage();
        document.getElementById("viewMessage").innerHTML = response;
      })
      .catch((error) => console.log(error));
  });

  setInterval(loadMessage, 2000);
});
