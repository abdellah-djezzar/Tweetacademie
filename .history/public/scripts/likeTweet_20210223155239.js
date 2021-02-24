document.addEventListener("DOMContentLoaded", function (event) {
  let test = document.querySelectorAll(".like");
  for (let i = 0; i < test.length; i++) {
    test[i].addEventListener("mouseover", likeTweet);
  }

  function likeTweet(e) {
    e.preventDefault();
    alert("ok");
  }
});
