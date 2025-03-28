<?php
      $host = 'm347-kn04a-db';  // Name des DB-Containers
      $user = 'user';
      $password = 'password';
      $dbname = 'mydatabase';

      $conn = new mysqli($host, $user, $password, $dbname);

      if ($conn->connect_error) {
          die("Verbindung fehlgeschlagen: " . $conn->connect_error);
      }
      $sql = "select Host, User from mysql.user;";
              $result = $conn->query($sql);
              while($row = $result->fetch_assoc()){
                      echo("<li>" . $row["Host"] . " / " . $row["User"] . "</li>");
              }
      ?>