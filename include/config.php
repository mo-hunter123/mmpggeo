<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "MMPG";

    $con = mysqli_connect($host, $username, $password, $database);

    if(!$con){
        die("connection failed: " . mysqli_connect_error());
    }

    function TableSelect($con, $city){
        $sql = "SELECT * FROM Cities WHERE Cities.cityName = '$city' ";
        $query = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($query)){
            $cityName = $row['cityName'];
            $Longitude = $row['Longitude'];
            $Latitude = $row['Latitude'];
            $About = $row['About'];
            $url = $row['url'];
        }
        return array($cityName, $Longitude, $Latitude, $About, $url);
    
    }
    
    
    
?>