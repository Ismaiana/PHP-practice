<?php
$time = date("H");

if ($time < "12") {
    echo "Good morning!";
} elseif ($time < "18") {
    echo "Good afternoon!";
} else {
    echo "Good evening!";
}
?>