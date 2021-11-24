<?php
// Task 1

$i = 0;
while($i <= 100) {
    if ($i % 3 == 0) {
        echo $i;
    } 
    $i++;
}
?>

<?php
// Task 2
$i = 0;
do {
    if ($i == 0) {
        echo "$i - 'это ноль;";
    }
    elseif ($i % 2 == 0) {
        echo "$i - 'это четное число;";
    } 
    else {
        echo "$i - 'это нечетное число;";
    }
    $i++;
} while ($i <= 10);
?>

<?php
// Task 3

$areas = [
    "Московская область" => [
        "Москва",
        "Зеленоград",
        "Клин"
    ],
    "Ленинградская область" => [
        "Санкт-Петербург",
        "Волхов",
        "Пушкин",
        "Всеволжск"
    ],
    "Рязанская область" => [
        "Рязань",
        "Кадомский",
        "Касимовский"
    ]
];
foreach ($areas as $area => $cities) {
    echo ("$area : ".implode(", ", $cities)."</br>");
}
?>

<?php
// Task 4

$str = "Катя";
function translate($str) {
	$alphabet = [
		"a" => "а",
		"б" => "b",
		"в" => "v",
		"г" => "g",
		"д" => "d",
		"е" => "e",
		"ж" => "zh",
		"з" => "z",
		"и" => "i",
		"й" => "y",
		"к" => "k",
		"л" => "l",
		"м" => "m",
		"н" => "n",
		"о" => "o",
		"п" => "p",
		"р" => "r",
		"с" => "s",
		"т" => "t",
		"у" => "u",
		"ф" => "f",
		"х" => "kh",
		"ц" => "ts",
		"ч" => "ch",
		"ш" => "sh",
		"щ" => "shch",
		"ы" => "y",
		"ь" => "`",
		"ъ" => "ie",
		"э" => "e",
		"ю" => "iu",
		"я" => "ia"
	];
	
	$word = strtr($str, $alphabet);
	echo $word;
};
translate($str);
?>

<?php
// Task 5

$str = 'aba bcd Ryts   srt ';
function replaceWhiteSpace($str) {
	echo str_replace(" ", "_", $str);
};
replaceWhiteSpace($str);
?>

<!-- Task 6 -->

<ul>
    <?php
        $menu = [
            "Главная" => array(),
            "Каталог" => array(
                "одежда",
                "обувь",
                "аксессуары"
            ),
            "Контакты" => array(),
            "О нас" => array(
                "наша команда",
                "чем мы занимаемся"
            )
        ];
        
        foreach($menu as $key => $element):?>
        <?php if(!empty($element)):?>
            <li><?= $key?>
                <ul>
                <?php
                    foreach($element as $submenuEl):?>
                        <li>Подкатегория: <?=$submenuEl?></li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <?php else: ?>
            <li><?=$key?> </li>
            <?php endif; ?>
        <?php endforeach; ?>
</ul>


<?php
// Task 7

for($i = 0; $i < 10; print($i++)){};
?>

<?php
// Task 8

$obl = [
    "Московская область" => [
        "Москва",
        "Зеленоград",
        "Клин"
    ],
    "Ленинградская область" => [
        "Санкт-Петербург",
        "Волхов",
        "Пушкин",
        "Всеволжск"
    ],
    "Рязанская область" => [
        "Рязань",
        "Кадомский",
        "Касимовский"
    ]
];
foreach ($obl as $area => $cities) {
	echo ("$area: ");
	foreach($cities as $city) {
		if (mb_substr($city, 0, 1, "utf-8") == "К") {
			echo ("$city"."</br>");
		};
	};
}
?>

<?php
//Task 9

$str = "мама мыла раму";

function trans($str) {
	$alphabet = [
		"a" => "а",
		"б" => "b",
		"в" => "v",
		"г" => "g",
		"д" => "d",
		"е" => "e",
		"ж" => "zh",
		"з" => "z",
		"и" => "i",
		"й" => "y",
		"к" => "k",
		"л" => "l",
		"м" => "m",
		"н" => "n",
		"о" => "o",
		"п" => "p",
		"р" => "r",
		"с" => "s",
		"т" => "t",
		"у" => "u",
		"ф" => "f",
		"х" => "kh",
		"ц" => "ts",
		"ч" => "ch",
		"ш" => "sh",
		"щ" => "shch",
		"ы" => "y",
		"ь" => "`",
		"ъ" => "ie",
		"э" => "e",
		"ю" => "iu",
		"я" => "ia"
	];
	
	$word = str_replace(" ", "_", strtr($str, $alphabet));
	echo $word;
};
trans($str);
?>