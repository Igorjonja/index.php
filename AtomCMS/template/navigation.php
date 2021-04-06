
<nav class="navbar navbar-expand-sm navbar-light bg-light">

    <?php if($debug ==1) {?>
         <button id="btn-debug" class="btn btn-light" ><i class="fas fa-bug"></i></button>
    <?php } ?>

    <div class="container">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">

                <?php nav_main($dbc, $pageid); ?>


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





