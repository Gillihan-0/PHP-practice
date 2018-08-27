<!DOCTYPE html>

<html>

    <head>

    </head>

    <body>

    <!-- using post instead of the get method will not place the parameter up in the URL bar. This is useful for things like
    passwords -->

        <form action = "postvsget.php" method = "post">
            Password: <input type="password" name ="password"> <br>
            <input type="submit">

        </form>
        <br><br>

        <?php echo $_POST["password"];
        ?>


        <br><br>


       
        




    </body>

</html>
