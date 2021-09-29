<?php
    require_once('../dados_banco.php');

    try {
      // conectar com banco de dados 
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // sql to delete a record
      $sql = "DELETE FROM authors WHERE authorid=3";

      // use exec() because no results are returned
      $conn->exec($sql);
      echo "Record deleted successfully";
    }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>