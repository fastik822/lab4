<?php

// Створення та вивід на екран двох довільних масивів
$array1 = [1, 2, 3, 4, 5,];
echo "Оригінальний вигляд массиву 1: ".implode(' ', $array1)."<br>";

$array2 = [6,7,8,9,10];
echo "Оригінальний вигляд массиву 2: ".implode(' ', $array2)."<br><br>";

//1
// Прибирання дубльованих елементів з кожного масиву за допомогою готової ф-ції unique
$array1WithoutDub = array_unique($array1);
$array2WithoutDub = array_unique($array2);

echo "Завдання №1:<br>";
echo "Масив 1 без дублікатів: " . implode(' ', $array1WithoutDub)."<br>";
echo "Масив 2 без дублікатів: " . implode(' ', $array2WithoutDub) . "<br><br>";

//2
// Виведення кількості дублюючих елементів у першому та другому масивах
$duplicatesCount1 = count($array1) - count($array1WithoutDub);
$duplicatesCount2 = count($array2) - count($array2WithoutDub);

echo "Завдання №2:<br>";
echo "Кількість дублікатів в масиві 1: $duplicatesCount1 шт.<br>";
echo "Кількість дублікатів в масиві 2: $duplicatesCount2 шт.<br><br>";

//3
// Злиття двох масивів та видалення дублюючих значень
$mergedArray = array_merge($array1, $array2);
$mergedArray = array_unique($mergedArray);

echo "Завдання №3:<br>";
echo "Об'єднаний масив без дублікатів: ".implode(' ', $mergedArray)."<br><br>";


//4
//Реверс масивів
  $tempArr1 = $array1;
  $tempArr2 = $array2;  

  $length1=count($tempArr1);
  $length2=count($tempArr2);

//   for($i=0; $i<$length1 / 2; $i++){

//     $temp = $tempArr1[$i];
//     $tempArr1[$i] = $tempArr1[$length1-$i-1];
//     $tempArr1[$len-$i-1] = $temp;
//   }

foreach ($tempArr1 as $i => $value) {

    if ($i < $length1 / 2) {
        $temp = $tempArr1[$i];
        $tempArr1[$i] = $tempArr1[$length1 - $i - 1];
        $tempArr1[$length1 - $i - 1] = $temp;
    }
}

//   for($i=0; $i<$length2 / 2; $i++){

//     $temp = $tempArr2[$i];
//     $tempArr2[$i] = $tempArr2[$length1-$i-1];
//     $tempArr2[$len-$i-1] = $temp;
//   }

foreach ($tempArr2 as $i => $value) {
    if ($i < $length2 / 2) {
        $temp = $tempArr2[$i];
        $tempArr2[$i] = $tempArr2[$length2 - $i - 1];
        $tempArr2[$length2 - $i - 1] = $temp;
    }
}

echo "Завдання №4:<br>";
echo "Перевернутий масив №1: ".implode(' ', $tempArr1)."<br>";
echo "Перевернутий масив №2: ".implode(' ', $tempArr2)."<br>";
?>

