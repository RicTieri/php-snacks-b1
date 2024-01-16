<?php
  $num1 = is_numeric($_GET['input1']);
  $num2 = is_numeric($_GET['input2']);
  $num3 = is_numeric($_GET['input3']);
  $media = ($num1 + $num2 + $num3) / 3;
  // $output = json_encode($media)
  echo json_encode($media);