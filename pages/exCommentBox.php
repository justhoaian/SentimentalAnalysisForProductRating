<style>
input[type=text] {
  padding: 10px;
  border:0;
  box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
  border-radius:10px;
  width:100%;
}
</style>

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
            values (NULL,'hehe','$content',DEFAULT,$word)";

            // $sql = "insert into comment (commentID,username,content,time,word) 
            // values (NULL,'hehe','$content',DEFAULT,'1')";
            
            if($connection->query($word) == true)
            {
            }

            if($connection->query($sql) == true)
            {
            }

            DataProvider::ChangeURL("Rating.php");
        }
?>

<form action="Rating.php" method="POST" onSubmit="return CheckComment()">

    <div class="container">             
        <tr>
            <td><input type="text" name="txtComment" id="txtComment" placeholder="Leave your comment here"></td>
        </tr>
        <input type="submit" name="submit" value="Upload" class="w3-right-align w3-round-large w3-pink">
    </div>
</form>

<script type="text/javascript">
    function CheckComment(){
        if(document.getElementById("txtComment").value == "")
        {
            document.getElementById("txtComment").focus();
            alert("Comment cannot be null");
            return false;
        }
        return true;
    }
</script>