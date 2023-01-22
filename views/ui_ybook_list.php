
        <!-- Yearbook List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Graduates</h5>
                    <h1 class="mb-5">Explore Our Yearbooks</h1>
                </div>
                <div class="row g-2">
                    
                    <?php foreach ($_POST['ybook_lists'] as $ybook => $desc): ?>
                        
                        <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                            <a href="index.php?menu=ybook&batch=<?php echo $ybook ?>">
                            <div class="service-item rounded pt-3"  style="background: url(<?php echo YBOOK_IMG_DIR ?>/<?php echo $ybook ?>/ybook_tile.png)">
                                <div class="p-4 text-success pt-20">
                                    <!--
                                    <i class="fa fa-3x fa-user-graduate text-white mb-4"></i>
                                    <h5 class="text-white bg-primary">Batch <?php echo $ybook ?></h5>
                                    <p><?php echo $desc ?></p>
                                    -->
                                    <p style="height:350px"></p>
                                </div>
                            </div>
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <!-- Yearbook List End -->
        