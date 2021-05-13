<?php
    
    include_once "lib/config.php";
    include_once ('lib/DataProvider.php');
    global $db_host, $db_username, $db_password, $db_name;

    $connection = new mysqli($db_host, $db_username, $db_password, $db_name);
    /* check connection */
    if ($connection->connect_error) {      
        die("Failed to connect: " . $connection->connect_error);
      }
           
    if(isset($_POST["txtComment"])){
        
            $content = $_POST["txtComment"];

            $sql = "insert into comment (commentID,username,content,time,word) 
            values (NULL,'hehe','$content',DEFAULT,'1')";
            
            if($connection->query($sql) == true)
            {
            }

            DataProvider::ChangeURL("Rating.php");
        }
?>

<form action="Rating.php" method="POST" onSubmit="return CheckComment()">
    <div>             
        <tr>
            <td><input type="text" name="txtComment" id="txtComment"></td>
        </tr>
        <tr> <!-- Báo lỗi tên comment k đc để trống -->
            <td></td>
            <td><strong><span class="error" id="errorComment"></span></strong></td>
        </tr>
    </div>
</form>

<script type="text/javascript">
    function CheckComment(){
        if(document.getElementById("txtComment").value == "")
        {
            document.getElementById("txtComment").focus();
            // alert("User name is not null");
            $('#errorComment').css({'display':'inline'});
            $('#errorComment').html('Comment is not null');
            return false;
        }
        else
        {
            document.getElementById("txtComment").focus();
            $('#errorComment').css({'display':'none'});
            $('#errorComment').html('Comment is not null');

        }
</script>