<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // クラスの作成
        class Food {
          // プロパティの定義
          private $name;
          private $price;

          // メソッドの定義
          public function show_price() {
            echo $this->price . '<br>';
          }

          // コンストラクタを定義する
          public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }
        }

        // クラスの作成
        class Animal {
          // プロパティの定義
          private $name;
          private $height;
          private $weight;

          // メソッドの定義
          public function show_height() {
            echo $this->height . '<br>';
          }

          // コンストラクタを定義する
          public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
        }
        
        // インスタンス化する
        $food = new Food('potato', 250);
        $animal = new Animal('dog', 60, 5000);

        // プロパティの値を出力する
        print_r($food);
        print_r($animal);
       
        // メソッドにアクセスして実行する
        $food->show_price();
        $animal->show_height();
        ?>
    </p>
</body>

</html>
