document.addEventListener("DOMContentLoaded", function (event) {
  let test = document.querySelectorAll(".likeValue");
  for (let i = 0; i < test.length; i++) {
    test[i].addEventListener("click", likeTweet);
  }

  function likeTweet(e) {
    e.preventDefault();
    console.log(e);
  }
});
