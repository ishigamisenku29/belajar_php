<!-- php -->
<!-- 1. tipe data, variable, operator -->
<!-- 2. kontrol program ada kondisi dan perulangan -->
<!-- 3. fungsi -->
<!-- 4. array -->
<!-- 5. form -->
<!-- 6. string -->
<!-- 7. file dan direktori -->
<!-- 8. session -->
<!-- 9. database -->
<!-- 10. pbo -->
<!-- 11. eksepsi -->

<!DOCTYPE html>
<html>
    <head>
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
       <!-- tipe data -->

            <!-- string -->
            <h2>tipe data bertipe string</h2>
            <div class="string">
                    <?php 
                        $x = "1234";
                        $y = 'Hello world!';
                        
                        var_dump($x);
                        echo "<br>"; 
                        var_dump($y);
                    ?>
            </div>
            <!-- string selesai -->

            <!-- integer/int -->
            <h2>tipe data bertipe integer/int</h2>
            <div class="integer">
                <?php  
                    $x = 5985;
                    var_dump($x);
                ?>  
            </div>
            <!-- integer/int selesai-->

            <!-- float -->
            <h2>tipe data bertipe float</h2>
            <div class="float">
                <?php
                    $x = 10.365;
                    var_dump($x);
                ?>
            </div>
            <!-- float selesai -->
            
            <!-- boolean -->
            <h2>tipe data bertipe boolean</h2>
            <div class="boolean">
                <?php
                    $x = true;
                    var_dump($x);
                ?>
            </div>
            <!-- boolean selesai -->
            
            <!-- array -->
            <h2>tipe data bertipe array</h2>
            <div class="array">
                <?php
                    $cars = array("Volvo", "BMW", "Toyota");
                    var_dump($cars);
                ?>
            </div>
            <!-- array selesai -->

            <!-- object -->
            <h2>tipe data bertipe array</h2>
            <div class="object">
                <?php
                    class Car {
                        public $color;
                        public $model;
                        public function __construct($color, $model) {
                            $this->color = $color;
                            $this->model = $model;
                        }
                        public function message() {
                            return "My car is a " . $this->color . " " . $this->model . "!";
                        }
                    }
                    $mycar = new Car("black", "Volvo");
                    echo $mycar->message();
                ?>
            </div>
            <!-- object selesai -->

            <!-- null -->
            <h2>tipe data bertipe null</h2>
            <div class="null">
                <?php
                    $x = null;
                    var_dump($x);
                ?>
            </div>
            <!-- null selesai -->

            <!-- resource -->
            <h2>tipe data bertipe resource</h2>
            <div class="resource">
                <?php
                    $k = fopen("operator.php", "r") or die("Unable hehe open file!");
                    var_dump($k);
                ?>
            </div>
            <!-- resource selesai -->  

        <!-- tipe data selesai -->
</body>
</html>

