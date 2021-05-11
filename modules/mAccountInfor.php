<?php include('loginfunctions.php') ?>
<div id="accountId">
    <?php if (isset($_SESSION['success'])) : ?>
	    <div class="error success" >
		<h3>
		    <?php 
				echo $_SESSION['success']; 
				unset($_SESSION['success']);
			?>
		</h3>
	    </div>
	<?php endif ?>
    <?php
<<<<<<< Updated upstream
        echo "Hello, ".$_SESSION["user"]." | ";
=======
        echo "Hello, ".$_SESSION["user"]["username"]." | ";
>>>>>>> Stashed changes
    ?>
    <a href="index.php?a=11">
        <button>Logout</button>
    </a> |
    <a href="index.php?a=6">
    </a>
</div>