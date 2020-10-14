<?php

    define('ROOT_URL', '/home.php');

    $host = "ec2-3-210-178-167.compute-1.amazonaws.com";
    $user = "rrqmofbqylycgy";
    $password = "acb65373986e7dd39c61b86bcc8de1251c81fe03277517ea43a65d4f112bf9be";
    $dbname = "dbtum7vdulte6g";
    $port = "5432";

    // $host = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "MMPG";

    try{
        //Set DSN data source name
          $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";
      
      
        //create a pdo instance
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
      }
    

    function TableSelect($pdo, $city){
        $sql = "SELECT * FROM Cities WHERE Cities.cityname = '$city' ";
        $q = $pdo->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $q->fetch()){
            $cityName = htmlspecialchars($row['cityname']);
            $Longitude = htmlspecialchars($row['longitude']);
            $Latitude = htmlspecialchars($row['latitude']);
            $About = htmlspecialchars($row['about']);
            $url = htmlspecialchars($row['url']);
        }
        return array($cityName, $Longitude, $Latitude, $About, $url);
    
    }
    
    
    
?>