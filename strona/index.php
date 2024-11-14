<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziala</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark text-white" style="text-align: center; justify-content: center;">
<BR><BR><BR><BR><BR><BR><BR><BR><BR>
    <form action="index.php" method="GET">
        <input type="text" style="width: 300px;" name="username" id="user"><BR><BR>
        <input type="text" style="width: 250px;" name="message" id="msg"><BR><BR>
        <input type="submit" class="btn btn-secondary" value="Wyślij wiadomość">
    </form>
</body>
</html>




<?php
    if(isset($_GET)){
        $user_message = "<BR><b>".$_GET["username"]."</b>: ".$_GET["message"];
        $myfile = fopen("czat.txt", "a") or die("Unable to open file!");
        fwrite($myfile, $user_message);
        fclose($myfile);
    }
    $myfile = fopen("czat.txt", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("czat.txt"));
    fclose($myfile);
?>