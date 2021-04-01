<?php include ('config/setup.php'); ?>
<!doctype html>
<html lang="en" class="h-100">
<head>
    <title><?php echo $page['title']. ' | ' .$site_title?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include ('config/css.php'); ?>

    <?php include ('config/js.php'); ?>

</head>
<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <div id="wrap">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav mr-auto">
                            <li<?php if($pageid ==1) {echo ' class="nav-item active"';};?>>
                                <a class="nav-link" href="?page=1">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li<?php if($pageid ==2) {echo ' class="nav-item active"';} ?>>
                                <a class="nav-link" href="?page=2">About Us</a>
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
                <h1><?php echo $page['header']; ?> </h1>
                <p><?php echo $page['body']; ?> </p>

            </div>

        </div>

    </main>

    <footer  class="footer mt-auto py-3" id="footer">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer> <!--END footer-->






</body>
</html>