<!-- <div id="accountId">
    <h1> Hello, <strong>< echo $row["username"];?></strong></h1>
    <a href="logout.php">
        <button>Logout</button>
    </a>
</div>   -->

<div id="accountId">
    <?php
        echo "Hello, ".$_SESSION['name']." | ";
    ?>
    <a href="function/logout.php">
        <button>Logout</button>
    </a> 
</div>