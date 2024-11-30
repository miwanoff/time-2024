<?php

// $t = time();
// echo $t;

echo date("Сьогодні l d F Y H:i:s") . "\n";
echo date("d.m.Y") . "\n";
$nextWeek = time() + (37 * 24 * 60 * 60);
echo date("l d F Y h:i:s A", $nextWeek) . "\n";

function age($bMonth, $bDay, $bYear)
{
    $cMonth = date('n'); // поточний місяць (1-12)
    $cDay = date('j'); //поточний день місяця без нулів (1-31)
    $cYear = date('Y'); // поточний рік (чотири разряди)
    if (($cMonth >= $bMonth && $cDay >= $bDay) || ($cMonth > $bMonth)) {
        return ($cYear - $bYear);
    } else {
        return ($cYear - $bYear - 1);
    }
}
echo age(10, 22, 2003);

$loc = setlocale(LC_ALL, '') . "\n";
echo "На цій системі локаль по замовчуванню: $loc" . "\n";
// $loc_de = setlocale(LC_ALL, 'de_DE', 'de', 'ge');
$loc_ua = setlocale(LC_ALL, 'Ukrainian_Ukraine', 'Ukrainian_Ukraine', 'Ukrainian_Ukraine');
echo "На цій системі  локаль має ім'я: $loc_ua" . "\n";
echo iconv("windows-1251", "utf-8", @strftime("%A %d %B %Y %X"));
//echo @strftime("%A %d %B %Y %X");

// echo strtotime("1/10/2018");
// echo strtotime("10 September 2018");

echo iconv("windows-1251", "utf-8", @strftime("%A : %d,%B,%Y", strtotime("12/23/2018")));

$d = getdate(); // использовано текущее время
foreach ($d as $key => $val) {
    echo "$key = $val \n";
}

echo "Сегодня: $d[mday].$d[mon].$d[year]";

$months = array('Січень', 'Лютий', 'Березень', 'Квітень', 'Травень', 'Червень', 'Липень', 'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень');
$days = array('Неділя', 'Понеділок', 'Вівторок', 'Середа', 'Четвер', 'П\'ятница', 'Субота');
$nowdate = getdate();
print_r($nowdate);
echo $nowdate['wday'] . ' Число: ', $nowdate['mday'], ', місяць: ', $months[$nowdate['mon'] - 1], ', день тижня: ', $days[$nowdate['wday']];
echo "\n";
$jd = GregorianToJD(10, 11, 1900);
echo "$jd\n";

$gregorian = JDToGregorian($jd);
echo "$gregorian\n";

echo GregorianToJD(01, 01, 2015) - GregorianToJD(11, 01, 2014);
echo "\n";
echo JDDayOfWeek(GregorianToJD(11, 11, 1900), 1);
if (checkdate(2, 28, 2003)) {
    echo ":)";
} else {
    echo ":(";
}
