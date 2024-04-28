<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>      
<p>
<?php
// クラスを定義する
class Food {
    // プロパティを定義する                        
    private $name;
    private $price;

    // コンストラクタを定義する
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // price プロパティの値を出力するメソッド
    public function show_price() {
        echo $this->price . "<br>";
    }
}

// インスタンス化する
$food = new Food('potato', 250);

// インスタンス$foodの各プロパティの値を出力する
print_r($food);
echo "<br>";

// クラスを定義する
class Animal {
    // プロパティを定義する                        
    private $name;
    private $height;
    private $weight;

    // コンストラクタを定義する
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // height プロパティの値を出力するメソッド
    public function show_height() {
        echo  $this->height . "<br>";
    }
}

// インスタンス化する
$animal = new Animal('dog', 60, 5000);

// インスタンス$animalの各プロパティの値を出力する
print_r($animal); 
echo "<br>"; 

// Food クラスの show_price メソッドを実行する
$food->show_price();

// Animal クラスの show_height メソッドを実行する
$animal->show_height();    
?>
</p>     
 </body> 
 </html>