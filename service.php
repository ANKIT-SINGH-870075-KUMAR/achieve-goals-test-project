<?php 
if(isset($_GET['service'])){ 
    include 'admin/private/database.php';
    
    $sqlforservice = 'SELECT * from services';
    $stmFors = $con->prepare($sqlforservice);
    $stmFors->execute();
    $services = $stmFors->fetchAll(PDO::FETCH_OBJ);
    
    $sql = 'SELECT service.*,services.name,services.title,services.meta_desc from service inner join services on services.id=service.service_id where service.service_id=:id';
    $statement = $con->prepare($sql);
    $statement->execute(['id'=>$_GET['service']]);
    $service = $statement->fetchAll(PDO::FETCH_OBJ);
    if(count($service)<1){
        echo "<script>window.history.back()</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />


    <title><?=$service[0]->title;?></title>
    <meta name="description" content="<?=$service[0]->meta_desc;?>">


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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

    <!-- Ankit -->
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link href="assets/css/slick-theme.css" rel="stylesheet" />
    <script src="assets/js/slick.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>

    <?php include 'private/nav.php'; ?>

    <br><br><br><br>
    <div class="main-banner wow fadeIn" id="services" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="section-title text-center position-relative pb-3 mb-5">
                        <h1 class="mb-0">
                            <?=$service[0]->name;?>
                        </h1>
                    </div>
                    <?php foreach($service as $s){ ?>
                    <div class="row  mt-5 mb-5">
                        <div class="col-lg-6 mt-3">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <?php if($s->image_or_video=='Image'){ ?>
                                <img src="<?=$baseurl.$s->file_link;?>" width="100%" height="Auto">
                                <?php }else{ ?>
                                <video width="100%" height="400" controls>
                                    <source src="<?=$baseurl.$s->file_link;?>" type="video/mp4">
                                </video>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-6  mt-3 align-self-center">
                            <?=$s->description;?>
                            <!--<a href="<?=$s->url;?>" class="btn btn-primary">Apply Now</a>-->
                            <div class="left-content mt-5 header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="main-blue-button">

                                    <a href="<?=$s->url;?>" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
                                        data-wow-delay="0.9s"
                                        target="_blank"><?php if($service[0]->title=='Swasthya Labh Cardtest'){ ?>
                                        Apply For Swasthya Labh Card
                                        <?php }else{
                                echo "Apply Now";
                                }?>
                                    </a>
                                </div>


                            </div>
                        </div>

                    </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>



    <?php include 'private/footer.php';  } ?>