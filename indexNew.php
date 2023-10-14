<?php include 'private/header.php'; ?>
<?php include 'private/nav.php'; ?>
<?php include 'private/banner_new.php'; ?>

<br>
<br>
<!-- doctor Start -->
<?php include 'doctorSlider.php'; ?>
<!-- doctor End -->
<br>
<br>
<!-- hospital Start -->
<?php include 'hospitalSlider.php'; ?>
<!-- hospital End -->

<br>
<br>
<!-- event Start -->
<?php include 'eventSlider.php'; ?>
<!-- event End -->


<br>
<br>
<!-- upcoming event Start -->
<?php include 'eventSliderUpcoming.php'; ?>
<!-- upcoming event End -->
<br>
<br>
<!-- About Start -->
<?php include 'aboutUs.php'; ?>
<!-- About End -->

<!-- Features Start -->
<div class="container-fluid py-1 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-1">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
            <h1 class="mb-0">Start Your Business With Achieve Goals Co.</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3 mx-auto"
                            style="width: 60px; height: 60px">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4 class="text-center">Best In Industry</h4>
                        <p class="mb-0">
                            
                        </p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3 mx-auto"
                            style="width: 60px; height: 60px">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4 class="text-center">No Service Charge</h4>
                        <p class="mb-0">
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                        src="assets/img/feature.jpg" style="object-fit: cover" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3 mx-auto"
                            style="width: 60px; height: 60px">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4 class="text-center">Professional Staff</h4>
                        <p class="mb-0">
                            
                        </p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3 mx-auto"
                            style="width: 60px; height: 60px">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4 class="text-center">24/7 Support</h4>
                        <p class="mb-0">
                           
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->

<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
            <h5 class="fw-bold text-primary text-uppercase">Achieve Goals Co.</h5>
            <h1 class="mb-0">Our Services</h1>
        </div>
        <div class="row g-5">
            <?php foreach($services as $p):?>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <!-- <i class="fa fa-chart-pie text-white"></i> -->
                        <img src="<?=$baseurl.$p->icon;?>" style="width:100px">
                    </div>
                    <h4 class="mb-3"><?=$p->name;?></h4>
                    <p class="m-0">
                        <a href="<?=$baseurl;?>service?service=<?=$p->id;?>">Read More</a>
                    </p>
                    <a class="btn btn-lg btn-primary rounded" href="<?=$baseurl;?>service?service=<?=$p->id;?>">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>

            
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Quote Start -->
<div id="contact" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">
                        Request A Quote
                    </h5>
                    <h1 class="mb-0">
                        Need A Free Quote? Please Feel Free to Contact Us
                    </h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4">
                            <i class="fa fa-reply text-primary me-3"></i>Reply within 24
                            hours
                        </h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4">
                            <i class="fa fa-phone-alt text-primary me-3"></i>24 hrs
                            telephone support
                        </h5>
                    </div>
                </div>
                <p class="mb-4">
                    
                </p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <a href="tel:+918816898640">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                    </a>
                    <div class="ps-4">
                        <a href="tel:+918816898640">
                            <h5 class="mb-2">Call to ask any question</h5>

                            <h4 class="text-primary mb-0">+91-8816898640</h4>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">



                    <!-- contact section start------------ -->
                    <?php 
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;
            
            if(isset($_POST['contact'])){
                extract($_POST);
            
                require 'admin/PHPMailer/src/Exception.php';
                require 'admin/PHPMailer/src/PHPMailer.php';
                require 'admin/PHPMailer/src/SMTP.php';
                
                $mail = new PHPMailer(true);
                try {
             
                $mail->isSMTP();                                           
                $mail->Host       = 'mail.smtp2go.com';                     
                $mail->SMTPAuth   = true;                                   
                $mail->Username   = 'achievegoals';                    
                $mail->Password   = 'IzJLUAZADZcPVwte';          
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );           
                $mail->Port       = 587;             
                $mail->SMTPSecure = 'tls'; // instead of tls
                $mail->SMTPDebug = 0;
            
                $mail->setFrom('info@achievegoals.co.in', 'Achieve Goals');
                $mail->addAddress('info@achievegoals.co.in');             
                $mail->isHTML(true);                                 
                $mail->Subject = 'Contact Form Enquiry';
                $mail->Body    = 'Hello , <br> We got a contact enquiry.<br><b>Name : </b>'.$name.'<br><b>Email : </b>'.$email.'<br><b>Mobile Number : </b>'.$phone.'<br><b>Message : </b>'.$message;
                
            
                $mail->send();
                    echo "<script>swal('Your enquiry has been submitted.', 'We will get back to you soon.', 'success').then(function() {
                            window.location='index.php';
                        })</script>";
                
                } catch (Exception $e) {
                   echo "<script>swal('Something went wrong.', 'Please try again', 'error').then(function() {
                            window.location='index.php#contact';
                        })</script>";
                }
            
            
            }

        ?>

                    <form id="contact" method="POST" action="">
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input type="name" name="name" id="name" class="form-control bg-light border-0" required
                                    placeholder="Your Name" style="height: 55px" />
                            </div>
                            <div class="col-12">
                                <input type="number" name="phone" id="phone" class="form-control bg-light border-0"
                                    placeholder="Your Number" style="height: 55px" required />
                            </div>
                            <div class="col-12">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    class="form-control bg-light border-0" placeholder="Your Email" required=""
                                    style="height: 55px" />
                            </div>
                            <div class="col-12">
                                <textarea name="message" type="text" id="message" class="form-control bg-light border-0"
                                    rows="3" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit" id="form-submit" name="contact">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->

<?php include 'news.php'; ?>


<br>
<br>
<!-- testimonial  Start -->
<?php include 'testimonialSlider.php'; ?>
<!-- testimonial End -->


<?php include 'private/footer.php'; ?>