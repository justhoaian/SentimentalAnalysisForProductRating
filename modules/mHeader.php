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
            <a href="index.php">
                <button class="w3-bar-item w3-button w3-mobile w3-round-large">Home</button></a>
            <a href="Food.php">
                <button class="w3-bar-item w3-button w3-mobile w3-round-large">Food</button></a>
            <a href="Drink.php">
                <button class="w3-bar-item w3-button w3-mobile w3-round-large">Drinks</button></a>
                
            <button href="#" class="w3-bar-item w3-button w3-pink w3-mobile w3-right w3-round-large">Go</button>
            <input type="text" class="w3-bar-item w3-input w3-mobile w3-right w3-round-large" placeholder="Search..">
        </div>
    </div>
</div>