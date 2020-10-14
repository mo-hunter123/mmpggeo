<?php include('include/config.php'); ?>
<?php
    $page_title = "First page";

    $as_json = false;
    if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
        $as_json = true;
        ob_start();
    } else {
?>

<!doctype html>
<html>
<head>
    <?php
        include "include/header.php";
        echo "<title>" . $page_title . "</title>";
    ?>
</head>
 
<body>
    <div class="container">
        <a href="/"><img src="images/logo.png" alt=""></a>
    </div>

    <div class="topnav" id="myTopnav">
        <a href="" id="unId00"  class="active">Home</a>
        <a href="#casa" onclick="city('casablanca.php')" id="unId01">CasaBlanca</a>
        <a href="#rabat" onclick="city('rabat.php')" id="unId02">Rabat</a>
        <a href="#fes" onclick="city('fes.php')" id="unId03">Fes</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div id="ajax-content">
        <?php 
            include('home.php');
        ?>
    </div>
    
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

        // var x = document.getElementById("demo");
        // function getLocation() {
        //     if (navigator.geolocation) {
        //         navigator.geolocation.getCurrentPosition(showPosition);
        //     } else {
        //         x.innerHTML = "Geolocation is not supported by this browser.";
        //     }
        // }

        // function showPosition(position) {
        //     x.innerHTML = "Latitude: " + position.coords.latitude +
        //     "<br>Longitude: " + position.coords.longitude;
        // }
    </script>


    <?php
        //echo 'This is Index Page';

        $sql = 'SELECT * FROM Cities';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        $details = $stmt->fetch();

        print_r ($details);
    ?>

    <?php
            include "include/footer.php";
            echo "</body>\n</html>";
        }
?>
