<?php
function getTextColor($backgroundColor) {
   
    list($r, $g, $b) = sscanf($backgroundColor, "#%02x%02x%02x");

    
    $brightness = (($r * 299) + ($g * 587) + ($b * 114)) / 1000;


    return $brightness > 125 ? 'black' : 'white';
}
?> 