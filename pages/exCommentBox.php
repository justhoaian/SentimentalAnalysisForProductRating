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
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky + .content {
            padding-top: 60px;
        }

		body
		{
			background-image: url('img/background1.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
            background-size: 100% 100%;
		}

		p{
			font-size: 13px;
            color: #FF1493;
		}

        .pro_pic{
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
        }
        
        .title{
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 35px;
            color: #DC143C;
            text-align: center;
            display: block;
        }

        .food-and-drink-title{
            margin-top: 0px;
            margin-bottom: 10px;
            text-align: center;
            text-transform: uppercase;
            font-size: 35px;
            letter-spacing: 2.5px;
            font-weight: 800;
            color: #e0607b;
            display: block;
        }

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
        global $db_host, $db_username, $db_password, $db_name;

        $connection = new mysqli($db_host, $db_username, $db_password, $db_name);
        /* check connection */
        if ($connection->connect_error) {      
            die("Failed to connect: " . $connection->connect_error);
        }

        function append_string ($str1, $str2) {
      
            // Using Concatenation assignment
            // operator (.=)
            $str1 .=$str2;
              
            // Returning the result str1 + str2
            return $str1;
        }
            
        if(isset($_POST["txtComment"])){
            
                $content = $_POST["txtComment"];

                $sqlSentementalWordFromSentimentalWord = "SELECT word FROM sentimentalword";
                $resultSentementalWordFromSentimentalWord = mysqli_query($connection, $sqlSentementalWordFromSentimentalWord);

                while($arraySentimetalWord = mysqli_fetch_array($resultSentementalWordFromSentimentalWord)){
                    
                    $sentimentalWord = $arraySentimetalWord["word"];

                    $HASsentimentalWordFromComment = strpos($content, $sentimentalWord);
                    if ($HASsentimentalWordFromComment !== false){
                        $content = $_POST["txtComment"];
                        $sqlComment = "INSERT into comment SET
                        commentID = NULL,
                        username = 'hehe',
                        content = '$content',
                        word = '$sentimentalWord',
                        time = DEFAULT";
                        $addComment = mysqli_query($connection, $sqlComment) or die (mysqli_connect_errno()."Cannot insert comment");;

                        if($addComment){
                            $result = "succeed";
                            if($result){
                                echo"
                                    <script type='text/javascript'>
                                        alert('".$result."');
                                    </script>
                                ";
                            }
                        }
                        if(!$addComment){
                            $result = "failed";
                            if($result){
                                echo"
                                    <script type='text/javascript'>
                                        alert('".$result."');
                                    </script>
                                ";
                            }
                        }


                    }
                }

                DataProvider::ChangeURL("Rating.php");
            }
    ?>
</body>
</html>