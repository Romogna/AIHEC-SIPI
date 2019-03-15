<?php
$date = getdate();

switch($date['wday']) {
    case 0: echo "Sunday ";
                  break;
    case 1: echo "Monday ";
                  break;
    case 2: echo "Tuesday ";
                  break;
    case 3: echo "Wednesday ";
                  break;
    case 4: echo "Thursday ";
                  break;
    case 5: echo "Friday ";
                  break;
    case 6: echo "Saturday ";
                  break;
        }

        echo " ";
        echo $date['month'];
        echo " ";
        echo $date['mday'];
        echo ", ";
        echo $date['year'];
?>

