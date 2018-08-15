<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>

    <form action ="madlib.php" method ="get">
        color: <input type="text" name="color"> <br>
        plural noun: <input type="text" name="pluralNoun"> <br>
        noun: <input type="text" name="noun"> <br>
        <input type="submit">
    </form>
    <br><br>

    <?php

        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $noun = $_GET["noun"];


        echo "roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $noun <br>";

    ?>




    </body>

</html>
