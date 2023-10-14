<!-- testimonial Start -->

<?php
                       
                        function getYoutubeVideoId($url) {
                            // Match both regular YouTube URLs and YouTube Shorts URLs
                            $pattern = '/(?:youtu.be\/|youtube.com\/(?:embed\/|v\/|watch\?v=|shorts\/))([\w-]{11})/';
                            if (preg_match($pattern, $url, $matches)) {
                                return $matches[1];
                            }
                            return false; // Return false if no match is found
                        }
                        $video_id = getYoutubeVideoId($p->video_link);

                        ?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
            
            <h1 class="mb-0">Testimonial</h1>
        </div>
        <div class="row g-4">
                        <div class="col-lg-3 col-md-6 wow zoomIn doctor-data" data-wow-delay="0.6s">
                <div class="doctor-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <div class="doctor-icon">
                        
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/r3pwIZpFQLg" frameborder="0" allowfullscreen=""></iframe>

                    </div>
                    <div class="doctor-info">
                    <h5 class="mb-1">Video 1 </h5>
                    <p class="m-0">
                    Description for Video 1                    </p>
                    </div>
            
          
                </div>
            </div>
                        <div class="col-lg-3 col-md-6 wow zoomIn doctor-data" data-wow-delay="0.6s">
                <div class="doctor-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <div class="doctor-icon">
                        
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/r3pwIZpFQLg" frameborder="0" allowfullscreen=""></iframe>

                    </div>
                    <div class="doctor-info">
                    <h5 class="mb-1">Video 2 </h5>
                    <p class="m-0">
                    Description for Video 2                    </p>
                    </div>
            
          
                </div>
            </div>
                        <div class="col-lg-3 col-md-6 wow zoomIn doctor-data" data-wow-delay="0.6s">
                <div class="doctor-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <div class="doctor-icon">
                        
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/cd1T7Mr0m6Q" frameborder="0" allowfullscreen=""></iframe>

                    </div>
                    <div class="doctor-info">
                    <h5 class="mb-1">Video 3 </h5>
                    <p class="m-0">
                    Description for Video 3                    </p>
                    </div>
            
          
                </div>
            </div>
            
           
        </div>
         <a href="index.php#contact" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">
                Read More</a>
    </div>
</div>
<!-- testimonial End -->


