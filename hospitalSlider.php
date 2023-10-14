<!-- hospital Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
            
            <h1 class="mb-0">Our Hospitals</h1>
        </div>
        <div class="row g-4">
            <?php foreach($hospitals as $p):?>
            <div class="col-lg-3 col-md-6 wow zoomIn hospital-data" data-wow-delay="0.6s">
                <div
                    class="hospital-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <div class="hospital-icon">
                        
                        <img src="<?=$baseurl.$p->picture;?>" style="width:160px;">
                    </div>
                    <div class="hospital-info">
                    <h5 class="mb-1" style="color: white;"><?=$p->name;?> </h5>

                    </div>
            
          
                </div>
            </div>
            <?php endforeach; ?>

           
        </div>
         <a href="index.php#contact" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">
                Read More</a>
    </div>
</div>
<!-- hospital End -->


