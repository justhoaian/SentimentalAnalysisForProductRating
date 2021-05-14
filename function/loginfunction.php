<?php

    include_once "lib/config.php";
    include_once "lib/DataProvider.php";

    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT username, name
                FROM account
                WHERE username = '$username' AND password = '$password'";
        
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        if($row != null)
        {
            $_SESSION["username"] = $row["username"];
            $_SESSION["name"] = $row["name"];
           // $_SESSION["account_type_id"] = $row["account_type_id"];

           
                if(strrpos($url, "a=0") != "")
                    DataProvider::ChangeURL("index.php");
                else
                    DataProvider::ChangeURL("index.php");
        }
        else
            DataProvider::ChangeURL("index.php?a=0&id=4");
    }
    else
        DataProvider::ChangeURL("index.php?a=0&id=4");
?>