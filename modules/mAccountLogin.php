<?php
    include_once "lib/config.php";
    include_once "lib/DataProvider.php";
    include_once "function/session.php";
    
    global $db_host, $db_username, $db_password, $db_name;

    $connection = new mysqli($db_host, $db_username, $db_password, $db_name);
    /* check connection */
    if ($connection->connect_error) {      
        die("Failed to connect: " . $connection->connect_error);
    }

    $error = '';
    if ($_SERVER["REQUEST_METHOD"] == "post" && isset($_POST['Login'])){
        
        $username = trim($_POST['username']);
        $password = trim ($_POST['password']);

        if ($sql = $connection -> prepare ("Select username from account where username = ?")){
            $sql -> bind_param ('s', $username);
            $sql -> execute();
            $row = $sql -> fetch();
            if ($row){
                if (password_verify($password, $row['password'])){
                    $_SESSION["username"] = $row['username'];
                    // $_SESSION["account"] = $row;
                    
                    header ("location: index.php");
                    exit;
                }
                else
                {
                    $error .= '<p class = "error"> The password is not valid </p>';
                }
            }
            else
            {
                $error .= '<p class = "error"> No user exist. Please sign_up </p>';
            }
        }
     }
   
?> 

<table width="380" class="formLogin">
    <form name="frmLogin" action="index.php?a=10" method="post" onsubmit="return CheckLogin()">
    <!-- < echo $error; ?> -->
    <th>Sign in:</th>
        <th>
            <th>
                <input name="username" type="text" id="username" class="w3-bar-item w3-input w3-mobile w3-border w3-round-large" placeholder="Username" size=8>
            </th>
                
            <th>
                <input name="password" type="password"  id="password" class="w3-bar-item w3-input w3-mobile w3-border w3-round-large" placeholder="Password" size=8>
            </th>
        </th>
        <input type="submit" class="w3-bar-item w3-button w3-pink w3-mobile w3-border w3-right w3-round-large" value="Login" value="Go">
    </form>
</table>

<script type="text/javascript">
    function CheckLogin()
    {
        var control = document.getElementById("username");
        if(control.value =="")
        {
            control.focus();
            alert("User name can not null");
            return false;
        }

        control = document.getElementById("password");
        if(control.value == "")
        {
            control.focus();
            alert("Password can not null");
            return false;
        }

        return true;
    }
</script>