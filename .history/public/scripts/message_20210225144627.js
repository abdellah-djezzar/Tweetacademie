document.addEventListener("DOMContentLoaded", function (event) {
  let idUser = document.getElementById("user_id").value;
  console.log(idUser);
  document.getElementById("sendMessage").addEventListener("submit", (e) => {
    e.preventDefault();

    let idUser = document.getElementById("user_id").value;
    let form = document.getElementById("sendMessage");
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
