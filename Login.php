<?php
    if(isset($_POST["txtUS"]) && isset($_POST["txtPS"]))
    {
        $us = $_POST["txtUS"];
        $ps = $_POST["txtPS"];

        $sql = "SELECT username, isAdmin
                FROM account
                WHERE username = '$us' AND pass = '$ps'";
        
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        if($row != null)
        {
            $_SESSION["username"] = $row["username"];
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