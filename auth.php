<?php

    require_once "db.php";

    $log = $_POST['userLog']; 
    $pass = $_POST['userPass'];

    $sqlp = "SELECT id FROM users where email = '$log' and password = '$pass'";

    if($result = $pdo->query($sqlp))
    { 
        if($result->rowCount()>0)
        {
            foreach($result as $row){
                $ids = $row["id"];
                $auth = 1;
                header("Location: index_ru.php?get=$auth");
            }
        }
        else
        {

            $auth = 0;
            header("Location: index_ru.php?get=$auth");

        }

    }

?>