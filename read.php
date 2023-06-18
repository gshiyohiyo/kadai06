<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrystalMark X24</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
    <h1>CrystalMark X24</h1>
    <div class="container">
        <p style="text-align: center;"><a href="post.php">ベンチマーク結果登録</a></p>  
    <div id="list">
<?php

$fp = fopen('data/data.txt', 'r');
while ($line = fgets($fp)) {
    $array = explode(',', $line);
 
    $id = $array[0];
    $platform = $array[1];
    $date = $array[2];
    $cpu = $array[3];
    $system = $array[4];
    $single = $array[5];

    $message = <<< EOM
    <div class="grid">
        <div class="id">ID: {$id}</div>
        <div class="platform">OS: {$platform}</div>
        <div class="date">{$date}</div>
        <div class="cpu">CPU: {$cpu}</div>
        <div class="system">SYS: {$system}</div>
        <div class="single">{$single}</div>
    </div>
    EOM;
    echo $message;
}
fclose($fp);
?>            
        </div>
    </div>
    </main>
</body>
</html>