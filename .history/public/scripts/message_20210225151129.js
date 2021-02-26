document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("sendMessage").addEventListener("submit", (e) => {
    e.preventDefault();
    let message = document.getElementById("message").value;
    let idUser = document.getElementById("user_id").value;
    let form = document.getElementById("sendMessage");
    console.log(form);
    fetch("index.php?action=saveMessage&id_user=" + idUser, {
      method: "POST",
      body: (data = new FormData(form)),
    })
      .then((response) => response.text())
      .then((response) => {
        document.getElementById("viewMessage").innerHTML = message;
      })
      .catch((error) => console.log(error));
  });

  const loadMessage = () => {
    let idUser = document.getElementById("user_id").value;
    fetch("index.php?action=ShowMessageController&user_id=" + idUser)
      .then((response) => response.text())
      .then((response) => {
        document.getElementById("wrap").innerHTML = response;
        loadReTweet();

        const cbox = document.querySelectorAll(".retweet");
        const like = document.querySelectorAll(".likeValue");

        for (let i = 0; i < cbox.length; i++) {
          cbox[i].addEventListener("click", retweet);
        }

        for (let n = 0; n < like.length; n++) {
          like[n].addEventListener("click", likeValue);
        }
      })
      .catch((error) => console.log(error));
  };
});
