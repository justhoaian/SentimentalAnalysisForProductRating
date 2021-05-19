<?php
session_start();

if (isset ($_SESSION["username"]) || $_SESSION["username"] !== true){
    header ("location: index.php");
    exit;
}
?> 
 
<div id="accountId">
    <h1> Hello, <strong><?php echo $_Session["username"]; ?></strong></h1>
    <a href="logout.php">
        <button>Logout</button>
    </a>
    </p>
</div> 

<!-- <div id="accountId">
    <
        echo "Hello, ".$_SESSION["username"]." | ";
    ?>
    <a href="index.php?a=11">
        <button>Logout</button>
    </a> |
    <a href="index.php?a=6">
    </a>
</div> -->