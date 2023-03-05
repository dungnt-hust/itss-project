<?php
    echo 'Welcome to dungnt page with docker<br>';

    $mysqli = new mysqli('db','root','mypassword','testdb');
    $sql = "INSERT INTO users(username,  password) VALUES('Dungnt2', '1')";
    $result = $mysqli->query($sql);

    if($result == 1){
        $sql1 = "SELECT * FROM users";
        $result1 = $mysqli->query($sql1);

        while($row = $result1->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["username"]." - Password: " . $row["password"]. "<br>";
          }
        } else {
          echo "0 results";
    }
// phpinfo();
?>  
