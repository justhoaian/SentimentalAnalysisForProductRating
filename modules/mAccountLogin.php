<?php
    // include_once "lib/config.php";
    // include_once "lib/DataProvider.php";
    // include_once "function/session.php";
    
    // global $db_host, $db_username, $db_password, $db_name;

    // $connection = new mysqli($db_host, $db_username, $db_password, $db_name);
    // /* check connection */
    // if ($connection->connect_error) {      
    //     die("Failed to connect: " . $connection->connect_error);
    // }

    // $error = '';
    // if ($_SERVER["REQUEST_METHOD"] == "post" && isset($_POST['Login'])){
        
    //     $username = trim($_POST['username']);
    //     $password = trim ($_POST['password']);

    //     if ($sql = $connection -> prepare ("Select username from account where username = ?")){
    //         $sql -> bind_param ('s', $username);
    //         $sql -> execute();
    //         $row = $sql -> fetch();
    //         if ($row){
    //             if (password_verify($password, $row['password'])){
    //                 $_SESSION["username"] = $row['username'];
    //                 // $_SESSION["account"] = $row;
                    
    //                 header ("location: index.php");
    //                 exit;
    //             }
    //             else
    //             {
    //                 $error .= '<p class = "error"> The password is not valid </p>';
    //             }
    //         }
    //         else
    //         {
    //             $error .= '<p class = "error"> No user exist. Please sign_up </p>';
    //         }
    //     }
    //  }
?> 

<body>
    <table width="380" class="formLogin">
        <form name="frmLogin" action="index.php?a=10" method="post" onsubmit="return CheckLogin()">
        <!-- < echo $error; ?> -->
        <th>Sign in:</th>
            <th>
                <th>
                    <input name="username" type="text" id="username" class="w3-bar-item w3-input w3-mobile w3-border w3-round-large" placeholder="Username" size=8>
                </th>
                    
                <th>
                    <input name="password" type="text" id="password" class="w3-bar-item w3-input w3-mobile w3-border w3-round-large" placeholder="Password" size=8>
                </th>
            </th>
            <input type="submit" class="w3-bar-item w3-button w3-pink w3-mobile w3-border w3-right w3-round-large" value="Login" value="Go">
        </form>
    </table>

    <?php
        include_once "lib/config.php";
        include_once "lib/DataProvider.php";
        global $db_host, $db_username, $db_password, $db_name;

        $connection = new mysqli($db_host, $db_username, $db_password, $db_name);
        /* check connection */
        if ($connection->connect_error) {      
            die("Failed to connect: " . $connection->connect_error);
        }
            
        if(isset($_POST["username"]) && isset($_POST["password"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            

            $sql = "select username
            from account
            where username = '$username' and password = '$password' ";

            $result = DataProvider::ExecuteQuery($sql);
            $row = mysqli_fetch_array($result);
            $error = '';

            if($row != null)
            {
                $_SESSION["username"] = $row["username"];
                $_SESSION["password"] = $row["password"];
                DataProvider::ChangeURL("Food.php");
            } 
            else 
            {
                $error .= '<p class = "error">Username or password is not correct</p>';
            }
        }
    ?>
   
   <script type="text/javascript">
        function CheckLogin()
        {
            var control = document.getElementById("username");
            if(control.value =="")
            {
                control.focus();
                alert("Please input username");
                return false;
            }

            control = document.getElementById("password");
            if(control.value == "")
            {
                control.focus();
                alert("Please input password");
                return false;
            }

            return true;
        }
    </script>

</body>

