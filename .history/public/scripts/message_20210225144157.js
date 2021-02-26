document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("sendMessage").addEventListener("submit", (e) => {
    e.preventDefault();

    let idUser = document.getElementById("user_id").value;
    console.log(idUser);
    let form = document.querySelector("#regForm");

    fetch("index.php?action=saveMessage&id_user" + idUser, {
      method: "POST",
      body: (data = new FormData(form)),
    })
      .then((response) => response.text())
      .then((response) => {
        loadTweet();
      })
      .catch((error) => console.log(error));
  });
});
