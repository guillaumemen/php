<!DOCTYPE HTML>
<html>
<head>
<title>Meteo Paris</title>
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

<div id="widget_1">
 <h1><?php echo $json->city_info->Paris; ?></h1>
 <ul>
 <li><span><?php echo $json->fcst_day_0->day_short; ?></span><img src="<?php echo $json->fcst_day_0->icon; ?>"
width="45" height="45" /></li>
 <li><span><?php echo $json->fcst_day_1->day_short; ?></span><img src="<?php echo $json->fcst_day_0->icon; ?>"
width="45" height="45" /></li>
 <li><span><?php echo $json->fcst_day_2->day_short; ?></span><img src="<?php echo $json->fcst_day_2->icon; ?>"
width="45" height="45" /></li>
 </ul>
</div>


</body>
</html>