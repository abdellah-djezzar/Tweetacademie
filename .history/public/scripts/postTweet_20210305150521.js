document.addEventListener("DOMContentLoaded", function (event) {
  const loadTweet = () => {
    fetch("index.php?action=gettweets")
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

  const loadReTweet = () => {
    fetch("index.php?action=getRetweets")
      .then((response) => response.text())
      .then((response) => {
        document.getElementById("wrap").innerHTML = response;
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
        loadTweet();
      })
      .catch((error) => console.log(error));
  });
  //setInterval(loadTweet, 5000);

  function retweet(e) {
    e.preventDefault();
    let form = document.querySelector(".retweet").value;
    fetch("index.php?action=saveRetweet&id_retweet=" + e.target.value, {
      method: "POST",
      body: (data = new FormData(form)),
    })
      .then((response) => response.text())
      .then((response) => {
        document.getElementById("wrap").innerHTML = response;
        loadReTweet();
      })
      .catch((error) => console.log(error));
  }

  function likeValue(e) {
    e.preventDefault();
    fetch("index.php?action=LikeController&id_tweet=" + e.target.value, {
      method: "POST",
    })
      .then((response) => response.text())
      .then((response) => {
        e.target.innerHTML = response;
      })
      .catch((error) => console.log(error));
  }

  document.querySelector(".add-tweet").addEventListener("keyup", (e) => {
    document.getElementById("count").innerHTML = "Characters left: " + (500 - this.value.length);
  });
});
