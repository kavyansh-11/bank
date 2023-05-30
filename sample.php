<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $link=mysqli_connect("localhost","root","","new_sparks_bank") or die("<p>Database not found.</p>");
        echo "<p>Database found successfully.</p>";

        // $link=@mysqli_connect("localhost","root","","new_sparks_bank") or die('<p>database not found<p>');
        // echo "<p>database found successfully</p>";
    ?>
</body>
</html>