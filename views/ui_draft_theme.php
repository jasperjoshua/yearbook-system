<?php
    require_once 'views/header.php';
    require_once 'views/menu_create.php';
?>

<div class="container-xxl bg-white p-0">

    <div class="form-floating">
        <div class="text-center wow fadeInUp mt-5 pt-5" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">BATCH <?php echo $_SESSION['batch'] ?></h5>
            <h1 class="mb-5">Draft Theme</h1>
        </div>
        <form action="create.php?m=create" method="POST" enctype="multipart/form-data" class="p-5">
            <?php require_once 'views/ui_alert.php' ?>
            <div class="row g-3">
                <div class="col-12">
                    <div class="form-floating">
                        <select class="form-control selectpicker"  id="theme" name="Theme">
                            <?php foreach ($_POST['themes'] as $theme => $theme_data) : ?>
                                <option value="<?php echo $theme ?>"
                                    <?php if ($theme == $_SESSION['theme']['name']): ?>
                                        active
                                    <?php endif; ?>
                                >
                                    <?php echo $theme_data['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <label for="theme">Theme</label>
                    </div>
                    <div class="row g-3 mt-3">
                        <div class="col-sm-6">
                            <p class="h5 text-primary mb-0">Cover Page</p> 
                            <div class="row m-1">
                                <div class="col-sm-5">
                                    <img class="img-fluid " src="<?php echo $_POST['ybook']['images']['ybook_cover'] ?>" width="100%" alt="">
                                </div>
                                <div class="col-sm-7">
                                    <input type="file" name="ybook_cover" accept="image/*" class="form-control form-control-lg" id="ybook_cover" />
                                    <button class="btn btn-primary mt-2" type="submit" name="upload_img" value="ybook_cover">Upload Image</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p class="h5 text-primary mb-0">Tile Image</p> 
                            <div class="row m-1">
                                <div class="col-sm-5">
                                    <img class="img-fluid " src="<?php echo $_POST['ybook']['images']['ybook_tile'] ?>" width="100%" alt="">
                                </div>
                                <div class="col-sm-7">
                                    <input type="file" name="ybook_tile" accept="image/*" class="form-control form-control-lg" id="ybook_tile" />
                                    <button class="btn btn-primary mt-2" type="submit" name="upload_img" value="ybook_tile">Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5">
                    <button class="btn btn-primary py-3 px-5" type="submit" name="draft" value="draft">Save Draft</button>
                    <button class="btn btn-primary py-3 px-5" type="submit" name="publish" value="publish">Publish Ybook</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    require_once 'views/ui_theme_list.php';
?>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php
    require_once 'views/footer.php';
?>
