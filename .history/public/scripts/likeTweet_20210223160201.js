document.addEventListener("DOMContentLoaded", function (event) {
  let test = document.querySelectorAll(".likeValue");
  for (let i = 0; i < test.length; i++) {
    test[i].addEventListener("click", likeTweet);
  }

  function likeTweet(e) {
    e.preventDefault();
    let form = document.querySelector('.likeValue');
    fetch("index.php?action=LikeController&id_tweet=" + e.target.value, {
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
  }
});
