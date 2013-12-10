<?php
//Gets the clients IP address
$ip = $_SERVER['REMOTE_ADDR'];
$file = file_get_contents("bannedips.txt");

//Checks if it's in bannedips.txt 
//If it is it's banned form the website
if (!(strstr($file, $ip))) {
    echo "You have not been banned.";
}
else {
    echo "you have been banned";
}

?>
