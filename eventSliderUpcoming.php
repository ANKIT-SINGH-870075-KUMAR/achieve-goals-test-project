<!-- event Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
            
            <h1 class="mb-0">Upcoming Events</h1>
        </div>
        <div class="row g-4">
            <?php foreach($upcomingEvents as $p):?>
            <div class="col-lg-3 col-md-6 wow zoomIn event-data" data-wow-delay="0.6s">
                <div
                    class="event-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <div class="event-icon">
                        
                        <img src="<?=$baseurl.$p->picture;?>" style="width:200px;">
                    </div>
                    <div class="event-info">
                    <h5 class="mb-1" style="color: white;"><?=$p->title;?> </h5>
                    <p class="m-0" style="color: white;">
                    <?=$p->location;?>
                    </p>
                 

                    <?php
   $datetimeString = $p->date_time; // Your datetime string
   $timestamp = strtotime($datetimeString); // Convert datetime string to a timestamp
   // Format the timestamp as "dd MMM YYYY"
   $formattedDate = date("d F Y", $timestamp); // "d" for day, "F" for full month name, "Y" for year
                    ?>
                    <p class="m-0" style="color: white;">
                    <?=$formattedDate;?>
                    </p>
                    </div>
            
          
                </div>
            </div>
            <?php endforeach; ?>

           
        </div>
         <a href="index.php#contact" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">
                Read More</a>
    </div>
</div>
<!-- event End -->


