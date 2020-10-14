<?php
    $host = "ec2-3-210-178-167.compute-1.amazonaws.com";
    $username = "rrqmofbqylycgy";
    $password = "acb65373986e7dd39c61b86bcc8de1251c81fe03277517ea43a65d4f112bf9be";
    $database = "dbtum7vdulte6g";
    $port = "5432";

    // $host = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "MMPG";

    $con = mysqli_connect($host, $username, $password, $database, $port);

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