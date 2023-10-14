<?php include 'admin/private/database.php';
 $sql = 'SELECT * from services';
    $statement = $con->prepare($sql);
    $statement->execute();
    $services = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Digikeyselution" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    

   <title>Digi Key Selution | About Us | Our Mission</title>
<meta name="description"
        content="To help those who are at the bottom of the pyramid. To work with vigour, dedication and innovation to achieve excellence in service, quality, reliability, safety and customer care as the ultimate goal. ">
    
      <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/dynamic.css" />
    <link rel="stylesheet" href="assets/css/animated.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!--
    

-->
</head>

<body>