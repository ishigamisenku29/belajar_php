<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fungsi</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="">
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
            Fungsi Buatan Pengguna PHP
            Selain fungsi PHP bawaan, Anda juga dapat membuat fungsi Anda sendiri.

            Fungsi adalah sekumpulan pernyataan yang dapat digunakan berulang kali dalam suatu program.
            Suatu fungsi tidak akan dijalankan secara otomatis saat halaman dimuat.
            Suatu fungsi akan dieksekusi dengan panggilan ke fungsi tersebut.
        </p>
        <p>
            Buat Fungsi
            Deklarasi fungsi yang ditentukan pengguna dimulai dengan kata kunci function, diikuti dengan nama fungsi:
        </p>
    </div>
    <div class="fungsition">
        <?php
            // example
            // function myMessage() {
            //     echo "Hello world!";
            // }

            // Call a Function
            // function myMessage() {
            //     echo "Hello world!";
            //   }
              
            //   myMessage();

            "<p>
                Dalam contoh kita, kita membuat fungsi bernama myMessage().

                Tanda kurung kurawal pembuka { menunjukkan awal kode fungsi, dan tanda kurung kurawal penutup } menunjukkan akhir fungsi.
                
                Fungsi ini menghasilkan Halo dunia!.
            </p>";

            // PHP Function Arguments
            "<p>
                Informasi dapat diteruskan ke fungsi melalui argumen Argumen sama seperti variabel

                Argumen ditentukan setelah nama fungsi di dalam tanda kurung Anda dapat menambahkan argumen sebanyak yang Anda inginkan, cukup pisahkan dengan koma.
                
                Contoh berikut memiliki fungsi dengan satu argumen nama.
                Saat fungsi familyName dipanggil, kami juga meneruskan sebuah nama, mis. Jani, dan nama tersebut digunakan di dalam fungsi, yang menghasilkan beberapa nama depan berbeda, namun nama belakang sama
            </p>";

            // example
            "<h2>example</h2>";
            function familyName($fname) {
                echo "$fname Refsnes.<br>";
              }
              
              familyName("Jani");
              familyName("Hege");
              familyName("Stale");
              familyName("Kai Jim");
              familyName("Borge");

            // example
            // function familyName($fname, $year) {
            //     echo "$fname Refsnes. Born in $year <br>";
            //   }
              
            //   familyName("Hege", "1975");
            //   familyName("Stale", "1978");
            //   familyName("Kai Jim", "1983");

            // PHP Default Argument Value
            // Contoh berikut menunjukkan cara menggunakan parameter default. Jika kita memanggil fungsi setHeight() tanpa argumen maka nilai default akan diambil sebagai argumen:
            // example
            // function setHeight($minheight = 50) {
            //     echo "The height is : $minheight <br>";
            //   }
              
            //   setHeight(350);
            //   setHeight(); // will use the default value of 50
            //   setHeight(135);
            //   setHeight(80);
        ?>
    </div>
</body>
</html>