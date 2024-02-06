<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
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

        <h2>Pengertian Tipe Data String dalam PHP</h2>
        <p>Tipe data string adalah tipe data yang berisi text, kalimat, atau kumpulan karakter. Sebagai contoh, "a", "saya sedang belajar PHP" atau "tUT0r1al pHp?!" semuanya adalah string.</p>

        <h3>php string</h3>
    <div class="php-string">
        <?php
            // php string
            // String dalam PHP diapit oleh tanda kutip ganda atau tanda kutip tunggal.
            echo "Hello";
            echo 'Hello';
            
            // Double or Single Quotes?
            // PHP mendukung tanda kutip ganda dan tanda kutip tunggal yang sama.
            // $x = "John";
            // echo "Hello $x";

            // String Length
            // Untuk mengetahui panjang dari sebuah string, gunakan fungsi strlen().
            // $x = "Hello World";
            // echo strlen($x);

            // word count
            // Fungsi PHP str_word_count() menghitung jumlah kata dalam sebuah string.
            // echo str_word_count("Hello world!");

            // Search For Text Within a String
            // Fungsi PHP strpos() mencari sebuah teks dalam sebuah string dan mengembalikannya jika ditemukan.
            // echo strpos("Hello world!", "world");
        ?>
    </div>
    <div class="Modify-Strings">
        <?php
            // Modify Strings
            // PHP mengubah string menjadi huruf kecil atau huruf besar.
            // $x = "Hello World";
            // echo strtolower($x);
            // echo strtoupper($x);

            // Upper Case
            // Fungsi PHP strtoupper() mengubah string menjadi huruf kapital.
            // $x = "Hello World";
            // echo strtoupper($x);

            // Lower Case
            // Fungsi PHP strtolower() mengubah string menjadi huruf kecil.
            // $x = "Hello World";
            // echo strtolower($x);

            // Replace String
            // Fungsi PHP str_replace() mengganti teks dalam sebuah string.
            // $x = "Hello World";
            // echo str_replace("World", "PHP", $x);

            // Reverse a String
            // Fungsi PHP strrev() membalikkan sebuah string.
            // $x = "Hello World";
            // echo strrev($x);

            // Remove Whitespace
            // Fungsi PHP trim() menghilangkan semua spasi di awal dan akhir sebuah string.
            // $x = " Hello World ";
            // echo trim($x);

            // Convert String into Array
            // Fungsi PHP explode() memecah sebuah string menjadi array.
            // $x = "Hello World";
            // $y = explode(" ", $x);
            // print_r($y);
        ?>
    </div>
    <div class="Concatenate-Strings">
        <?php
            // String Concatenation
            // PHP menggabungkan dua buah string.
            // $x = "Hello";
            // $y = "World";
            // echo $x . " " . $y;
        ?>
    </div>
    <div class="Slicing-Strings">
        <?php
            // Slicing Strings
            // PHP mengambil bagian dari sebuah string.
            // $x = "Hello World";
            // echo substr($x, 0, 5);

            // Slice to the End
            // PHP mengambil bagian dari sebuah string sampai akhirnya.
            // $x = "Hello World";
            // echo substr($x, 0);

            // Slice From the End
            // PHP mengambil bagian dari sebuah string sampai akhirnya.
            // $x = "Hello World";
            // echo substr($x, -5);

            // Negative Length
            // PHP mengambil bagian dari sebuah string sampai akhirnya.
            // $x = "Hello World";
            // echo substr($x, -5, 2);
        ?>
    </div>
    <div class="Escape-Characters">
        <?php
            // Escape Characters
            // PHP menambahkan karakter khusus ke sebuah string.
            // $x = "Hello \"World\"";
            // echo $x;

            // Escape Characters
            // Code	                        Result
            // \'	                        Single Quote
            // \"	                        Double Quote
            // \n	                        New Line
            // \r	                        Carriage Return
            // \t	                        Tab
            // \0	                        Null Byte
            // \\	                        Backslash
        ?>
    </div>
</body>
</html>