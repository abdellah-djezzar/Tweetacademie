document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault;

    let countries;

    const fetchCountries = async () => {
      countries = await fetch("https://restcountries.eu/rest/v2/all?fields=name;population;flag").then((res) =>
        res.json()
      );
    };
  });
});
