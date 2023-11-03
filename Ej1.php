<?php
$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires,Cairo,London";
$cities = explode(",", $city);

$capitals = [ 
['city' =>"Tokyo"],
['city' =>"Mexico City"],
['city' =>"New York City"],
['city' =>"Mumbai"],
['city' =>"Seoul"],
['city' =>"Shanghai"],
['city' =>"Lagos"],
['city' =>"Buenos Aires"], 
['city' =>"Cairo"],
['city' =>"London"]
];

foreach ($cities as $city) {
    $capitals[] = ['city' => $city];
}

var_dump($capitals);
?>