    <?php include __DIR__ . "/config/router.php";  ?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- import css file  -->
        <?php include "./layout/header-css.php" ?>

        <title>Web Pro 2022</title>
    </head>

    <body class="d-flex flex-column " style="height: 100vh;">
        <?php include "./layout/navbar.php" ?>

        <div class="container">
            <?php
            run();
            function run()
            {
                global $routes;
                $base = $_SERVER['REQUEST_URI'];

                // get index.phg page 
                $page = explode('/', $base)[2];

                if ($page == "index.php") {
                    header("Location:index.php?p=contacts");
                }

                if (isset($_GET["p"])) {
                    $uri =  $_GET["p"];
                }
                $uri = '/' . $uri;

                $found = false;

                foreach ($routes as $path => $callback) {
                    if ($path !== $uri) continue;
                    $found = true;
                    $callback();
                }

                if (!$found) {
                    $notFoundCallback = $routes['/404'];
                    $notFoundCallback();
                }
            }
            ?>

        </div>

        <?php include "./layout/footer.php" ?>
        <!-- import javascript files  -->
        <?php include "./layout/footer-js.php" ?>
    </body>

    </html>