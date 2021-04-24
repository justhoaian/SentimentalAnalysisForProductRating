<?php
    date_default_timezone_set('Vietnam/HaNoi');
    include 'dbh.inc.php';
    include 'comments.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<iframe src="https://www.youtube.com/embed/yin03mjJLyk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

<?php
echo "<form method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='Anonymous'
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button type='submit' name='commentSubmit'>Comment</button>
</form>";
?>

</body>

</html>