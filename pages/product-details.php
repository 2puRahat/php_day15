<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">Detalis product</div>

                        <?php if (isset($result['title'])) {?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Product Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo $result['title'];?></td>
                                    <td><?php echo $result['description'];?></td>
                                    <td><?php echo $result['category'];?></td>
                                    <td><?php echo $result['brand'];?></td>
                                    <td><?php echo $result['price'];?></td>
                                </tr>
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>


