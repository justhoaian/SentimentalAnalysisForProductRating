
<?php
        include_once "lib/config.php";
        include_once "lib/DataProvider.php";
        global $db_host, $db_username, $db_password, $db_name;

        $connection = new mysqli($db_host, $db_username, $db_password, $db_name);
        /* check connection */
        if ($connection->connect_error) {      
            die("Failed to connect: " . $connection->connect_error);
        }
           
        $error = '';
        if(isset($_POST["username"]) && isset($_POST["password"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            

            $sql = "select username, name
            from account
            where username = '$username' and password = '$password' ";

            $result = DataProvider::ExecuteQuery($sql);
            $row = mysqli_fetch_array($result);

            if($row != null)
            {
                $_SESSION["username"] = $row["username"];
                $_SESSION["name"] = $row["name"];
                DataProvider::ChangeURL("./Food.php?username=".$row["username"]."");
            } 
            else 
            {
                $error .= '<p class = "error" style = "color: red" >Username or password is not valid</p>';
            }
        }
    ?> 

<body>
    <table width="380" class="formLogin">
        <form name="frmLogin" action="index.php?a=10" method="post" onsubmit="return CheckLogin()">
        <?php echo $error; ?>
        <th>Sign in:</th>
            <th>
                <th>
                    <input name="username" type="text" id="username" class="w3-bar-item w3-input w3-mobile w3-border w3-round-large" placeholder="Username" size=8>
                </th>
                    
                <th>
                    <input name="password" type="password" id="password" class="w3-bar-item w3-input w3-mobile w3-border w3-round-large" placeholder="Password" size=8>
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

