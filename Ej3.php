<?php
$city = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];
$country = ["Japan", "Mexico", "USA", "India", "Korea", "China", "Nigeria", "Argentina", "Egypt", "England"];

$capitals = [
    [
        'country' =>"Japan",
        'city' =>"Tokyo"
    ],
    [
        'country' =>"Mexico",
        'city' =>"Mexico City"
    ],
    [
        'country' =>"USA",
        'city' =>"New York City"
    ],
    [
        'country' =>"India",
        'city' =>"Mumbai"
    ],
    [
        'country' =>"Korea",
        'city' =>"Seoul"
    ],
    [
        'country' =>"China",
        'city' =>"Shanghai"
    ],
    [
        'country' =>"Nigeria",
        'city' =>"Lagos"
    ],
    [
        'country' =>"Argentina", 
        'city' =>"Buenos Aires" 
    ],
    [
        'country' =>"Egypt",
        'city' =>"Cairo"
    ],
    [
        'country' =>"England",
        'city' =>"London"
    ]
];

for ($i = 0; $i < count($city); $i++) {
    $capitals[] = [
        'country' => $country[$i],
        'city' => $city[$i]
    ];
}

var_dump($capitals);
?>