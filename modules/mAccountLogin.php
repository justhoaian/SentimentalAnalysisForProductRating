<table width="380" class="formLogin">
    <form name="frmLogin" action="index.php?a=10" method="post" onsubmit="return CheckLogin()">
    <th>Sign in:</th>
        <th>
            <th>
                <input name="txtUS" type="text" id="txtUS" class="w3-bar-item w3-input w3-mobile w3-border w3-round-large" placeholder="Username" size=5>
            </th>
                
            <th>
                <input name="txtPS" type="password"  id="txtPS" class="w3-bar-item w3-input w3-mobile w3-border w3-round-large" placeholder="Password" size=5>
            </th>
        </th>
        <input type="submit" class="w3-bar-item w3-button w3-pink w3-mobile w3-border w3-right w3-round-large" value="Go">
    </form>


</table>
<script type="text/javascript">
    function CheckLogin()
    {
        var control = document.getElementById("txtUS");
        if(control.value =="")
        {
            control.focus();
            alert("User name is not null");
            return false;
        }

        control = document.getElementById("txtPS");
        if(control.value == "")
        {
            control.focus();
            alert("Password is not null");
            return false;
        }

        return true;
    }

</script>