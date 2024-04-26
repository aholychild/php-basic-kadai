<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
 <div>
        <?php
        function sort_2way(&$array, $order) {
            if ($order === "ascendant") {
                sort($array); // 昇順ソート
            } elseif ($order === "descendant") {
                rsort($array); // 降順ソート
            } else {
                echo "無効な順序が指定されました。";
            }
        }
        
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // 昇順ソート
        sort_2way($nums, "ascendant");
        echo "昇順にソートします。";
        echo "<br>";
        foreach ($nums as $num) {
            echo $num . " ";
            echo "<br>";
        }

        // 降順ソート
        sort_2way($nums, "descendant");
        echo "降順にソートします。";
        echo "<br>";
        foreach ($nums as $num) {
            echo $num . " ";
            echo "<br>";
        }
        ?>
    </div>
 </body>
 
 </html>