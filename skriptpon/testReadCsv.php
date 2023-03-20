<?php
$csv = "source/menu.csv";
$f = fopen($csv, "r");
$menuCsv = [];
$line = fgetcsv($f, 50, ",");
while($line != FALSE OR $f != FALSE){
    $menuCsv[$line[0]] = ["path" => $line[1], "name" => $line[2]];
    $line = fgetcsv($f, 50, ",");
}

