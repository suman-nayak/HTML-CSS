<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Contact - Wanderlust Travels</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="container mt-5">

        <h1 class="text-center mb-4">
            Contact Us
        </h1>

        <?php

        if(isset($_POST["submit"])){

            $name = $_POST["name"];

            echo "<div class='alert alert-success'>";
            echo "Thank you ".$name." for contacting Wanderlust Travels!";
            echo "</div>";

        }

        ?>

        <form method="post" action="">

            <div class="mb-3">

                <label class="form-label">
                    Name
                </label>

                <input type="text"
                       name="name"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Email
                </label>

                <input type="email"
                       name="email"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Message
                </label>

                <textarea name="message"
                          class="form-control"
                          rows="5"
                          required></textarea>

            </div>

            <button type="submit"
                    name="submit"
                    class="btn btn-primary">

                Submit

            </button>

        </form>

    </div>

    <?php include "footer.php"; ?>

</body>

</html>