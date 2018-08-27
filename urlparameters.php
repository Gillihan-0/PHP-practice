<!DOCTYPE html>

<html>

    <head>

    </head>

    <body>
        <form action = "urlparameters.php" method = "get">
            Enter your name: <input type="text" name ="name"> <br>
            <input type="submit">

        </form>
        <br><br>

        <?php echo $_GET["name"];
        ?>

        <!-- notice that the parameter "name" is entered into the URL when submitted." -->
        <!-- You can add new values by adding them into the URL bar. For example:
        localhost:4000/urlparameters.php?name=mike&age=70    -->

        <br><br>

        <?php echo $_GET["age"]; ?>

        <!-- By entering &age=70, the HTML populates with the new age despite it not being entered through user input on the page. -->
        




    </body>

</html>
