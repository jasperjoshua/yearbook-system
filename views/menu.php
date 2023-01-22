
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fas fa-graduation-cap me-3"></i>BISU - Balilihan Campus</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link <?php echo (!isset($_GET['menu']) ? 'active' : '') ?> ">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Yearbooks</a>
                            <div class="dropdown-menu m-0">
                                <?php foreach ($_POST['ybook_lists'] as $ybook => $desc): ?>
                                    <a href="index.php?menu=ybook&batch=<?php echo $ybook ?>" class="dropdown-item">Batch <?php echo $ybook ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php if ($_SESSION['logged'] == 'admin'): ?>
                        <a href="create.php" class="btn btn-primary py-2 px-4">Create  a Yearbook</a>
                        <a href="index.php?menu=logout" class="btn btn-primary py-2 px-4 m-1">Logout</a>
                    <?php else: ?>
                        <a href="index.php?menu=login" class="btn btn-primary py-2 px-4">Admin Login</a>
                    <?php endif; ?>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">WELCOME<br>to BISU-BC<br>Yearbook System</h1>
                            <!-- <p class="text-white animated slideInLeft mb-4 pb-2">Yearbook System</p> -->
                            <?php if ($_SESSION['logged'] == 'admin'): ?>
                                <a href="" class="btn btn-primary mt-5 py-sm-3 px-sm-5 me-3 animated slideInLeft">CREATE A YEARBOOK</a>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/bisu_logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Navbar & Hero End -->
