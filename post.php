<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrystalMark X24</title>
    <link rel="stylesheet" href="css/style.css">
    <script
        src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
        crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <div class="container">  
            <h1>CrystalMark X24</h1>
            <div class="menu">
                <button id="benchmark" class="button-053">
                    ベンチマーク 
                </button>
            </div>
            <div style="text-align: center;">
            <form action="write.php" method="POST">
                <textarea id="result" name="result" rows="4" cols="80"></textarea>
                <br>
                <input type="submit" value=" ベンチマーク結果登録 ">
            </form>
            </div>
        </div>
    </main>
    <script type="module">
        // 超簡易ベンチマーク
        function benchmark() {
            // ベンチマーク対象の処理を実行する前のタイムスタンプを取得
            const startTime = performance.now();
        
            // ベンチマークの実行回数
            const iterations = 10000000;
        
            for (let i = 0; i < iterations; i++) {
                // テストしたいコードのセクション
                // 例: 配列のソート
                const array = [5, 3, 1, 4, 2];
                array.sort();
            }  
            // ベンチマーク対象の処理を実行した後のタイムスタンプを取得
            const endTime = performance.now();

            // 実行時間を計算
            const executionTime = endTime - startTime;

            // 整数に変換して返す
            return Math.floor(executionTime);
        }

        // benchmark クリックイベント
        $("#benchmark").on("click", function(){
            const key = Math.floor((Math.random() * 1000000) + 1);
            const single = benchmark();
            const platform = "Web";
            const cpu = "Unknown";
            const system = "Unknown";
            const now = new Date();
            const date = now.toLocaleString();

            const jsonValue = {
                "id": key,
                "single": single,
                "platform": platform,
                "cpu": cpu,
                "system": system,
                "date": date
            };

            const json = JSON.stringify(jsonValue);
            $("#result").val(json);
        });
    </script>    
</body>
</html>