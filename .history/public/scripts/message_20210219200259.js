document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    const results = document.getElementById('results');
    let countries;

    const fetchResult = async () => {
      countries = await fetch("index.php?action=seachMember")
      .then((res) => res.json());
    };

    const showCountries = async () => {
      results.innerHTML = '';
  
      await fetchResult();
  
  });
});
