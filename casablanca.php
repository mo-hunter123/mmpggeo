
<?php include('include/config.php') ?>

<?php

    $city = TableSelect($pdo, 'CasaBlanca');

?>
<div class="container">

    <div class="col-md-6 pb-4 mb-3" style="padding-top: 23px;margin: auto;">
        <h5>
            <span class="d-line-block bg-warning text-white px-2 py-1">1</span>
            <?php echo $city[0]; ?>
        </h5>
        <p class="text-muted pb-3">
            <?php echo $city[3]; ?>
        </p>
        <img src="<?php echo $city[4]; ?>" alt="" class="figure-img">
        <dl class="dl-with-icon">
            <dt>
                <i class="fas fa-check-circle"></i>
                Longitude: <?php echo $city[1]; ?>
            </dt>
            <dt>
                <i class="fas fa-check-circle"></i>
                Latitude: <?php echo $city[2]; ?>
            </dt>
        
        </dl>
    </div>

</div>


