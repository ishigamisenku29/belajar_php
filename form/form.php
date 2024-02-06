<!-- PHP - A Simple HTML Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
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
    <div class="PHP-Form-Handling">
        <form action="welcome.php" method="post">
                Name: <input type="text" name="name"><br>
                E-mail: <input type="text" name="email"><br>
                <input type="submit">
        </form>
    </div>
</body>
</html>