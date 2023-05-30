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
        $link=@mysqli_connect("localhost","root","","new_central_bank") or die("<p>Database not found.</p>");
        echo "<p>Database found successfully.</p>";

        $sql="CREATE TABLE contact_information(ID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,name VARCHAR(50) NOT NULL,email VARCHAR(50) NOT NULL,contact_no INT(11) NOT NULL, message VARCHAR(100) NOT NULL)";

        $check=mysqli_query($link,$sql);
        if(!$check)
        {
            die("<p>Table not created".mysqli_error($link)."</p>");
        }
        echo "<p>Table created successfully.</p>";

    ?>
</body>
</html>