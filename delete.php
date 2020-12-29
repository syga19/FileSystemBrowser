<?php

    // $dir = $_POST['dir'];
    
    // rmdir($dir);
    

    // trina tik tai Jonas.txt 
    //ISSIAISKINTI SITA
    // $file='Jonas.txt';

    // // if(unlink($file))
    // // {
    // //     echo "file named $file has been deleted successfully";
    // // }
    // // else
    // // {
    // //     echo "file is not deleted";
    // // }
    // if(file_exists($file)) {
    //     unlink($file);
    // }
    
    // header("location: index.php?deletesuccess");
    
    $fullFolderPath = $directory.$path; 

    $directory = getcwd();
    $path="";

    if (isset($_POST['delete_file'])) {
        $file_name = $_POST['file_name'];
        unlink($fullFolderPath . $file_name);
    }
    
    header("location: main.php?deletesuccess");

?>