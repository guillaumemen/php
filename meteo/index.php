<!DOCTYPE HTML>
<html>
<head>
<title>Meteo</title>
</head>
<body>

<?php
$date = getdate();

switch ($hours = $date[“hours”]){

    case ($hours < 8):
    $css = “”;
  break;

  case ($hours < 19):
    $css = “”;
  break;
}
?>


</body>
</html>