document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("sendMessage").addEventListener("submit", (e) => {
    e.preventDefault();
    const inputTweet = document.getElementById("postTweet").value;
    let form = document.querySelector("#regForm");

    fetch("index.php?action=saveMessage&id_user" + id_user, {
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
