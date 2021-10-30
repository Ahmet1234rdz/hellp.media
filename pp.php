<?php

error_reporting(0);
require("load.php");

$username = $_SESSION["username"];

$url = "https://smihub.com/v/$username";
$ig = str_get_html(file_get_contents($url));


$qenzy = $ig->find("div[class='user__img']", 0)->style;
$pp = substr($qenzy, 27, -4);                                                                                                                                                                                                            


