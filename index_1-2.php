<?php
 
  $arr = array(
    "name" => "Gal",
    "idNum" => "0123456789",
    "bDate" => "1999-07-05"
  );
 foreach ($arr as $value) {
   echo $value.'<br>';
  };
  foreach ($arr as $key => $value) {
    if($key == "name"){
      echo '<h1>'.($value).'</h1>';
    };
    if($key == "idNum"){
      echo '<p style="color:green; text-decoration:underline;">'.($value).'</p>';
    };
    if($key == "bDate"){
      $newDate = date("Y-m-d",strtotime($value));
      echo '<input type="date" name="date" value="'.$newDate.'" />';
    };

  };
?>