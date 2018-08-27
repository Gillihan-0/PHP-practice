<!DOCTYPE html>
<html>

    <head>
        <meta charset = "utf-8">
        <title></title>

    </head>

    <body>

    <?php
        $friends = array("Anthony", "Aaron", "Landon", "Bria", "Kericho", "Jackie", 1, false);
        $friends[1] = "Inky";
        echo $friends[1];
        $friends[8] ="10";
        echo "<br>";
        echo $friends[8];
        echo "<br>";
        echo count($friends);

    

    ?>
    



    </body>

</html>
