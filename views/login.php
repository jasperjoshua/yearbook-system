<?php
    require_once 'views/header.php';
?>

    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-4 ">
                        <span class="h1 fw-bold mb-0">
                            <img class="img-fluid " src="img/bisu_logo.png" width="65%" alt="">
                        </span>
                    </div>

                    <div class="d-flex align-items-center px-5 ms-xl-4 mt-1 pt-1 pt-xl-0 mt-xl-n5">
                        <form action="index.php?menu=login" method="POST" style="width: 30rem;">
                            <?php require_once 'views/ui_alert.php' ?>
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
                            <div class="form-outline mb-4">
                                <input name="username" type="text" id="form2Example18" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">Username</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input  name="password" type="password" id="form2Example28" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example28">Password</label>
                            </div>
                            <div class="pt-1 mb-4">
                                <input type="hidden" name="login" value="submit" />
                                <button class="btn btn-info btn-lg btn-block btn-dark" type="submit">Login</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="img/login_img.png"
                    alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>

<?php
    require_once 'views/footer.php';
?>
