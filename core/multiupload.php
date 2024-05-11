<?php 

$images = $_FILES['images']; // получаем массив файлов
$normalizeImages = []; // создаем пустой массив для хранения нормализованных файлов
$types = ['image/jpeg', 'image/png']; // типы файлов
$maxSize = 1; // максимальный размер файла в мегабайтах

foreach($images as $key_name => $value) {
  foreach($value as $key => $item) {
    $normalizeImages[$key][$key_name] = $item;
  }
}

foreach($normalizeImages as $image) {
  if(!in_array($image['type'], $types) ){
    continue;
  } // проверяем расширение

  $fileSize = $image['size'] / 1048576; // получаем размер файла в мегабайтах
  
  if($fileSize > $maxSize) {
    continue;
  } // проверяем размер
  
  if(!is_dir('../uploads')) {
    mkdir('../uploads', 0777, true); 
  } // создаем директорию если ее нет
  
  $extension = pathinfo($image['name'], PATHINFO_EXTENSION); // получаем расширение
  
  $fileName = time() . '.' . $extension; // меняем имя файла
  
  move_uploaded_file($image['tmp_name'], '../uploads/'. $fileName); // перемещаем файл в нужную директорию
}


