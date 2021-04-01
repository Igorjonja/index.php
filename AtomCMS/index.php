<?php include ('config/setup.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <title><?php echo $page_title. ' | ' .$site_title?></title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include ('config/css.php'); ?>

    <?php include ('config/js.php'); ?>

</head>
    <div id="wrap">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>

        </nav> <!--END main navigation-->





        <div class="container">
            <h1>Hello World!
            </h1>

        </div>

    </div>


    <footer  class="footer mt-auto py-3" id="footer">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer> <!--END footer-->






</body>
</html>