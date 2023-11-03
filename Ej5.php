<?php
$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";
$entries = explode("; ", $data);

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

foreach ($entries as $entry) {
    list($city, $country) = explode(", ", $entry);
    $capitals[] = [
        'city' => $city,
        'country' => $country
    ];
}

var_dump($capitals);
?>