<!-- <div id="accountId">
    <h1> Hello, <strong>< echo $row["username"];?></strong></h1>
    <a href="logout.php">
        <button>Logout</button>
    </a>
</div>   -->

<div id="accountId">
    <?php
        include_once "checkID.php";
        $username = strval($_GET['user']);
        $validUsername = checkingUser($connection, $username);
        $getUsername = mysqli_fetch_array($validUsername);
        $USER = $getUsername["username"];


        // echo "Hello, ".$_SESSION['name']." | ";
        echo "Hello, '$USER' | ";
    ?>
    <a href="index.php?a=11">
        <button>Logout</button>
    </a> 
</div> 