<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
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
    <div class="array">
        <p>Array adalah variabel khusus yang dapat menampung banyak nilai dalam satu nama, dan Anda dapat mengakses nilai tersebut dengan mengacu pada nomor atau nama indeks.</p>
        <p>Jenis Array PHP Di PHP, ada tiga jenis array:</p>
        <p>Indexed arrays <span>Array dengan indeks numerik</span> </p>
        <p>Associative arrays <span> Array dengan kunci bernama</span> </p>
        <p>Multidimensional arrays<span>Array yang berisi satu atau lebih array</span> </p>
        <p>
            Item Array
            Item array dapat berupa tipe data apa pun.

            Yang paling umum adalah string dan angka (int, float), tetapi item array juga bisa berupa objek, fungsi, atau bahkan array.
        </p>
        <h2>array fungsition</h2>
        <?php
            // example
            $cars = array("Volvo", "BMW", "Toyota");

            // array items
            // $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);

            // Array Functions
            // Kekuatan sebenarnya dari array PHP adalah fungsi array bawaannya, seperti fungsi count() untuk menghitung item array:
            $cars = array("Volvo", "BMW", "Toyota");
            echo count($cars);
        ?>
    </div>
    <div class="indexed-array">
        <?php
            // PHP Indexed Arrays
            // Dalam array yang diindeks, setiap item memiliki nomor indeks. Secara default, item pertama memiliki indeks 0, item kedua memiliki item 1, dan seterusnya.
            // $cars = array("Volvo", "BMW", "Toyota");
            // var_dump($cars);

            // Access Indexed Arrays
            // Untuk mengakses item array, Anda dapat menggunakan indeksnya.
            // $cars = array("Volvo", "BMW", "Toyota");
            // echo $cars[0];

            // Change Value
            // Untuk mengubah item array, Anda dapat menggunakan indeksnya.
            // $cars = array("Volvo", "BMW", "Toyota");
            // $cars[0] = "Opel";
            // echo $cars[0];

            // Loop Through an Indexed Array
            // Untuk melihat semua item array, Anda dapat menggunakan looping.
            // $cars = array("Volvo", "BMW", "Toyota");
            // for ($x = 0; $x < count($cars); $x++) {
            //   echo $cars[$x];
            // }

            // Index Number
            // Untuk membuat indeks baru, Anda dapat menggunakan fungsi array_push().
            // $cars[0] = "Volvo";
            // $cars[1] = "BMW";
            // $cars[2] = "Toyota";

            // Dan jika Anda menggunakan fungsi array_push() untuk menambahkan item baru, item baru tersebut akan mendapatkan indeks 3:
            // array_push($cars, "Ford");
            // var_dump($cars);
        ?>
    </div>
    <div class="assosiative-array">
        <?php
            // PHP Associative Arrays
            // Dalam array yang tidak diindeks, setiap item memiliki kunci yang ditentukan.
            // $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
            // var_dump($car);

            // Access Associative Arrays
            // Untuk mengakses item array, Anda dapat menggunakan kuncinya.
            // $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
            // echo $car["brand"];

            // Loop Through an Associative Array
            // Untuk melihat semua item array, Anda dapat menggunakan looping.
            // $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
            // foreach($car as $x => $x_value) {
            //   echo "$x = $x_value";
            // }

            // Add Item
            // Untuk menambahkan item baru, Anda dapat menggunakan fungsi array_push().
            // $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
            // array_push($car, "color" => "red");
            // var_dump($car);

            // Remove Item
            // Untuk menghapus item, Anda dapat menggunakan fungsi array_pop().
            // $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
            // array_pop($car);
            // var_dump($car);

            // Change Value
            // Untuk mengubah item array, Anda dapat menggunakan kuncinya.
            // $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
            // $car["year"] = 2020;
            // var_dump($car);

            // Loop Through an Associative Array
            // Untuk melihat semua item array, Anda dapat menggunakan looping.
            // $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
            // foreach($car as $x => $x_value) {
            //   echo "$x = $x_value";
            // }

            // Loop Through an Associative Array
            // Untuk melihat semua item array, Anda dapat menggunakan looping.
            // $cars = array
            // (
            //   array("Volvo", 22, 18),
            //   array("BMW", 15, 13),
            //   array("Saab", 5, 2),
            //   array("Land Rover", 17, 15)
            // );
            // echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
            // echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
            // echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
            // echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
        ?>
    </div>
    <div class="create-array">
        <?php
            // Create an Array
            // Untuk membuat array, Anda dapat menggunakan fungsi array().
            // $cars = array("Volvo", "BMW", "Toyota");
            // var_dump($cars);

            // Count Array
            // Untuk menghitung item array, Anda dapat menggunakan fungsi count().
            // $cars = array("Volvo", "BMW", "Toyota");
            // echo count($cars);

            // Multidimensional Arrays
            // Untuk membuat array multidimensional, Anda dapat menggunakan array multidimensional.
            // $cars = array
            // (
            //   array("Volvo", 22, 18),
            //   array("BMW", 15, 13),
            //   array("Saab", 5, 2),
            //   array("Land Rover", 17, 15)
            // );
            // echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
            // echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
            // echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
            // echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

            // Trailing Comma
            // Untuk menambahkan trailing comma, Anda dapat menggunakan fungsi array_push().
            // $cars = array("Volvo", "BMW", "Toyota");
            // array_push($cars, "Honda");
            // var_dump($cars);

            // Array Keys
            // Untuk membuat array keys, Anda dapat menggunakan fungsi array_keys().
            // $cars = array("Volvo", "BMW", "Toyota");
            // $array_keys = array_keys($cars);
            // var_dump($array_keys);

            // Declare Empty Array
            // Untuk membuat array kosong, Anda dapat menggunakan fungsi array().
            // $cars = array();
            // $cars[] = "Volvo";
            // $cars[] = "BMW";
            // $cars[] = "Toyota";
            // var_dump($cars);

            // Mixing Array Keys
            // Untuk membuat array keys yang berbeda, Anda dapat menggunakan fungsi array_keys().
            // $cars = array
            // (
            //   array("Volvo", 22, 18),
            //   array("BMW", 15, 13),
            //   array("Saab", 5, 2),
            //   array("Land Rover", 17, 15)
            // );
            // $array_keys = array_keys($cars);
            // var_dump($array_keys);
        ?>
    </div>
    <div class="Access-Array-Items">
        <?php
            // Access Array Item
            // Untuk mengakses item array, Anda dapat menggunakan indeks.
            // $cars = array("Volvo", "BMW", "Toyota");
            // echo $cars[0];

            // Double or Single Quotes
            // Untuk mengakses item array, Anda dapat menggunakan kutip tunggal atau kutip ganda.
            // $cars = array("Volvo", "BMW", "Toyota");
            // echo "I like " . $cars[0] . ".";

            // Excecute a Function Item
            // Untuk mengakses item array, Anda dapat menggunakan fungsi.
            // $cars = array("Volvo", "BMW", "Toyota");
            // echo "I like " . $cars[0] . ".";

            // Loop Through an Associative Array
            // Untuk mengakses item array, Anda dapat menggunakan foreach.
            // $cars = array
            // (
            //   array("Volvo", 22, 18),
            //   array("BMW", 15, 13),
            //   array("Toyota", 5, 2),
            //   array("Mazda", 17, 15)
            // );
            // foreach ($cars as $car) {
            //     echo $car[0] . ": In stock: " . $car[1] . ", sold: " . $car[2] . ".<br>";
            // }

            // Loop Through an Indexed Array
            // Untuk mengakses item array, Anda dapat menggunakan foreach.
            // $cars = array("Volvo", "BMW", "Toyota");
            // foreach ($cars as $car) {
            //     echo $car . "<br>";
            // }
        ?>
    </div>
    <div class="Update-Array-Items">
        <?php
            // Update Array Item
            // Untuk mengubah item array, Anda dapat menggunakan indeks.
            // $cars = array("Volvo", "BMW", "Toyota");
            // $cars[0] = "Opel";

            // Update Array Items in a Foreach Loop
            // Untuk mengubah item array, Anda dapat menggunakan foreach.
            // $cars = array
            // (
            //   array("Volvo", 22, 18),
            //   array("BMW", 15, 13),
            //   array("Toyota", 5, 2),
            //   array("Mazda", 17, 15)
            // );
            // foreach ($cars as $car) {
            //     $car[0] = "Opel";
            //     echo $car[0] . ": In stock: " . $car[1] . ", sold: " . $car[2] . ".<br>";
            // }
        ?>
    </div>
    <div class="Remove-Array-Items">
        <?php
            // Remove Array Item
            // Untuk menghapus item array, Anda dapat menggunakan indeks.
            // $cars = array("Volvo", "BMW", "Toyota");
            // unset($cars[0]);

            // Remove Multiple Array Items
            // Untuk menghapus item array, Anda dapat menggunakan fungsi array_splice().
            // $cars = array("Volvo", "BMW", "Toyota");
            // array_splice($cars, 0, 2);

            // Using the array_splice Function
            // Untuk menghapus item array, Anda dapat menggunakan fungsi array_splice().
            // $cars = array("Volvo", "BMW", "Toyota");
            // array_splice($cars, 0, 2);
            // var_dump($cars);

            // Remove Item From an Associative Array
            // Untuk menghapus item array, Anda dapat menggunakan fungsi array_splice().
            // $cars = array
            // (
            //   array("Volvo", 22, 18),
            //   array("BMW", 15, 13),
            //   array("Toyota", 5, 2),
            //   array("Mazda", 17, 15)
            // );
            // array_splice($cars, 0, 1);
            // var_dump($cars);
        ?>
    </div>
    <div class="Sorting-Arrays">
        <?php
            // In this chapter, we will go through the following PHP array sort functions:

            // sort() - sort arrays in ascending order
            // rsort() - sort arrays in descending order
            // asort() - sort associative arrays in ascending order, according to the value
            // ksort() - sort associative arrays in ascending order, according to the key
            // arsort() - sort associative arrays in descending order, according to the value
            // krsort() - sort associative arrays in descending order, according to the key

            // Sort Array in Ascending Order - sort()
            // Untuk menurutkan item array secara menurun, Anda dapat menggunakan fungsi sort().
            // $cars = array("Volvo", "BMW", "Toyota");
            // sort($cars);
            // var_dump($cars);

            // Sort Array in Descending Order - rsort()
            // Untuk menurutkan item array secara menurun, Anda dapat menggunakan fungsi sort().
            // $cars = array("Volvo", "BMW", "Toyota");
            // rsort($cars);
            // var_dump($cars);

            // Sort Array (Ascending Order), According to Value - asort()
            // Untuk menurutkan item array secara menurun, Anda dapat menggunakan fungsi sort().
            // $cars = array
            // (
            //   array("Volvo", 22, 18),
            //   array("BMW", 15, 13),
            //   array("Toyota", 5, 2),
            //   array("Mazda", 17, 15)
            // );
            // asort($cars);
            // var_dump($cars);

            // Sort Array (Ascending Order), According to Key - ksort()
            // Untuk menurutkan item array secara menurun, Anda dapat menggunakan fungsi sort().
            // $cars = array
            // (
            //   array("Volvo", 22, 18),
            //   array("BMW", 15, 13),
            //   array("Toyota", 5, 2),
            //   array("Mazda", 17, 15)
            // );
            // ksort($cars);
            // var_dump($cars);

            // Sort Array (Descending Order), According to Value - arsort()
            // Untuk menurutkan item array secara menurun, Anda dapat menggunakan fungsi sort().
            // $cars = array
            // (
            //   array("Volvo", 22, 18),
            //   array("BMW", 15, 13),
            //   array("Toyota", 5, 2),
            //   array("Mazda", 17, 15)
            // );
            // arsort($cars);
            // var_dump($cars);

            // Sort Array (Descending Order), According to Key - krsort()
            // Untuk menurutkan item array secara menurun, Anda dapat menggunakan fungsi sort().
            // $cars = array
            // (
            //   array("Volvo", 22, 18),
            //   array("BMW", 15, 13),
            //   array("Toyota", 5, 2),
            //   array("Mazda", 17, 15)
            // );
            // krsort($cars);
            // var_dump($cars);
        ?>
    </div>
    <div class="Multidimensional-Arrays">
        <?php
            // PHP - Multidimensional Array
            // Untuk membuat array multidimensional, Anda dapat menggunakan fungsi array().
            // $cars = array
            // (
            //   array("Volvo", 22, 18),
            //   array("BMW", 15, 13),
            //   array("Toyota", 5, 2),
            //   array("Mazda", 17, 15)
            // );
            // var_dump($cars);

            // PHP - Two-dimensional Arrays
            // name     stock       sold
            // Volvo	22	        18
            // BMW	    15	        13
            // Toyota	5	        2
            // Mazda	17	        15
            // $cars = array
            // (
            //   array("Volvo", 22, 18),
            //   array("BMW", 15, 13),
            //   array("Toyota", 5, 2),
            //   array("Mazda", 17, 15)
            // );
            // echo $cars[0][0];
        ?>
    </div>
    <div class="Array-Functions">
        <?php
            // PHP - Array Functions
            // Untuk menampilkan array, Anda dapat menggunakan fungsi array().
            // Function	                    Description
            // array()	                    Creates an array
            // array_keys()	                Returns all the keys of an array
            // array_values()	            Returns all the values of an array
            // array_merge()	                Merges one or more arrays
            // array_pop()	                Removes an element from the end of an array
            // array_shift()	                Removes an element from the beginning of an array
            // array_push()	                Adds one or more elements to the end of an array
            // array_unshift()	            Adds one or more elements to the beginning of an array
            // array_reverse()	            Reverses the order of the elements of an array
            // array_sum()	                Calculates the sum of an array
            // array_filter()	            Filters elements of an array
            // array_map()	                Applies a callback function to the elements of an array
            // array_reduce()	            Applies a callback function to the elements of an array
            // array_keys()	                Returns all the keys of an array
        ?>
    </div>
</body>
</html>