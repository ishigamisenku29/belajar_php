<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title>belajar-php-perulangan</title>
		
		<!--- Favicon --->
		<link rel="icon" href="../assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!--- Style css --->
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/plugins.css" rel="stylesheet">

		<!--- Icons css --->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="../assets/css/animate.css" rel="stylesheet">
	</head>

	<body class="main-body app sidebar-mini ltr">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- page -->
	   <div class="page custom-index">

			<!-- main-header -->
			<div class="main-header side-header sticky nav nav-item">
				<div class="container-fluid main-container ">
					<div class="main-header-left ">
						<div class="app-sidebar__toggle mobile-toggle" data-bs-toggle="sidebar">
							<a class="open-toggle"   href="javascript:void(0);"><i class="header-icons" data-eva="menu-outline"></i></a>
							<a class="close-toggle"   href="javascript:void(0);"><i class="header-icons" data-eva="close-outline"></i></a>
						</div>
						<div class="responsive-logo">
							<a href="index.html" class="header-logo"><img src="../assets/img/brand/logo.png" class="logo-11"></a>
							<a href="index.html" class="header-logo"><img src="../assets/img/brand/logo-white.png" class="logo-1"></a>
						</div>
					</div>
					<button class="navbar-toggler nav-link icon navresponsive-toggler vertical-icon ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
					</button>
					<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0  mg-lg-s-auto">
						<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
							<div class="main-header-right">
								<div class="nav nav-item nav-link" id="bs-example-navbar-collapse-1">
									<form class="navbar-form" role="search">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search">
											<span class="input-group-btn">
												<button type="reset" class="btn btn-default">
													<i class="fas fa-times"></i>
												</button>
												<button type="submit" class="btn btn-default nav-link">
													<i class="fe fe-search"></i>
												</button>
											</span>
										</div>
									</form>
								</div>
								<div class="nav nav-item  navbar-nav-right mg-lg-s-auto">									
									<div class="  nav-item main-header-message ">
										<a class=" nav-link"   href="https://youtu.be/tOMFR0nQt48?si=7VB5Tv4VpLR1OH6t" ><i class="fe fe-music"></i><span class=" pulse-danger"></span></a>	
									</div>
									<div class=" nav-item main-header-message ">
										<a class="nav-link" href="https://github.com/ishigamisenku29"><i class="fe fe-github"></i><span class=" pulse-danger"></span></a>
									</div>
									
									<div class=" nav-item main-header-message">
										<a class=" nav-link"   href="https://www.instagram.com/dden.aj/"><i class="fe fe-instagram"></i><span class=" pulse-danger"></span></a>
									</div>
									<div class="dropdown main-profile-menu nav nav-item nav-link">
										<a class="profile-user d-flex" href=""><img src="../array/img/11zon_cropped.png" alt="user-img" class="rounded-circle"></a>

										<div class="dropdown-menu">
											<div class="main-header-profile header-img">
												<div class="main-img-user"><img alt="" src="../array/img/DSC_0192.JPG"></div>
												<h6>Dden ahmad jamil</h6><span>creator</span>
											</div>
											<p style="align-items:center; display:flex; justify-content:center;">hai gays</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /main-header -->

			<!-- main-sidebar -->
			<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
			<div class="sticky">
				<aside class="app-sidebar sidebar-scroll">
					<div class="main-sidemenu">
						<div class="main-sidebar-loggedin" >
							<div class="app-sidebar__user " >
								<div class="dropdown user-pro-body text-center">
										<img src="../array/img/11zon_cropped.png" alt="sterpert-img" class=" wd-100 mCS_img_loaded" style="border-radius: 40%;">
										<div class="user-pic">
										</div>
									<div class="user-info">
										<h6 class=" mb-0 text-dark">deden ahmad jamil</h6>
										<span class="text-muted app-sidebar__user-name text-sm">development</span>
									</div>
								</div>
							</div>
						</div>
					
						<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
						<ul class="side-menu ">
							<li class="slide">
								<a class="side-menu__item" href="../array/anjay.php"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">array</span></a>
							</li>
                            <li class="slide">
								<a class="side-menu__item" href="../databases/newdatabases.php"><i class="side-menu__icon fe fe-database"></i><span class="side-menu__label">databases</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" href="../filedirektory/filetory.php"><i class="side-menu__icon fe fe-cpu"></i><span class="side-menu__label">filedirektory</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" href="../fileupload/newfileupload.php"><i class="side-menu__icon fe fe-refresh-cw"></i><span class="side-menu__label">fileupload</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" href="../form/newform.php"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">form</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" href="../fungsi/newfungsi.php"><i class="side-menu__icon fe fe-layers "></i><span class="side-menu__label">fungsi</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" href="../operator/newoperator.php"><i class="side-menu__icon fe fe-octagon"></i><span class="side-menu__label">operator</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" href="../perkondisian/newperkondisian.php"><i class="side-menu__icon fe fe-pocket"></i><span class="side-menu__label">perkondisian</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" href="newkontrolProgram.php"><i class="side-menu__icon fe fe-refresh-cw"></i><span class="side-menu__label">perulangan</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" href="../string/newstring.php"><i class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">string</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" href="../tipedata/newtipedata.php"><i class="side-menu__icon fe fe-package"></i><span class="side-menu__label">tipe data</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" href="../variable/newvariable.php"><i class="side-menu__icon fe fe-help-circle"></i><span class="side-menu__label">variable</span></a>
							</li>
						</ul>
						<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
					</div>
				</aside>
			</div>
			<!-- main-sidebar -->

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div>
							<h4 class="content-title mb-2">kontrol program / looping</h4>
						</div>
					</div>
					<!-- /breadcrumb -->

				<!-- main-content-body -->
					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-12 mb-3 mb-md-0  gap-3 d-flex">
							<!-- card na -->
								<div class="card custom-card">
									<div class="card-body ht-100p">
                                        <div class="pengertian">
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
                                            <p>Perulangan while mengeksekusi blok kode selama kondisi yang ditentukan benar.</p>
                                        </div>     
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
									</div>
								</div>
							<!-- /card na -->
						</div>
					</div>	
                    <!-- /row -->
			</div>
			   <!-- /main-content -->
	</div>
		<!-- page closed -->

		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!--- JQuery min js --->
		<script src="../assets/plugins/jquery/jquery.min.js"></script>

		<!--- Datepicker js --->
		<script src="../assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!--- Bootstrap Bundle js --->
		<script src="../assets/plugins/bootstrap/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--- Ionicons js --->
		<script src="../assets/plugins/ionicons/ionicons.js"></script>

		<!--- Chart bundle min js --->
		<script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>

		<!--- JQuery sparkline js --->
		<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- Internal Sampledata js --->
		<script src="../assets/js/chart.flot.sampledata.js"></script>

		<!--- Eva-icons js --->
		<script src="../assets/js/eva-icons.min.js"></script>

		<!--- Moment js --->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!--- Perfect-scrollbar js --->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!--- Select2 js --->
		<script src="../assets/plugins/select2/js/select2.min.js"></script>

		<!--- P-scroll js --->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!--- Owl Carousel js --->
		<script src="../assets/plugins/owl-carousel/owl.carousel.js"></script>

		<!--- Internal Multislider js --->
		<script src="../assets/plugins/multislider/multislider.js"></script>
		<script src="../assets/js/carousel.js"></script>

		<!--- Sidebar js --->
		<script src="../assets/plugins/side-menu/sidemenu.js"></script>

		<!--- sticky js --->
		<script src="../assets/js/sticky.js"></script>

		<!-- right-sidebar js -->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- Morris js -->
		<script src="../assets/plugins/raphael/raphael.min.js"></script>
		<script src="../assets/plugins/morris.js/morris.min.js"></script>

		<!--- Scripts js --->
		<script src="../assets/js/script.js"></script>

		<!--- Index js --->
		<script src="../assets/js/index.js"></script>

		<!--themecolor js-->
		<script src="../assets/js/themecolor.js"></script>

		<!--swither-styles js-->
		<script src="../assets/js/swither-styles.js"></script>

		<!--- Custom js --->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>