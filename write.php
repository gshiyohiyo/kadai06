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
        <div class="container">  
            <h1>CrystalMark X24</h1>

<?php
    $json = json_decode($_POST['result'], true);
    // var_dump($json);
 
    $id = $json["id"];
    $platform = $json["platform"];
    $date = $json["date"];
    $cpu = $json["cpu"];
    $system = $json["system"];
    $single = $json["single"];

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

    $data = "{$id},{$platform},{$date},{$cpu},{$system},{$single}\n";

    $fp = fopen('data/data.txt', 'a');
    fputs($fp, $data);
    fclose($fp);
?> 

            <p style="text-align: center;"><a href="read.php">登録結果確認</a></p>          
        </div>
    </main>
</body>
</html>