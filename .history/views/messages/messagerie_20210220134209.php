<?php
if (isset($_GET['pseudo'])) {
    header('Content-Type: application/json');
    echo json_encode(['data' => "test"]);
} else { ?>


    <p> Home Messagerie </p>
    <input type="text" id="searhBarMessage" name="searchBarMessage">
    <p id="myData"></p>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            document.getElementById("searhBarMessage").addEventListener("keyup", (e) => {
                e.preventDefault();
                const searchBar = e.target.value;

                fetch("messagerie.php?pseudo=test", {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json; charset=utf-8",
                    },
                })
                    .then((res) => res.json()) // la réponse
                    .then((data) => {
                        console.log(data);

                    })

                    .catch((err) => {
                        console.log("u");
                    });
            });
        });

    </script>

<?php }
?>