<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perkondisian</title>
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
     <!-- PHP if Statements -->
     Pernyataan Kondisional PHP
        Seringkali ketika Anda menulis kode, Anda ingin melakukan tindakan berbeda untuk kondisi berbeda. Anda dapat menggunakan pernyataan kondisional dalam kode Anda untuk melakukan ini.

        Di PHP kami memiliki pernyataan kondisional berikut:

        pernyataan if - mengeksekusi beberapa kode jika satu kondisi benar
        pernyataan if...else -
        mengeksekusi beberapa kode jika suatu kondisi benar dan kode lain jika kondisi tersebut salah
        pernyataan if...elseif...else - mengeksekusi kode berbeda untuk lebih dari dua kondisi
        pernyataan switch - memilih salah satu dari banyak blok kode yang akan dieksekusi
    <div class="if">
        <?php
            // example
            // if (5 > 3) {
            //     echo "Have a good day!";
            //   }

            // $t = 14;
            // if ($t < 20) {
            // echo "Have a good day!";
            // }
        ?>
    </div>
    <div class="if-operators">
        <pre>
            operator     name                             result
            ==	        Equal	                         Returns true if the values are equal	
            ===	        Identical	                 Returns true if the values are equal and of the same type	
            !=	        Not equal	                 Returns true if values are not equal	
            <>	        Not equal	                 Returns true if values are not equal	
            !==	        Not identical	                 Returns true if values are not equal, or not identical (NaN)
            >	        Greater than	                 Returns true if the value is greater than
            <	        Less than	                 Returns true if the value is less than
            >=	        Greater than or equal to	 Returns true if the value is greater than or equal to
            <=	        Less than or equal to	         Returns true if the value is less than or equal to
        </pre>
        <h2>logical operator</h2>
        <p>Untuk memeriksa lebih dari satu kondisi, kita dapat menggunakan operator logika, seperti operator &&:</p>
        <?php
            // Comparison Operators
            // Pernyataan if biasanya berisi kondisi yang membandingkan dua nilai.
            // $t = 14;
            // if ($t == 14) {
            // echo "Have a good day!";
            // }
            

            // Logical Operators
            // Untuk memeriksa lebih dari satu kondisi, kita dapat menggunakan operator logika, seperti operator &&:
            $a = 200;
            $b = 33;
            $c = 500;
            if ($a > $b && $c < $a ) {
            echo "Both conditions are true";
            }

            // operator         name            description
            // and	            And	            True if both conditions are true
            // or	            Or	            True if either condition is true
            // xor	            Exclusive or	    True if only one condition is true
            // &&	            And	            True if both conditions are true
            // ||	            Or	            True if either condition is true
            // !	            Not	            True if the condition is false

            // example
            $a = 200;
            $b = 33;
            $c = 500;
            if ($a > $b || $c < $a ) {
            echo "At least one of the conditions is true";
            }
        ?>
    </div>
    <div class="else-if">
        <?php
            //  The if...else Statement
            // Pernyataan if...else mengeksekusi beberapa kode jika suatu kondisi benar dan kode lain jika kondisi tersebut salah.
            // $time = date("H");
            // if ($time < "20") {
            //     echo "Have a good day!";
            // } else {
            //     echo "Have a good night!";
            // }

            // The if...elseif...else Statement
            // Pernyataan if...elseif...else mengeksekusi beberapa kode berbeda jika suatu kondisi salah dan kode lain jika kedua kondisi tersebut salah.
            // $time = date("H");
            // if ($time < "10") {
            //     echo "Have a good morning!";
            // } elseif ($time < "20") {
            //     echo "Have a good day!";
            // } else {
            //     echo "Have a good night!";
            // }
        ?>
    </div>
    <div class="shorthand-if">
        <?php
            // Short Hand If
            // Untuk menulis kode yang lebih pendek, Anda dapat menulis pernyataan if dalam satu baris.
            // $a = 5;

            // if ($a < 10) $b = "Hello";
            
            // echo $b

            // Short Hand If...Else
            // Untuk menulis kode yang lebih pendek, Anda dapat menulis pernyataan if...else dalam satu baris.
            // $a = 5;
            // $b = ($a < 10) ? "Hello" : "World";
            // echo $b
        ?>
    </div>
    <div class="nested-if">
        <?php
            // nested if
            // Anda dapat memiliki pernyataan if di dalam pernyataan if, ini disebut pernyataan if bersarang.
            // $a = 13;

            // if ($a > 10) {
            // echo "Above 10";
            // if ($a > 20) {
            //     echo " and also above 20";
            // } else {
            //     echo " but not above 20";
            // }
            // }
        ?>
    </div>
</body>
</html>