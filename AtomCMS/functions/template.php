<?php

function nav_main($dbc,$pageid){

    $q = "SELECT * FROM pages;";
    $r = mysqli_query($dbc, $q);

    while($nav = mysqli_fetch_assoc($r)){ ?>

        <li<?php if($pageid ==$nav['id']) {echo ' class="nav-item active"';};?>>
            <a class="nav-link" href="?page=<?php echo $nav['id'];?>"><?php echo $nav['label'];?> <span class="sr-only">(current)</span></a>
        </li>

    <?php }

}



?>