
<?php include('include/config.php') ?>
<!DOCTYPE html>
<html lang="en">
    <?php include('include/header.php'); ?>
<body>
    <?php include('include/nav.php'); ?>

    <?php

    $city = TableSelect($pdo, 'Rabat');

    ?>
    <div class="container">

        <div class="col-md-6 pb-4 mb-3" style="padding-top: 23px;margin: auto;">
            <h5>
                <span class="d-line-block bg-warning text-white px-2 py-1">3</span>
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

    <?php include "include/footer.php"; ?>

    <script>
        function city(url){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    document.getElementById("ajax-content").innerHTML = this.responseText;
                }
            };
            
            xhttp.open("GET", url, true);
            xhttp.send();
        }

        
    </script>
 
    
</body>
</html>





