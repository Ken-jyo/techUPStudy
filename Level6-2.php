<?php
$d=date("Y年m月d日 H:i:s");
printf("課題１：今日の日付と現在の時間は%sです。\n",$d);
print "</br>";


//明日
$yesterday=date("Y年m月d日",strtotime("-1 day"));
$tomorrow=date("Y年m月d日",strtotime("1 day"));
$nextweek=date("Y年m月d日",strtotime("1 week"));

 
printf( "課題２：昨日は%sです。\n", $yesterday);
printf( "明日は%sです。\n", $tomorrow);
printf( "１週間後は%sです。\n", $nextweek);
print"</br>";

 
 
//指定日の一ヶ月後の日付を計算
$anyday="2025-06-18";
$anyday_aftermonth=date("Y-m-d",strtotime('+3 month',strtotime($anyday)));

$start = new DateTime($anyday);
$end = new DateTime($anyday_aftermonth);
$interval = $start->diff($end);
$days_diff = $interval->days;

printf( "課題３：%sの3ヶ月後は、%sです。\n",$anyday, $anyday_aftermonth);
printf("今日から%d日後です。\n", $days_diff);
print"</br>";

?>