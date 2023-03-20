<?php
$header = ['nazov_listu', 'path', 'name'];
$menu = [
    'home' => [
        'path' => 'index.php',
        'name' => 'Domov',
    ],
    'portfolio' => [
        'path' => 'portfolio.php',
        'name' => 'Portfólio',
    ],
    'faq' => [
        'path' => 'qna.php',
        'name' => 'Q&A',
    ],
    'contact' => [
        'path' => 'kontakt.php',
        'name' => 'Kontakt',
    ],
];

$f = fopen('source/menu.csv', 'w');
// fputcsv($f, $header);
foreach($menu as $key => $item){
    $a = [$key, $item['path'], $item['name']];
    fputcsv($f, $a);
}

fclose($f);