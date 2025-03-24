<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
    <p>
        <?php
        //クラスを定義する
        class Food {
            //プロパティを定義する
            private $name;
            private $price;

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
            // メソッドを定義する
            public function set_price(int $price) {
                $this->price = $price;
        
            }
            public function show_price() {
                echo '<br>'. $this->price . '<br>';
            }
        }  

        class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            public function set_height(int $height) {
                $this->height = $height;
            }
            public function show_height() {
                echo $this->height . '<br>';
            }
            }
        
        // インスタンス化する    
        $food = new Food('potato', 250);
        $animal = new animal('dog', 60, 5000);
            print_r($food);
            echo '<br>';
            print_r($animal);

        // メソッドにアクセスして実行する
        $food->set_price(250);
        $food->show_price();

        $animal->set_height(60);
        $animal->show_height();

        ?>
    </p>
</body>
</html>
        