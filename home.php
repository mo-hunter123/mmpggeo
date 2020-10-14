<?php include('include/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <?php include('include/header.php'); ?>
<body>
    <?php include('include/nav.php'); ?>

    <div id="ajax-content">
        <div class="jumbotron text-white rounded">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Welcome to MMPG Geolocator</h1>
                <p class="lead my-3">if you want access to your favorite City choose it from the navbar on top</p>
                <p class="lead mb-0">Or you can click the button to got directed to the closest city to your actual location automatically</p>
                <button type="button" onclick="getLocation()" class="btn btn-light">Go</button>
            </div>
            <p id="demo"></p>
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



