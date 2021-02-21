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

  function retweet(e) {
    e.preventDefault();
    document.querySelector(".retweet") = e.currentTarget;
    let rt = document.createElement("rt");
    rt.textContent = document.querySelector(".p").value;
    form.appendChild("rt");

    console.log(form);

    fetch("index.php?action=getRetweet", {
      method: "POST",
      body: (data = new FormData(form)),
    })
      .then((response) => response.text())
      .then((response) => {
        console.log(document.querySelector(".p"));
        document.getElementById("wrap").innerHTML = document.querySelector(".p").value;
      })
      .catch((error) => console.log(error));
  }
});
