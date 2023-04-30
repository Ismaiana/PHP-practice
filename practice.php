// Program that greet according with time

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

// String Concatenation

<?php

  echo "He" . "llo";

  echo "\nMy name is:" . " Ismaiana Lima";

  echo "\n" . "dev" . "el" . "oper";

?>

// Variables Syntax 

<?php

 $my_name = "Ismaiana Lima";
 $favorite_food = "sushi and cheesecake ";
 echo "My name is $my_name and my favorite food is $favorite_food"; 

?>

// Concatenating variables

<?php
  echo "I'm going on a picnic!";

  $sentence = "\nI'm going on a picnic, and I'm taking apples";

  echo $sentence;

  $sentence .= ", bananas";
  
   echo $sentence;
   
   $sentence .= ", carrots";

   echo $sentence;
?>

//Assign variable by Reference 

<?php

  $unclear_order = "15 chicken wings";


  $order =& $unclear_order; 

  $order .= ", 1 cheeseburger";

  $order .= ", 3 side salads";
    

  echo "\nYour order is: $unclear_order.";

?>


// Math 

<?php

  $last_month = 1187.23;

  $this_month = 1089.98;

  echo $last_month - $this_month;

  echo $last_month + $this_month;

  echo $last_month * $this_month;

  echo $last_month / $this_month;

  echo $last_month ** $this_month;

  echo 94 - 4.25 + 7 - 23.50 * 1.2 + 20 / 4;


?>

<?php

  $num_languages = 4;

  $months = 11;

  $days = $months * 16;

  $days_per_language = $days / $num_languages;
	
  echo $days_per_language;

?>


<?php

  $my_num = 12;

  $answer = $my_num;

  $answer += 2;

  $answer *= 2;

  $answer -= 2;

  $answer /= 2;

  $answer -= $my_num;

  echo $answer;

?>

// Tracking transactions

<?php

  $riel = 2103942;
  $kyat = 19092;
  $krones = 109;
  $lek = 9094;

  echo "At the start of our transaction we had ${riel} riel, ${kyat} kyat, ${krones} krones, and ${lek} lek.";

  $riel_to_usd = 0.00026;
  $kyat_to_usd = 0.00066;
  $krones_to_usd = 0.11;
  $lek_to_usd = 0.0090;

  $usd_from_riel = $riel * $riel_to_usd;
  echo "\nOur ${riel} riel were exchanged for ${usd_from_riel} usd.";

  $usd_from_kyat = $kyat * $kyat_to_usd;
  echo "\nOur ${kyat} kyat were exchanged for ${usd_from_kyat} usd.";

  $usd_from_krones = $krones * $krones_to_usd;
  echo "\nOur ${krones} krones were exchanged for ${usd_from_krones} usd.";

  $usd_from_lek = $lek * $lek_to_usd;
  echo "\nOur ${lek} lek were exchanged for ${usd_from_lek} usd.";

  $final_amount = $usd_from_riel + $usd_from_kyat + $usd_from_krones + $usd_from_lek - 4;
  echo "\nAfter deducting the transactions fees, we'll be receiving ${final_amount} usd.";

?>


// Functions

<?php

function greetUser()
{
  echo "Hello, User!\n";
  echo "I hope you are doing good!\n";
  echo "Have a great day!";
}

greetUser();

?>


<?php
function printStringReturnNumber()
{
  echo "ERROR: Page not found!\n";
  return 404;
}

$my_num = printStringReturnNumber();

echo $my_num;

?>