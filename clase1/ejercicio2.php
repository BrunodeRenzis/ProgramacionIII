<?php
$currentDay = new DateTime();

// get the season dates
$fall = new DateTime('March 20');
$winter = new DateTime('June 20');
$spring = new DateTime('September 22');
$summer = new DateTime('December 21');

switch(true) {
    case $currentDay >= $spring && $currentDay < $summer:
        echo 'Estamos en primavera';
        break;

    case $currentDay >= $summer && $currentDay < $fall:
        echo 'Estamos en verano';
        break;

    case $currentDay >= $fall && $currentDay < $winter:
        echo 'Estamos en otoño';
        break;

    default:
        echo 'Estamos en invierno';
}
?>