<?php include 'admin/private/database.php';

  $sql = 'SELECT * from services';

    $statement = $con->prepare($sql);

    $statement->execute();

    $services = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="canonical" href="https://www.achievegoals.co.in/" />

    <link rel="alternate" hreflang="en" href="https://www.achievegoals.co.in/" />



    <title>Start Your Business With Achieve Goals Co.</title>

    <meta name="description"

        content="हम अपनी कंपनी के माध्यम से फाइनेंशियल सेक्टर व मेडिकल सेक्टर में जागरूकता लाना चाहते हैं और हम चाहते हैं कि हमारे इस अभियान में हमारे साथ ज्यादा से ज्यादा लोग जुड़ें ताकि हम हमारी कंपनी के माध्यम से ज्यादा से ज्यादा लोगों को यह फायदा पहुंचा सके! ">



    <!-- Facebook Meta Tags -->

    <meta property="og:url" content="https://www.achievegoals.co.in/">

    <meta property="og:type" content="website">

    <meta property="og:title" content="Start Your Business With Achieve Goals Co.">

    <meta property="og:description"

        content="हम अपनी कंपनी के माध्यम से फाइनेंशियल सेक्टर व मेडिकल सेक्टर में जागरूकता लाना चाहते हैं और हम चाहते हैं कि हमारे इस अभियान में हमारे साथ ज्यादा से ज्यादा लोग जुड़ें ताकि हम हमारी कंपनी के माध्यम से ज्यादा से ज्यादा लोगों को यह फायदा पहुंचा सके!">

    <meta property="og:image" content="https://www.achievegoals.co.in/assets/img/about.jpg">



    <!-- Twitter Meta Tags -->

    <meta name="twitter:card" content="summary_large_image">

    <meta property="twitter:domain" content="achievegoals.co.in">

    <meta property="twitter:url" content="https://www.achievegoals.co.in/">

    <meta name="twitter:title" content="Start Your Business With Achieve Goals Co.">

    <meta name="twitter:description"

        content="हम अपनी कंपनी के माध्यम से फाइनेंशियल सेक्टर व मेडिकल सेक्टर में जागरूकता लाना चाहते हैं और हम चाहते हैं कि हमारे इस अभियान में हमारे साथ ज्यादा से ज्यादा लोग जुड़ें ताकि हम हमारी कंपनी के माध्यम से ज्यादा से ज्यादा लोगों को यह फायदा पहुंचा सके!">

    <meta name="twitter:image" content="https://www.achievegoals.co.in/assets/img/about.jpg">



    <!-- Google Web Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link

        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"

        rel="stylesheet" />



    <!-- Icon Font Stylesheet -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />



    <!-- Libraries Stylesheet -->

    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <link href="assets/lib/animate/animate.min.css" rel="stylesheet" />



    <!-- Customized Bootstrap Stylesheet -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />



    <!-- Template Stylesheet -->

    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- Favicon================= -->

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">

    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">

    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">

    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">

    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">

    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">

    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">

    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">

    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">

    <link rel="manifest" href="assets/img/favicon/manifest.json">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">

    <meta name="theme-color" content="#ffffff">

    

    <!-- Changes done by Aneesha starts -->

    

     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <!-- Bootstrap core CSS -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->

   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />



    <!-- Additional CSS Files -->

    <link rel="stylesheet" href="assets/css/dynamic.css" />   

    <link rel="stylesheet" href="assets/css/animated.css" />

    <link rel="stylesheet" href="assets/css/owl.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Changes done by Aneesha ends -->

    <!-- Ankit -->
    <script src="../assets/js/slick.min.js"></script>

</head>



<body>