<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operator</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="operator">
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
            operators
            Arithmetic operators
            Assignment operators
            Comparison operators
            Increment/Decrement operators
            Logical operators
            String operators
            Array operators
            Conditional assignment operators
        </p>

            <!-- Arithmetic operators -->
           <div class="aritmetik">
            <?php
                    $x = 10;
                    $y = 6;
                    echo $x + $y;
                ?>
           </div>
            <!-- Arithmetic operators selesai -->

            <!-- Assignment operators -->
           <div class="asignment">
            <?php
                    $x = 10;
                    $y = 6;
                    $x += $y;
                    echo $x;
                ?>
           </div>
            <!-- Assignment operators selesai -->

            <!-- Comparison operators -->
            <div class="comparison">
                <?php
                    $x = 10;
                    $y = 6;
                    echo($x == $y);
                ?>
            </div>
            <!-- Comparison operators selesai -->

            <!-- Increment/Decrement operators -->
            <div class="increment">
                <?php
                    $x = 10;
                    $y = 6;
                    echo ++$x;
                ?>
            </div>
            <!-- Increment/Decrement operators selesai -->

            <!-- Logical operators -->
           <div class="logical">
            <?php
                    $x = 10;
                    $y = 6;
                    echo ($x == $y) ? "true" : "false";
                ?>
           </div>
            <!-- Logical operators selesai -->

            <!-- String operators -->
            <div class="string">
                <?php
                    $x = 10;
                    $y = 6;
                    echo $x . $y;
                ?>
            </div>
            <!-- String operators selesai -->

            <!-- Array operators -->
            <div class="array">
                <?php
                    $x = 10;
                    $y = 6;
                    echo $x + $y;
                ?>
            </div>
            <!-- Array operators selesai -->

            <!-- Conditional assignment operators -->
            <div class="conditional">
                <?php
                    $x = 10;
                    $y = 6;
                    $x = ($x == $y) ? $x : $y;
                    echo $x;
                ?>
            </div>
            <!-- Conditional assignment operators selesai -->
    </div>
</body>
</html>