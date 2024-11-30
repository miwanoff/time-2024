<?php

$daysOfWeek = ['Неділя', 'Понеділок', 'Вівторок', 'Середа', 'Четвер', 'П\'ятница', 'Субота'];
echo "Today " . date("d.m.Y, l") . "\n";
$daysOfWeekN = date("w");
$month = date("m");
$year = date("Y");
echo $daysOfWeek[$daysOfWeekN] . "\n";

echo "<table border='1'>";
echo "<tr>";
for ($i = 1; $i <= count($daysOfWeek); $i++) {
    if ($i == 7) {
        echo "<td>{$daysOfWeek[0]}</td>";
    } else {
        echo "<td>{$daysOfWeek[$i]}</td>";
    }

}
echo "</tr>";
// echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
$firstDay = date("w", mktime(0, 0, 0, $month, 1, $year));

echo $firstDay;
