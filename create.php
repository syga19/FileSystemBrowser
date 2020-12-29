<?php 
    // nusirodom is ko pasiemam
    // $dir = $_POST['newDir'];
    // //kuriama nauja direktorija
    // mkdir($dir);
    // //kad butu matoma index.php psl, o ne foldery tik
    // header("location: index.php");

    // if (isset($_POST['newDir'])) {
    //     if (!(is_dir($path . "/" . ($_POST['newDir'])))) {
    //         mkdir($path . "/" . ($_POST['newDir']));
    //     }
    // }
    // header("location: index.php");1

    $path = "./" . $_GET['path'];
    $newDir = $_POST['newDir'];
    if(!file_exists($path . $newDir)) {
        mkdir($path . $newDir);
    }
?>