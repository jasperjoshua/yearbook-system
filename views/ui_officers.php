<center>
    <div class="px-5 ms-xl-4 ">
        <span class="h1 fw-bold mb-0">
            <img class="img-fluid " src="img/bisu_logo.png" width="10%" alt="">
            BATCH OFFICERS
        </span>
    </div>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-sm-12">
                <?php foreach($_POST['data']['center'] as $value): ?>
                    <p class="h6 text-blank m-0"><?php echo $value['Full_Name'] ?></p>
                    <p class="text-muted m-0"><?php echo $value['Position'] ?></p>
                <?php endforeach; ?>
            </div>
            <div class="col-sm-6 mt-4">
                <?php foreach($_POST['data']['left'] as $value): ?>
                <div class="row mt-4">
                    <p class="h6 text-blank m-0"><?php echo $value['Full_Name'] ?></p>
                    <p class="text-muted m-0"><?php echo $value['Position'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="col-sm-6 mt-4">
                <?php foreach($_POST['data']['right'] as $value): ?>
                <div class="row mt-4">
                    <p class="h6 text-blank m-0"><?php echo $value['Full_Name'] ?></p>
                    <p class="text-muted m-0"><?php echo $value['Position'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="col-sm-12">
                <?php foreach($_POST['data']['bottom'] as $value): ?>
                    <p class="h6 text-blank m-0"><?php echo $value['Full_Name'] ?></p>
                    <p class="text-muted m-0"><?php echo $value['Position'] ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</center>

