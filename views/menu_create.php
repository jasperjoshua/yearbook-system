
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
                        <a href="create.php" class="nav-item nav-link ">Create</a>
                        <a href="draft.php" class="nav-item nav-link ">Draft</a>
                        <a href="index.php?menu=ybook&batch=<?php echo $_GET['batch'] ?>" class="nav-item nav-link <?php echo (($_GET['m'] === 'ybook') ? 'active' : '') ?>">The Graduates</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown <?php echo (($_GET['menu'] === null) ? 'active' : '') ?> ">Upload</a>
                            <div class="dropdown-menu m-0">
                                <a href="create.php?m=upload&type=courses"  class="dropdown-item ">Courses</a>
                                <a href="create.php?m=upload&type=officials"  class="dropdown-item ">BISU System Officials</a>
                                <a href="create.php?m=upload&type=board"  class="dropdown-item ">Board of Regents</a>
                                <a href="create.php?m=upload&type=faculty" class="dropdown-item ">Teaching Staff</a>
                                <a href="create.php?m=upload&type=non_teaching"  class="dropdown-item ">Non-Teaching Staff</a>
                                <a href="create.php?m=upload&type=graduates"  class="dropdown-item ">Graduates</a>
                                <a href="create.php?m=upload&type=awardees"  class="dropdown-item ">Awardees & Achievers</a>
                                <a href="create.php?m=upload&type=officers"  class="dropdown-item ">Batch Officers</a>
                                <a href="create.php?m=upload&type=grad_song"  class="dropdown-item ">Graduation Song</a>
                                <a href="create.php?m=upload&type=tribute_song"  class="dropdown-item ">Tribute Song</a>
                            </div>
                        </div>
                    </div>
                    
                    <?php if ($_SESSION['logged'] == 'admin'): ?>
                        <a href="index.php?menu=logout" class="btn btn-primary py-2 px-4 m-1">Logout</a>
                    <?php else: ?>
                        <a href="index.php?menu=login" class="btn btn-primary py-2 px-4">Admin Login</a>
                    <?php endif; ?>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
            </div>

        </div>
        <!-- Navbar & Hero End -->
