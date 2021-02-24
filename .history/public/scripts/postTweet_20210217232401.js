document.addEventListener("DOMContentLoaded", function (event) {
  const loadTweet = () => {
    fetch("index.php?action=gettweets")
      .then((response) => response.text())
      .then((response) => {
        document.getElementById("wrap").innerHTML = response;

        function retweet(e) {
          e.preventDefault();
          form = document.querySelector(".retweet");
          console.log(form);
          fetch("index.php?action=retweet", {
            method: "POST",
            body: (data = new FormData(form)),
          })
            .then((response) => response.text())
            .then((response) => {
              console.log(data);
            })
            .catch((error) => console.log(error));
        }

        const cbox = document.querySelectorAll(".retweet");
        console.log(cbox);
        for (let i = 0; i < cbox.length; i++) {
          cbox[i].addEventListener("click", retweet);
        }
      })
      .catch((error) => console.log(error));
  };

  loadTweet();

  document.querySelector("#regForm").addEventListener("submit", (e) => {
    e.preventDefault();
    const inputTweet = document.getElementById("postTweet").value;
    let form = document.querySelector("#regForm");

    fetch("index.php?action=saveTweet", {
      method: "POST",
      body: (data = new FormData(form)),
    })
      .then((response) => response.text())
      .then((response) => {
        console.log(response);
        loadTweet();
      })
      .catch((error) => console.log(error));
  });
  //setInterval(loadTweet, 5000);
});
