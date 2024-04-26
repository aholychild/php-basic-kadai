<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編12章課題</title>
 </head>
 
 <body>
     <p>
        <?php
        $vegitable_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
        // 連想配列$vegitable_dataのキーと値を1つずつ順番に出力する
        foreach ($vegitable_data as $key => $value) {
            echo "{$key}：{$value}<br>";
        }
        ?>
     </p>
     
 </body>
 
 </html>