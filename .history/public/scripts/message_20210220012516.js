document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
    e.preventDefault();
    const searchBar = e.target.value;

    fetch("index.php?action=SearchMember&pseudo=" + searchBar, {
      method: "GET",
      headers: {
        "Content-Type": "application/json; charset=utf-8",
      },
    })
      .then((res) => res.json()) // la réponse
      .then((data) => {
        if (data !== "error") {
          var n = data.length; //length of datalist tags
          function ac(value) {
            document.getElementById("datalist").innerHTML = "";
            //setting datalist empty at the start of function
            //if we skip this step, same name will be repeated

            l = value.length;
            //input query length
            for (var i = 0; i < n; i++) {
              if (tags[i].toLowerCase().indexOf(value.toLowerCase()) > -1) {
                //comparing if input string is existing in tags[i] string

                var node = document.createElement("option");
                var val = document.createTextNode(tags[i]);
                node.appendChild(val);

                document.getElementById("datalist").appendChild(node);
                //creating and appending new elements in data list
              }
            }
          }

          document.getElementById("myData").innerHTML = JSON.stringify(data);
        } else {
          document.getElementById("myData").innerHTML = "";
        }
      })

      .catch((err) => {
        console.log("u");
      });
  });
});
