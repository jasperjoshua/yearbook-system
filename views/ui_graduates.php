<center>
    <div class="px-5 ms-xl-4 ">
        <span class="h1 fw-bold mb-0">
            <img class="img-fluid " src="img/bisu_logo.png" width="10%" alt="">
            THE GRADUATES
        </span>
    </div>
    <div class="container-fluid">                
        <table class="table">
            <thead>
                <tr>
                    <?php foreach ($_POST['data']['table_headers'] as $header) : ?>
                        <th><?php echo $header ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($_POST['data']['table_data'] as $rows) : ?>
                    <tr>
                        <?php foreach ($_POST['data']['table_headers'] as $header) : ?>
                            <td><?php echo $rows[$header] ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</center>