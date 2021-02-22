document.addEventListener("DOMContentLoaded", function (event) {
  const loadTweet = () => {
    fetch("index.php?action=gettweets")
      .then((response) => response.text())
      .then((response) => {
        document.getElementById("wrap").innerHTML = response;
        const cbox = document.querySelectorAll(".retweet");
        for (let i = 0; i < cbox.length; i++) {
          cbox[i].addEventListener("click", retweet);
        }
      })
      .catch((error) => console.log(error));
  };

  document.querySelector("#postFormMessage").addEventListener("submit", (e) => {
    e.preventDefault();
    const inputMessage = document.getElementById("postMessages").value;
    let form = document.querySelector("#postFormMessage");

    fetch("index.php?action=messagerie", {
      method: "POST",
      body: (data = new FormData(form)),
    })
      .then((response) => response.text())
      .then((response) => {})
      .catch((error) => console.log(error));
  });
});
