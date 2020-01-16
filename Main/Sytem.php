<?php
  $bmishow = 0;
  if (isset($_POST['height']) && isset($_POST['height'])) {
    if ($_POST['height'] > 0 && ($_POST['weight']) > 0){
    
    $height = $_POST['height'] / 100;
    
    $weight = $_POST['weight'];
    
    $bmi = $weight / pow($height, 2);
    $bmishow = number_format($bmi, 2);
    echo $bmishow;
  } else {
    echo 0;
  }
   
 }


?>