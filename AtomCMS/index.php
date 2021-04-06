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

            <?php include(D_TEMPLATE.'/navigation.php'); ?>

                <div class="container">
                    <h1><?php echo $page['header']; ?> </h1>
                    <?php echo $page['body_formatted']; ?>



                </div>

        </div>

    </main>


    <?php include(D_TEMPLATE.'/footer.php'); ?> <!-- Footer content -->


    <?php if($debug ==1) {
        include ('widgets/debug.php');
    } ?>


</body>
</html>