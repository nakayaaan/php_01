<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>じゃんけんゲーム</title>
</head>
<body>

<?php
echo "<h1>じゃんけんゲーム！</h1>";
echo "<p>F5キーを押すとじゃんけんスタート</p>";
    
    $a = rand(1,3);
    if($a==1){
        echo "<img src='img/gu.gif'>";
    }elseif($a==2){
        echo "<img src='img/choki.gif'>";
    }else{
        echo "<img src='img/pa.gif'>";
    }

?>
    
</body>
</html>