<?php

$nummer1;
$nummer2;
$operator;
$result;

echo "Noem een operator: ";

$operator = readline();

checkValidOperator($operator);

echo 'Noem een getal: ';

$nummer1 = readline();

checkValidNumber($nummer1, $nummer1);


echo "Noem een tweeede getal: ";

$nummer2 = readline();

checkValidNumber($nummer2, $nummer2);

echo $nummer1 . " " . $operator . " " . $nummer2 . " = " . CalcResult($nummer1, $operator, $nummer2);


// ---------------- FUNCTIESS ---------------


function checkValidOperator($operator)
{
  if (($operator == '+') || ($operator == '-') || ($operator == ':') || ($operator == 'x'))
  {
    $operator = $operator;
  }
  else
  {
    echo "Operator is niet geldig. ";
    exit();
  }
}




function checkValidNumber($getal, $orginGetal)
{
  if (is_numeric($getal))
  {
    $orginGetal = $getal;
  }
  else
  {
    echo "Dit is geen getal. ";
    exit();
  }
}




function CalcResult($nummer1, $operator, $nummer2)
{
  switch ($operator) {
    case '+': return $nummer1 + $nummer2;
    case '-': return $nummer1 - $nummer2;
    case ':': return $nummer1 / $nummer2;
    case 'x': return $nummer1 * $nummer2;
    default:
      // code...
      break;
  }
}


 ?>
