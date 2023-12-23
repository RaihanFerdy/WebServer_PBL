<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBLRKS-301</title>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center; /* Center the content */
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #555;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        h1 {
            text-align: center;
            padding: 20px;
        }

        @media only screen and (max-width: 600px) {
            nav {
                flex-direction: column;
            }

            nav a {
                margin: 5px 0;
            }
        }

        #btns {
            /* Remove margin styles */
        }

    </style>
</head>
<body>
    <header>
        <h1>PBLRKS-301 - LOAD BALANCER</h1>
    </header>


    <?php
    session_start();

    if (isset($_SESSION['nama'])) {

        echo "<h1>Selamat Datang " . $_SESSION['nama'] . " di server 1</h1>";
        echo "<a id='btns' class='btn btn-secondary ' href=\"logout.php\">Logout</a>";

    } else {
        header("Location: index.html");
    }

    ?>
</body>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<script src="assets/js/main.js"></script>
</html>
