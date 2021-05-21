<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MÚCBANG</title>

    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Chau Huong -->
    <script src="JS/jquery.min.js"></script>
    <script src="JS/jquery.zoom.min.js"></script>

    <style>
        input[type=text] {
            padding: 10px;
            border:0;
            box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
            border-radius:10px;
            width:100%;
        }
    </style>
</head>

<body>

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

    <?php    
        include_once "lib/config.php";
        include_once ('lib/DataProvider.php');
        include_once "Rating.php";
        session_start(); 
        global $db_host, $db_username, $db_password, $db_name;

        $connection = new mysqli($db_host, $db_username, $db_password, $db_name);
        /* check connection */
        if ($connection->connect_error) {      
            die("Failed to connect: " . $connection->connect_error);
        }

        function append_string ($str1, $str2) {
            // Using Concatenation assignment
            // operator (.=)
            $str1 .= $str2;
            $str1 .= ", ";
              
            // Returning the result str1 + str2
            return $str1;
        }
            
        if(isset($_POST["txtComment"])){
            
            $content = $_POST["txtComment"];
            $validWord = (string) NULL;
            $weightTotal = 0;
            $index = 0;

            $sqlComment = "INSERT into comment SET
            commentID = NULL,
            username = 'hehe',
            content = '$content',
            word = NULL,
            time = DEFAULT";

            $addComment = mysqli_query($connection, $sqlComment) or die (mysqli_connect_errno()."Cannot insert comment");;
            $sqlSentementalWordFromSentimentalWord = "SELECT word FROM sentimentalword";
            $resultSentementalWordFromSentimentalWord = mysqli_query($connection, $sqlSentementalWordFromSentimentalWord);

            while($arraySentimetalWord = mysqli_fetch_array($resultSentementalWordFromSentimentalWord)){
                $sentimentalWord = $arraySentimetalWord["word"];
                $HASsentimentalWordFromComment = strpos($content, $sentimentalWord);

                if ($HASsentimentalWordFromComment !== false){
                    $validWord = append_string($validWord, $sentimentalWord);
                    $sqlComment = "UPDATE comment 
                    SET word = '$validWord'
                    WHERE content = '$content'";
                    $addComment = mysqli_query($connection, $sqlComment) or die (mysqli_connect_errno()."Cannot insert word");;
                    
                    $weightOfEachWord = mysqli_query($connection, "select weight from sentimentalword where word = '$sentimentalWord'");
                    $weightTotal = $weightTotal + $weightOfEachWord;
                    $index = $index + 1;

                    if($addComment){
                        $result = "succeed";
                    }
                    if(!$addComment){
                        $result = "failed";
                    }
                }
            }

            $weightComment = $weightTotal/$in;
            $postID = 
            $postRating = mysqli_query($connection, "select rating from post where postID = '$po'");

            if($result){
                echo"
                    <script type='text/javascript'>
                        alert('".$result."');
                    </script>
                ";
            }
            DataProvider::ChangeURL("Rating.php");
        }
    ?>
</body>
</html>