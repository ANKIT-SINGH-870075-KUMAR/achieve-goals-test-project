<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index" class="brand-link text-center">
        Achieve Goals Co.
    </a>

    <!-- Sidebar -->
    <div class="sidebar">



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?=$baseurl;?>admin/home" class="nav-link <?php if(isset($home)){echo $home;}?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?=$baseurl;?>admin/add" class="nav-link <?php if(isset($add)){echo $add;}?>">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Add Services
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?=$baseurl;?>admin/service" class="nav-link <?php if(isset($service)){echo $service;}?>">
                        <i class="nav-icon fa fa-bars"></i>
                        <p>
                            Services
                        </p>
                    </a>
                </li>

             <!--<li class="nav-item">-->
                <!--    <a href="<?=$baseurl;?>admin/users" class="nav-link <?php if(isset($Users)){echo $Users;}?>">-->
                <!--        <i class="nav-icon fa fa-users"></i>-->
                <!--        <p>-->
                <!--           Swasthya Labh Card Users-->
                <!--        </p>-->
                <!--    </a>-->
                <!--</li>-->
                
                 <li class="nav-item">
                    <a href="<?=$baseurl;?>admin/users" class="nav-link <?php if(isset($Users)){echo $Users;}?>">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                           Swasthya Labh Card Users
                        </p>
                    </a>
                </li>





                <li class="nav-item">
                    <a href="logout" class="nav-link">
                        <i class="nav-icon fa fa-sign"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>