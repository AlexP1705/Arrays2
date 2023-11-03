<?php
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$countries = explode(",", $country);

$capitals = [
    ['country' =>"Japan"],
    ['country' =>"Mexico"],
    ['country' =>"USA"],
    ['country' =>"India"],
    ['country' =>"Korea"],
    ['country' =>"China"],
    ['country' =>"Nigeria"],
    ['country' =>"Argentina"], 
    ['country' =>"Egypt"],
    ['country' =>"England"]
];

foreach ($countries as $country) {
    $capitals[] = ['country' => $country];
}

var_dump($capitals);
?>