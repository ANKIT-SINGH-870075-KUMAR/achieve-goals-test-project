
<!-- Navbar Start -->
<div class="navbar-bg-dark w-100">
    <div class="container position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark pxs-5 py-lg-0">
            <!-- <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
        </a> -->
            <a class="navbar-brand" href="<?=$baseurl;?>">
                <img src="assets/img/aglogo.png" alt="" width="58" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?=$baseurl;?>" class="nav-item nav-link active">Home</a>
                    <a href="<?=$baseurl;?>about" class="nav-item nav-link">About us</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <?php foreach($services as $p):?>
                            <a href="<?=$baseurl;?>service?service=<?=$p->id;?>"
                                class="dropdown-item"><?=$p->name;?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- <a href="#" class="nav-item nav-link" style="color: var(--secondary);">Download
                        Catalogue</a> -->
                </div>
                <a href="<?=$baseurl;?>#contact" class="btn btn-primary2 py-2 px-4 ms-3">Contact Us</a>
            </div>
        </nav>
    </div>
</div>

<!-- Navbar End -->