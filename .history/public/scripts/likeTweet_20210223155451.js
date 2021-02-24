document.addEventListener("DOMContentLoaded", function (event) {
  let test = document.querySelectorAll(".likeTweet");
  for (let i = 0; i < test.length; i++) {
    test[i].addEventListener("mouseover", likeTweet);
  }

  function likeTweet(e) {
    e.preventDefault();
    alert("ok");
  }
});
