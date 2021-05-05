<div class="container">
    <!--Header box-->
    <div class="container">
        <table>
            <tr style = "width: 100%">
                <th>
                    <img src="img/MucBanglogo.png" alt="image not found" class="logo">
                    <img src="img/MucBangslogan.png" alt="image not found" class="logo">
                </th>

                <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>

                <th class ="w3-right-align">
                    <?php
                    if(isset($_SESSION['account_id']))
                    {
                        include ("modules/mAccountInfor.php");
                    }
                    else
                    {
                        include ("modules/mAccountLogin.php");
                        include ("modules/mAccountSignUp.php");
                    }
                    ?>
                </th>
            </tr>
        </table>
    </div>


    <!--Nav bar-->
    <div class="w3-container">
            <div class="w3-bar w3-pale-red w3-border w3-padding w3-round-large">
                <a href="AdminHeader.php?a=11">
                    <button href="#" class="w3-bar-item w3-button w3-mobile w3-round-large">Home</button>
                <a href="#" class="w3-bar-item w3-button w3-mobile w3-round-large">Food</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile w3-round-large">Drinks</a>
<<<<<<< Updated upstream
                    <div class = "w3-dropdown-hover">
                    <button class = "w3-bar-item w3-button w3-mobile w3-round-large">Admin</button>
                        <div class = "w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="Adding.php">
                            <button href="#" class="w3-bar-item w3-button">Adding</button>
                        </div>
                    </div>
=======
>>>>>>> Stashed changes
                <button href="#" class="w3-bar-item w3-button w3-pink w3-mobile w3-right w3-round-large">Go</button>
                <input type="text" class="w3-bar-item w3-input w3-mobile w3-right w3-round-large" placeholder="Search..">
            </div>
        </div>
</div>