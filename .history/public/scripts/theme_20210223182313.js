document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("theme").addEventListener("click", () => {
    document.querySelector(".navbar").classList.replace("bg-light", "bg-dark");
    document.querySelectorAll(".a").classList.add("text-primary");
  });
});
