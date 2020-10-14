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
        <a href="casablanca.php" onclick="city('casablanca.php')" id="unId01">CasaBlanca</a>
        <a href="rabat.php" onclick="city('rabat.php')" id="unId02">Rabat</a>
        <a href="fes.php" onclick="city('fes.php')" id="unId03">Fes</a>
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

        
    </script>

    <?php
            include "include/footer.php";
            echo "</body>\n</html>";
        }
?>
