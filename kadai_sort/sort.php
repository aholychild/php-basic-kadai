<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
<p>
<?php
function sort_2way(&$array, $order) {
    if ($order === "ascendant") {
        sort($array); // 昇順ソート
        echo "昇順にソートします。<br>";
        foreach ($array as $num) {
            echo $num . " <br>";
        }
    } elseif ($order === "descendant") {
        rsort($array); // 降順ソート
        echo "降順にソートします。<br>";
        foreach ($array as $num) {
            echo $num . " <br>";
        }
    } else {
        echo "無効な順序が指定されました。";
    }
}

// ソートする配列を宣言
$nums = [15, 4, 18, 23, 10 ];

// 昇順ソート
sort_2way($nums, "ascendant");

// 降順ソート
sort_2way($nums, "descendant");
?>
</p>
 </body>
 
 </html>
