<?php
    $title = "Main PHP";
    require "./components/header.php";
?>

<h1>Main Page</h1>

<div class="container mt-1">
    <?php 
        require "./components/formGet.php";
    ?>    
<div>

<?php
    // $file = fopen("text.txt", "a");
    // fwrite($file, "Hello world3");
    // fclose($file);
    $filename = "text.txt";
    $file = fopen($filename, "r");
    $content = fread($file, filesize($filename));
    fclose($file);
    echo $content;
?>

<?php
    require "./components/footer.php";
?>