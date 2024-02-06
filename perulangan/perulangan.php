<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perulangan</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- cirikhas -->
    <div class="container">
            <div class="popup open-popup" id="popup">
                <img src="img/DSC_0192.JPG" alt="" style="width: 9rem" />
                <h2>Characteristic me</h2>
                <div class="paragrap">
                    <p>Deden ahmad jamil succesfully submitted. thanks!</p>
                    </div>
            </div>
        </div>
    <!-- cirikhas -->

   <p>
        Dalam PHP,
        kami memiliki jenis loop berikut:

        while - mengulang blok kode selama kondisi yang ditentukan benar
        do... while - mengulang satu blok kode satu kali, lalu mengulangi perulangan selama kondisi yang ditentukan benar
        for - mengulang blok kode beberapa kali tertentu
        untuk setiap -
        loop melalui blok kode untuk setiap elemen dalam array
        Bab berikut akan menjelaskan dan memberikan contoh masing-masing jenis loop.
   </p>

    <!-- Perulangan -->
    <h2>Perulangan</h2>
    <p>Perulangan while mengeksekusi blok kode selama kondisi yang ditentukan benar.</p>
    <div class="while-loop">
        <?php

            // while loop
            // Perulangan while mengeksekusi blok kode selama kondisi yang ditentukan benar.
            $i = 1;
            while ($i < 6) {
              echo $i;
              $i++;
            }

            // break
            // Dengan pernyataan break kita dapat menghentikan perulangan meskipun kondisinya masih benar:
            // $i = 1;
            // while ($i < 6) {
            // if ($i == 3) break;
            // echo $i;
            // $i++;
            // }

            // continue Statement
            // Dengan pernyataan continue kita dapat menghentikan iterasi saat ini, dan melanjutkan iterasi berikutnya:
            // $i = 0;
            // while ($i < 6) {
            // $i++;
            // if ($i == 3) continue;
            // echo $i;
            // }

            // Alternative Syntax
            // Sintaks perulangan while juga dapat ditulis dengan pernyataan end while seperti ini:
            // $i = 1;
            // while ($i < 6):
            // echo $i;
            // $i++;
            // endwhile;

            // Step 10
            // Jika Anda ingin jumlah perulangan while menjadi 100, tetapi hanya sebanyak 10, Anda dapat menambah penghitung sebanyak 10, bukan 1 di setiap iterasi:
            // $i = 0;
            // while ($i < 100) {
            // $i+=10;
            // echo $i ;
            // }

            // $i = 0;
            // do {
            //     echo "Perulangan ke $i <br>";
            //     $i++;
            // } while ($i <= 10);
        ?>  
    </div>
    <div class="do-while-loop">
        <?php
             // The PHP do...while Loop
            // Perulangan do... while akan selalu mengeksekusi blok kode setidaknya satu kali, kemudian akan memeriksa kondisi, dan mengulangi perulangan selama kondisi yang ditentukan benar.
            // $i = 1;
            // do {
            // echo $i;
            // $i++;
            // } while ($i < 6);

            // Mari kita lihat apa yang terjadi jika kita menyetel variabel $i menjadi 8 dan bukan 1, sebelum menjalankan perulangan do...sementara yang sama lagi:
            // $i = 8;
            // do {
            // echo $i;
            // $i++;
            // } while ($i < 6);

            // break Statement
            // Dengan pernyataan break kita dapat menghentikan perulangan meskipun kondisinya masih benar:
            // $i = 1;
            // do {
            // if ($i == 3) break;
            // echo $i;
            // $i++;
            // } while ($i < 6);

            // The continue Statement
            // Dengan pernyataan continue kita dapat menghentikan iterasi saat ini, dan melanjutkan iterasi berikutnya:
            // $i = 0;
            // do {
            // $i++;
            // if ($i == 3) continue;
            // echo $i;
            // } while ($i < 6);
        ?>
    </div>
    <div class="for-loop">
        <?php
            // The PHP for Loop
            // Perulangan for akan mengeksekusi blok kode sebanyak jumlah yang ditentukan.
            // for ($i = 0; $i < 5; $i++) {
            // echo "The number is: $i <br>";
            // }

            // break Statement
            // Dengan pernyataan break kita dapat menghentikan perulangan meskipun kondisinya masih benar:
            // for ($x = 0; $x < 10; $x++) {
            // if ($i == 3) break;
            // echo "The number is: $x <br>";
            // }

            // continue Statement
            // Dengan pernyataan continue kita dapat menghentikan iterasi saat ini, dan melanjutkan iterasi berikutnya:
            // for ($y = 0; $y < 10; $y++) {
            // if ($y == 3) continue;
            // echo "The number is: $y <br>";
            // }

            // step 10
            // Jika Anda ingin perulangan for menjadi 100, tetapi hanya sebanyak 10, Anda dapat menambah penghitung sebanyak 10, bukan 1 di setiap iterasi:
            // for ($z = 0; $z < 100; $z+=10) {
            // echo "The number is: $z <br>";
            // }
        ?>
    </div>
    <div class="foreach-loop">
        <?php
            // The PHP foreach Loop array
            // Perulangan foreach akan mengeksekusi blok kode untuk setiap elemen dalam array.
            // $colors = array("red", "green", "blue", "yellow");
            // foreach ($colors as $x) {
            // echo "$x <br>";
            // }

            // Keys and Values
            // Array di atas merupakan array terindeks, dimana item pertama memiliki kunci 0, item kedua memiliki kunci 1, dan seterusnya.
            // Array asosiatif berbeda, array asosiatif menggunakan kunci bernama yang Anda tetapkan padanya, dan ketika melakukan perulangan melalui array asosiatif, Anda mungkin ingin menyimpan kunci serta nilainya.
            // Hal ini dapat dilakukan dengan menentukan kunci dan nilai dalam definisi foreach, seperti ini:
            // $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            // foreach ($members as $x => $y) {
            //     echo "$x : $y <br>";
            // }

            // foreach Loop on Objects
            // Perulangan foreach juga dapat digunakan untuk mengulang properti suatu objek:
            // class Car {
            // public $color;
            // public $model;
            // public function __construct($color, $model) {
            //     $this->color = $color;
            //     $this->model = $model;
            // }
            // }
            // $myCar = new Car("red", "Volvo");
            // foreach ($myCar as $x => $y) {
            // echo "$x: $y <br>";
            // }

            // break Statement
            // Dengan pernyataan break kita dapat menghentikan perulangan meskipun kondisinya masih benar:
            // $colors = array("red", "green", "blue", "yellow");
            // foreach ($colors as $x) {
            // if ($x == "green") break;
            // echo "$x <br>";
            // }

            // continue Statement
            // Dengan pernyataan continue kita dapat menghentikan iterasi saat ini, dan melanjutkan iterasi berikutnya:
            // $colors = array("red", "green", "blue", "yellow");
            // foreach ($colors as $x) {
            // if ($x == "green") continue;
            // echo "$x <br>";
            // }

            // Foreach Byref
            // Perulangan foreach juga dapat digunakan untuk mengulang properti suatu objek:
            // class Car {
            // public $color;
            // public $model;
            // public function __construct($color, $model) {
            //     $this->color = $color;
            //     $this->model = $model;
            // }
            // }
            // $myCar = new Car("red", "Volvo");
            // $color = "green";
            // foreach ($myCar as &$x) {
            // $x = $color;
            // }
            // echo $myCar->color;

            // alternative syntax
            // $colors = array("red", "green", "blue", "yellow");
            // foreach ($colors as &$value) {
            //     $value = "green";
            // }
            // echo $colors[1];
        ?>
    </div>
    <div class="break">
        <?php
            // Break in For loop
            // Pernyataan break dapat digunakan untuk melompat keluar dari perulangan for.
            //  for ($x = 0; $x < 10; $x++) {
            // if ($x == 4) {
            //     break;
            // }
            // echo "The number is: $x <br>";
            // }

            // Break in While Loop
            // Pernyataan break dapat digunakan untuk melompat keluar dari perulangan while.
            // $x = 0;
            // while ($x < 10) {
            // if ($x == 4) {
            //     break;
            // }
            // echo "The number is: $x <br>";
            // $x++;
            // }

            // Break in Do While Loop
            // Pernyataan break dapat digunakan untuk melompat keluar dari perulangan do... while.
            // $x = 0;
            // do {
            // if ($x == 4) {
            //     break;
            // }
            // echo "The number is: $x <br>";
            // $x++;
            // } while ($x < 5);

            // Break in For Each Loop
            // Pernyataan break dapat digunakan untuk melompat keluar dari perulangan foreach.
            // $colors = array("red", "green", "blue", "yellow");
            // foreach ($colors as $x) {
            // if ($x == "green") {
            //     break;
            // }
            // echo "$x <br>";
            // }
        ?>
    </div>
    <div class="continue">
        <?php
            // Continue in For Loops
            // Pernyataan continue dapat digunakan untuk melompat iterasi dalam perulangan for.
            // for ($x = 0; $x < 10; $x++) {
            // if ($x == 4) {
            //     continue;
            // }
            // echo "The number is: $x <br>";
            // }

            // Continue in While Loop
            // Pernyataan continue dapat digunakan untuk melompat iterasi dalam perulangan while.
            // $x = 0;
            // while ($x < 10) {
            // if ($x == 4) {
            //     continue;
            // }
            // echo "The number is: $x <br>";
            // $x++;
            // }

            // Continue in Do While Loop
            // Pernyataan continue dapat digunakan untuk melompat iterasi dalam perulangan do... while.
            // $x = 0;
            // do {
            // if ($x == 4) {
            //     continue;
            // }
            // echo "The number is: $x <br>";
            // $x++;
            // } while ($x < 5);

            // Continue in For Each Loop
            // Pernyataan continue dapat digunakan untuk melompat iterasi dalam perulangan foreach.
            // $colors = array("red", "green", "blue", "yellow");
            // foreach ($colors as $x) {
            // if ($x == "green") {
            //     continue;
            // }
            // echo "$x <br>";
            // }
        ?>
    </div>

    <!-- perulangan selesai -->
</body>
</html>