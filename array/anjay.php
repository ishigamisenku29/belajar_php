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
		<title>belajar-php-array</title>
		
		<!--- Favicon --->
		<link rel="icon" href="../assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!--- Icons css --->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!--- Style css --->
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/plugins.css" rel="stylesheet">

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
	   <div class="page " >

			<!-- main-header -->
			<div class="main-header side-header sticky nav nav-item">
				<div class="container-fluid main-container">
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
				<aside class="app-sidebar sidebar-scroll ">
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
								<a class="side-menu__item" href="anjay.php"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">array</span></a>
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
								<a class="side-menu__item" href="../perulangan/newkontrolProgram.php"><i class="side-menu__icon fe fe-refresh-cw"></i><span class="side-menu__label">perulangan</span></a>
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
			<div class="main-content app-content ">

				<!-- container -->
				<div class="main-container container-fluid ">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between ">
						<div>
							<h4 class="content-title mb-2">ARRAY</h4>
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
										<div>
											<div class="array" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 10px;">
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
												<h4>array fungsition</h4>
												<?php
													// example
													$cars = array("Volvo", "BMW", "Toyota");
										
													// array items
													// $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);
										
													// Array Functions
													// Kekuatan sebenarnya dari array PHP adalah fungsi array bawaannya, seperti fungsi count() untuk menghitung item array:
													// $cars = array("Volvo", "BMW", "Toyota");
													// echo count($cars);
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
										</div>
									</div>
								</div>
							<!-- /card na -->
						</div>
					</div>	
				<!-- /container -->
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

		<!--- Moment js --->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!--- JQuery sparkline js --->
		<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- Select2 js --->
		<script src="../assets/plugins/select2/js/select2.min.js"></script>

		<!--- P-scroll js --->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!--- Eva-icons js --->
		<script src="../assets/js/eva-icons.min.js"></script>

		<!--- Internal Jquery-sparkline js --->
		<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
		<script src="../assets/js/chart.sparkline.js"></script>



		<!-- Sidebar js -->
		<script src="../assets/plugins/side-menu/sidemenu.js"></script>

		<!--- sticky js --->
		<script src="../assets/js/sticky.js"></script>

		<!--- Right-sidebar js --->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- Switcher js -->
		<script src="../assets/switcher/js/switcher.js"></script>

		<!--- Index js --->
		<script src="../assets/js/script.js"></script>

		<!--themecolor js-->
		<script src="../assets/js/themecolor.js"></script>

		<!--swither-styles js-->
		<script src="../assets/js/swither-styles.js"></script>

		<!--- Custom js --->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>