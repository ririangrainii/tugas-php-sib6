<div style="height: 700px">

    <?php
    $hal = $_GET['hal'];
    if(!empty($hal)){
        include_once $menu_bawah[$hal];
    }
    else{
        include_once "home.php";
    }

    ?>
    </div>