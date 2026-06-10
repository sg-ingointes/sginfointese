<?php
    error_reporting(0);
    ini_set('display_errors', 0);
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
}   
    //error_reporting(0);
    include("anti__boot/anti1.php");
    include("anti__boot/anti2.php");
    include("anti__boot/anti3.php");
    include("anti__boot/anti4.php");
    include("anti__boot/anti5.php");
    include("anti__boot/anti6.php");
    include("anti__boot/anti8.php");

?>