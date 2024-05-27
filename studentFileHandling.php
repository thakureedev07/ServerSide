<!-- File Reading -->
<?php
    $myfile = fopen("./texts/test.txt", "r") 
    or die("Unable to open file!");
    echo fread($myfile,filesize("./texts/test.txt"));
    fclose($myfile);
?>
<!-- File Writing -->
<?php
    $myfile = fopen("./texts/welcome.txt", "r") 
    or die("Unable to open file!");

    $prev=fread($myfile,filesize("./texts/welcome.txt"));

    $myfile = fopen("./texts/welcome.txt", "w") 
    or die("Unable to open file!");

    $newText="Hi Dev, ".$prev." The weather is rainy ";

    fwrite($myfile,$newText);
?>