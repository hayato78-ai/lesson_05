<?php

$imgs = ["/lion.jpeg", "/cat.jpg", "/dog.jpg"];

$count = count($imgs);

$number = rand(0, $count - 1);

$img = $imgs[$number];

if ($img === "/lion.jpeg"){
     echo "ライオンです";
}
if ($img === "/cat.jpg"){
     echo "猫です";
}
if ($img === "/dog.jpg"){
     echo "犬です";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>おみくじ</title>
  <link rel="imgsstylesheet" href="index.css">
</head>
<body>
  <div class="image__inner">
    <img src="imgs/<?php echo $img; ?>">
  </div><!-- .image__inner -->
</body>
</html>