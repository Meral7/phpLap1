<?php
$age = 10;
switch ($age) {
    case $age<5:
        echo ("Stay home");
        break;
    case 5:
        echo ("go to kendergarden");
        break;
    case $age>5 && $age<12:
        echo ("go to grade "  );
        echo ( $age - 5);
        break;  
        default:
        echo ("Invalid age");
        break;
}
?>